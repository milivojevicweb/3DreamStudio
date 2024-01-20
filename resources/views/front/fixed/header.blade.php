<header>
    <div class="wrapper">
        <div id="headerContainer">
            <div id="logo">
                <a href="{{url('/')}}"><img src="{{asset('images/logo2.png')}}" alt="logo" /></a>
            </div>
            <div id="headerNav">
                <div id="hamburger">
                    <div class="hamburger "></div>
                    <div class="hamburger "></div>
                    <div class="hamburger "></div>
                </div>

                <ul id="headerLinks" class="topnav">
                    <li {{ request()->is('/') ? 'class=active' : '' }} ><a target="_self" rel="follow" class="cool-link" href="{{url('/')}}">POČETNA</a></li>
                    <li {{ request()->is('projekti') ? 'class=active' : '' }}><a target="_self" rel="follow" class="cool-link" href="{{url('/projekti')}}">PROJEKTI</a></li>
                    <li {{ request()->is('kontakt') ? 'class=active' : '' }}><a target="_self" rel="follow" class="cool-link" href="{{url('kontakt')}}">KONTAKT</a></li>
                    @if(!session()->has('user'))
                    <li {{ request()->is('prijava') ? 'class=active' : '' }}><a target="_self" rel="follow" class="cool-link" href="{{url('/prijava')}}">PRIJAVA</a></li>
                    @else
                    <li>
                        <a target="_self" rel="follow" class="cool-link " href="{{url('/admin')}}">{{ substr(session()->get("user")->name, 0, 1); }}. {{ substr(session()->get("user")->lastName, 0, 1); }}. <i class="fa fa-user-circle"></i></a>
                    </li>
                    <li>
                        <a target="_self" rel="follow" class="cool-link" href="{{url('/odjava')}}">Odjava</a>
                    </li>
                    @endif
                    {{-- <li><a href="facebook.com"><i class="fa fa-facebook-official"></i></a><a href="instagram.com"><i class="fa fa-instagram"></i></a></li> --}}
                </ul>

                <div id="myNav" class="overlayBox">
                    <div class="closebtn">&times;</div>
                    <div class="overlay-content">
                        <ul id="hiddenUl">
                            <li {{ request()->is('/') ? 'class=active' : '' }} ><a class="cool-link" href="{{url('/')}}">POČETNA</a></li>
                            <li {{ request()->is('projekti') ? 'class=active' : '' }}><a class="cool-link" href="{{url('/projekti')}}">PROJEKTI</a></li>
                            <li {{ request()->is('kontakt') ? 'class=active' : '' }}><a class="cool-link" href="{{url('kontakt')}}">KONTAKT</a></li>
                            @if(!session()->has('user'))
                            <li {{ request()->is('prijava') ? 'class=active' : '' }}><a class="cool-link" href="{{url('/prijava')}}">PRIJAVA</a></li>
                            @else
                            <li>
                                <a target="_self" rel="follow" class="cool-link " href="{{url('/admin')}}">{{ substr(session()->get("user")->name, 0, 1); }}. {{ substr(session()->get("user")->lastName, 0, 1); }}. <i class="fa fa-user-circle"></i></a>
                            </li>
                            <li>
                                <a target="_self" rel="follow" class="cool-link" href="{{url('/odjava')}}">Odjava</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
