@extends('layouts.admin')

@section('adminCentar')
<div class="tabcontent" id="addProduct">
    <div class="menuText form">
        <form method="POST" action="{{url('/admin/project/edit/updateProject')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <ul class="contactForm adminProduct marginForm">
            <li><img id="productImageEdt"src="{{asset('images/'.$project->path)}}" alt="{{$project->alt}}"/></li>
            <li>
                    <input type="hidden" name="idSkriveno" />
                    <button class="buttonImageAdmin inputForm" type="button" onclick="document.getElementById('profilePhotoEdit').click()" class="dugmeFile">Ažuriraj sliku</button>
                    <span id="profilePhotoValue"></span>
                    <input class="prod" type="file" name="image" id="profilePhotoEdit"  style="display:none;" onchange="document.getElementById('profilePhotoValue').innerHTML=this.value;"/>
                </li>
                <li><input type="hidden" name="id" value={{$project->idProject}}></li>
                <li><input type="text" name="name"  id="projectName"  value="{{$project->name}}" /></li>
                <li><textarea id="projectText" name="text">{{$project->text}}</textarea></li>
                <li><button name="editProject" id="submit" class="buttonImageAdmin inputForm"type="submit">Potvrdi</button></li>

                @isset($errors)
                @foreach($errors->all() as $error)
                <li><div class="message messageVer2 messageError">
                    {{ $error }}
                </div></li>
                @endforeach
                @endisset

                @if(session()->has('message'))
                    <li><div class="message messageVer2">
                        {{ session('message') }}
                    </div></li>

                @endif

            </ul>
        </form>
    </div>
</div>



@endsection

@section('javascript')
@parent
    <script type="text/javascript" src="{{asset('js/adminValidation/project.js')}}"></script>
@endsection('javascript')
