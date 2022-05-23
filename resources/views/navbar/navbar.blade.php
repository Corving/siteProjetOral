
<header class="header-area ">
    <div class="container">
        <div class="header-wrapper d-flex align-items-center justify-content-between">
            <!--header-logo-->
            <div class="header-logo">
                <a href="{{route('home')}}">Oral E4</a>
            </div>
            <!-- menu-bar -->
            <div class="menu-bar">
                <ul class="d-flex align-items-center justify-content-between">
                    <li><a href="{{route('home')}}">Accueil</a></li>
                    <li><a href="#">Présentaion des sociétés</a>
                        <ul class="dropdown">
                            <li><a href="{{route('cemaTechnologies')}}">CEMA TECHNOLOGIES</a></li>
                            <li><a href="{{route('groupLdc')}}">Group LDC</a></li>
                            <li><a href="{{route('ldcServices')}}">LDC SERVICE</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Projets</a>
                        <ul class="dropdown">
                            <li><a href="{{route('projet1')}}">Projet 1 : Maintenance du parc informatique</a></li>
                            <li><a href="{{route('projet2')}}">Projet 2 : Intégration des nouveaux postes</a></li>
                            <li><a href="{{route('projet3')}}">Projet 3 : Calculer la somme des commandes par affaire</a></li>
                            <li><a href="{{route('projet4')}}">Projet 4 : Transformation de données pour un robot</a></li>
                            <li><a href="{{route('projet5')}}">Projet 5 : Facturation</a></li>
                            <li><a href="{{route('projet6')}}">Projet 6 : Fiche Client</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('remerciements')}}">Remerciements</a></li>

                </ul>
            </div>
            <!-- sign-in area -->
            <div class="sign-in-area">
                <ul class="d-flex align-items-center justify-content-between">
                    <li class="dark-light"><img src="/assets/img/svg/dark-light.svg" alt=""></li>
                    <li>
                        <!--mobile menu icon-->
                        <div class="menu-toggole">
                            <span class="menu-show comon-tab">
                                <img src="/assets/img/svg/toggle.svg" alt="">
                            </span>
                            <span class="menu-close comon-tab">
                                <img src="/assets/img/svg/close.svg" alt="">
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
