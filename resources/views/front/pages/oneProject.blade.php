@extends('layouts.template')

@section('title')
Projekat
@endsection('title')


@section('page')
Projekat
@endsection('page')


@section('centar')

@include('front.partials.secondHeader')

<div class="wrapper">
    <div id="oneProjectContainer">
        <div class="projectImage">
            <img src="{{asset('images/'.$project->path)}}" alt="{{$project->alt}}"/>
        </div>

        <div class="projectInfo">
            <ul>
                <li><h1>{{$project->name}}</h1></li>
                <li><div class="line"></div></li>
                <li><p>{{$project->text}}</p></li>
            </ul>
        </div>
    </div>
</div>

@endsection('centar')
