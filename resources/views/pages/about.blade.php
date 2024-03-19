@extends('layout.master')
@section('content')
    <section class="section-box">
        <div class="banner-hero banner-breadcrums">
            <div class="container text-center">
                <h1 class="text-heading-2 color-gray-1000 mb-20">A propos</h1>
                <p class="text-body-text color-gray-500">Nous connaitre d'avantage.</p>
            </div>
        </div>
    </section>

    <section class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-1 col-12"></div>
                <div class="col-lg-8 col-sm-10 col-12 text-center mt-100">
                    <h2 class="titleabout color-gray-700">Découvrez CBOX Sarl</h2>
                    <p class="soustitleabout color-gray-600 mt-20">Nous nous engageons à fournir des services de qualité<br>
                        supérieure et une expertise inégalée à nos clients.</p>
                </div>
                <div class="col-lg-2 col-sm-1 col-12"></div>
            </div>
        </div>
        {{-- <div class="container mt-70">
    <div class="row">
      <div class="col-lg-4 col-sm-12">
        <div class="card-grid-1 bg-5 hover-up">
          <div class="grid-1-img"><img src="assets/imgs/page/homepage1/business-strategy.svg" alt="Agon"></div>
          <h3 class="text-heading-3 mt-20">Design &amp; Vreatives</h3>
          <p class="text-body-excerpt mt-20">You are always welcome to visit our little den. Professional in teir craft! All products were super amazing with strong attension to details, comps and overall vibe.</p>
          <div class="mt-30"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Learn more</a></div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="card-grid-1 bg-9 hover-up">
          <div class="grid-1-img"><img src="assets/imgs/page/homepage1/local.svg" alt="Agon"></div>
          <h3 class="text-heading-3 mt-20">Work and travel</h3>
          <p class="text-body-excerpt mt-20">You are always welcome to visit our little den. Professional in teir craft! All products were super amazing with strong attension to details, comps and overall vibe.</p>
          <div class="mt-30"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Learn more</a></div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="card-grid-1 bg-2 hover-up">
          <div class="grid-1-img"><img src="assets/imgs/page/homepage1/social.svg" alt="Agon"></div>
          <h3 class="text-heading-3 mt-20">Smart salary</h3>
          <p class="text-body-excerpt mt-20">You are always welcome to visit our little den. Professional in teir craft! All products were super amazing with strong attension to details, comps and overall vibe.</p>
          <div class="mt-30"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Learn more</a></div>
        </div>
      </div>
    </div>
  </div> --}}
    </section>
    <section class="section-box sectiondecouverte mt-100 pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-12 block-gallery-1">
                    <div class="row">
                        <div class="col-lg-6"><img class="img-responsive mb-10" src="assets/imgs/page/about/2/imgabout1.jpg"
                                alt="Agon"><img class="img-responsive" src="assets/imgs/page/about/2/imgabout9.jpg"
                                alt="Agon"></div>
                        <div class="col-lg-6"><img class="img-responsive" src="assets/imgs/page/about/2/img-1.png"
                                alt="Agon"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-12 block-pl">
                    {{-- <h2 class="text-heading-1 color-white mb-30 mt-20">Our game-changing approach to working together</h2> --}}
                    <p class="textesec1about text-inter-lg"><strong>La société CBOX Sarl</strong> est une société à
                        responsabilité limitée créé le 23
                        Juillet 2021 et officiellement enregistrée à Cotonou sous le numéro IFU : 3202113085279 en Avril
                        2022.
                        Son siège social est situé à Sikèkodji au lot 903″F » Quartier St Jean Gbèdiga, Cotonou-Bénin.
                        {{-- Cette entreprise a vu le jour grâce à l’ingéniosité de son jeune Président Directeur Générale qui a
                        voulu mettre sa polyvalence au service d’une large cible. --}}
                        En effet, à l’issue d’un profond diagnostic des besoins du marché dans les domaines de
                        l’informatique, de la télécommunication, des nouvelles technologies en général, CBOX Sarl
                        a été créé pour proposer des solutions variées à moindre coût, aussi bien aux personnes physiques
                        que morales.Elle offre egalement des formations professionnelles de qualité en adéquation avec les
                        exigences du marché.<br><br>
                        {{-- <ul class="listeul">
                        <li>Conseil en TIC</li>
                        <li>Informatique et Réseaux</li>
                        <li>Design et Graphisme</li>
                        <li>Conception et réalisation de site web</li>
                        <li>Développement d’application web et mobile</li>
                        <li>Électronique avancé</li>
                        <li>Communication</li>
                    </ul> --}}
                    </p>
                    {{-- <div class="mt-30"><a class="btn btn-black text-body-text" href="page-service-2.html">Keep Reading</a></div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-sm-1 col-12"></div>
                <div class="col-lg-10 col-sm-10 col-12 text-center">
                    <h2 class="titleabout mb-10">Services offerts </h2>
                    <p class="soustitleabout color-gray-600 mt-20">Voici quelques services que nous offrons.</p>
                </div>
                <div class="col-lg-1 col-sm-1 col-12"></div>
            </div>
        </div>
        <div class="container mt-40">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="list-icons mt-40 hover-up">
                        <div class="item-icon"><span class="icon-left"><img src="assets/imgs/page/homepage2/iconcolor/icon-acquis.svg"
                                    alt="Agon"></span>
                            <h4 class="text-heading-4">Design et Graphisme</h4>
                            <p class="descriptionservice text-body-text color-gray-600 mt-15">Notre équipe de designers
                                talentueux transforme vos idées en visuels percutants et élégants, répondant à vos besoins
                                en branding, en conception graphique.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="list-icons mt-40 hover-up">
                        <div class="item-icon"><span class="icon-left"><img src="assets/imgs/page/homepage2/iconcolor/icon-active.svg"
                                    alt="Agon"></span>
                            <h4 class="text-heading-4">Conception d'application web</h4>
                            <p class="descriptionservice text-body-text color-gray-600 mt-15">Nous concevons des
                                applications web sur mesure, en accord avec vos besoins spécifiques et vos objectifs
                                commerciaux. De la planification initiale à la mise en œuvre finale.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="list-icons mt-40 hover-up">
                        <div class="item-icon"><span class="icon-left"><img src="assets/imgs/page/homepage2/iconcolor/icon-retent.svg"
                                    alt="Agon"></span>
                            <h4 class="text-heading-4">Conception d'application mobile</h4>
                            <p class="descriptionservice text-body-text color-gray-600 mt-15">Notre expertise en conception
                                d'applications mobiles vous assure des solutions personnalisées, adaptées à vos besoins et à
                                ceux de vos utilisateurs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="list-icons mt-40 hover-up">
                        <div class="item-icon"><span class="icon-left"><img src="assets/imgs/page/homepage2/iconcolor/icon-acquis.svg"
                                    alt="Agon"></span>
                            <h4 class="text-heading-4">Électronique avancé</h4>
                            <p class="descriptionservice text-body-text color-gray-600 mt-15">Nous sommes spécialisés dans
                                le domaine de l'électronique avancée, offrant des solutions innovantes et fiables pour
                                répondre aux défis technologiques les plus complexes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="list-icons mt-40 hover-up">
                        <div class="item-icon"><span class="icon-left"><img src="assets/imgs/page/homepage2/iconcolor/icon-active.svg"
                                    alt="Agon"></span>
                            <h4 class="text-heading-4">Informatique et Réseaux</h4>
                            <p class="descriptionservice text-body-text color-gray-600 mt-15">Nos services en informatique
                                et réseaux englobent une gamme complète de solutions pour répondre à vos
                                besoins informatiques et de connectivité.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="list-icons mt-40 hover-up">
                        <div class="item-icon"><span class="icon-left"><img src="assets/imgs/page/homepage2/iconcolor/icon-retent.svg"
                                    alt="Agon"></span>
                            <h4 class="text-heading-4">Conseil en informatique</h4>
                            <p class="descriptionservice text-body-text color-gray-600 mt-15">Notre service de conseil en
                                informatique vous offre des solutions sur mesure pour optimiser votre infrastructure
                                technologique et atteindre vos objectifs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
