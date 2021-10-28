@extends('guest.layouts.master')

@section('content')
<section class="solid_banner_area">
    <div class="container">
        <div class="solid_banner_inner">
            <h3>Contact</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Categories Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area p_100">
    <div class="container">
        <div class="contact_title">
            <h2>Get in Touch</h2>
        </div>
        <div class="row contact_details">
            <div class="col-lg-4 col-md-6">
                <div class="media">
                    <div class="d-flex">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                        <p>Address<br />Austraila.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media">
                    <div class="d-flex">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                        <a href="tel:+1109171234567">Phone number</a>
                        <a href="tel:+1101911897654">Phone number</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media">
                    <div class="d-flex">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                        <a href="mailto:busines@persuit.com">mail</a>
                        <a href="mailto:support@persuit.com">support@support.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact_form_inner">
            <h3>Drop a Message</h3>
            <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                <div class="form-group col-lg-4">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name *">
                </div>
                <div class="form-group col-lg-4">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address *">
                </div>
                <div class="form-group col-lg-4">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Your Subject">
                </div>
                <div class="form-group col-lg-12">
                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Type Your Message..."></textarea>
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" value="submit" class="btn update_btn form-control">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection