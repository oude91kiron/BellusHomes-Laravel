
{{-- Metadata goes here --}}
@include('front.includes.main-header')


    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us.</li>
                        </ol>
                        <h1 class="breadcrumb_title">Contact Us.</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Our Contact -->
<section class="our-contact pb0 bgc-f7">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-8">
                <div class="form_grid">
                    <h4 class="mb5">Send Us An Email</h4>
                    <p>Let we answer your queries and help you to take the right decision to feel more confident when you invest in real estate or even just getting you dream home in such amazing city like istnabul.</p>                    <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_name" name="form_name" class="form-control" required="required" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_email" name="form_email" class="form-control required email" required="required" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_phone" name="form_phone" class="form-control required phone" required="required" type="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_subject" name="form_subject" class="form-control required" required="required" type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="form_message" class="form-control required" rows="8" required="required" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group mb0">
                                    <button type="button" class="btn btn-lg btn-thm">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="contact_localtion">
                    <h4>Contact Us</h4>
                    <p>If you want to visit us in our office we will be happy to see you and you can talk to one of our advisers directly by calling us.</p>
                    <div class="content_list">
                        <h5>Address</h5>
                        <p>34097 Vatan Street, <br>Fatih/istanbul.</p>
                    </div>
                    <div class="content_list">
                        <h5>Phone</h5>
                        <p>{{$sitedata->whatsapp}}</p>
                    </div>
                    <div class="content_list">
                        <h5>Mail</h5>
                        <p>{{$sitedata->email}}</p>
                    </div>
                    <h5>Follow Us</h5>
                    <ul class="contact_form_social_area">
                        <li class="list-inline-item"><a href="https://facebook.com/{{$sitedata->facebook}}" target="__blanck"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://wa.me/{{$sitedata->whatsapp}}" target="__blanck"><i class="fa fa-whatsapp"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/{{$sitedata->twitter}}" target="__blanck"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://instagram.com/{{$sitedata->instagram}}" target="__blanck"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('front.sections.testimonial')

<!-- Our Footer -->
@include('front.includes.footer')
