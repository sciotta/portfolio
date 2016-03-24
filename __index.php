<?php
  if (strpos($_SERVER['HTTP_HOST'],'.br') !== false) {
    $lang_file = 'lang.pt.php';
  }else{
    $lang_file = 'lang.en.php';
  }

  include_once 'i18n/'.$lang_file;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Thiago Sciotta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="portfolio">
    <meta name="author" content="Thiago Sciotta">
    <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/all.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="assets/3rds.js"></script>
    <script src="assets/modernizr.custom.js"></script>
</head>

<body>
    <div class="menu-wrap">
        <div class="menu-list">
            <nav class="cl-effect-5 menu">
                <a href="#" onclick="scrollPage('top')">
                    <span data-hover="Home">Home</span></a>
                <a href="#" onclick="scrollPage('grid3d')">
                    <span data-hover="<?php echo $lang['WORKS']; ?>"><?php echo $lang['WORKS']; ?></span>
                </a>
                <a href="#" onclick="scrollPage('info')">
                    <span data-hover="Info">Info</span>
                </a>
                <a href="#" onclick="scrollPage('projects')">
                    <span data-hover="<?php echo $lang['PROJECTS']; ?>"><?php echo $lang['PROJECTS']; ?></span>
                </a>
                <a href="#" onclick="scrollPage('contato')">
                    <span data-hover="<?php echo $lang['CONTACT']; ?>"><?php echo $lang['CONTACT']; ?></span></a>
            </nav>
        </div>
    </div>
    <button class="menu-button" id="open-button"></button>
    <div class="content-wrap">
        <div id="allpage">
            <div id="ajax-modal" class="modal hide fade" data-width="760"></div>
            <div id="sobre">
                <svg id="bigHalfCircle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewbox="0 0 100 100" preserveaspectratio="none">
                    <path d="M0 100 C40 0 60 0 100 100 Z"></path>
                </svg>
                <section class="col-2 color">
                    <div class="column"><span class="icon icon-avatar"></span></div>
                    <div class="column text">
                        <h2><?php echo $lang['MYNAME']; ?></h2>
                        <p>Sou um aficionado por tecnologia e seus meios. Busco tornar projetos em soluções <span class="semi-bold">inteligentes</span> e <span class="semi-bold">robustas</span> ,porém <span class="semi-bold">simples</span> e <span class="semi-bold">amigáveis</span>.</p>
                        <nav class="cl-effect-10 main-buttons"><a href="curriculo.pdf" data-hover="MEU CURRÍCULO"><span>MEU CURRÍCULO</span></a> <a href="#" onclick="scrollPage('grid3d', 100)" data-hover="TRABALHOS"><span>TRABALHOS</span></a></nav>
                    </div>
                </section>
                <svg id="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewbox="0 0 100 100" preserveaspectratio="none">
                    <path id="trianglePath1" d="M0 0 L50 100 L100 0 Z"></path>
                    <path id="trianglePath2" d="M50 100 L100 40 L100 0 Z"></path>
                </svg>
                <section class="grid3d vertical ss-style-invertedrounded" id="grid3d">
                    <div>
                        <div class="section-title" style="padding-bottom: 80px">
                            <div class="centered">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 style="text-align: center">Meus trabalhos</h2>
                                    <p style="text-align: center">Confira abaixo onde apresento alguns trabalhos de
                                        <br><strong>usabilidade</strong> e <strong>design de aplicativos.</strong>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-wrap">
                            <div class="grid">
                                <figure class="effect-goliath"><img src="img/1.jpg" alt="img01">
                                    <figcaption>
                                        <p><strong>Armandinho & Banda</strong>
                                            <br>Aplicativo desenvolvido exclusivo para iOS.</p>
                                    </figcaption>
                                </figure>
                                <figure class="effect-goliath"><img src="img/5.jpg" alt="img05">
                                    <figcaption>
                                        <p><strong>AlugueRelaxe</strong>
                                            <br>Aplicativo desenvolvido exclusivo para iOS.</p>
                                    </figcaption>
                                </figure>
                                <figure class="effect-goliath"><img src="img/8.jpg" alt="img08">
                                    <figcaption>
                                        <p><strong>Banda Vega</strong>
                                            <br>Aplicativo desenvolvido exclusivo para iOS.</p>
                                    </figcaption>
                                </figure>
                                <figure class="effect-goliath"><img src="img/2.jpg" alt="img02">
                                    <figcaption>
                                        <p><strong>Virus Immune</strong>
                                            <br>Aplicativo desenvolvido exclusivo para android.</p>
                                    </figcaption>
                                </figure>
                                <figure class="effect-goliath"><img src="img/4.jpg" alt="img04">
                                    <figcaption>
                                        <p><strong>Virus Immune</strong>
                                            <br>Aplicativo WEB para análise de vírus.</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="content">
                            <div data-preload-images="img/folio/screen1.jpg,img/folio/screen1.jpg,img/folio/screen2.jpg,img/folio/screen3.jpg,img/folio/screen4.jpg,img/folio/screen5.jpg,img/folio/screen6.jpg,img/folio/screen2.jpg,img/folio/screen2.jpg">
                                <div id="ac-wrapper" class="ac-wrapper">
                                    <h2>Armandinho &amp; banda <span>Aplicativo multimídia exclusivo do cantor</span></h2>
                                    <div class="ac-device ac-center" id="ac-device">
                                        <a href="#"><img class="preload-1"></a>
                                        <h3 class="ac-title">Aplicativo multimídia exclusivo do cantor</h3>
                                        <nav><span><i class="fa fa-angle-left"></i></span> <span><i class="fa fa-angle-right"></i></span></nav>
                                    </div>
                                    <div class="ac-grid">
                                        <a href="#"><img class="preload-2"><span>Dashboard inicial do aplicativo</span></a>
                                        <a href="#"><img class="preload-3"><span>Menu lateral em todas telas</span></a>
                                        <a href="#"><img class="preload-4"><span>Biografia em texto do cantor</span></a>
                                        <a href="#"><img class="preload-5"><span>Videos do canal através do youtube</span></a>
                                        <a href="#"><img class="preload-6"><span>Listagem de vídeos em "sanfona".</span></a>
                                        <a href="#"><img class="preload-7"><span>Player de música completo</span></a>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                            <div data-preload-images="img/folio/screen7.jpg,img/folio/screen7.jpg,img/folio/screen8.jpg">
                                <div id="ac-wrapper2" class="ac-wrapper">
                                    <h2>AlugeRelaxe <span>Aplicativo de aluguel de imóveis</span><div><p>Este foi a criação de um conceito para um aplicativo móvel iOS para o portal AlugueRelaxe (aluguerelaxe.com.br).</p><p>A idéia principal foi apresentar um conceito moderno, seguindo as tendências de componentes e ao mesmo tempo que mantivesse as características e cores do logotipo atual.</p></div></h2>
                                    <div class="ac-device ac-center" id="ac-device">
                                        <a href="#"><img class="preload-1"></a>
                                        <h3 class="ac-title">Tela de pesquisa de imóveis.</h3>
                                        <nav><span><i class="fa fa-angle-left"></i></span> <span><i class="fa fa-angle-right"></i></span></nav>
                                    </div>
                                    <div class="ac-grid">
                                        <a href="#"><img class="preload-2"><span>Tela de pesquisa de imóveis</span></a>
                                        <a href="#"><img class="preload-3"><span>Menu lateral em todas telas</span></a>
                                    </div>
                                </div>
                            </div>
                            <div data-preload-images="img/folio/vega/screen1.jpg,img/folio/vega/screen1.jpg,img/folio/vega/screen2.jpg,img/folio/vega/screen3.jpg,img/folio/vega/screen4.jpg,img/folio/vega/screen5.jpg,img/folio/vega/screen6.jpg">
                                <div id="ac-wrapper3" class="ac-wrapper">
                                    <h2>Banda vega <span>Aplicativo oficial da banda</span><div><p>O aplicativo contempla conteúdo digital da banda de pop/rock, formada por diversos músicos nacionais.</p><p>Simplicidade para atender o objeto: manter o padrão de cores e ser amigável.</p></div></h2>
                                    <div class="ac-device ac-center" id="ac-device">
                                        <a href="#"><img class="preload-1"></a>
                                        <h3 class="ac-title">Tela de pesquisa de imóveis.</h3>
                                        <nav><span><i class="fa fa-angle-left"></i></span> <span><i class="fa fa-angle-right"></i></span></nav>
                                    </div>
                                    <div class="ac-grid">
                                        <a href="#"><img class="preload-2"><span>Tela inicial do aplicativo</span></a>
                                        <a href="#"><img class="preload-3"><span>Informações sobre a banda</span></a>
                                        <a href="#"><img class="preload-4"><span>Galeria de fotos por período</span></a>
                                        <a href="#"><img class="preload-5"><span>Vídeos do canal através do youtube</span></a>
                                        <a href="#"><img class="preload-6"><span>Músicas agrupados por álbuns</span></a>
                                        <a href="#"><img class="preload-7"><span>Links para as redes sociais</span></a>
                                    </div>
                                </div>
                            </div>
                            <div data-preload-images="img/folio/vi/screen1.jpg,img/folio/vi/screen1.jpg,img/folio/vi/screen2.jpg,img/folio/vi/screen3.jpg,img/folio/vi/screen4.jpg">
                                <div id="ac-wrapper4" class="ac-wrapper android">
                                    <h2>VirusImmune <span>Aplicativo de análise de vírus</span><div><p>Solução para telefone Androids. Um grande projeto realizado em parceria com a VirusImmune.</p><p>Este projeto caminhou em paralelo com o projeto do aplicativo WEB, possiblitando fazer análises por celular e pelo navegador.</p></div></h2>
                                    <div class="ac-device ac-center" id="ac-device">
                                        <a href="#"><img class="preload-1"></a>
                                        <h3 class="ac-title">Dashboard inicial do aplicativo.</h3>
                                        <nav><span><i class="fa fa-angle-left"></i></span> <span><i class="fa fa-angle-right"></i></span></nav>
                                    </div>
                                    <div class="ac-grid">
                                        <a href="#"><img class="preload-2"><span>Dashboard inicial do aplicativo.</span></a>
                                        <a href="#"><img class="preload-3"><span>Listagem de aplicativos do sistema.</span></a>
                                        <a href="#"><img class="preload-4"><span>Escaneamento do aparelho Android.</span></a>
                                        <a href="#"><img class="preload-5"><span>Detalhes de um aplicativo.</span></a>
                                    </div>
                                </div>
                            </div>
                            <div data-preload-images="img/folio/vi/mac-screen1.jpg,img/folio/vi/mac-screen1.jpg,img/folio/vi/mac-screen2.jpg,img/folio/vi/mac-screen3.jpg">
                                <div id="ac-wrapper5" class="ac-wrapper mac">
                                    <h2>VirusImmune <span>Aplicativo WEB de análise de vírus</span><div class="description-div"><p>O projeto caminhou em conjunto com o de aplicativo mobile, possiblitando fazer análises pelo navegador.</p></div></h2>
                                    <nav><span><i class="fa fa-angle-left"></i></span> <span><i class="fa fa-angle-right"></i></span></nav>
                                    <div class="ac-device-container">
                                        <div class="ac-device" id="ac-device">
                                            <a href="#"><img class="preload-1"></a>
                                        </div>
                                        <div class="ac-grid">
                                            <a href="#"><img class="preload-2"><span>Tela inicial do aplicativo</span></a>
                                            <a href="#"><img class="preload-3"><span>Tela inicial do aplicativo</span></a>
                                            <a href="#"><img class="preload-4"><span>Tela inicial do aplicativo</span></a>
                                        </div>
                                    </div>
                                    <h3 class="ac-title">Listagem de aplicativos do sistema</h3></div>
                            </div>
                            <div>
                                <div class="dummy-img"></div>
                                <p class="dummy-text">The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                                <p class="dummy-text">The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                            </div><span class="loading"></span> <span class="icon close-content fa-times"></span></div>
                    </div>
                </section>
                <section class="col-2 color" id="info" style="padding-top: 6em">
                    <div class="section-title" style="padding-bottom: 80px">
                        <div class="container">
                            <div class="row centered">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 style="text-align: center">Um pouco de informação...</h2>
                                    <p style="text-align: center">Além de trabalhar com usabilidade, também sou <strong>desenvolvedor</strong>.
                                        <br>Abaixo algumas informções sobre mim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2" style="max-width: 980px; margin: 0 auto">
                        <div class="column">
                            <div class="panel">
                                <div class="header"><img src="img/profile.svg" width="150" height="150">
                                    <h3>Sobre mim</h3></div>
                                <div class="panel-content">
                                    <p>Busco encontrar a forma perfeita de tornar uma solução tecnológica em algo que traga valor e praticidade à vida das pessoas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="panel">
                                <div class="header"><img src="img/code.svg" width="150" height="150">
                                    <h3>Tecnologias</h3></div>
                                <div class="panel-content">
                                    <p>Desenvolvimento WEB utilizando a plataforma <strong>ASP.NET</strong> para o back-end e <strong>HTML5</strong>, <strong>jQuery</strong> e <strong>AngularJS</strong> para o front-end.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="column">
                                <div class="panel">
                                    <div class="header"><img src="img/books.svg" width="150" height="150">
                                        <h3>Estudos</h3></div>
                                    <div class="panel-content">
                                        <p>Busco conhecimento a partir de experiências e certificações. Sou MCP (<strong>Microsoft Certified Professional</strong>) em desenvolvimento WEB.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="panel">
                                    <div class="header"><img src="img/trophy.svg" width="150" height="150">
                                        <h3>Experiências</h3></div>
                                    <div class="panel-content">
                                        <p>Metodologia ágil como o <strong>Scrum</strong> e <strong>Kanban</strong>, versionamento através do <strong>Git</strong> e <strong>SVN</strong> bem como <strong>unit-tests</strong> e <strong>system-tests</strong>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <svg id="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewbox="0 0 100 100" preserveaspectratio="none">
                    <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
                </svg>
                <section class="col-2" id="projects">
                    <div class="column text section-title">
                        <h2>Outros projetos</h2>
                        <p>Participo de outros projetos abertos com amigos e na comunidade web. Acesse meu perfil no <span class="tooltip tooltip-turnright"><span class="tooltip-item">Github</span><span class="tooltip-content"><strong>[spir·it·u·al]</strong> affecting the human spirit or soul as opposed to material or physical things</span></span> e no <span class="tooltip tooltip-turnleft"><span class="tooltip-item">Google code</span><span class="tooltip-content"><strong>[corpse]</strong> dead body, body, carcass, skeleton, remains, mortal remains, rotten bacon</span></span>.</p>
                        <nav class="cl-effect-10"><a href="https://github.com/thiagog3" target="_blank" data-hover="GITHUB"><span>github</span></a> <a href="https://code.google.com/u/117480364192217516966/" target="_blank" data-hover="GOOGLE CODE"><span>google code</span></a></nav>
                    </div>
                    <div class="column"><span class="icon fa-github-alt"></span></div>
                </section>
                <section id="contato" class="ss-style-doublediagonal">
                    <div class="section-title" style="padding: 40px">
                        <div class="centered">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 style="text-align: center">Fale comigo!</h2>
                                <p style="text-align: center">Sinta-se à vontade, vamos trocar experiências, sugestões.
                                    <br>Em breve entrarei em contato.</p>
                            </div>
                        </div>
                    </div>
                    <form id="theForm" class="simform" autocomplete="off">
                        <div class="simform-inner">
                            <ol class="questions">
                                <li><span><label for="q1">Qual é o seu nome?</label></span>
                                    <input id="q1" name="q1" type="text">
                                </li>
                                <li><span><label for="q2">De onde você é?</label></span>
                                    <input id="q2" name="q2" type="text">
                                </li>
                                <li><span><label for="q3">Qual o seu e-mail?</label></span>
                                    <input id="q3" name="q3" type="text">
                                </li>
                                <li><span><label for="q4">E o seu telefone?</label></span>
                                    <input id="q4" name="q4" type="text">
                                </li>
                                <li><span><label for="q5">Qual o assunto que gostaria de conversar?</label></span>
                                    <input id="q5" name="q5" type="text">
                                </li>
                            </ol>
                            <button class="submit" type="submit">Send answers</button>
                            <div class="controls">
                                <button class="next fa fa-arrow-right"></button>
                                <div class="progress"></div><span class="number"><span class="number-current"></span> <span class="number-total"></span></span> <span class="error-message"></span></div>
                        </div><span class="final-message"></span></form>
                </section>
            </div>
            <svg id="clouds" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewbox="0 0 100 100" preserveaspectratio="none">
                <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z"></path>
            </svg>
        </div>
        <section class="footer">
            <div style="height: 240px;background: url('img/mcp.png') no-repeat center">
                <div style="padding-top: 10px"></div>
            </div>
        </section>
    </div>
    <script src="assets/app.js"></script>
    <script>
    var theForm = document.getElementById('theForm');

    new stepsForm(theForm, {
        onSubmit: function(form) {
            // hide form
            classie.addClass(theForm.querySelector('.simform-inner'), 'hide');

            ajax.post('form.php', {
                    name: document.getElementById('q1').value,
                    phone: document.getElementById('q4').value,
                    locality: document.getElementById('q2').value,
                    email: document.getElementById('q3').value,
                    message: document.getElementById('q5').value
                },
                function() {
                    var messageEl = theForm.querySelector('.final-message');
                    messageEl.innerHTML = 'Obrigado! Entrarei em contato! :)';
                    classie.addClass(messageEl, 'show');
                });
        }
    });

    function scrollPage(elementId, offset) {
        offset = offset !== undefined ? offset : 0;

        if (elementId === 'top') {
            $('.content-wrap').scrollTo(0, {
                duration: 'slow',
                easing: 'swing'
            });
            return;
        }

        var sectionOffset = $('#' + elementId).offset().top;
        var scrollPosition = $('.content-wrap').scrollTop();

        $('.content-wrap').scrollTo(scrollPosition + sectionOffset - 80 + offset, {
            duration: 'slow',
            easing: 'swing'
        });
    };
    </script>
    <script>
    new grid3D(document.getElementById('grid3d'));

    new showcase(document.getElementById('ac-wrapper'));
    new showcase(document.getElementById('ac-wrapper2'));
    new showcase(document.getElementById('ac-wrapper3'));
    new showcase(document.getElementById('ac-wrapper4'));
    new showcase(document.getElementById('ac-wrapper5'));
    </script>
</body>

</html>