<div class="project">
    <a target="_self" rel="follow" href="{{url('/projekat/'.$item->idProject)}}">
        <img src="{{asset('images/'.$item->path) }}" alt="{{$item->alt}}" />
        <div class="overlay">
            <div class="imageText"><p>{{Str::limit($item->name,20)}}</p></div>
        </div>
    </a>
</div>
