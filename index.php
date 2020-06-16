<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo.png">
    <title>DuFerreira | Front-End Developer</title>
    
    <meta name="robots" content="index, follow">
    <meta name="description" content="Desenvolvedor Front-end, Instrutor e criador de conteúdo apaixonado por criar coisas e compartilhar boas idéias.">
    <meta name="keywords" content="web designer, freelancer, rio de janeiro, site, web, sites, javascript, instrutor, informática, front end" />

    <!--Open Graph data-->
    <meta property="og:site_name" content="DuFerreira | Front-End Developer" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="DuFerreira | Front-End Developer" />
    <meta property="og:description" content="Desenvolvedor Front-end, Instrutor e Criador de conteúdo." />
    <meta property="og:url" content="https://duferreira.com.br/" />
    <meta property="og:image" content="https://duferreira.com.br/img/Eduardo_foto.jpg" />

    <!--Schema.org markup for google+-->
    <meta itemprop="name" content="DuFerreira | Front-End Developer">
    <meta itemprop="description" content="Desenvolvedor Front-end, Instrutor e criador de conteúdo.">
    <meta itemprop="image" content="https://duferreira.com.br/img/Eduardo_foto.jpg">

    <!--Twitter Card data-->
    <meta name="twitter:card" content="summary_Large_image">
    <meta name="twitter:site" content="@duuferreira13">
    <meta name="twitter:title" content="DuFerreira | Front-End Developer">
    <meta name="twitter:description" content="Desenvolvedor Front-end, Instrutor e criador de conteúdo.">

    <link rel="stylesheet" href="./style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!--Import Icons Fonts-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9fe285a038.js" crossorigin="anonymous"></script>
    <meta name="google-site-verification" content="uhj7P4KOjFnCVvd8HL8XOzGbOvWuEFD7odM9SaRrhVQ" />
