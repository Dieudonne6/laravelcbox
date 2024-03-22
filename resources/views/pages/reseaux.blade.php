@extends('layout.master')
@section('content')
    <section class="section-box">
        <div class="banner-hero banner-breadcrums">
            <div class="container text-center">
                <h1 class="text-heading-2 color-gray-1000 mb-20">Administration Système & Réseau</h1>
                {{-- <p class="text-body-text color-gray-500">Nous connaitre d'avantage.</p> --}}
            </div>
        </div>
    </section>

    <section class="section-box bg-2">
        <div class="container-fluid mt-120">
            {{-- <div class="bg-2 bdrd-58 pattern-white none-pattern pb-60"> --}}
            <div class="bg-2 pattern-white none-pattern pb-60">
                <div class="row">
                    <div class="col-lg-2 col-sm-1 col-12"></div>
                    <div class="col-lg-8 col-sm-10 col-12 text-center mt-70">
                        {{-- <h2 class="text-heading-1 color-gray-900">What We Offer</h2> --}}
                        <p class="soustitleabout color-gray-600 mt-20">La société CBOX spécialisée en administration
                            système et réseau prend en charge la gestion, l’amélioration et l’optimisation de l’ensemble de
                            votre système informatique.</p>
                    </div>
                    <div class="col-lg-2 col-sm-1 col-12"></div>
                </div>
                <div class="container mt-70">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-group-3">
                            <div class="swiper-wrapper pb-70 pt-5">
                                <div class="swiper-slide">
                                    <div class="card-grid-style-2 hover-up">
                                        <div class="grid-2-img"><img src="assets/imgs/page/homepage1/market.svg"
                                                alt="Agon"></div>
                                        <h3 class="text-heading-5 mt-20">
                                            L’installation de votre réseau, sa configuration et son câblage
                                        </h3>
                                        <p class="text-body-text color-gray-600 mt-20">Confiez-nous l'installation et le
                                            câblage de votre réseau pour une connectivité sans faille.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-grid-style-2 hover-up">
                                        <div class="grid-2-img"><img src="assets/imgs/page/homepage1/consulting.svg"
                                                alt="Agon"></div>
                                        <h3 class="text-heading-5 mt-20">
                                            La sécurisation de l’accès aux données d’entreprise
                                        </h3>
                                        <p class="text-body-text color-gray-600 mt-20">Sécurisez l'accès à vos données
                                            d'entreprise avec notre expertise en sécurité informatique.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-grid-style-2 hover-up">
                                        <div class="grid-2-img"><img src="assets/imgs/page/homepage1/cognity.svg"
                                                alt="Agon"></div>
                                        <h3 class="text-heading-5 mt-20">La configuration de votre système et de votre
                                            réseau</h3>
                                        <p class="text-body-text color-gray-600 mt-20">Optimisez votre système et votre
                                            réseau grâce à notre service de configuration professionnel.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-grid-style-2 hover-up">
                                        <div class="grid-2-img"><img src="assets/imgs/page/homepage1/consulting.svg"
                                                alt="Agon"></div>
                                        <h3 class="text-heading-5 mt-20">L’installation des postes de travail dans votre
                                            entreprise</h3>
                                        <p class="text-body-text color-gray-600 mt-20">Facilitez l'installation de vos
                                            postes de travail avec notre service professionnel dédié.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination swiper-pagination3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box bg-1">
        <div class="container mt-120">
            <div class="row">
                <div class="col-lg-6 col-sm-12 block-img-we-do"><img class="bdrd-16 "
                        src="assets/imgs/page/about/3/imagereseaux3.jpg" alt="reseaux" style="height: 80%; width:90%; margin-left:10px"></div>
                <div class="col-lg-6 col-sm-12 block-we-do">
                    <h3 class="text-heading-4 mt-30">L’ADMINISTRATION SYSTÈME ET RÉSEAU ASSURE VOTRE SÉCURITÉ</h3>
                    <p class="soustitlereseaux color-gray-200 mt-30" style="text-align: justify">La société C BOX assure les
                        interventions de maintenance du système informatique pour garantir le bon fonctionnement et
                        l'accessibilité de l'ensemble du réseau à vos salariés. En plus des postes de travail, nous prenons
                        en charge l'installation et la configuration des imprimantes, serveurs, modems, pare-feu, proxy, VPN
                        et connexion internet. Cette approche globale vise à assurer la sécurité de votre infrastructure
                        informatique et à protéger les données sensibles de votre entreprise. Notre expertise en
                        administration système et réseau constitue un rempart essentiel contre les menaces telles que le vol
                        de données, le piratage et les intrusions, renforçant ainsi la sûreté et la stabilité de votre
                        entreprise. De plus, notre équipe spécialisée s'engage à fournir des solutions sur mesure adaptées à
                        vos besoins spécifiques. Nous mettons un point d'honneur à rester à la pointe des dernières avancées
                        technologiques afin d'offrir à nos clients des services de haute qualité et des solutions
                        innovantes.
                    </p>
                    {{-- <div class="line-bd-green mt-50"></div> --}}

                </div>
            </div>
        </div>
    </section>


    <section class="section-box bg-2">
        <div class="container mt-120">
            <div class="row">

                <div class="col-lg-6 col-sm-12 block-we-do">
                    <h3 class="text-heading-4 mt-30">VOTRE SPÉCIALISTE DE L’ADMINISTRATION SYSTÈME ET RÉSEAU</h3>
                    <p class="soustitlereseaux color-gray-200 mt-30" style="text-align: justify">
                        En tant que prestataire en infogérance auprès des TPE et PME, CBOX est le spécialiste de
                        l’administration système et réseau depuis 5 ans. Nos experts en informatique ont pour mission de
                        vous accompagner dans la mise en place et la gestion de votre réseau en réalisant son installation
                        complète et son amélioration continue en fonction de vos objectifs, de votre budget et de vos
                        besoins. Grâce à CBOX, vous disposez d’un interlocuteur unique répondant dans les plus brefs délais
                        à toutes vos demandes de création d’accès aux serveurs, de configuration d’adresse e-mail ou toute
                        autre opération d’administration système et réseau. Nous comprenons l'importance de maintenir la
                        disponibilité et la performance de votre infrastructure informatique, c'est pourquoi nous mettons
                        tout en œuvre pour assurer une gestion proactive et efficace de vos systèmes. En choisissant CBOX,
                        vous optez pour la tranquillité d'esprit en sachant que votre réseau est entre de bonnes mains.
                    </p>
                    {{-- <div class="line-bd-green mt-50"></div> --}}

                </div>

                <div class="col-lg-6 col-sm-12 block-img-we-do"><img class="bdrd-16 "
                        src="assets/imgs/page/about/3/imagereseaux4.jpg" alt="reseaux" style="height: 80%; width:90%; margin-left:10px" >
                </div>
            </div>
        </div>
    </section>
@endsection
