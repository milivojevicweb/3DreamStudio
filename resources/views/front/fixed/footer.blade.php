    <footer>
        <div class="wrapper">
            <div id="footerContent">

                <div id="footerImage">
                    <img src="{{asset('images/bigLogo.png')}}" alt="3dream" />
                </div>

                <div id="footerMenu">
                    <ul>
                        <li>Meni</li>
                        <li><a target="_self" rel="follow" href="{{url('/')}}">Početna</a></li>
                        <li><a target="_self" rel="follow" href="{{url('/projekti')}}">Projekti</a></li>
                        <li><a target="_self" rel="follow" href="{{url('/kontakt')}}">Kontakt</a></li>
                        <li><a target="_self" rel="follow" href="{{url('/prijava')}}">Prijava</a></li>
                    </ul>
                </div>

                <div id="footerAbout">
                    <ul>
                        <li>O nama</li>
                        <li>3Dream Studio je kreativna radionica koja se bavi uslugom stampanja 3D modela.</li>
                        <li id="socialMedia">
                            <ul id="socialMediaUl">
                                <li><a href="https://www.instagram.com/3dream.sp/" target="_blank" rel="noopener" ><p class="socialNetworkIconText">Instagram</p><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/3Dream-Studio-104396438729000/" target="_blank" rel="noopener" ><p class="socialNetworkIconText">Facebook</p><i class="fa fa-facebook-square"></i></a></li>
                                <li><iframe title="3Dream Facebook like page" id="facebookButton" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2F3Dream-Studio-104396438729000%2F&width=106px&layout=button&action=like&size=small&share=false&height=65&appId"  scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></li>
                            </ul>
                        </li>
                </div>

                <div id="footerContact">
                    <ul>
                        <li>Kontakt</li>
                        <li><a target="_blank" rel="noopener" href="tel:+381613316727"><i class="fa fa-phone"></i> +381 61 331 67 27</a></li>
                        <li><a target="_blank" rel="noopener" href="tel:+381665160891"><i class="fa fa-phone"></i> +381 66 516 08 91</a></li>
                        <li><a target="_blank" rel="noopener" href="tel:+381601512417"><i class="fa fa-phone"></i> +381 60 151 24 17</a></li>
                        <li><a target="_blank" rel="noopener" href="mailto:3dream.sp@gmail.com"><i class="fa fa-envelope"></i> 3dream.sp@gmail.com</a></li>

                    </ul>
                </div>


            </div>
        </div>

        <div id="secondFooter">
            {{-- <p>Designed by Marko Milivojevic</p> --}}
            <a  href="https://markomilivojevic.net/" target="_blank" rel="noopener" ><img src="{{asset('images/footerLogo.png')}}" alt="Marko Milivojevic"/></a>
        </div>
    </footer>

    <div id="scrollToTop" style=""><i class="scrolColor fa fa-angle-up"></i><div>

    @section('javascript')
    <script type="text/javascript" src="{{asset('js/menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    @show

</body>
</html>
