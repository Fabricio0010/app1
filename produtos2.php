<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="recursos/css/produtos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="recursos/js/home.js"></script>

    <link rel="icon" href="https://imgur.com/opGHwWY.png" type="image/x-icon">

    <title>PRODUTOS</title>

</head>

<body>


    <!------------------------------ INÍCIO DA PRIMEIRA BARRA DE NAVEGAÇÃO ------------------------------>
    <header class="header-1">
        <nav class="nav-bar">

            <div class="logo">
                <img src="https://imgur.com/opGHwWY.png" alt="" width="110px" height="auto">
            </div>

            <div class="button-container">
                <div class="car-button">
                    <button><a href="carrinho.php" class="btn"><i class="fa-solid fa-cart-shopping"></i></a></button>
                </div>

                <div class="login-button">
                    <button><a href="minha-conta.php" class="btn"><i class="fa-solid fa-user"></i></a></button>
                </div>
            </div>
        </nav>
    </header>
    <!-------------------------------- FIM DA PRIMEIRA BARRA DE NAVEGAÇÃO -------------------------------->



    <!------------------------------- INÍCIO DA SEGUNDA BARRA DE NAVEGAÇÃO ------------------------------->
    <header class="header-2">
        <nav class="nav-bar-2">

            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="home.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="produtos.php" class="nav-link">Produtos</a></li>
                    <li class="nav-item"><a href="empresa.php" class="nav-link">Empresa</a></li>
                    <li class="nav-item"><a href="contatos.php" class="nav-link">Contatos</a></li>
                </ul>
            </div>

        </nav>
    </header>
    <!----------------------------------- FIM DA SEGUNDA BARRA DE NAVEGAÇÃO ----------------------------------->

    <!-- INÍCIO PRODUTOS EM DESTAQUE-->
    <div class="corpo-categorias">

            <div class="linha linha2">
                <h2>Todos</h2>
                <select id="ordenacao">
                    <option value="classificados">Mais Classificados</option>
                    <option value="menorpreco">Menor Preço</option>
                    <option value="maiorpreco">Maior Preço</option>
                </select>
            </div>


        <!-- INÍCIO LINHA CORPO PRODUTOS EM DESTAQUE-->

        <div class="linha">

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4-1">
                <a href="jaqueta-bobojaco.php"><img src="https://imgur.com/qxJiCUT.png" alt="" height="220"></a>

                <a class="texto-link" href="jaqueta-bobojaco.php">
                    <h4>Jaqueta Bobojaco</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 50,00</p>
            </div>

            <div class="col-4-1">
                <a href="adidas-campus.php"><img src="https://imgur.com/cd4X40V.png" alt="" height="220"></a>

                <a class="texto-link" href="adidas-campus.php">
                    <h4>Adidas Campus</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 110,00</p>
            </div>

            <div class="col-4-1">
                <a href="bermuda-cargo.php"><img src="https://imgur.com/GWLwmZw.png" alt="" height="220"></a>

                <a class="texto-link" href="bermuda-cargo.php">
                    <h4>Bermuda Cargo</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 25,90</p>
            </div>

            <div class="col-4-1">
                <a href="corrente-masculina.php"><img src="https://imgur.com/wJRmhob.png" alt="" height="220"></a>

                <a class="texto-link" href="corrente-masculina.php">
                    <h4>Corrente Masculina</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 25,00</p>
            </div>

            <div class="col-4-1">
                <a href="bermuda-jeans.php"><img src="https://imgur.com/9fFeUxJ.png" alt="" height="220"></a>

                <a class="texto-link" href="bermuda-jeans.php">
                    <h4>Bermuda Jeans</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 18,90</p>
            </div>

            <div class="col-4-1">
                <a href="chinelo-kenner.php"><img src="https://imgur.com/SG0H2ws.png" alt="" height="220"></a>

                <a class="texto-link" href="chinelo-kenner.php">
                    <h4>Chinelo Kenner</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 50,00</p>
            </div>

            <div class="col-4-1">
                <a href="jaqueta-adidas.php"><img src="https://imgur.com/qa4aVBm.png" alt="" height="220"></a>

                <a class="texto-link" href="jaqueta-adidas.php">
                    <h4>Jaqueta Adidas</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 50,90</p>
            </div>

            <div class="col-4-1">
                <a href="relogio-feminino.php"><img src="https://imgur.com/TIznuhV.png" alt="" height="220"></a>

                <a class="texto-link" href="relogio-feminino.php">
                    <h4>Relógio Feminino</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 20,00</p>
            </div>

        </div>
        <!-- FIM LINHA CORPO PRODUTOS EM DESTAQUE-->

    </div>
    <!-- FIM PRODUTOS EM DESTAQUE-->

    <div class="paginacao">
        <a href="produtos.php"><span>1</span></a>
        <a href="produtos2.php"><span>2</span></a>
        <a href="produtos.php"><span>&#8594;</span></a>
    </div>


    <!--------------------------------------------- INÍCIO RODAPÉ --------------------------------------------->
    <footer class="rodape">
        <div class="container">
            <div class="linha">

                <div class="rodape-col-1">
                    <h3>Baixe o nosso APP</h3>
                    <p>Baixe os nossos aplicativo nas melhores plataformas</p>
                    <div class="app-logo">
                        <img src="https://imgur.com/P6bJDpr.jpg" alt="">
                        <img src="https://imgur.com/BbekpeC.jpg" alt="">
                    </div>
                </div>

                <div class="rodape-col-3">
                    <h3>Mais informações</h3>
                    <ul>
                        <li>Cupons</li>
                        <li>Blog</li>
                        <li>Política de Privacidade</li>
                        <li>Contatos</li>
                    </ul>
                </div>

                <div class="rodape-col-4">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                        <li>X</li>
                    </ul>
                </div>

            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os Direitos Reservados. TTS 2024.
            </p>

        </div>

    </footer>
    <!-------------------------------------------- FIM RODAPÉ -------------------------------------------->



</body>

<script>
    // Função para obter os produtos na página
    function getProdutos() {
        return Array.from(document.querySelectorAll('.linha:not(.linha2) .col-4-1'));
    }

    // Função para ordenar por Mais Classificados
    function ordenarPorMaisClassificados() {
        const produtos = getProdutos();
        produtos.sort((a, b) => {
            // Exemplo: Suponha que cada produto tenha um atributo `data-classificacao` com a pontuação de classificação
            const classificadosA = parseInt(a.getAttribute('data-classificacao') || '0');
            const classificadosB = parseInt(b.getAttribute('data-classificacao') || '0');
            return classificadosB - classificadosA; // Ordena do maior para o menor número de classificações
        });
        atualizarProdutos(produtos);
    }

    // Função para ordenar por Menor Preço
    function ordenarPorMenorPreco() {
        const produtos = getProdutos();
        produtos.sort((a, b) => {
            // Exemplo: Suponha que cada produto tenha um elemento <p> com o preço formatado como R$ X,XX
            const precoA = parseFloat(a.querySelector('p').textContent.trim().replace('R$', '').replace(',', '.'));
            const precoB = parseFloat(b.querySelector('p').textContent.trim().replace('R$', '').replace(',', '.'));
            return precoA - precoB; // Ordena do menor para o maior preço
        });
        atualizarProdutos(produtos);
    }

    // Função para ordenar por Maior Preço
    function ordenarPorMaiorPreco() {
        const produtos = getProdutos();
        produtos.sort((a, b) => {
            // Exemplo: Suponha que cada produto tenha um elemento <p> com o preço formatado como R$ X,XX
            const precoA = parseFloat(a.querySelector('p').textContent.trim().replace('R$', '').replace(',', '.'));
            const precoB = parseFloat(b.querySelector('p').textContent.trim().replace('R$', '').replace(',', '.'));
            return precoB - precoA; // Ordena do maior para o menor preço
        });
        atualizarProdutos(produtos);
    }

    // Função para atualizar a lista de produtos na página
    function atualizarProdutos(produtosOrdenados) {
        const containerProdutos = document.querySelector('.linha:not(.linha2)');
        containerProdutos.innerHTML = ''; // Limpar conteúdo atual

        produtosOrdenados.forEach(produto => {
            containerProdutos.appendChild(produto);
        });
    }

    // Adicionar evento de mudança no select de ordenação
    document.addEventListener('DOMContentLoaded', function() {
        const selectOrdenacao = document.getElementById('ordenacao');

        selectOrdenacao.addEventListener('change', function() {
            const valorSelecionado = selectOrdenacao.value;

            switch (valorSelecionado) {
                case 'comprados':
                    ordenarPorMaisComprados();
                    break;
                case 'classificados':
                    ordenarPorMaisClassificados();
                    break;
                case 'menorpreco':
                    ordenarPorMenorPreco();
                    break;
                case 'maiorpreco':
                    ordenarPorMaiorPreco();
                    break;
                default:
                    break;
            }
        });
    });
</script>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>