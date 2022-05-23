@extends('base')

@section('title','Réalisation n°5')

@section('content')

    <!-- blog banner area start from here -->
    <section class="single-blog-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="single-blog-banner-wrapper">
                        <h5>Réalisation n°5</h5>
                        <h1>Facturation</h1>
                        <div class="single-blog-social d-flex align-items-center justify-content-between">
                            <p>31.Dec.2020 . Écrit par Alban Daviré</p>
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
                        <p class="title-content mb-5">
                            Zoho CRM peut créer que des factures Pro-forma. Pour créer des factures acquittées, la
                            comptable utilise le logiciel "compta.com".
                            <br>
                            <br>
                            Il n'existe pas de passerelle entre "ZOHO CRM" et "Compta.com", le seul moyen de transférer
                            les données c'est via un fichier au format ".csv". Le logiciel de comptabilité accepte qu'un
                            seul format de données, afin d'éviter trop de modification manuelle, Christophe DUBREIL a
                            créé un programme sur excel via des macros.
                            <br>
                            <br>
                            Christophe DUBREIL, m'a demandé de refaire son programme afin qu'il soit plus simple
                            d'utilisation, plus rapide et aussi qu'il ait une vérification.
                        </p>

                        <div class="col-lg-7 mt-10">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/tableauProjet5.png" alt="tableau demande">
                            </div>
                        </div>

                        <h2>Environnement de travail</h2>

                        <p class="text-justify">
                            Pour pouvoir réaliser ce projet, il me fallait un serveur apache et une base de données.
                            N’ayant pas de serveur dédié, j’ai installé sur mon ordinateur WampServer qui me permettait
                            d’avoir un serveur local avec une base de données.
                            <br>
                            <br>
                            Avant d'écrire du code, j'ai fait plusieurs réunions avec la responsable de la comptabilité
                            afin de définir ses besoins. Elle m’a mis à disposition un rapport créé sur "ZOHO CRM",
                            celui-ci sert de départ, il contient toutes les informations essentielles dont le logiciel
                            de comptabilité à besoin. Le fichier contient des données mises par défaut par zoho lors de
                            l'exportation de celui-ci. De plus le fichier contient des symboles (€), pour importer le
                            fichier dans le logiciel, il va falloir faire des traitements de données.
                            <br>
                            <br>
                            J'ai donc écrit un programme en PHP avec une base de données en MySQL.
                            <br>
                            <br>
                            Ma base de données me sert seulement de mémoire tampon.
                        </p>

                        <div class="col-lg-6 mt-15">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/mcd.png" alt="mcd de la BDD">
                            </div>
                        </div>
                        <p class="text-justify">
                            La table "form", va récupérer les informations du formulaire que j'ai créé. La table
                            "upload" va récupérer l'intégralité du contenu du fichier "ZOHO CRM". La table "modif 1" et
                            "modif 2" sont 2 étapes intermédiaires pour la modification des tables. Quand une valeur est
                            modifiée on la stocke dans une nouvelle table. La table "upbload" permet de garder
                            l'existant. Après chaque utilisation du programme les contenus des tables sont supprimés.
                            <br>
                            <br>
                            Une fois le fichier au format ".csv" récupérer, il faut enregistrer les données dans la base
                            de données. Pour cela j'ai commencé par créer la connexion à base de données.
                        </p>

                        <div class="col-lg-10 mt-15">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/connexionBdd.png" alt="requête connexion">
                            </div>
                        </div>

                        <p class="text-justify">
                            Une fois la connexion établie, il faut importer un fichier depuis l'explorateur Windows.
                            <br>
                            <br>
                            Pour cela on utilise la méthode "$_FILES", cette méthode permet de récupérer le nom du
                            fichier ainsi que son type.
                        </p>

                        <div class="col-lg-7 mt-15">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/codePhp.png" alt="requête connexion">
                            </div>
                        </div>

                        <p class="text-justify">
                            Une fois les données stockées j'ai créé une requête qui permet d'ajouter les données dans la
                            base de données.
                        </p>
                        <div class="col-lg-15 mt-15">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/requeteSqlProjet5.png" alt="requête connexion">
                            </div>
                        </div>

                        <p class="text-justify">
                            Ce bout de code fait une requête SQL pour récupérer les données stockées dans la base de
                            données auquel nous avons besoin, on stocke toutes les données dans une variable "$data".
                            Puis on parcours le tableau afin de créer le fichier CSV.
                        </p>
                        <div class="col-lg-15 mt-15">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/requeteExport.png" alt="requête connexion">
                            </div>
                        </div>

                        <p class="text-justify">
                            J’ai fait une requête sql préparé, ce qui permet de se protéger des personnes malveillantes
                            et d’éviter des injections sql.
                            <br>
                            <br>
                            Pour pouvoir télécharger le nouveau fichier, il y a une vérification qui est faite entre les
                            données en base de données et 2 informations données fournies par l'utilisateur.
                            <br>
                            <br>
                            Les informations données par l'utilisateur sont renseignées via un formulaire et sont
                            stockées dans la table "form". Cela permet à la responsable de la comptabilité de gagner du
                            temps et cela évite de vérifier manuellement.
                            <br>
                            <br>
                            Après avoir fait des teste j'ai constaté une certaine lenteur pour 100 lignes dans le
                            fichier "csv" le traitement avait duré plus de 30 secs, j'ai remodifié mon code ainsi pour
                            100 lignes de code nous sommes plus qu'à 5 - 10 secs. J’ai refait des tests avec la
                            responsable de la comptabilité afin de régler les derniers détails pour que le logiciel de
                            comptabilité accepte le fichier.
                            <br>
                            <br>
                            Afin de faciliter l'installation sur chaque nouveau poste ayant besoin du programme, j'ai
                            créé une procédure d'installation qui détail chaque étape à effectuer. De plus j'ai exporté
                            la structure de la base de données afin de l’importer facilement dans chaque nouveau serveur
                            local.
                            <br>
                            <br>
                            J'ai créé une deuxième procédure qui elle explique comment démarrer le serveur local et
                            accéder au programme. Cette procédure concerne principalement la responsable de la
                            comptabilité.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="post-full-content">
                        <h2 class="mb-2">Conclusion Réalisation n°5</h2>
                        <p class="text-justify">Ce projet m’a permis de faire toutes les étapes d’un projet, de la
                            planification et de la mise en place du projet à la présentation du projet final aux
                            utilisateurs</p>

                        <h2 class="mb-2">Compétences cochées</h2>
                        <ul>
                            <li>Répondre aux incidents et aux demandes d’assistance et d’évolution</li>
                            <li>Travailler en mode projet</li>
                            <li>Mettre à disposition des utilisateurs un service informatique</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
