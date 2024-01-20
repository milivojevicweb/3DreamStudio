<div id="adminPanel">

    <div id="sidebar">
        <ul>
            <li><button  id="kontaktButton" id="defaultOpen" class="tablinks {{ request()->is('/admin') ? active : '' }} "><i class="fa fa-envelope"></i> Poruke <span id="spanContactNumber">{{$contactNumber}}</span></button></li>
            <li class="buttonAdminContact" id="contactAdmin"><a target="_self" rel="follow" href="{{ url('admin/contact')}}"><i class="fa fa-minus"></i> Prikaz</a></li>
            <li class="buttonAdminContact" id="contactAdmin"><a target="_self" rel="follow" href="{{ url('admin/contact/send')}}"><i class="fa fa-minus"></i> Slanje</a></li>
            <li><button  id="ProjectButton" class="{{ request()->is('/admin/project') ? active : '' }}  tablinks"><i class="fa fa-folder-open"></i> Projekti</button></li>
            <li class="buttonAdminProject" id="contactAdmin"><a target="_self" rel="follow" href="{{ url('admin/project')}}"><i class="fa fa-minus"></i> Prikaz</a></li>
            <li class="buttonAdminProject" id="contactAdmin"><a target="_self" rel="follow" href="{{ url('admin/project/insert')}}"><i class="fa fa-minus"></i> Dodavanje</a></li>
            <li><button  id="UserButton" class="tablinks"><i class="fa fa-user"></i> Korisnici</button></li>
            <li class="buttonAdminUser" id="contactAdmin"><a target="_self" rel="follow" href="{{ url('admin/user')}}"><i class="fa fa-minus"></i> Prikaz</a></li>
            <li class="buttonAdminUser" id="contactAdmin"><a target="_self" rel="follow" href="{{ url('admin/user/insert')}}"><i class="fa fa-minus"></i> Dodavanje</a></li>
            <li class="buttonAdminUser" id="contactAdmin"><a target="_self" rel="follow" href="{{ url('admin/user/key')}}"><i class="fa fa-minus"></i> Ključ</a></li>
        </ul>

        <div id="sidebarLogo">
            <img src="{{ asset('images/footerLogoBlack.png')}}" alt="Marko Milivojevic" />
        </div>
    </div>
