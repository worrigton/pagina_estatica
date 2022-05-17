@extends('layouts.app')

@section('title', 'Clientes')

@section('sidebar')
    @parent
@endsection

@section('content')
<div class="inner_page_bnr customer_page_bnr">
  <div class="container">

  </div>
</div>

<div class="full_wrapper padtb_100_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
              <div class="full_width mbot50">
                  <ul class="service_nav">
                      <li>
                        <a href="#1">Comercializadora Global Manager SA de CV</a>
                      </li>
                      <li>
                        <a href="#2">Prestadora de Servicios Profesionales e Integrales Gdl SA de CV</a>
                      </li>
                      <li>
                        <a href="#3">Grupo Balit</a>
                      </li>
                      <li>
                        <a href="#4">Consejo Estatal Para el Fomento Deportivo (CODE Jalisco)</a>
                      </li>
                      <li>
                        <a  href="#5">Confederació de Cámaras Industruiales de los Estados Unidos Mexicanos</a>
                      </li>
                      
                    
                  </ul>
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 col_margin">
                <div class="plft30">
                  <div class="full_width wdt_img mbot45 shadow_effect effect-apollo">
                    <img src="images/banner004.png" alt="power" class="img-responsive" id="1">
                  </div>
                  <div class="full_width mbot50" id="2">
                    <h4 class="fnt_28 mbot10" >
                      Comercializadora Global Manager SA de CV
                    </h4>
                    <p class="mbot25 ">
                      Servicios de capacitación de formación en materia de comercio y estrategia de ventas
                    </p>
                    <p class="" id="3"></p>
                  </div>
                  <div class="full_width mbot50" >
                    <div class="service_left_wdt service_left_wdt1">
                      <h4 class="fnt_28 mbot10" >
                        Prestadora de Servicios Profesionales e Integrales Gdl SA de CV
                      </h4>
                      <p class="mbot25 ">
                        Servicios prestados en Evaluaciones Macro y Micro económicas
                      </p>
                      <h4 class="fnt_28 mbot10" id="4">
                        Grupo Balit 
                      </h4>
                      <p class="mbot25 ">
                        Capacitación en el área administrativa y de recursos humanos
                      </p>
                      <h4 class="fnt_28 mbot10" >
                        Consejo Estatal Para el Fomento Deportivo (CODE Jalisco) 
                      </h4>
                      <p class="mbot25 " id="5">
                        Servicio de Auditoria Interna en las Áreas Contable, Compras e Ingresos
                      </p>
                    
                    </div>
                    <div class="wdt_img oil_lubricant_img">
                      <div class="shadow_effect effect-apollo mbot10"><img src="images/chemical_research_page/chemical_process_img.jpg" alt="chemical img"></div>
                      <div class="shadow_effect effect-apollo"><img src="images/chemical_research_page/chemical_process_img.jpg" alt="chemical img"></div>
                    </div>
                  </div>

                  <div class="full_width mbot50" >
                    <div class="research_query_col fl">
                      <h4>
                         Brindando el mejor servicio
                      </h4>
                      
                      <a data-animation="animated fadeInUp"  class="view-all hvr-bounce-to-right contact_btn" data-animation="animated fadeInUp">Contactanos</a>
                    </div>
                    <div class="service_left_wdt fr">
                      <h4 class="fnt_28 mbot15" >Confederació de Cámaras Industruiales de los Estados Unidos Mexicanos</h4>
                      <p class="mbot25 ">
                          Proyecto Mapa de ruta de la industria mexicana, desarrollo integral de un programa para el fomento de la competitividad y la innovación de las pymes mexicanas de nueve ecosistemas industriales en el marco de la economía digital, del INADEM.
                      </p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection