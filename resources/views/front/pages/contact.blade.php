@extends('layouts.template')

@section('title')
Kontakt
@endsection('title')


@section('page')
Kontakt
@endsection('page')


@section('centar')

@include('front.partials.secondHeader')


<div id="contact">
    <div class="wrapper">
        <div id="contactContent">
            <div id="contactLeft">
                <ul>
                    <li class="contactHead">Kontaktirajte nas</li>
                    <li><a target="_blank" rel="noopener" href="tel:+381613316727"><i class="fa fa-phone"></i> +381 61 331 67 27</a></li>
                    <li><a target="_blank" rel="noopener" href="tel:+381665160891"><i class="fa fa-phone"></i> +381 66 516 08 91</a></li>
                    <li><a target="_blank" rel="noopener" href="tel:+381601512417"><i class="fa fa-phone"></i> +381 60 151 24 17</a></li>
                    <li><a target="_blank" rel="noopener" href="mailto:3dream.sp@gmail.com"><i class="fa fa-envelope"></i> 3dream.sp@gmail.com</a></li>
                    <li id="contactSocial"><a target="_blank" rel="noopener" href="https://www.instagram.com/3dream.sp/"><i class="fa fa-instagram"></i></a> <a target="_blank" rel="noopener" href="https://www.facebook.com/3Dream-Studio-104396438729000/"><i class="fa fa-facebook-square"></i></a></li>
                </ul>
            </div>
            <div id="contactRight">
                <form method="POST" action="{{url('/kontakt')}}">
                    <ul>
                        @csrf
                        <li class="contactHead">Pošaljite poruku</li>
                        <li><label for="nameLastName">Ime i prezime </label><input type="text" id="nameLastName" name="nameLastName" /></li>
                        <li><label for="email">Mejl </label><input type="email" id="email" name="email"></li></li>
                        <li><label for="contactTextarea">Poruka </label><textarea id="contactTextarea" name="text"></textarea></li>
                        <li><button type="submit" id="sendMessage" disabled class="buttonDisable" name="sendMessage">Pošalji</button></li>
                    </ul>
                </form>

                @isset($errors)
                @foreach($errors->all() as $error)
                    <div class="messageVer2 message">
                        {{ $error }}
                    </div>
                @endforeach
                @endisset

                @if(session()->has('message'))
                    <div class="messageVer2 message">
                        {{ session('message') }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>

<div id="maps">
    <iframe title="3Dream Google Maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45629.55984964611!2d20.93204454777679!3d44.374721951363576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4750cefff31a5049%3A0xe05e28b1c5d95b71!2z0KHQvNC10LTQtdGA0LXQstGB0LrQsCDQn9Cw0LvQsNC90LrQsA!5e0!3m2!1ssr!2srs!4v1640812658617!5m2!1ssr!2srs"  allowfullscreen="" loading="lazy"></iframe>
</div>



@endsection('centar')

@section('javascript')
@parent
    <script type="text/javascript" src="{{asset('js/contact.js')}}"></script>
@endsection('javascript')
