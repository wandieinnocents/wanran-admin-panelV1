@extends('frontend.layouts_frontend.master')

@section('title')

@endsection

@section('content')
<!-- content  -->


<!-- Contact Page Title -->
<section class="contact-page-title text-center"
    style="background-image: url({{ asset('assets/frontend_assets/assets/images/background/17.jpg') }})">
    <div class="auto-container text-center">
        <h1>Book with us !</h1>
    </div>
</section>
<!-- End Contact Page Title -->
<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Info Column -->
            <div class="info-column col-lg-2 col-md-12 col-sm-12" style="visibility: hidden;">

            </div>

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box">
                        <h3 class="text-center">We Love To Hear From You</h3>
                        <div class="text text-center">If it's not too much trouble informed us regarding whether you
                            have an
                            inquiry, need to leave a remark, or might want additional data about Advotis</div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form method="post" action="" id="contact-form">
                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="username" value="" placeholder="Name" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="email" name="email" value="" placeholder="Email" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="subject" value="" placeholder="Subject" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="theme-btn btn-style-five"><span
                                            class="txt">Submit</span></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column col-lg-2 col-md-12 col-sm-12" style="visibility: hidden;">

            </div>

        </div>

    </div>
</section>
<!--End Faq Section-->

@endsection