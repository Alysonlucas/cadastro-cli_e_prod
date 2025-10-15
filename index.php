<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueCode - Desenvolvimento PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header class="cabecalho">
        <h1>BlueCode<span>.</span></h1>
        <nav>
            <a href="#sobre">Sobre</a>
            <a href="#servicos">Projetos</a>
            <a href="#cadastros">Cadastros</a>
            <a href="#contato">Pedidos</a>
        </nav>
    </header>

    <section class="apresentacao" id="sobre">
        <div class="texto">
            <h2>Transformando ideias em sistemas PHP funcionais</h2>
            <p>A <strong>BlueCode</strong> é uma equipe freelancer especializada na criação de sistemas em PHP.
                Desenvolvemos soluções sob medida para gerenciamento de clientes, produtos e muito mais.</p>
        </div>
        <div class="imagem">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d" alt="Equipe de desenvolvedores">
        </div>
    </section>

    <section class="servicos" id="servicos">
        <h2>Nossos Projetos</h2>
        <div class="cards">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d" alt="Sistema de Vendas">
                <h3>Sistema de Vendas</h3>
                <p>Gerencie produtos e pedidos de forma simples e eficaz.</p>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c" alt="Painel Administrativo">
                <h3>Painel Administrativo</h3>
                <p>Controle total de clientes e relatórios detalhados.</p>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296" alt="Sistema de Estoque">
                <h3>Sistema de Estoque</h3>
                <p>Controle e organização de estoque em tempo real.</p>
            </div>
        </div>
    </section>

    <section class="cadastros" id="cadastros">
        <h2>Acesse os Cadastros</h2>
        <div class="blocos">
            <a href="cadcliente.php" class="bloco">
                <h3>Cadastro de Clientes</h3>
                <p>Cadastre novos clientes e gerencie seus dados facilmente.</p>
            </a>
            <a href="cadproduto.php" class="bloco">
                <h3>Cadastro de Produtos</h3>
                <p>Adicione, consulte e mantenha o controle dos seus produtos.</p>
            </a>
        </div>
    </section>

    <section class="contato" id="contato">
        <h2>Pedidos de Clientes</h2>
        <p>Envie sua ideia de sistema! Entraremos em contato com uma proposta personalizada.</p>
        <button>Fazer Pedido</button>
    </section>

    <script>
        document.addEventListener("scroll", () => {
            const elementos = document.querySelectorAll(".card, .bloco");
            elementos.forEach(el => {
                const posicao = el.getBoundingClientRect().top;
                if (posicao < window.innerHeight - 100) {
                    el.classList.add("visible");
                }
            });
        });
    </script>


    <footer>
        <p>© 2025 BlueCode Freelancer. Todos os direitos reservados.</p>
    </footer>
</body>

</html>