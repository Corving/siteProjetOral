@extends('base')

@section('title','Réalisation n°2')

@section('content')

    <!-- blog banner area start from here -->
    <section class="single-blog-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="single-blog-banner-wrapper">
                        <h5>Réalisation n°2</h5>
                        <h1>Intégration des nouveaux postes de travail dans l’entreprise</h1>
                        <div class="single-blog-social d-flex align-items-center justify-content-between">
                            <p>15.Janv.2022 . Écrit par Alban Daviré</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--single-blog content area start from here-->
    <div class="single-blog-full-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="post-thumb">
                        <img src="/assets/img/projets/maintenance.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="post-full-content">
                        <p class="title-content mb-5">Pour chaque nouveau postes, on devait suivre une procédure. Tout
                            d'abord on faisait un point avec l'utilisateur afin de déterminer ses besoins (logiciels,
                            imprimante, VPN)
                            <br>
                            Nous avions une fiche de suivi pour chaque nouvel ordinateur, dessus nous cochions les
                            logiciels à installer, et les différentes étapes effectuées afin de suivre la progression de
                            la mise en place.
                            <br>
                            Lors de la réception de l’ordinateur, je mettais à jour Windows 10 ensuite j’intégrais
                            l'ordinateur dans le domaine.</p>

                        <div class="col-lg-10 mt-25">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/domaine.png" alt="interface glpi">
                            </div>
                        </div>

                        <p class="text-justify">
                            Puis j’installais l'antivirus utilisé par CEMA TECHNOLOGIES (Trend micro).
                            <br>
                            <br>
                            Ensuite j’installais les logiciels nécessaires ainsi que les drivers pour les imprimantes
                            que l'utilisateur avait besoin.
                            <br>
                            <br>
                            Une fois l’ordinateur préparé, on enregistre l’ordinateur dans l’inventaire de GLPI.
                        </p>

                        <h2 class="mb-2">Conclusion Réalisation n°2</h2>
                        <p class="text-justify">Suivre une procédure de mise en place m’a permis d’avoir de la rigueur,
                            de communiquer avec l’utilisateur pour connaitre ses besoins et y répondre au mieux.</p>

                        <h2 class="mb-2">Compétences cochées</h2>
                        <ul>
                            <li>Gérer le patrimoine informatique</li>
                            <li>Répondre aux incidents et aux demandes d’assistance et d’évolution</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
