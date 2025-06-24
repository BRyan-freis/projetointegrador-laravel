<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Conexus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="index.php">C<span>o</span>nexus</a>
            </div>
            <nav class="main-nav">
                <a href="#inicio">Início</a>
                <a href="#sobre">Sobre</a>
                <a href="#servicos">Serviços</a>
                <a href="#contato">Contato</a>
            </nav>
        </div>
    </header>

    <main class="main-content container">
        
        <div class="text-column">
            <section class="bemvindo">
                <h1>Bem-Vindo</h1>
                <h1>à C<span>o</span>nexus</h1>
            </section>

            <section class="forms">
                <h3>Quer ficar por dentro?</h3>
                <form action="">
                    <input type="email" name="email" id="email" placeholder="Digite seu melhor e-mail" required>
                    <input type="submit" class="submit" name="submit" value="Enviar">
                </form> 
            </section>
            
            <section class="content">
                <h2>O que é a C<span>o</span>nexus?</h2>
                <article>
                    <p>A vida pode ser corrida, confusa, cheia de altos e baixos.</p>  
                    <p>Às vezes tudo tá bem, às vezes nem tanto. E tá tudo certo. A Conexus é pra esses momentos — e pra todos os outros também.</p>
                    <p>Aqui você se conecta com pessoas que sabem ouvir, que compartilham histórias, que acolhem sem perguntas estranhas ou olhares tortos. É um lugar pra conversar de verdade, sem máscaras, sem julgamentos.</p>
                    <p>Não é sobre ser forte o tempo todo. É sobre ser real, humano, e entender que tá tudo bem sentir.</p>
                    <ul>
                        <li>📱 Entra num grupo, conta o que quiser, ouve o que precisar.</li>  
                        <li>👥 Conhece gente que também tá buscando leveza, sentido, ou só um respiro.</li>  
                        <li>💬 Troca ideia, desabafa, ri, se encontra.</li>
                    </ul>
                </article>
            </section>
        </div>

        <div class="image-column">
            <img src="{{ asset('src/Conexus img.jpeg') }}" alt="Ilustração de pessoas conectadas" class="main-image" />
        </div>

    </main>

    <footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <div class="footer-logo">
                <a href="#">C<span>o</span>nexus</a>
            </div>
            <br>
            <p>Conectando você ao futuro. Sinta-se bem e acolhido.</p>
        </div>

        <div class="footer-section">
            <h4>Links Rápidos</h4>
            <ul>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Contato</h4>
            <p>Email: contato@conexus.com</p>
            <p>Telefone: (11) 1234-5678</p>
            <p>Endereço: Rua Exemplo, 123, São Paulo - SP</p>
        </div>

        <div class="footer-section">
            <h4>Redes Sociais</h4>
            <div class="social-icons">
                <a href="https://www.facebook.com/?locale=pt_BR" target="_blank" arial-label="Facebook"><i
                        class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/?locale=pt_BR" target="_blank" arial-label="Linkedin"><i
                        class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/?locale=pt_BR" target="_blank" arial-label="Instgram"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Conexus. Todos os direitos reservados.</p>
    </div>
</footer>
</body>
</html>