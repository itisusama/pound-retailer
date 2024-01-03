@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                Banner
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bg-light">
            <div class="row">
                <div class="col-lg-8 col-md-12 p-5 bg-white rounded-3">
                    <form class="row mb-3">
                        <div class="col-md-6 p-3">
                            <input class="contact-input" required placeholder="first name" type="text" name="" id="" />
                        </div>
                        <div class="col-md-6 p-3">
                            <input class="contact-input" required placeholder="last name" type="text" name="" id="" />
                        </div>
                        <div class="col-md-6 p-3">
                            <input class="contact-input" required placeholder="E-mail" type="email" name="" id="" />
                        </div>
                        <div class="col-md-6 p-3">
                            <input class="contact-input" required placeholder="phone" type="tel" name="" id="" />
                        </div>
                        <div class="col-md">
                            <textarea class="contact-input" required name="" placeholder="write your message" id="" cols="30" rows="1"></textarea>
                        </div>
                        <div class="text-end mt-4">
                            <input class="btn px-4 py-3 btn-outline-dark" type="submit" value="Send Message" />
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 text-white aside px-4 py-5">
                    <div class="mb-5">
                        <h1 class="h3">Contact Information</h1>
                        <p class="opacity-50">
                            <small class="text-white">
                                Fill out the from and we will get back to you whitin 24 hours
                            </small>
                        </p>
                    </div>
                    <div class="d-flex flex-column px-0">
                        <ul class="m-0 p-0">
                            <li class="d-flex justify-content-start align-items-center mb-4">
                                <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                    <ion-icon name="call"></ion-icon>
                                </span>
                                <span>+447916312844</span>
                            </li>
                            <li class="d-flex align-items-center r mb-4">
                                <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                    <ion-icon name="mail"></ion-icon>
                                </span>
                                <span>Help@contact.com</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-4">
                                <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                    <ion-icon name="pin"></ion-icon>
                                </span>
                                <span>10-16 tiller road, canary wharf, E14 8PX
                                </span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.9275599087728!2d-0.027370024667446546!3d51.49619681152333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602c0671641a1%3A0x266a92454825f03e!2s10%2C%2016%20Tiller%20Rd%2C%20London%20E14%208PX%2C%20UK!5e0!3m2!1sen!2s!4v1703149601143!5m2!1sen!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
