<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Conexus'; ?></title>
    
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="index.php">C<span>o</span>nexus</a>
            </div>
            <nav class="main-nav">
                <a href="index.php">Início</a>
                <a href="sobre.php">Sobre</a>
                <a href="servicos.php">Serviços</a>
                <a href="contato.php">Contato</a>
            </nav>
        </div>
    </header>

    <main class="main-content container">
        </main> <footer class="site-footer">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Conexus. Todos os direitos reservados.</p>
            <div class="footer-links">
                <a href="politica-privacidade.php">Política de Privacidade</a>
                <a href="termos-uso.php">Termos de Uso</a>
            </div>
        </div>
    </footer>

</body>
</html>