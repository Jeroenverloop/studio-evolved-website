@extends('layouts.default')
@section('title', 'StudioEvolved: Contact')
@section('custom-body')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin="" />
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
    crossorigin=""></script>
<script src="{{ asset('js/custom/contact.js') }}"></script>
@endsection

@section('content')
<div class="page contact">
    <div class="contact-form">
        <div class="title">
            Vragen?
        </div>
        <div class="credentials">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <input type="text" id="name" placeholder="Naam">
                </div>
                <div class="col-md-6 col-sm-12">
                    <input type="text" id="company" placeholder="Bedrijf">
                </div>
                <div class="col-md-6 col-sm-12">
                    <input type="text" id="phone" placeholder="Telefoon">
                </div>
                <div class="col-md-6 col-sm-12">
                    <input type="text" id="email" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="message">
            <textarea id="message" placeholder="Jouw bericht"></textarea>
        </div>
        <div class="send-btn">
            Versturen
        </div>
    </div>
    <div class="info"></div>
    <div class="contact-data">
        <div class="company-data">
            <div class="data">
                <img src="/img/social/phone-1.png" class="icon">
                <a href="tel:+31621554596">+31 6 2155 4596</a>
            </div>
            <div class="data">
                <img src="/img/social/website.png" class="icon">
                <a href="{{ route('home') }}">www.studioevolved.nl</a>
            </div>
            <div class="data">
                <img src="/img/social/location.png" class="icon">
                <a href="https://www.google.com/maps/place/Europalaan+100,+3526+KS+Utrecht/@52.0646616,5.1114228,15z/data=!4m5!3m4!1s0x47c665eb85078021:0x6ff23b3d038f6957!8m2!3d52.0642438!4d5.1086105"
                    target="blank">
                    1231 AB, Europalaan 100, Utrecht
                </a>
            </div>
            <div class="data">
                <img src="/img/social/mail.png" class="icon">
                <a href="mailto:info@studioevolved.nl">info@studioevolved.nl</a>
            </div>
        </div>

        <div id="map" class="map">

        </div>
    </div>
    @include('components.footer')

</div>
@endsection
