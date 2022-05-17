@extends('layouts.app')

@section('title', 'Contacto')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')



<!-- =========inner-page banner start============-->
<div class="inner_page_bnr service_page_bnr">
  <div class="container">

  </div>
</div>
<!-- =========inner-page banner end============-->
<!-- =========inner-pages medium content start============-->
<div class="full_wrapper padtb_92_100">
    <div class="container">
        <h3 class="mbot25">Contactanos</h3>
        <p class="mbot45">
        </p>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center">
                <form id="contact-form" onSubmit="return submitForm();" action="./" method="post" name="contactform" class="full_width">
                    <div class="messages"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group faq_form-group">
                                <input id="form_name" required type="text" name="name" value="Nombre" onblur="if(value=='') value = 'Nombre'" onfocus="if(value=='Nombre') value = ''" class="form-control faq_form_control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group faq_form-group">
                                <input id="form_email" required type="email" name="email" value="Email" onblur="if(value=='') value = 'Email'" onfocus="if(value=='Email') value = ''" class="form-control faq_form_control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group faq_form-group">
                                <input id="form_email" required type="text" name="subject" value="Asunto" onblur="if(value=='') value = 'Asunto'" onfocus="if(value=='Asunto') value = ''" class="form-control faq_form_control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mbot5">
                            <div class="form-group faq_form-group">
                                <textarea id="form_message" required name="message" placeholder="mensaje" rows="4" class="form-control faq_form_control faq_message_height"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mtop20">
                            <input type="submit" value="Enviar" class="btn submit_now faq_submit_btn contact_btn">
                            <div class="requestSuccess"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 plft85 col_margin">
                <ul class="contact_info">
                    <li class="cnt_map_icon">
                        <p class="line_he2">
                            Calle de prueba # 167</p>
                      </li>
                    <li class="cnt_mail_icon">
                        <p class="line_he2">
                            example@example.com
                        </p>
                    </li>
                    <li class="cnt_call_icon">
                        <p class="line_he2">
                           33-36991178 y 38014031
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="full_width contact_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21116.597424855066!2d-103.35599100693882!3d20.672739547960557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1faa928f63f%3A0x25dcb2cdab10691a!2sCatedral%20de%20Guadalajara!5e0!3m2!1ses-419!2smx!4v1652768465735!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
</div> 

@endsection