document.addEventListener('DOMContentLoaded', function () {
    // Limpa a lista de países antes de adicionar os novos cards
    $('.lista-paises').html('');

    $.ajax({
        method: 'GET',
        url: 'https://restcountries.com/v3.1/all'
    }).done(function (dados) {
        console.log(dados);

        // Seleciona 3 países aleatórios
        for (var i = 0; i < 3; i++) {
            var aleatorios = Math.floor(Math.random() * dados.length);
            var pais = dados[aleatorios]; // Dados do país aleatório

            // Criação do card diretamente com os dados
            var cardHTML = `
                <div class="card card-paises col-md-4">
                    <img src="${pais.flags.png}" class="card-img-top bandeira-pais" alt="Bandeira de ${pais.name.common}">
                    <div class="card-body">
                        <h5 class="card-title titulo-pais">${pais.translations.por.common}</h5>
                    </div>
                </div>
            `;
            
            // Adiciona o card à lista
            $('.lista-paises').append(cardHTML);
        }

        // Adiciona o evento de clique para todos os cards após serem carregados
        $(document).on('click', '.card-paises', function () {
            var nomePais = $('.titulo-pais', this).text(); // Obtém o nome do país do cartão
            window.location.href = `paises.html?pais=${encodeURIComponent(nomePais)}`; // Redireciona para paises.html com o nome do país
        });

    }).fail(function () {
        console.error('Erro ao carregar os dados da API.');
    });
});
