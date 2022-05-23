@extends('base')

@section('title','Réalisation n°1')

@section('content')

    <!-- blog banner area start from here -->
    <section class="single-blog-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="single-blog-banner-wrapper">
                        <h5>Réalisation n°1</h5>
                        <h1>Maintenance du parc informatique</h1>
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
                        <p class="title-content mb-5">Pendant toute ma durée de formation chez CEMA TECHNOLOGIES, j'ai
                            fait
                            de la maintenance et de l'assistance informatique.
                            Quand un utilisateur avait un besoin ou avait un problème sur son matériel informatique, je
                            devais faire le nécessaire pour que le problème soit résolu dans les plus brefs délais.
                            Afin d'y répondre le plus rapidement possible, nous utilisons 'GLPI' pour enregistrer la
                            demande d'intervention pour suivre l'évolution de celle-ci.</p>

                        <div class="col-lg-10 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/interfaceGLPI.png" alt="interface glpi">
                                <p class="text-center">Voici l'interface de GLPI pour faire un ticket</p>
                            </div>
                        </div>

                        <p class="text-justify">
                            Les demandes d'interventions sont variées, je suis déjà intervenu pour :
                        <ul>
                            <li>Changer les piles d'une souris</li>
                            <li>Installer une imprimante</li>
                            <li>Mettre en raccourci les lecteurs réseaux</li>
                            <li>Paramétrer le VPN sur le poste de l'utilisateur (pour le télétravail)</li>
                        </ul>
                        </p>

                        <div class="col-lg-5 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/windowsUpdate.png" alt="interface glpi">
                            </div>
                        </div>
                        <p class="text-justify mt-5">De plus, sur chaque poste je vérifiais qu'il n'y ait pas de
                            mise à jour à effectuer.
                            Pour ce faire il suffit de sélectionner le menu Démarrer => Paramètres => Mise à
                            jour et
                            sécurité => Windows Update
                        </p>
                        <p class="text-justify mb-10">
                            Certaine demande d'intervention pouvait être très vague : "L’ordinateur est lent".
                            Pour cela il était nécessaire de faire un diagnostic. Nous procédions toujours de la même
                            manière, on vérifiait que Windows est à jour car celui-ci peut causer des problèmes de
                            lenteur. Vérification aussi dans le gestionnaire des tâches qu’aucune application ne tourne
                            en arrière-plan qui exploite ainsi toutes les ressources de l’ordinateur et si oui, je
                            mettais fin à celle-ci. 85% du temps en faisant c’est 2 étapes le problème était résolu.
                        </p>
                        <div class="col-lg-8 mt-20">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/gestionnaireTache.png" alt="gestionnaire des tâches">
                            </div>
                        </div>

                        <p class="text-justify mt-auto">Voici un exemple de gestionnaire de tâche ou l'on utilise toutes
                            les ressources du CPU.
                            On constate que la cause est celle de "Google Chrome".</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="post-full-content">
                        <h2 class="mb-2">Conclusion Réalisation n°1</h2>
                        <p class="text-justify">Ce projet m’a permis d’apprendre à rechercher et diagnostiquer, de plus
                            communiquer avec
                            l’utilisateur afin de comprendre son problème. J’ai travaillé avec la qualité pour faire des
                            actions préventives pour réduire les problèmes informatiques. Cela permet de réduire les
                            taux de non-conformité pour l’entreprise. Avant de travailler chez CEMA TECHNOLOGIES, je ne
                            savais pas qu’il y avait des actions de ce genre.</p>

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
