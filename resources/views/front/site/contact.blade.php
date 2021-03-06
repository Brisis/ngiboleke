@extends('front.layouts.app')

@section('content')

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ route('home') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Contact</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
      </div>
    </div>

    @include('front.partials.aside')

    <div class="page-content-wrapper">
      <!-- Google Maps-->
      <div class="google-maps-wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37902.096510377676!2d101.6393079588335!3d3.103387873464772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49c701efeae7%3A0xf4d98e5b2f1c287d!2sKuala%20Lumpur%2C%20Federal%20Territory%20of%20Kuala%20Lumpur%2C%20Malaysia!5e0!3m2!1sen!2sbd!4v1591684973931!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="container">
        <div class="section-heading mt-3">
          <h5 class="mb-1">Contact Us</h5>
          <p class="mb-4">Write to us. We will reply to you as soon as possible. But yes, it can take up to 24 hours.</p>
        </div>
        <!-- Contact Form-->
        <div class="contact-form mt-3 pb-3">
          <form action="#" method="">
            <input class="form-control mb-3" id="username" type="text" placeholder="Your Name">
            <input class="form-control mb-3" id="email" type="email" placeholder="Enter email">
            <select class="mb-3 form-control form-select" id="topic" name="topic">
              <option value="">Buying &amp; Support</option>
              <option value="">Authors Help</option>
              <option value="">Buyer Help</option>
              <option value="">License</option>
            </select>
            <input class="form-control mb-3" id="username" type="text" placeholder="Include a relevant URL">
            <textarea class="form-control mb-3" id="message" name="" cols="30" rows="10" placeholder="Write something..."></textarea>
            <button class="btn btn-success btn-lg w-100">Send Now</button>
          </form>
        </div>
      </div>
    </div>

    @include('front.partials.bottomnavbar')

    @endsection
