<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ABAP Consulting</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ABAP Consulting Soluções em Tecnologia" />
        <meta name="keywords" content="SAP, ABAP, SAP ABAP, consultoria, sap brasil, consultoria sap, consultoria abap, consultoria pi, erp sap, sap goias, sap goiania, sap brasilia" />
        <meta name="author" content="M&E IT Services" />

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Themify Icons-->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <!-- Flexslider -->
        <link rel="stylesheet" href="css/flexslider.css">
        <!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="images/icons8-workflow-50.png" type="image/x-icon" />

    </head>
    <?php
    $mensagem = filter_input(INPUT_POST, 'mensagem');

    if (isset($mensagem)) {
        echo 'mensagem(' . $mensagem . ')';
    }
    ?>
    <body>

        <div class="gtco-loader"></div>

        <div id="page">
            <nav class="gtco-nav" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12">
                            <div id="gtco-logo"><a href="./">ABAP<em>Consulting</em></a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1 main-nav">
                            <ul>
                                <li class="active"><a href="#" data-nav-section="home">Início</a></li>
                                <li><a href="#" data-nav-section="about">Sobre</a></li>
                                <li><a href="#" data-nav-section="practice-areas">Áreas de atuação</a></li>
                                <li><a href="#" data-nav-section="our-team">Equipe</a></li>
                                <li class="btn-cta"><a href="#" data-nav-section="contact"><span>Contato</span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>

            <section id="gtco-hero" class="gtco-cover" style="background-image: url(images/img_bg_4.jpg);"  data-section="home"  data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-0 text-center">
                            <div class="display-t">
                                <div class="display-tc">
                                    <h1 class="animate-box" data-animate-effect="fadeIn">Qualidade em soluções de Software</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gtco-about" data-section="about">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
                            <h1>Bem vindo a um novo nível de Qualidade</h1>
                            <p class="sub">Trabalhamos para criar a solução ideal para o cliente. Almejamos não apenas sermos um fornecedor de serviços de tecnologia, mas de soluções de alta qualidade.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                            <div class="img-shadow">
                                <img src="images/img_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <h2 class="heading-colored">Excelência &amp; Inovação</h2>
                            <p>Nascendo da ideia de dois desenvolvedores, a ABAP Consulting (AC) vem fornecendo solução SAP e não-SAP que prezava pela qualidade. Essa sempre foi a primeira premissa. Com anos de atuação, usando soluções modernas e que se aplicam perfeitamente a necessidade, nos da AC, estamos sempre nos reinventando e criando soluções de vanguarda, seguras e sob medida. Manter esse padrão de qualidade exige muito, mas é uma recompensa pessoal para nos ver que conseguimos atender a necessidade de forma a prover um melhor ambiente tecnológico para o Negocio.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gtco-practice-areas" data-section="practice-areas">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
                            <h1>Áreas de atuação</h1>
                            <p class="sub">Os seguintes de atuação, podem ser resumidos nos seguintes pontos.</p>
                            <p class="subtle-text animate-box" data-animate-effect="fadeIn">Áreas de <span>atuação</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="gtco-practice-area-item animate-box">
                                <div class="gtco-icon">
                                    <img src="images/scale-50.png">
                                </div>
                                <div class="gtco-copy">
                                    <h3>Serviços SAP ABAP</h3>
                                    <p>Serviços para o cenário que você quer. As Soluções da ABAP Consulting atendem sua real necessidade e são feitas de forma que não terá preocupações com fragilidade de arquitetura de software. Contamos com uma equipe extremamente preparada. </p>
                                </div>
                            </div>

                            <div class="gtco-practice-area-item animate-box">
                                <div class="gtco-icon">
                                    <img src="images/scale-50.png">
                                </div>
                                <div class="gtco-copy">
                                    <h3>Serviços SAP PI</h3>
                                    <p>Estando sempre a vanguarda, os serviços de PI (Process Integration) vem para oferecer uma integração segura e precisa para seu negócio, de forma a prover um melhor alinhamento entre as soluções de software do seu Negocio. </p>
                                </div>
                            </div>                            
                            <div class="gtco-practice-area-item animate-box">
                                <div class="gtco-icon">
                                    <img src="images/scale-50.png">
                                </div>
                                <div class="gtco-copy">
                                    <h3>Serviços SAP WorkFlow</h3>
                                    <p>A ABAP Consulting vem com excelentes soluções SAP Business Workflow. Essa ferramenta utilizada para integrar as funcionalidades e complementar o entendimento dos processos do sistema ERP. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="gtco-practice-area-item animate-box">
                                <div class="gtco-icon">
                                    <img src="images/scale-50.png"/>
                                </div>
                                <div class="gtco-copy">
                                    <h3>SAP Fiori</h3>
                                    <p>Afim de prover uma melhor experiencia em tecnologia web, o SAP Fiori vem de forma que as soluções SAP sejam mais flexíveis sem que você perca toda regra de negocio do ERP que é baseada nas melhores praticas do mercado. </p>
                                </div>
                            </div>

                            <div class="gtco-practice-area-item animate-box">
                                <div class="gtco-icon">
                                    <img src="images/scale-50.png"/>
                                </div>
                                <div class="gtco-copy">
                                    <h3>SAP Hana</h3>
                                    <p>O SAP Hana trouxe vários melhorias como o banco de dados in-memory e Orientado a Colunas, o Hana vem trazendo uma novas vantagens ao ERP como a extinção de redundâncias como tabelas de referências, a simplificação de processos dentro outros. </p>
                                </div>
                            </div>

                            <div class="gtco-practice-area-item animate-box">
                                <div class="gtco-icon">
                                    <img src="images/scale-50.png"/>
                                </div>
                                <div class="gtco-copy">
                                    <h3>Soluções WEB</h3>
                                    <p>Vendo a necessidade de fornecer serviços que atendam todas as necessidades de software do cliente, a ABAP Consulting tem um segmento web que fornece soluções para vários dispositivos, que também podem ser usadas com integrações com SAP. </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section id="gtco-our-team" data-section="our-team">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
                            <h1>Nosso time</h1>
                            <p class="sub">Dentre os vários profissionais, que fazem parte desse time que provem soluções de qualidade, esse se destacam como percursores da ABAP Consulting e a M&E IT Service, empresa do grupo. </p>
                            <p class="subtle-text animate-box" data-animate-effect="fadeIn">Equipe</p>
                        </div>
                    </div>
                    <div class="row team-item gtco-team-reverse">
                        <div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
                            <div class="img-shadow">
                                <img src="images/29d34d1.jpg" class="img-responsive"/>
                            </div>
                        </div>
                        <div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
                            <h2>Murilo Oliveira Borges</h2>
                            <p>Formado em Ciência da computação e apaixonado por tecnologia, decidi partir para a área de desenvolvimento.</p>
                            <p>
                                Escolhi o mundo SAP pelos desafios que podemos enfrentar com projetos desse porte.
                                Trabalhando com tecnologia há mais de 10 anos, sendo 9 com SAP, procurei sempre agregar conhecimento de vários projetos que possibilitaram um grande crescimento profissional.
                                Sempre assumindo novos desafios e novas responsabilidades, como liderança, gestão técnica, venho crescendo profissionalmente e com cada vez mais vontade de fazer acontecer.
                            </p>
                            <p>
                                Experiência com a metodologia ASAP de implantação do ERP SAP; análise de necessidades, confecção de documentos técnicos, BPM (Blueprint, As-Is, To-Be), especificação de Requisitos Funcionais e especificação Técnica para Desenvolvimento, treinamento de Key-users e análise de riscos e aderência. Dinamismo na solução de obstáculos, colaboração e trabalho em equipe, e apoio na gestão da mudança.
                            </p>
                        </div>
                    </div>

                    <div class="row team-item gtco-team">
                        <div class="col-md-6 col-md-pull-1 animate-box"  data-animate-effect="fadeInLeft">
                            <div class="img-shadow">
                                <img src="images/2017-08-04 08.55.35_preview.jpeg" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <h2>Edmilson Nascimento</h2>
                            <p>Bacharel em Sistemas de Informações e tambem apaixonado por tecnologia, seu caminho não poderia ser outro.</p>
                            <p>
                                Iniciei os trabalhos na parte de criação de software com o seguimento de desenvolvimento web, onde foram varias as experiências que tive e modelos diferentes que me deixaram bem feliz de ter participado de projetos que realmente mudaram a maneira como as organizações passaram a usar a tecnologia.
                            </p>
                            <p>
                                Havendo a necessidade de novos e maiores desafios, o passo seguintes foi o ERP alemão, onde eu atuo como Arquiteto de soluções desde meados de 2008. Foram vários projeto que me permitiram fomentar soluções de software de qualidade, usando de varias recursos que o SAP me fornece. 
                            </p>
                            <p>
                                Unindo as duas vertentes principais, vieram as soluções em Fiori e Hana que hoje são um dos principais seguimentos de atuação da AC. Essa se torna minha especialidade, unido com os conhecimentos com metodologias e padrões de desenvolvimento da vanguarda de mercado.
                            </p>
                        </div>
                    </div>

                </div>
            </section>

            <section id="gtco-contact" data-section="contact">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
                            <h1>Contate-nos</h1>
                            <p class="sub">Orçamentos, dúvidas, críticas e sugestões, basta enviar um e-mail que estaremos prontos para atender com a melhor solução para seu negócio.</p>
                            <p class="subtle-text animate-box" data-animate-effect="fadeIn">Contato</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-push-6 animate-box">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">E-mail</label>
                                    <input type="text" name="email" class="form-control" placeholder="E-mail" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="message" class="sr-only">Mensagem</label>
                                    <textarea name="mensagem" id="message" class="form-control" cols="30" rows="6" placeholder="Mensagem"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Enviar menssagem" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4 col-md-pull-6 animate-box">
                            <div class="gtco-contact-info">
                                <ul>
                                    <li class="address">Brasilia-DF, Goiânia-GO</li>
                                    <li class="phone"><a href="tel://+55629814040482">+55 61 8140 4048</a> | <a href="tel://+5562981676192">+55 62 98167 6192</a></li>
                                    <li class="email"><a href="mailto:contato@abapconsulting.com.br">contato@abapconsulting.com.br</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer id="gtco-footer" role="contentinfo">
                <div class="container">

                    <div class="row copyright">
                        <div class="col-md-12">
                            <p class="pull-left">
                                <small class="block">&copy; 2017 M&E IT Services. Todos os direitos reservados.</small> 
                            </p>
                            <p class="pull-right">
                            <ul class="gtco-social-icons pull-right">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                            </p>
                        </div>
                    </div>

                </div>
            </footer>
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Stellar -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <!-- Main -->
        <script src="js/main.js"></script>

    </body>
</html>

