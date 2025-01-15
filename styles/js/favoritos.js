$(document).ready(function () {
    // Recupera os favoritos do localStorage
    let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];

    // Se houver favoritos, gera as cards
    if (favoritos.length > 0) {
        // Limpa a lista de favoritos existente, caso haja conteúdo anterior
        $('#favoritos-lista').empty();

        favoritos.forEach(function (pais) {
            // Faz uma requisição para pegar os detalhes do país pela API
            $.ajax({
                method: 'GET',
                url: `https://restcountries.com/v3.1/name/${encodeURIComponent(pais)}`,
                success: function (dados) {
                    var paisInfo = dados[0]; // Pegamos o primeiro item da resposta da API

                    // Criação do HTML para a card
                    var cardHTML = `
                        <div class="col-md-4">
                            <div class="card card-pais">
                                <img src="${paisInfo.flags.png}" class="card-img-top bandeira-pais" alt="Bandeira de ${paisInfo.translations.por.common}">
                                <div class="card-body">
                                    <h5 class="card-title pais-nome">${paisInfo.translations.por.common}</h5>
                                    <button class="btn btn-danger btn-remove-favorito" data-pais="${paisInfo.translations.por.common}">Remover dos Favoritos</button>
                                </div>
                            </div>
                        </div>
                    `;

                    // Adiciona a card à página
                    $('#favoritos-lista').append(cardHTML);
                },
                error: function () {
                    console.log("Erro ao carregar as informações do país:", pais);
                }
            });
        });

        // Evento para remover país dos favoritos
        $('#favoritos-lista').on('click', '.btn-remove-favorito', function () {
            var pais = $(this).data('pais');
            removeFavorito(pais);
            $(this).closest('.col-md-4').remove();
        });

    } else {
        // Se não houver países favoritos
        $('#favoritos-lista').html('<p class="text-center">Nenhum país favorito encontrado.</p>');
    }
});

// Função para remover país dos favoritos
function removeFavorito(pais) {
    let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];
    favoritos = favoritos.filter(function (item) {
        return item !== pais;
    });
    localStorage.setItem('favoritos', JSON.stringify(favoritos));
    alert(`${pais} foi removido dos favoritos!`);
}
