@extends('layouts.app')

@section('title', '')

@section('sidebar')
    @parent

    <p></p>
@endsection

@section('content')
   
    <!-- =========home banner start============-->
    <div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel slide carousel-fade shop-slider full_width">
      <!-- Wrapper for slides-->
      <div role="listbox" class="carousel-inner ver_new_2_slider">
      <div style="background-image: url(images/banner.jpg);background-position: center right; background-size: cover;" class="item slide-3">
          <div class="carousel-caption">
            <div class="thm-container txt-left">
              <div class="box valign-middle">
                <div class="content cnt_wdt1">
                  <h1 data-animation="animated fadeInUp" class="bnrfnt45">Aquí va  <br>otra frase</h1>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="background-image: url(images/slider1.jpg);background-position: top center; background-size: cover;" class="item active slide-1">
          <div class="carousel-caption center">
            <div class="thm-container txt-left">
              <div class="box valign-middle">
                <div class="content cnt_wdt1">
                  <h1 data-animation="animated fadeInUp" class="bnrfnt45 color_blue">aquí va una frase</h1>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="background-image: url(images/slider2.jpg);background-position: top center; background-size: cover;" class="item slide-2 ">
          <div class="carousel-caption">
            <div class="thm-container txt-left">
              <div class="box valign-middle">
                <div class="content cnt_wdt1">
                  <h1 data-animation="animated fadeInUp" class="bnrfnt45 color_yellow">aquí va una frase
                  </h1>
                  <p data-animation="animated fadeInDown" class="pln_he">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam labore et dolore magna.</p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="background-image: url(images/banner1.png);background-position: center right; background-size: cover;" class="item slide-3">
          <div class="carousel-caption">
            <div class="thm-container txt-left">
              <div class="box valign-middle">
                <div class="content cnt_wdt1">
                  <h1 data-animation="animated fadeInUp" class="bnrfnt45">Aquí va  <br>otra frase</h1>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
    </div>
    <!-- =========home banner end============-->
    <!-- =========welding col start============-->
    <section class="services-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Column-->
                <div id="fadeInLeft" class="punto col-md-4 col-sm-6 col-xs-12 column  " data-delay="200ms" data-duration="1500ms">
                    <article class="inner-box">
                        <div class="content text-right">
                            <div class="rev-text" style="font-size:20px;">“Te ofrecemos Servicios de Calidad“</div>
                            <div class="rev-author text-right">
                                GDL WEESTT
                            </div>
                            
                        </div>
                    </article>
                </div>
                
                <!--Column-->
                <div id="fadeInRight" class="punto col-md-8 col-sm-6 col-xs-12 column " data-delay="200ms" data-duration="1500ms">
                    <article class="inner-box">
                        <div class="content">
                            <h3>Somos un corporativo de profesionales</h3>
                            <div class="rev-text justify" >
                                <p>especializados que aportan valor a las empresas, que responden a sus necesidades. Buscamos distinguirnos por un trato cálido y el acompañamiento personalizado</p>
                            </div>
                            <div class="">
                              <a href="#" class="view-all hvr-bounce-to-right news_read_btn get_Quote view_service">Conocenos</a>
                            </div>
                            
                        </div>
                    </article>
                </div>
                
                
            </div>
        </div>
    </section>
    <!-- ========services start============-->
    <div class="section services full_wrapper padtb_95_100">
        <div class="container">
            <div class="col-xs-12 center">
                <h3 class="fnt_dark_color">Nuestros <span class="blue_head">Servicios</span></h3>
            </div>
            
            <div class="row row-flex">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service shadow_effect effect-apollo">
                        <a class="service-img">
                            <img src="images/serv1_inicio.png" alt="service1">
                        </a>
                        <div class="service-content">
                            <h4 class="title">
                                <a>Servicios de capacitación</a>
                            </h4>
                            <p class="des">Consultoría y asesoría técnica</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service shadow_effect effect-apollo">
                        <a class="service-img">
                            <img src="images/serv2_inicio.png" alt="service3">
                        </a>
                        <div class="service-content">
                            <h4 class="title">
                                <a>Desarrollo de programas de competitividad 
                            </h4>
                            <p class="des">Estrategias e innovación empresarial.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0 col-xs-12">
                    <div class="service shadow_effect effect-apollo">
                       <a class="service-img">
                            <img src="images/serv3_inicio.jpg">
                        </a>
                        <div class="service-content">
                            <h4 class="title">
                                <a>Supervisión de proyectos</a>
                            </h4>
                            <p class="des">Elaborar estudios, planes de trabajo, estrategias de desarrollo y proyectos empresariales y de gobierno,</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 center">
                  <a href="" class="view-all hvr-bounce-to-right news_read_btn get_Quote view_service">Ver más servicios</a>
                </div>
            </div>
        </div>
    </div>
    <!-- =========services end============-->
    <!-- ========Why Choose Us? start============-->
    <div class="full_wrapper graybg_color1">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 center">
                    <h3 class="fnt_dark_color">¿Por qué <span class="blue_head">elegirnos</span>?</h3>
                </div>
                <div class="whychoose punto col-md-3 col-sm-6 col-xs-12" style="visibility: none; animation-duration: 1500ms; animation-delay:10ms;">
                    <div class="icon-box">
                        <div class="icon center">
                            <img class="icon-img" src="images/inicio_profesion.jpg" alt="">
                        </div>
                        <div class="icon-box-content center">
                            <h3 class="title none">Profesionalismo</h3>
                            <p class="description">Especializados en la solución de problemas</p>
                        </div>
                    </div>
                </div>    
                <div class="whychoose punto col-md-3 col-sm-6 col-xs-12" style="visibility: none; animation-duration: 1500ms; animation-delay:500ms;">
                    <div class="icon-box">
                        <div class="icon center">
                            <img class="icon-img" src="images/experiencia_inicio.jpg" alt="">
                        </div>
                        <div class="icon-box-content center">
                            <h3 class="title none">Experiencia</h3>
                            <p class="description">Adquira a lo alrgo de los años y por nuestros clientes</p>
                        </div>
                    </div>
                </div>   
                <div class="whychoose punto col-md-3 col-sm-6 col-xs-12" style="visibility: none; animation-duration: 1500ms; animation-delay:1000ms;">
                    <div class="icon-box">
                        <div class="icon center">
                            <img class="icon-img" src="images/servicio_inicio.jpg" alt="">
                        </div>
                        <div class="icon-box-content center">
                            <h3 class="title none">Servicio</h3>
                            <p class="description">Servicios  que resulten en soluciones de alta calidad y eficiencia. </p>
                        </div>
                    </div>
                </div> 
                <div class="whychoose punto col-md-3 col-sm-6 col-xs-12" style="visibility: none; animation-duration: 1500ms; animation-delay:1500ms;">
                    <div class="icon-box">
                        <div class="icon center">
                            <img class="icon-img" src="images/resultados_inicio.jpg" alt="">
                        </div>
                        <div class="icon-box-content center">
                            <h3 class="title none">Resultados</h3>
                            <p class="description">Garantizando el cumplimiento de los objetivos </p>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </div>
    <!-- ========Why Choose Us? end============-->
    <!-- ========start============-->
    <div id="counter" class="padtb_95_100 col-xs-12 counterUp_wrapper__block ">
        <div class="col-md-6 col-lg-6 center">
            <h2 id="punto">Tenemos <strong class="yellow">2 años</strong> de experiencia... y lo que nos falta por recorrer</h2>
        </div>
        <div  class="col-md-6 col-lg-6">
            <div  class="counter_wrap__block text-center col-xs-12">
                <div class="col-sm-4">
                    <div class="single-counterup">
                        <i class="fa fa-trophy"></i>
                        <p class="counterup">
                            <span class="counter" data-count="125">
                                0
                            </span>
                        </p>
                        <p>
                            Cursos impartidos 
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="single-counterup">
                        <i class="fa fa-users"></i>
                        <p class="counterup">
                            <span class="counter" data-count="20">0</span>
                        </p>
                        <p>
                            Miembros en el equipo
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-counterup">
                        <i class="fa fa-smile-o"></i>
                        <p class="counterup">
                            <span class="counter" data-count="536">0</span>
                        </p>
                        <p>
                            Clientes satisfechos
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======== end============-->
    <!-- ========team start============-->
    <div class="full_wrapper worker_bg padtb_91_50">
        <div class="container">
            <div class="col-xs-12 center">
                <h3 class="mbot45">Equipo de <span class="blue_head"> trabajo</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mtopminus10">
                    <p>Una descripción del equipo
                    </p>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_margin">
                    <div id="our_worker" data-ride="carousel" class="carousel slide four_shows_one_move">
                        <div class="controls pull-right">
                            <a href="#our_worker" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a>
                            <a href="#our_worker" data-slide="next" class="right fa fa-angle-right next_prve_control"></a>
                        </div>
                        <!-- Wrapper for slides-->
                        <div class="row">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center mbot45">
                                        <span class="team_name full_width">
                                            Nombre 1
                                        </span>
                                        <span class="team_designation full_width">
                                            Posición
                                        </span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center mbot45">
                                        <span class="team_name full_width">
                                            Nombre 2
                                        </span>
                                        <span class="team_designation full_width">
                                            Posición
                                        </span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center mbot45">
                                        <span class="team_name full_width">
                                            Nombre 3
                                        </span>
                                        <span class="team_designation full_width">
                                            Posición
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========team============-->
    <!-- ========testinomial start============-->
    <div class="full_width var3_testinomial_col">
        <div class="col-xs-12 center">
                <h3 class="mbot45">Testimonios</h3>
            </div>
        <div class="container">
            <div id="tcb-testimonial-carousel" data-ride="carousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="var3_testi_pad">
                            <span class="var3_testi_img">
                                <img src="images/home_page_variation3/testi_img.png">
                            </span>
                            <p class="">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con sequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quis quam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.  Neque porro quis quam est, qui dolorem ipsum</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="var3_testi_pad">
                            <span class="var3_testi_img">
                                <img src="images/home_page_variation3/testi_img.png">
                            </span>
                            <p class="">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con sequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quis quam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.  Neque porro quis quam est, qui dolorem ipsum</p>
                        </div>
                    </div>
                </div>
                <!-- Controls-->

                <a href="#tcb-testimonial-carousel" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a><a href="#tcb-testimonial-carousel" data-slide="next" class="right fa fa-angle-right next_prve_control"></a>
            </div>
        </div>
    </div>
    <!-- ========testinomial end============-->   
@endsection