<ul>
    <li><img class="projectImageTable"src="{{asset('images/'.$item->path)}}" alt="{{$item->alt}}"/></li>
    <li>{{$item->name}}</li>
    <li><a target="_self" rel="follow" class="edit" href={{ url("/admin/project/edit/$item->idProject") }}><i class="fa fa-cog"></i></a></li>
    <li><button class="delete deleteProject" data-idproject={{$item->idProject}}>x</button></li>
</ul>
