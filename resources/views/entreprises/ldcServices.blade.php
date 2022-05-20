@extends('base')

@section('title','LDC Services')

@section('content')

    <!-- blog banner area start from here -->
    <section class="single-blog-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="single-blog-banner-wrapper">
                        <h5>LDC Services</h5>
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
                        <img src="/assets/img/projets/entreprises.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="post-full-content">
                        <h2>Présentation</h2>
                        <p class="title-content mb-5">LDC SERVICE est actif depuis 8 ans. L’entreprise s’est spécialisée
                            dans le secteur d’activité du conseil en systèmes et logiciels informatiques. Son effectif
                            est compris entre 100 et 199 salariés.
                        </p>
                        <h2>Localisation</h2>
                        <div class="col-lg-10 mt-15">
                            <div class="single-post-thumb">
                                <p class="mb-5">LDC SERVICE se situe à SABLE-SUR-SARTHE (72300), près des locaux de
                                    LDC.</p>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10058.871937442627!2d-0.3115314793309023!3d47.82708675975386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48083fb723b1b4f7%3A0xf95deac3d0d76cab!2sLDC%2C%20ZI%2C%20Rue%20Saint-Laurent%2C%2072300%20Sabl%C3%A9-sur-Sarthe!5e1!3m2!1sfr!2sfr!4v1652636129363!5m2!1sfr!2sfr"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <h2>Organigrammes</h2>
                        <p class="text-justify">Organigramme du service informatique :</p>
                        <div class="col-lg-10 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/orgaldc.PNG" alt="organigramme LDC">
                                <p class="text-justify">Mon responsable de service, Julien GRELIER, est aussi mon tuteur</p>
                            </div>
                        </div>
                        <p>Organigramme du service informatique :</p>
                        <div class="col-lg-10 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/orgaServicesLDC.PNG" alt="organigramme LDC">
                            </div>
                        </div>



                        <h2>Applications</h2>
                        <p class="text-justify">Le logiciel principal de LDC Service est « ARCADIA ». Cette application
                            regroupe tous les
                            métiers que nous pouvons retrouver chez LDC. Ces applications permettent de faire
                            fonctionner LDC.</p>
                        <div class="col-lg-10 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/appli.PNG" alt="organigramme LDC">
                                <p>Sur le schéma ci-dessus, les applications gérées en interne sont en bleu claire</p>
                            </div>
                        </div>

                        <p>Voilà un schéma récapitulant l’organisation des logiciels au sein de l’entreprise :</p>
                        <div class="col-lg-6 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/srcShémaAppli.PNG" alt="organigramme LDC">
                                <p>Sur le schéma ci-dessus, les applications gérées en interne sont en bleu claire</p>
                            </div>
                        </div>


                        <h2>Environnement de développement</h2>
                        <p class="text-justify">LDC Service possède ces logiciels en trois exemplaires, chacun sur un
                            serveur différent, pour éviter les erreurs en production. Il y a un serveur de DEV, de COP,
                            et de PROD. En plus de cela, d’autres serveurs de test ont été mis en place, les LAB,
                            utilisés pour des tests spécifiques. Voici un schéma vous illustrant le procédé utilisé par
                            l’entreprise LDC Service pour mettre à jour ces logiciels internes</p>
                        <div class="col-lg-9 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/dev.PNG" alt="organigramme LDC">
                            </div>
                        </div>


                        <h2>Demande dévolution</h2>
                        <p class="text-justify">
                            Pour chaque demande d’évolution, LDC à mis en place un processus qui permet de recueillir
                            toutes les demandes, Les chefs projets mettent un statut à toutes les demandes permettant de
                            connaitre leur priorité. Ainsi, les demandes les plus urgentes seront traitées en premier.
                        </p>
                        <div class="col-lg-10 mt-5">
                            <div class="single-post-thumb">
                                <img src="/assets/img/projets/schemaEvolution.PNG" alt="schema demande d'evolution">
                                <p class="text-center">Voici un schéma qui représente tout le process d’une demande d’évolution.</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
