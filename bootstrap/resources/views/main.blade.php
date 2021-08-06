<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section class="container-fluid" id="banner">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <p class="card-text">ESCRITÓRIO COMPARTILHADO COM ESTRUTURA COMPLETA E EM EXCELENTE LOCALIZAÇÃO EM
                        BRAGANÇA PAULISTA.</p>
                    <p class="card-text1">R$ 400,00 / mês ou R$ 40,00 / dia</p>
                    <p class="card-text2">por pessoa (sem compromisso)</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container" id="conteudo">
        <div class="row">
            <div class="col-12">
                <p class="cont-title">QUICKTECH COWORKING</p>
                <p class="cont-subtitle">Por que nós acreditamos na economia compartilhada</p>
                <p class="cont-text">Coworking é um novo estilo de convívio profissional que envolve um local de
                    trabalho compartilhado, geralmente um escritório com atividades e profissionais independentes. Ao
                    contrário de um escritório típico, esses locais geralmente não são compostos por pessoas da mesma
                    organização. Normalmente, é um local atraente para profissionais que trabalham em casa, freelancers,
                    profissionais liberais ou pessoas que viajam com frequência e que acabam trabalhando em relativo
                    isolamento. Coworking é uma reunião social de um grupo de profissionais que compartilham os mesmos
                    valores e que estão interessadas na sinergia e oportunidades de negócios que esse convívio pode
                    trazer. Esse novo modelo de ambiente profissional também oferece uma solução para o problema das
                    distrações do ambiente home office.</p>
            </div>
        </div>
    </section>
    <section class="container-lg pt-5" id="video">
        <div class="row">
            <div class="col-12">
                <iframe width="100%" height="817.5px" src="https://www.youtube.com/embed/WNeLUngb-Xg"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="produtos">
        <div class="row fl">
            <div class="col-12">
                <div class="container">
                    <p class="cont-ofer">O QUE NÓS OFERECEMOS</p>
                    <p class="cont-product">Alguns equipamentos do escritório que estarão à sua disposição</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container mt-5" id="icons">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            {{-- <img src="{{ asset('images/internet.png') }}" class="card-img-top" alt="..."> --}}
                            <div class="img" style="background-image: url({{ asset('images/internet.png') }})"></div>
                            <div class="card-body">
                                <h5 class="card-title">Internet banda larga</h5>
                                <p class="card-text">O escritório conta com conexão de internet banda larga de 300
                                    megas, com
                                    sinal wifi disponível em todo o escritório, e o melhor, você não precisa pagar nada
                                    a mais
                                    por isso..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            {{-- <img src="{{ asset('images/coffee.png') }}" class="card-img-top coffee" alt="..."> --}}
                            <div class="img" style="background-image: url({{ asset('images/coffee.png') }})"></div>
                            <div class="card-body">
                                <h5 class="card-title">Café espresso</h5>
                                <p class="card-text">Cozinha equipada com máquina de café espresso, abastecida com grãos
                                    de alta qualidade para oferecer a você e seus clientes a experiência de saborer um
                                    delicioso café.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            {{-- <img src="{{ asset('images/air-conditioning.png') }}" class="card-img-top" alt="..."> --}}
                            <div class="img"
                                style="background-image: url({{ asset('images/air-conditioning.png') }})"></div>
                            <div class="card-body">
                                <h5 class="card-title">Ar condicionado</h5>
                                <p class="card-text">Ambiente climatizado para proporcionar conforto e bem-estar durante
                                    o tempo em que você e seus clientes estiverem no interior do escritório. Sala das
                                    estações de trabalho possui ar condicionado privativo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            {{-- <img src="{{ asset('images/projector.png') }}" class="card-img-top" alt="..."> --}}
                            <div class="img" style="background-image: url({{ asset('images/projector.png') }})"></div>
                            <div class="card-body">
                                <h5 class="card-title">Projetor de imagens</h5>
                                <p class="card-text">Projetor de imagens instalado e disponível para uso no espaço de
                                    apresentações. Basta conectar seu PC e transmitir seus vídeos ou imagens em tela
                                    grande.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="about">
        <div class="container">
            <div class="row ab">
                <div class="col-12">
                    <p class="cont-ofer">SAIBA MAIS SOBRE NOSSAS INSTALAÇÕES</p>
                    <p class="cont-product">Conheça um pouco das salas e áreas disponíveis</p>
                </div>
            </div>
            <div class="row blog">
                <div class="col-sm-12 col-md-6 image">
                    <div class="img" style="background-image: url({{ asset('images/meeting-room.png') }})"></div>
                </div>
                <div class="col-sm-12 col-md-5 offset-md-1 texto">
                    <h3>Sala de reuniões</h3>
                    <p>Ampla sala de reuniões, com mesa para 5 lugares, ar condicionado, banheiro e televisão com câmera
                        para videoconferências. Agende o dia e horário que você pretende utilizar a sala e ela estará
                        disponível para você realizar reuniões com seus clientes, fazer pequenas apresentações ou se
                        você
                        necessitar de um período para trabalhar em um ambiente mais reservado.</p>
                </div>
            </div>
            <div class="row blog">
                <div class="col-sm-12 col-md-6 texto">
                    <h3>Espaço para apresentações</h3>
                    <p>Ampla área com mesa de 7 lugares, sofás e espaço de sobra para acomodar cadeiras. Perfeita para
                        pequenas apresentações. Agende o dia e horário que pretende utilizar o espaço e tenha uma
                        completa estrutura com equipamentos para realizar apresentações, pequenas palestras ou qualquer
                        outro evento.</p>
                </div>
                <div class="col-sm-12 col-md-6 image">
                    <div class="img" style="background-image: url({{ asset('images/meeting-room.png') }})"></div>
                </div>
            </div>
            <div class="row blog">
                <div class="col-sm-12 col-md-6 image">
                    <div class="img" style="background-image: url({{ asset('images/meeting-room.png') }})"></div>
                </div>
                <div class="col-sm-12 col-md-5 offset-md-1 texto">
                    <h3>Estações de trabalho</h3>
                    <p>Mesas de trabalho equipadas com monitores, descanso para os pés e conexões de energia elétrica. A
                        sala possui portas para diminuir os ruídos externos e garantir maior privacidade para seus
                        ocupantes. Ar condicionado privativo, ampla área envidraçada para entrada de luz natural,
                        armários para acomodar mochilas, bolsas e bancadas espaçosas para acomodar os seus equipamentos.
                    </p>
                </div>
            </div>
        </div>
        <section class="container-fluid" id="text-galery">
            <div class="row galery">
                <div class="col-sm-12 title">
                    <h3>GALERIA DE IMAGENS</h3>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4 offset-md-4">
                    {{-- <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/space-for-presentations.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/work-station.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/work-station.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> --}}
                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">
                                <img src="{{ asset('images/space-for-presentations.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="{{ asset('images/work-station.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/work-station.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
        </section>
        <section class="container-fluid" id="contato">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7346.795196491972!2d-46.54038930000004!3d-22.972402399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1628259789831!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>ENTRE EM CONTATO</h3>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1">                                    
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">E-mail</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Phone</label>
                                <input type="tel" class="form-control" id="exampleFormControlInput1">                                    
                            </div>                        
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid" id="footer">
            <div class="row">
                <div class="col-md-6 logo">
                    <img src="/images/logo.svg" alt="">
                </div>
                <div class="col-md-6 allrights">
                    <h3>&#0169;2018 Quicktech</h3>
                </div>
            </div>
        </section>    
































        @yield('content')
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script>
            (function($) {
                $(document).ready(function() {
                    $('#carouselExampleSlidesOnly').carousel()
                });
            });
        </script>
</body>

</html>
