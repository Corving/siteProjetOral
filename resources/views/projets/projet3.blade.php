@extends('base')

@section('title','Réalisation n°3')

@section('content')

    <!-- blog banner area start from here -->
    <section class="single-blog-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="single-blog-banner-wrapper">
                        <h5>Réalisation n°3</h5>
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
                        <p class="title-content mb-5 text-justify">J’ai été chargé du suivie du bon fonctionnement d’un
                            "CRM".
                            J’avais la charge de faire évoluer celui-ci.
                            <br>
                            <br>
                            Pour cela CEMA TECHNOLOGIES m'avait fait faire une formation basée sur le paramétrage du
                            CRM. La formation était proposée par l'application, elle était en live sur une période de 3
                            jours et cela en anglais.
                            <br>
                            <br>
                            Les demandes d'évolution sont formulées à l’oral pendant une réunion hebdomadaire à laquelle
                            je participais au début puis où j’en étais l’organisateur.
                            <br>
                            <br>
                            Toutes les demandes d’évolutions sont répertoriées dans un fichier excel. J’utilisais
                            teamwok pour planifier les réalisations des demandes d’évolution.
                            <br>
                        <ul class="mb-20">
                            Les demandes des utilisateurs sont souvent :

                            <li class="mt-10">Ajouter ou modifier un champ</li>
                            <li>Création d'un modèle de signature de mail</li>
                            <li>Faire des tableaux</li>
                            <li>Faire des modèles d’exportation en fonction du module (ex : Devis, Commande, Facture).
                            </li>
                        </ul>

                        Pour des questions de confidentialité, je n'ai pas utilisé le compte qu'utilisait CEMA
                        TECHNOLOGIES. J'ai créé un compte avec de fausses informations afin de vous présenter une
                        mission que j'ai pu réaliser.
                        <br>
                        <br>
                        Par défaut, dans une affaire nous n'avons pas la possibilité de visualiser la somme des Devis ou
                        des Commandes. Un utilisateur m’a donc demandé de trouver un moyen de calculer la somme des
                        commandes concernant une affaire et de l'afficher dans la section : « Informations - Affaire ».

                        </p>

                        <div class="col-lg-10 mt-25">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/affaire.png" alt="interface affaire">
                                <p class="text-center">Cet écran de capture nous montre toutes les informations se
                                    trouvant dans la section
                                    « Informations - Affaire »</p>
                            </div>
                        </div>
                        <div class="col-lg-10 mt-25">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/commande.png" alt="fausse commande">
                                <p class="text-center">Pour l'affaire : "King", j'ai créé une fausse commande d'un
                                    montant de 2 042€</p>
                            </div>
                        </div>

                        <p class="text-justify">
                            Pour répondre à cette demande, il fallait ajouter un champ dans le module "Affaire".
                            <br>
                            <br>
                            Pour ajouter les champs dans les modules il faut aller dans Personnalisation -> Modules et
                            Champs -> Affaires
                        </p>
                        <div class="col-lg-10 mt-25">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/affairePara.png" alt="paramétrage module affaire">
                                <p class="text-center">Ceci est la page de personnalisation pour personnaliser la page
                                    de présentation du module "Affaire"</p>
                            </div>
                        </div>

                        <p class="text-justify">
                            Une fois les modifications enregistrées, je vais récupérer les différents noms des champs
                            nécessaires au bon fonctionnement du script. Il faut aller dans : Espace Développeur -> API
                        </p>

                        <div class="col-lg-10 mt-25">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/api.png" alt="nom api">
                                <p class="text-center">Le nom "API" du champ que je viens de créer est :
                                    Total_Commandes</p>
                            </div>
                        </div>

                        <p class="text-justify">
                            Dans l’affaire les commandes sont enregistrées dans la section : « Commandes client ».
                            La section « Commandes client » a pour nom "API" : SalesOrders
                            <br>
                            <br>
                            <br>
                            Pour créer la fonction, il faut aller dans Espace Développeur -> Fonctions
                            J’ai créé une nouvelle fonction en renseignant les champs :
                        </p>

                        <div class="col-lg-8 mt-auto">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/creationRdg.png" alt="nom api">
                                <p class="text-center">Le nom "API" du champ que je viens de créer est :
                                    Total_Commandes</p>
                            </div>
                        </div>

                        <p class="text-justify mb-15">
                            On crée un argument pour récupérer l’ID de notre affaire.
                            Dans mon cas, mon argument sera l'ID de l'affaire
                        </p>
                        <div class="col-lg-8 mt-auto">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/paraRdg.png" alt="nom api">
                                <p class="text-center">Le nom "API" du champ que je viens de créer est :
                                    Total_Commandes</p>
                            </div>
                        </div>

                        <div class="col-lg-8 mt-auto">
                            <div class="single-post-thumb">
                                <p class="mb-2">Voici le script :</p>
                                <img src="/assets/img/projets/scriptZoho.png" alt="nom api">
                                <p class="text-center">Le nom "API" du champ que je viens de créer est :
                                    Total_Commandes</p>
                            </div>
                        </div>
                        <p class="text-justify">
                            Après avoir réalisé la demande de l’utilisateur, une batterie de test a été réalisé de mon
                            côté et avec l’utilisateur qui a demandé cette évolution.
                        </p>

                        <h2 class="mb-2">Conclusion Réalisation n°3</h2>
                        <p class="text-justify">Le plus dure pour moi dans le code ci-dessus, était de récupérer toutes
                            les commandes car je ne savais pas avec quel nom de variable je pouvais récupérer les
                            données et avec quelle méthode. J’ai lu la documentation de Zoho pour les développeurs avec
                            toute les méthodes disponibles et leurs utilités. J’ai appris un nouveau langage
                            (DELUGE).</p>

                        <h2 class="mb-2">Compétences cochées</h2>
                        <ul>
                            <li>Gérer le patrimoine informatique</li>
                            <li>Répondre aux incidents et aux demandes d’assistance et d’évolution</li>
                            <li>Mettre à disposition des utilisateurs un services informatique</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
