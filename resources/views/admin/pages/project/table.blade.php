@extends('layouts.admin')

@section('adminCentar')
<div class="tabcontent" id="Products">

    <div class="adminContainer">
        <ul class="adminHead">
            <li>Slika</li>
            <li>Naziv</li>
            <li>Uredi</li>
            <li>Obriši</li>
        </ul>

        <div class="adminContent" id="projectAdminTable">
            @foreach($project as $item)
            @component("admin.partials.project",["item"=>$item])
                @endcomponent
            @endforeach
        </div>

        <div id="deleteModal" class="messageBox ">

            <div class="messageBoxContent messageDeleteBox">
                    <ul>
                        <li><button class="closeMessageBox closeDelete" type="button">&times;</button></li>
                        <li class="deleteBoxHeader">Da li želite da obrišete?</li>
                        <li class="deleteBothButtons"><button type="button" class="deleteButton deleteButtonProject">Da</button><button type="button" class="noDeleteButton">Ne</button></li>
                        <input type="hidden" id="idDelete" />
                    </ul>
            </div>

        </div>

    </div>

    <div id="pagination">
        <ul class="pagination">
            @for($i=1;$i<=ceil($project->total()/6);$i++)
            <li><a target="_self" rel="follow" @if($i==1) class="activePaginationAdmin activePagination pagProject"@else class="pagProject" @endif href="page={{$i}}">{{$i}}</a></li>
            @endfor
        </ul>
    </div>


    <input type="hidden" name="page" id="hidden_page" value="1" />

</div>
@endsection

