@extends('base')

@section('title','Réalisation n°4')

@section('content')

    <!-- blog banner area start from here -->
    <section class="single-blog-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="single-blog-banner-wrapper">
                        <h5>Réalisation n°4</h5>
                        <h1>Transformation de données pour un robot</h1>
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
                        <p class="title-content mb-5 text-justify">Pour toute les demandes de développement, c'est à moi
                            de choisir
                            le langage à utiliser<br>
                            <br>
                            Le programme était pour le secteur érosion. Dans ce secteur, les personnes utilisent des
                            machines de mesure tridimensionnelle (MMT). Cette machine retourne des valeurs dans un
                            fichier au format « .dat ». Ces valeurs correspondent aux repères dans l’espace de la pièce
                            mesurer.<br>
                            <br>
                            La machine qui usine à besoin de connaître les valeurs de la pièce dans l'espace. Le
                            logiciel du constructeur de la machine est en cours de développement, celui-ci ne permet pas
                            l'échange des données entre la MMT et la machine. Temporairement le fichier est transféré
                            manuellement par le technicien mais il fallait aussi qu'il modifie les valeurs du fichier.
                            Pour éviter des erreurs humaines j’ai écrit un programme qui répond à cette demande.</p>


                        <div class="col-lg-7 mt-10">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/tableauProjet4.png" alt="interface glpi">
                            </div>
                        </div>

                        <h2>Environnement de travail</h2>

                        <p class="text-justify">
                            Pour pouvoir créer le script, j’ai dû mettre en place mon environnement de travail. Sur
                            l’ordinateur que j’avais à disposition, j’ai installé Python ainsi que Visual Studio Code.
                            VS Code me sert d’éditeur de texte.
                            <br>
                            <br>
                            Le fichier portera toujours le même nom : « existant.dat » et la même structure.
                            <br>
                            <br>
                            <br>
                            Dedans il est toujours composé de 2 blocs distinct :
                        </p>

                        <div class="col-lg_6 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/structureFichier.png" alt="structure fichier texte">
                                <p>Le programme devra de façon automatique, récupérer les valeurs de : offset_x,
                                    offset_y, offset_z et les attribuer à x,y,z. (ex : offset_x = x). De plus pour X et
                                    Z on doit inverser le signe.</p>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="single-post-thumb">
                                <p class="mb-2">J’ai donc créé un script en python.</p>
                                <img src="/assets/img/projets/pythonProjet4Part1.png" alt="script python part 1">
                                <img src="/assets/img/projets/pythonProjet4Part2.png" alt="script python part 2">
                            </div>
                        </div>
                        <p class="text-justify">
                            Une fois le programme réalisé, j’ai fait des tests avec le technicien afin de vérifier si le
                            programme fonctionnait correctement et si les valeurs n’étaient pas erronées. Nous avons
                            programmé à l’avance une journée de test afin de s’organiser.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="post-full-content">
                        <h2 class="mb-2">Conclusion Réalisation n°4</h2>
                        <p class="text-justify">Le plus compliqué a été de trouver la solution pour récupérer la valeur
                            de Offset_x, Offset_y et Offset_z pour les attribuer à x,y et z. J’ai dû chercher une
                            méthode qui permettait de récupérer la valeur de la clé. J’ai trouvé la méthode config parse
                            qui permettait de répondre à mon besoin. Le programme a permis un gain de temps pour le
                            technicien et aussi limiter les erreurs humaines.</p>

                        <h2 class="mb-2">Compétences cochées</h2>
                        <ul>
                            <li>Gérer le patrimoine informatique</li>
                            <li>Répondre aux incidents et aux demandes d’assistance et d’évolution</li>
                            <li>Mettre à disposition des utilisateurs un service informatique</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
