@extends('base')

@section('title','Réalisation n°6')

@section('content')

    <!-- blog banner area start from here -->
    <section class="single-blog-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="single-blog-banner-wrapper">
                        <h5>Réalisation n°6</h5>
                        <h1>Fiche Client</h1>
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
                        <img src="/assets/img/projets/code.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="post-full-content">
                        <h2>Cahier des charges</h2>
                        <p class="title-content mb-5">Une fois la demande d’évolution accepté et attribuée à un
                            développeur, un mantis est créé.
                            Ce mantis correspond à notre cahier des charges.</p>

                        <div class="col-lg-10 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/cachierChargeMantis.png" alt="cahier des charges">
                            </div>
                        </div>

                        <p class="text-justify">
                            Je devais ajouter un champ dans le formulaire de création d’un client. Ce champ devait
                            contenir le nom de l’utilisateur ayant créé la fiche client. Si la fiche client a été créée
                            en statut publique alors le nom de l’utilisateur s’inscrit dans le champ : « Créateur
                            publique ». Si la fiche client a été créée en statut privée alors le nom de l’utilisateur ce
                            met dans le champ : « Créateur privée ».
                        </p>
                        <h2>Code</h2>

                        <div class="col-lg-6 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/sqlProjet6.png" alt="requête SQL">
                            </div>
                        </div>

                        <p class="text-justify">J’ai créé 2 règles de gestion. La première règle (ci-dessous) est pour
                            le champ « Créateur Publique ». Une seconde règle de gestion est pour le champ « Créateur
                            Privé ».</p>

                        <div class="col-lg-10 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/codeJava.png" alt="code Java">
                            </div>
                        </div>

                        <p class="text-justify">La méthode <u>isPublicNew()</u>, permet de savoir si oui ou non la fiche
                            client
                            est publique. Une autre fonction identique permet de savoir si c’est une fiche privée.
                            <br>
                            <br>
                            Le plus dur pour moi a été d’ajouter la valeur dans le champ. Pour ce faire il a fallu
                            modifier le champ « CREATEUR_PUBLIQUE » avec la méthode <u>setField()</u>, ce champ contient
                            le nom
                            de l’utilisateur. Une fois la valeur modifiée, on ajoute notre colonne dans l’objet
                            <u>‘listColsModif‘</u>.


                        </p>
                        <h2>Résultat</h2>
                        <p class="text-justify">
                            J’ai fait plusieurs teste afin de vérifier que mes scripts fonctionnaient correctement.
                        </p>
                        <div class="col-lg-10 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/resultatProjet6.png" alt="résultat">
                            </div>
                        </div>


                        <p class="text-justify">
                            Un fois la demande d’évolution faite, j’ai mis à jour le mantis, je l’ai réattribué au chef projet concerné, et j’ai mis le statut ‘A tester en DEV ‘ sur le mantis.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="post-full-content">
                        <h2 class="mb-2">Conclusion Réalisation n°1</h2>
                        <p class="text-justify">Cette méthode de travail m’a permis d’être mieux structuré afin de travailler en harmonie avec les autres développeurs.</p>

                        <h2 class="mb-2">Compétences cochées</h2>
                        <ul>
                            <li>Répondre aux incidents et aux demandes d’assistance et d’évolution</li>
                            <li>Travailler en mode projet</li>
                            <li>Mettre à disposition des utilisateurs un service informatique</li>
                            <li>Développer la présence en ligne de l’organisation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
