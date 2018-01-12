@extends('clients.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">@lang('clients.conForm')</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">@lang('clients.home')</a> / <span>@lang('clients.contacts')</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="beta-map">
    
    <div class="abs-fullwidth beta-map wow flipInX"><iframe src="@lang('clients.address_map')" ></iframe></div>
    <!-- https://www.google.com/maps/place/V%C4%A9nh+Trung+Plaza/@16.0669102,108.2109486,17z/data=!3m1!4b1!4m5!3m4!1s0x3142184a8d51d751:0xdbbd06648f589398!8m2!3d16.0669051!4d108.2131373 -->
</div>
<div class="container">
    <div id="content" class="space-top-none">
        
        <div class="space50">&nbsp;</div>
        <div class="row">
            <div class="col-sm-8">
                <h2>@lang('clients.conForm')</h2>
                <div class="space20">&nbsp;</div>
                <p>@lang('clients.contact_description')</p>
                <div class="space20">&nbsp;</div>
                <form action="#" method="post" class="contact-form">    
                    <div class="form-block">
                        <input name="your-name" type="text" placeholder="Your Name (required)">
                    </div>
                    <div class="form-block">
                        <input name="your-email" type="email" placeholder="Your Email (required)">
                    </div>
                    <div class="form-block">
                        <input name="your-subject" type="text" placeholder="Subject">
                    </div>
                    <div class="form-block">
                        <textarea name="your-message" placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="beta-btn primary">@lang('clients.sendMessage')<i class="fa fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h2>@lang('clients.contactInfo')</h2>
                <div class="space20">&nbsp;</div>

                <h6 class="contact-title">@lang('clients.address')</h6>
                <p>
                    Suite 127 / 267 – 277 Brussel St,<br>
                    62 Croydon, NYC <br>
                    Newyork
                </p>
                <div class="space20">&nbsp;</div>
                <h6 class="contact-title">Business Enquiries</h6>
                <p>
                    Doloremque laudantium, totam rem aperiam, <br>
                    inventore veritatio beatae. <br>
                    <a href="mailto:biz@betadesign.com">@lang('clients.mail')</a>
                </p>
                <div class="space20">&nbsp;</div>
                <h6 class="contact-title">Employment</h6>
                <p>
                    We’re always looking for talented persons to <br>
                    join our team. <br>
                    <a href="hr@betadesign.com">@lang('clients.mail')</a>
                </p>
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
