@extends('layout.master')
@section('content')
    <section class="section-box">
        <div class="banner-hero banner-breadcrums">
            <div class="container text-center">
                <h1 class="text-heading-2 color-gray-1000 mb-20">Site web</h1>
                {{-- <p class="text-body-text color-gray-500">Nous connaitre d'avantage.</p> --}}
            </div>
        </div>
    </section>

    <section class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-1 col-12"></div>
                <div class="col-lg-8 col-sm-10 col-12 text-center mt-100">
                    <h2 class="titleabout color-gray-700">Solutions web pour les professionnels</h2>
                    <p class="soustitleabout color-gray-600 mt-20">Notre agence vous propose un accompagnement complet<br>
                        du début de votre projet jusqu'a sa fin.
                    </p>
                </div>
                <div class="col-lg-2 col-sm-1 col-12"></div>
            </div>
        </div>

    </section>


    <section class="section-box mt-60">

        <div class="container mt-20">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="list-icons">
                        <div class="item-icon none-bd"><span class="icon-left"><img
                                    src="assets/imgs/page/services/1/icon-support.svg" alt="Agon"></span>
                            <h4 class="text-heading-6">Création de site vitrine</h4>
                            <p class="text-body-text color-gray-600 mt-15">La formule légère et responsive de présentation
                                en une page de l’activité de la TPE, PME ou association.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="list-icons">
                        <div class="item-icon none-bd"><span class="icon-left"><img
                                    src="assets/imgs/page/services/1/icon-web.svg" alt="Agon"></span>
                            <h4 class="text-heading-6">Création de sites catalogue</h4>
                            <p class="text-body-text color-gray-600 mt-15">Les sites catalogue que nous créons permettent
                                une présentation élaborée de l’entreprise, en quelques pages .</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="list-icons">
                        <div class="item-icon none-bd"><span class="icon-left"><img
                                    src="assets/imgs/page/services/1/icon-business.svg" alt="Agon"></span>
                            <h4 class="text-heading-6">Création de sites e-commerce</h4>
                            <p class="text-body-text color-gray-500 mt-15">Formule la plus complète, le site e-commerce
                                permet à l’entreprise d’encaisser les paiements directement depuis le site internet.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="list-icons">
                        <div class="item-icon none-bd"><span class="icon-left"><img
                                    src="assets/imgs/page/services/1/icon-support.svg" alt="Agon"></span>
                            <h4 class="text-heading-6">Référencement Adwords</h4>
                            <p class="text-body-text color-gray-600 mt-15">Le référencement payant Google Adwords permet aux
                                professionnels d’acquérir très rapidement une visibilité en haut de page.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="list-icons">
                        <div class="item-icon none-bd"><span class="icon-left"><img
                                    src="assets/imgs/page/services/1/icon-web.svg" alt="Agon"></span>
                            <h4 class="text-heading-6">Référencement Naturel</h4>
                            <p class="text-body-text color-gray-600 mt-15">Être visible sur les moteurs de recherche est une
                                étape naturellement indispensable pour une communication web réussie.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="list-icons">
                        <div class="item-icon none-bd"><span class="icon-left"><img
                                    src="assets/imgs/page/services/1/icon-business.svg" alt="Agon"></span>
                            <h4 class="text-heading-6"> Identité / Web design</h4>
                            <p class="text-body-text color-gray-500 mt-15">Nous créons l’identité visuelle de votre
                                entreprise grâce dans un style épuré à fort impact qui nous est propre.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="section-box bg-1">
        <div class="container mt-70 mb-70">
            <div class="row">
                <div class="col-lg-6 col-sm-12 block-img-we-do"><img class="bdrd-16 img-responsive"
                        src="assets/imgs/page/about/3/gif.gif" alt="reseaux"></div>
                <div class="col-lg-6 col-sm-12 block-we-do">
                    <h3 class="text-heading-4 mt-30">C BOX L’ AGENCE A VOTRE SERVICE</h3>
                    <p class="soustitlesiteweb color-gray-200 mt-10" style="text-align: justify">Nous sommes une équipe dédiée
                        à la communication digitale des professionnels de l’hexagone. Nous accompagnons chaque année
                        plusieurs dizaines de TPE, PME, associations et institutions à développer leur notoriété et leur
                        visibilité en ligne au moyen d’outils performants et innovants. Toujours à la pointe de l’actualité
                        de l’internet et de ses technologies, nous publions régulièrement des conseils web à destination des
                        professionnels sur notre blog.
                    </p>
                    {{-- <div class="line-bd-green mt-50"></div> --}}

                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-box mt-10">

        <div class="container mt-20">

            <div class="block-pricing block-pricing-2 mt-70">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="box-pricing-item hover-up">
                                    <div>
                                        <h4 class="text-heading-5 mb-15">Réflexion stratégique</h4>
                                        <p class="text-body-small color-gray-600">Lors de la phase de conception, nous
                                            travaillons avec vous afin de créer l'outil le plus efficient possible.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="box-pricing-item hover-up">
                                    <div>
                                        <h4 class="text-heading-5 mb-15">Design & Esthétique </h4>
                                        <p class="text-body-small color-gray-600">Etant donné que les utilisateurs veulent
                                            des applications agréables à utiliser. Nous en faisons notre priorité</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="box-pricing-item hover-up">
                                    <div>
                                        <h4 class="text-heading-5 mb-15">Conception réactive</h4>
                                        <p class="text-body-small color-gray-600">Toutes nos applications sont nativement
                                            optimisées pour tous types d'écrans : du smartphone à la TV. </p>
                                    </div>

                                </div>
                            </div>


                            <div class="col-xl-3 col-lg-6 col-md-6 wow animate__animated animate__fadeIn"
                                data-wow-delay=".1s">
                                <div class="box-pricing-item hover-up">
                                    <div>
                                        <h4 class="text-heading-5 mb-15">
                                            Déploiement et maintenance </h4>
                                        <p class="text-body-small color-gray-600">Une fois le projet terminé, nous restons à
                                            vos côtés pour vous former à l'utilisation et assurer une transition efficace.
                                        </p>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
