@extends('layouts.default')
@section('title', 'StudioEvolved: Werken bij')

@section('custom-body')
<script src="{{ asset('js/custom/working-at.js') }}"></script>
@endsection

@section('content')
<div class="page working-at">

    <div class="jobs">
        <div class="job">
            <div class="title">
                Visual<br/>Designer
            </div>
            <div class="action">
                Meer info
                <img src="/img/arrows/blue-right.png" class="arrow">
            </div>
        </div>
        <div class="job">
            <div class="title">
                Graphic<br/>Designer
            </div>
            <div class="action">
                Meer info
                <img src="/img/arrows/blue-right.png" class="arrow">
            </div>
        </div>
        <div class="job">
            <div class="title">
                Full<br/>Stack<br/>Developer
            </div>
            <div class="action">
                Meer info
                <img src="/img/arrows/blue-right.png" class="arrow">
            </div>
        </div>
        <div class="job">
            <div class="title">
                Animator
            </div>
            <div class="action">
                Meer info
                <img src="/img/arrows/blue-right.png" class="arrow">
            </div>
        </div>
        <div class="job">
            <div class="title">
                Human<br/>Resources
            </div>
            <div class="action">
                Meer info
                <img src="/img/arrows/blue-right.png" class="arrow">
            </div>
        </div>
        <div class="job">
            <div class="title">
                Help<br/>Desk
            </div>
            <div class="action">
                Meer info
                <img src="/img/arrows/blue-right.png" class="arrow">
            </div>
        </div>
    </div>
    @include('components.footer')
</div>
@endsection
