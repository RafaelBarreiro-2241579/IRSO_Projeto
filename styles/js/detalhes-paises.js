var cloneOriginalTable = $('.col-md-8').clone();
var cloneOriginalCard = $('.card-pais').clone();

// Buscar o país que está na card da página index.html e apresentar os seus detalhes
$(document).ready(function () {
    var urlParams = new URLSearchParams(window.location.search);
    var nomePais = urlParams.get('pais'); // Captura o parâmetro "pais" da URL

    if (nomePais) {
        $('#pais').val(nomePais); // Preenche o campo de pesquisa com o nome do país
        $('#procurar').click();   // Aciona o clique no botão de pesquisa
    }
});

// Detalhes do país com o botão pesquisar
$('#procurar').on('click', function () {
    var valorPesquisa = $('#pais').val();

    $('.col-md-8').empty();
    $('.card-pais').empty();

    $.ajax({
        method: 'GET',
        url: 'https://restcountries.com/v3.1/all'
    }).done(function (dados) {
        console.log(dados);

        // Filtrar o país pelo nome em português
        var resultado = dados.filter(function (pais) {
            return pais.translations.por && pais.translations.por.common.toLowerCase() === valorPesquisa.toLowerCase();
        });

        if (resultado.length > 0) {
            for (var i = 0; i < resultado.length; i++) {
                var cloneTable = cloneOriginalTable.clone();
                var cloneCard = cloneOriginalCard.clone();

                // Preencher informações na tabela
                $('.pais-capital', cloneTable).text(resultado[i].capital);
                $('.pais-lingua', cloneTable).text(Object.values(resultado[i].languages).join(', '));
                $('.pais-continente', cloneTable).text(resultado[i].region);

                // População com espaço entre os números ex: 212 559 409
                $('.pais-populacao', cloneTable).text(resultado[i].population.toLocaleString());

                // Card com nome e bandeira do país
                $('.pais-nome', cloneCard).text(resultado[i].translations.por.common);
                $('.bandeira-pais', cloneCard)
                    .attr('src', resultado[i].flags.png)
                    .attr('alt', 'Bandeira de ' + resultado[i].name.common);

                $('.col-md-8').append(cloneTable);
                $('.card-pais').append(cloneCard);
            }

            // Após carregar os dados do país, configurar o botão de favoritos
            configurarFavoritos();
        } else {
            alert('País não encontrado. Verifique se o nome está correto.');
        }
    }).fail(function () {
        alert('Erro ao pesquisar os dados do país. Tente novamente.');
    });
});

// Função para configurar o evento de favoritos após os dados serem carregados
function configurarFavoritos() {
    const btnFavorito = document.querySelector(".btn-favorito");

    if (btnFavorito) {
        const paisNomeEN = document.querySelector(".bandeira-pais").alt.replace('Bandeira de ', '').trim();

        btnFavorito.addEventListener("click", () => {
            addFavoritos(paisNomeEN);
        });
    }
}

// Função para adicionar país aos favoritos
function addFavoritos(pais) {
    let arrayPaisesFavoritos = JSON.parse(localStorage.getItem('favoritos')) || [];

    if (!arrayPaisesFavoritos.includes(pais)) {
        arrayPaisesFavoritos.push(pais);
        localStorage.setItem('favoritos', JSON.stringify(arrayPaisesFavoritos));
        alert(`${pais} foi adicionado aos favoritos!`);
    } else {
        alert(`${pais} já está nos favoritos.`);
    }
}
