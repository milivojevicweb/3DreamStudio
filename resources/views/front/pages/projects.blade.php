@extends('layouts.template')

@section('title')
Projekti
@endsection('title')


@section('page')
Projekti
@endsection('page')

@section('centar')

@include('front.partials.secondHeader')


<div id="projects">
    <div class="wrapper">
        <div id="projectsContent">

            @foreach ($projects as $item)
                @component("front.partials.project",["item"=>$item])

                @endcomponent
            @endforeach

        </div>

        <div id="pagination">
            <ul class="pagination">
                @for($i=1;$i<=ceil($projects->total()/6);$i++)
                <li><a target="_self" rel="follow" @if($i==1) class="activePagination pag "@else class="pag" @endif href="page={{$i}}">{{$i}}</a></li>
                @endfor
            </ul>
        </div>
        <input type="hidden" name="page" id="hidden_page" value="1" />
        <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="idProducts" />
    </div>
</div>

@endsection('centar')

@section('javascript')
@parent
    <script type="text/javascript" src="{{asset('js/project.js')}}"></script>
@endsection('javascript')
