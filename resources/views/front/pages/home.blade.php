@extends('layouts.template')

@section('title')
3D modelovanje
@endsection('title')


@section('centar')

    <div id="slider">
        <div class="stars0"></div>
        <div class="stars"></div>
        <div class="stars2"></div>
        <div class="stars3"></div>
        <div class="wrapper">
            <div id="sliderContent">
                <div id="sliderText">
                    <h1>3Dream Studio</h1>
                    <p>Dobrodošli u 3Dream Studio, vašu destinaciju za vrhunski 3D modeliranje. Naša strast je pretvaranje vaših ideja u stvarnost kroz detaljne i realistične 3D modele. Sa fokusom na kvalitetu i inovacije.</p>
                    <a target="_self" rel="follow" href="{{url('/projekti')}}">Projekti</a>
                </div>
                <div id="sliderImage">
                    <img src="{{asset('images/model.png')}}" alt="3d"/>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="wrapper">
            <div class="homeContainer">
                <div class="containerText">
                    <div><h1>3D štampa</h1></div>
                    <div class="line" id="line"></div>
                    <p>3D štampa je proces stvaranja fizičkog objekta od slojeva materijala, koristeći 3D model kao osnovu. Ova tehnologija nam omogućava da brzo i pouzdano izradimo fizičke modele, što je od velike koristi u različitim industrijama, od dizajniranja do proizvodnje.</p>
                </div>
                <div class="containerImg">
                    <img src="{{asset('images/printer.jpg')}}" alt="3d printer" />
                </div>
            </div>
        </div>
    </div>

    <div class="container2">
        <div class="wrapper">
            <div id="container2Content">
                <div class="containerImg">
                    <img src="{{asset('images/modeliranje.jpg')}}" alt="3d modelovanje" />
                </div>
                <div class="containerText">
                    <div><h1>3D modelovanje</h1></div>
                    <div class="line" id="line2"></div>
                    <p>Uslužno 3D modelovanje je tehnologija koja omogućava brzo i precizno izradu 3D modela bilo koje kompleksnosti. Koristimo različite tehnike, uključujući 3D skeniranje i 3D štampu, kako bismo dobili savršenu repliku vaše ideje ili proizvoda.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="wrapper">
            <div class="homeContainer">
                <div class="containerText">
                    <div><h1>3D skeniranje</h1></div>
                    <div class="line" id="line"></div>
                    <p>3D skeniranje je proces snimanja realnih objekata u digitalnom obliku, što nam omogućava da precizno reprodukujemo dimenzije i oblik originala. Na taj način možemo lako i brzo dobiti 3D model koji će biti identičan originalu.</p>
                </div>
                <div class="containerImg">
                    <img src="{{asset('images/skener.jpg')}}" alt="3d skeniranje" />
                </div>
            </div>
        </div>
    </div>


@endsection('centar')