</head>
<body>
    <header class="header">
        <div class="header__wrapper">
            <a href="#" class="header__logo"> <img src="./img/Eduardo_foto.jpg" alt="Du Ferreira"> <span>DuFerreira</span> </a>
            <nav class="header__nav--offcanvas">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#portfolio">Portfólio</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="http://www.edualvesf13.000webhostapp.com/blog">Blog</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </nav>
            <div class="header__nav--wrapper">
                <input type="checkbox" id="check">
                <label for="check">
                    <span></span>
                </label>
            </div>
        </div>
    </header>
    <main id="home">
        <div class="container">
            <h1>Eduardo Ferreira</h1>
            <span class="js-write">Estudante Sistemas de Informação. Instrutor de tecnologia. Desenvolvedor Front-End.</span>
        </div>
    </main>
    <section id="about">
        <div class="container">
            <h1>Sobre mim</h1>

            <span>Olá! </span>
            <p>Eu me chamo Eduardo Ferreira. Sou instrutor de tecnologia em cursos profissionalizantes no Rio de Janeiro com mais de 8 anos de experiência, já passei por empresas como <a href="https://www.microlins.com.br/">Microlins</a> e <a href="https://www.cursoswinners.com.br/">Winners</a>. </p>

            <p>No último ano percebi que era a hora de começar a aprender coisas novas e aumentar o meu conhecimento. Dessa forma, mergulhei de cabeça no mundo do desenvolvimento web. Primeiramente, comecei a aprender HTML5 e CSS3. Atualmente, venho me aprimorando em Javascript para começar a aprender React.js e React-Native. </p> 

            <p>Eu amo trabalhar em equipe e sou bem comunicativo. No meu tempo livre, gosto de aprender e ensinar sobre alguma coisa que aprendi. </p> 
            
            <p>Criei este site para compartilhar minhas informações pessoais e meus trabalhos feitos. Fique a vontade para entrar em contato comigo para tirar dúvidas ou fazer parcerias de trabalho.</p> 
            <h2>Minhas Skills</h2>
            <ul>
                <li>HTML (com ênfase em semântica)</li>
                <li>Design Responsivo (Mobile First)</li>
                <li>CSS Preprocessor (Sass/Scss)</li>
                <li>Css Framework (MaterializeCSS)</li>
                <li>Css Methodologies (BEM, OOCSS, SMACSS)</li>
                <li>Javascript (Manipulação de DOM, ES6)</li>
                <li>Git</li>
                <li>Scrum and Kanban</li>
                <li>O que eu não sei, aprendo rápido =)</li>
            </ul>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <h1>Portfólio</h1>
            <p  class="text__center white-text">Confira as novidades do meu portfólio e meus últimos projetos.</p>
            <div class="portfolio__card--wrapper">
                <div class="portfolio__card">
                    <div class="porfolio__card--img">
                        <a href="#">
                            <img src="./img/edualvesf13.png" alt="site pessoal">
                        </a>
                    </div>
                    <span class="time">2020</span>
                    <h2>duferreira.com</h2>
                    <p>Meu site pessoal feito com HTML, SCSS e Javascript.  </p>
                </div>

                <div class="portfolio__card">
                    <div class="porfolio__card--img">
                        <a href="https://edualvesf13.github.io/pousada-paraiso-seropedica/" target="blank">
                            <img src="./img/pousada-paraiso.png" alt="Pousada Paraiso Seropédica">
                        </a>
                    </div>
                    <span class="time">2020</span>
                    <h2>Pousada Paraíso</h2>
                    <p>Site OnePage feito com MaterializeCSS e JQuery.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h1>Serviços</h1>
            <div class="services__elements--wrapper">
                <div class="services__card">
                    <div class="services__card--container">
                        <div class="services__card--contentfront  card__bg--blue">
                            <span class="material-icons"> language </span>
                            <h2>Criação de Sites</h2>
                            <p>Sites com layout que se adapta a qualquer tela e otimizados com SEO.</p>
                        </div>
                        <div class="services__card--contentback card__bg--blue-gradient">
                            <h2>Criação de Sites</h2>
                            <p>80% das 
                                pessoas utilizam a internet para buscar serviços. 
                                Coloque o seu negócio na 
                                internet e permita-se atrair clientes através de diversas plataformas.</p>
                        </div>
                    </div>
                </div>

                <div class="services__card">
                    <div class="services__card--container">
                        <div class="services__card--contentfront  card__bg--orange">
                            <span class="material-icons"> school </span>
                            <h2>Professor de Tecnologia</h2>
                            <p>Aulas de Programação, Design Gráfico, Excel Avançado entre outros.</p>
                        </div>
                        <div class="services__card--contentback card__bg--orange-gradient">
                            <h2>Professor de Tecnologia</h2>
                            <p>Aprenda informática e programação com quem tem mais de 10 anos de
                                experiência em ensino de tecnologia.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="services__card">
                    <div class="services__card--container">
                        <div class="services__card--contentfront card__bg--green">
                            <span class="material-icons"> http </span>
                            <h2>Manutenção de Sites</h2>
                            <p>Manutenção, Atualização, Redesign de Sites, Suporte e Hospedagem.</p>
                        </div>
                        <div class="services__card--contentback card__bg--green-gradient">
                            <h2>Manutenção de Sites</h2>
                            <p> Criação de layout de sites,
                                Manutenção e Atualização de Conteúdo,
                                Sites Mobile,
                                Migração e Hospedagem de sites.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="services__card">
                    <div class="services__card--container">
                        <div class="services__card--contentfront card__bg--red">
                            <span class="material-icons"> vertical_split </span>
                            <h2>Criação de Landing Pages</h2>
                            <p>Páginas para conversões 
                                e divulgação de produtos 
                                ou serviços.</p>
                        </div>
                        <div class="services__card--contentback card__bg--red-gradient">
                            <h2>Criação de Landing Pages</h2>
                            <p> Estruturadas com o objetivo de conversão, divulgação de produto/serviços, promoções e ofertas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="posts">
        <div class="container">
            <h1>Posts</h1>
        </div>
    </section> -->

    <section id="contact">
        <div class="container">
            <h1>Contato</h1>
            <p class="text__center white-text">Entre em contato comigo através das Redes Sociais ou do formulário abaixo:</p>
            <div class="contact__wrapper">
                <div class="social-media">
                    <h2>Conecte-se comigo</h2>
                    <ul>
                        <li><a href="https://www.instagram.com/o_eduardoalves/" target="blank"> <span class="social-media__icons"><i class="fab fa-instagram"></i></span> Instagram </a></li>
                        <li><a href="https://www.linkedin.com/in/eduferreira13/" target="blank"> <span class="social-media__icons"><i class="fab fa-linkedin"></i></span> Linkedin </a></li>
                        <li><a href="https://github.com/edualvesf13" target="blank"> <span class="social-media__icons"><i class="fab fa-github-square"></i></span> GitHub </a></li>
                    </ul>
                    <h2> Contato </h2>
                    <p> <span><i class="far fa-envelope"></i></span> edualvesf13@gmail.com </p>
                    <p> <span><i class="fab fa-whatsapp-square"></i></span> (21) 99732-3846 </p>
                </div>
                <div class="form-contact">
                    <h2>Fale comigo</h2>
                    <p>Trabalhos freelancer, conteúdos ou parcerias?</p>
                    <form action="enviar-email.php" method="POST" id="form__Contact">
                        <div class="input-field">
                            <input type="text" name="name" id="name">
                            <label for="nome">Seu nome</label>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" id="email">
                            <label for="email">Seu email</label>
                        </div>
                        <div class="input-field">
                            <input type="tel" name="tel" id="tel">
                            <label for="tel">Seu telefone</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="assunto" id="assunto">
                            <label for="assunto">Assunto</label>
                        </div>
                        <div class="input-field">
                            <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Mensagem"></textarea>
                        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="./js/scripts.js"></script>
<?php        
    if(isset($_GET['status'])):
        if($_GET['status'] == 'sucesso'):
        echo '<script> setTimeout(function(){ 
            alert("Sua mensagem foi enviada! ")
            }, 3500)  </script>';
        else:    
        echo '<script> alert("Erro ao enviar. ") </script>';
        endif;
    endif;
?>
</body>
</html>