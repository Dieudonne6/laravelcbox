
@extends('layout.master')
@section('content')
<section class="section-box">
  <div class="banner-hero banner-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mt-50">
          <h1 class="text-display-3 mt-30">
            Propulsez <span  class="color-green-900">vos activités</span> avec nos offres</h1>
          <p class="text-body-lead-large color-gray-500 mt-40 pr-40">Vous êtes une startup, une Entreprise, nous vous offrons des services de qualités, et adaptés à vos besoins.</p>
          <div class="mt-40">
            <a class="btn btn-black icon-arrow-right-white" href="{{url('/contact')}}">Contactez-nous</a>
            <a class="btn btn-link icon-arrow-right color-gray-900 text-heading-6" href="{{url('/about')}}">En savoir plus</a>
          </div>
          <div class="mt-50">
            <div class="row">
              <div class="col-lg-3 col-sm-4 col-4">
                <h3 class="text-heading-4 color-gray-900 mb-15">+<span class="count">4</span></h3>
                <p class="text-body-text-md color-gray-500"> ans d'activités</p>
              </div>
              <div class="col-lg-3 col-sm-4 col-4">
                <h3 class="text-heading-4 color-gray-900 mb-15">+<span class="count">85</span></h3>
                <p class="text-body-text-md color-gray-500">Projects</p>
              </div>
              <div class="col-lg-3 col-sm-4 col-4">
                <h3 class="text-heading-4 color-gray-900 mb-15">+ <span class="count">100</span></h3>
                <p class="text-body-text-md color-gray-500">Clients</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 d-none d-lg-block">
          <div class="banner-imgs">
            <div class="block-1 shape-2"><img src="assets/imgs/template/homecbox1.jpg" alt="Agon"></div>
            <div class="block-2 shape-3"><img src="assets/imgs/page/homepage2/payment.png" alt="Agon"></div>
            <img class="img-responsive shape-1" alt="Agon" src="assets/imgs/page/homepage2/banner.png">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="section-box overflow-visible mt-70 partner">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center"><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="assets/imgs/template/ABERME.png"></a></div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center"><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="assets/imgs/template/BE.jpg"></a></div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center"><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="assets/imgs/template/TCC.png"></a></div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center"><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="assets/imgs/template/anssi.png"></a></div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center"><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="assets/imgs/slider/logo/sample-logo-5.svg"></a></div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center"><a class="item-logo box-hover-shadow hover-up" href="#"><img alt="Agon" src="assets/imgs/slider/logo/sample-logo-6.svg"></a></div>
    </div>
  </div>
</div>
<section class="section-box">
  <div class="container mt-80">
    <div class="row">
      <div class="col-lg-6 col-sm-12 mb-30"><span class="tag-1 bg-6 color-green-900">Votre partenaire digital de confiance</span>
        <h3 class="text-heading-1 mt-30">Pourquoi nous choisir?</h3>
        <p class="text-body-lead-large color-gray-600 mt-30">En choisissant notre entreprise de technologie digitale, vous choisissez l'innovation, l'expertise, la qualité et un partenariat solide axé sur la satisfaction client. Nous sommes là pour vous accompagner dans votre parcours numérique et vous aider à atteindre vos objectifs avec succès.</p>
        <div class="line-bd-green mt-50"></div>
        <div class="row">
          <div class="col-lg-6 col-sm-6 col-12 mt-50">
            <h4 class="text-heading-6 icon-leaf">Notre Engagement</h4>
            <p class="text-body-excerpt color-gray-600 mt-15"> Notre équipe dynamique s'engage à rendre le numérique plus accessible à tous, enrichissant ainsi le quotidien de chaque citoyen.</p>
          </div>
          <div class="col-lg-6 col-sm-6 col-12 mt-50">
            <h4 class="text-heading-6 icon-leaf">Notre Priorité</h4>
            <p class="text-body-excerpt color-gray-600 mt-15">Votre satisfaction est notre priorité. Nous nous engageons à répondre à vos besoins avec des prestations de qualité.
          </div>
          <div class="col-lg-6 col-sm-6 col-12 mt-50">
            <h4 class="text-heading-6 icon-leaf">Qualité et Compétitivité</h4>
            <p class="text-body-excerpt color-gray-600 mt-15">Nous innovons constamment pour offrir des solutions adaptées à vos besoins, alliant qualité et coût compétitif. </p>
          </div>
          <div class="col-lg-6 col-sm-6 col-12 mt-50">
            <h4 class="text-heading-6 icon-leaf">Disponibilité Sans Faille</h4>
            <p class="text-body-excerpt color-gray-600 mt-15">Nous sommes disponibles 24h/24, 7j/7 pour répondre à vos besoins professionnels.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 block-we-do">
        <div class="inner-image"><img class="bdrd-16 img-responsive" src="assets/imgs/page/homepage2/img-built.png" alt="Agon">
          <div class="block-image-bottom"><img class="bdrd-16 img-responsive" src="assets/imgs/page/homepage2/img-built-2.png" alt="Agon"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-box">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-sm-1 col-12"></div>
      <div class="col-lg-8 col-sm-10 col-12 text-center mt-70">
        <h2 class="text-heading-1 color-gray-900">Nos offres de services</h2>
        <p class="text-body-lead-large color-gray-600 mt-20">Nous offrons un service ininterrompu, disponible à tout moment pour répondre à vos besoins, quel que soit le jour ou l'heure.&mdash;  Nous sommes là pour vous...</p>
      </div>
      <div class="col-lg-2 col-sm-1 col-12"></div>
    </div>
  </div>
  <div class="container">
    <div class="text-center mt-90">
      <ul class="nav service-btn" role="tablist">
        <li><a class="btn btn-default btn-bd-green-hover btn-select active" href="#tab-1" data-bs-toggle="tab" role="tab" aria-controls="tab-1" aria-selected="true">Administration Réseau & Système</a></li>
        <li><a class="btn btn-default btn-bd-green-hover btn-select" href="#tab-2" data-bs-toggle="tab" role="tab" aria-controls="tab-2" aria-selected="true">Maintenance</a></li>
        <li><a class="btn btn-default btn-bd-green-hover btn-select" href="#tab-3" data-bs-toggle="tab" role="tab" aria-controls="tab-3" aria-selected="true">Design & Graphisme</a></li>
        <li><a class="btn btn-default btn-bd-green-hover btn-select" href="#tab-4" data-bs-toggle="tab" role="tab" aria-controls="tab-4" aria-selected="true">Energie Renouvelable</a></li>
        <li><a class="btn btn-default btn-bd-green-hover btn-select" href="#tab-5" data-bs-toggle="tab" role="tab" aria-controls="tab-5" aria-selected="true">Vidéosurveillance</a></li>
        <li><a class="btn btn-default btn-bd-green-hover btn-select" href="#tab-6" data-bs-toggle="tab" role="tab" aria-controls="tab-6" aria-selected="true">Commerce</a></li>
        <li><a class="btn btn-default btn-bd-green-hover btn-select" href="#tab-7" data-bs-toggle="tab" role="tab" aria-controls="tab-7" aria-selected="true">Contrôle d'accès & de présence</a></li>
        <li><a class="btn btn-default btn-bd-green-hover btn-select" href="#tab-8" data-bs-toggle="tab" role="tab" aria-controls="tab-8" aria-selected="true">Audit, Conseil & Assistance Informatique</a></li>
        <li><a class="btn btn-default btn-bd-green-hover btn-select" href="#tab-9" data-bs-toggle="tab" role="tab" aria-controls="tab-9" aria-selected="true">Application Web</a></li>
        <li><a class="btn btn-default btn-bd-green-hover btn-select" href="#tab-10" data-bs-toggle="tab" role="tab" aria-controls="tab-10" aria-selected="true">Site Web</a></li>
        <li><a class="btn btn-default btn-bd-green-hover btn-select" href="#tab-11" data-bs-toggle="tab" role="tab" aria-controls="tab-11" aria-selected="true">SEO & Référencement        </a></li>

      </ul>
    </div>
  </div>
  
  <div class="container">
    <div class="tab-content">
      <!-- Start Tab-->
      <div class="tab-pane fade active show" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
        <div class="bg-2 panel-box mt-50">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="box-optimized">
                <h3 class="text-heading-2">Administration Réseau & Système</h3>
                <p class="text-body-excerpt mt-30"> Nous assumons la responsabilité complète de la gestion, de l'amélioration et de l'optimisation de l'ensemble de votre système informatique, y compris l'administration réseau et système. Notre équipe qualifiée et expérimentée est là pour prendre en charge tous les aspects techniques, vous permettant ainsi de vous concentrer sur votre cœur de métier en toute tranquillité d'esprit.</p>
                <div class="mt-40"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Lire plus</a></div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="block-video icon-pattern">
                <img class="img-responsive" src="assets/imgs/page/homepage1/img-1.png" alt="Agon"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End tab-->
      <!-- Start Tab-->
      <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
        <div class="bg-1 panel-box mt-50">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="box-optimized">
                <h3 class="text-heading-2">Maintenance informatique</h3>
                <p class="text-body-excerpt mt-30"> Notre entreprise à pour but d’améliorer vos installations et de vous guider dès le début de vos utilisations. Nous nous positionnons en tant que prestataire ou intermédiaire entre le distributeur souhaité et vous.</p>
                <div class="mt-40"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Lire plus</a></div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="block-video icon-pattern">
                <img class="img-responsive" src="assets/imgs/page/homepage1/img-1-2.jpg" alt="Agon"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End tab-->
      <!-- Start Tab-->
      <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
        <div class="bg-3 panel-box mt-50">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="box-optimized">
                <h3 class="text-heading-2">Design & Graphisme</h3>
                <p class="text-body-excerpt mt-30"> Chez nous, nous mettons à votre disposition une équipe talentueuse spécialisée dans le design et le graphisme pour concrétiser vos projets créatifs. Que ce soit pour la conception d'affiches percutantes, de maquettes pour vos projets web ou de mockups pour vos prototypes d'interface utilisateur, nous sommes là pour vous offrir des solutions sur mesure.</p>
                <div class="mt-40"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Lire plus</a></div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="block-video icon-pattern">
                <img class="img-responsive" src="assets/imgs/page/homepage1/img-1-3.jpg" alt="Agon"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End tab-->
      <!-- Start Tab-->
      <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
        <div class="bg-4 panel-box mt-50">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="box-optimized">
                <h3 class="text-heading-2">Energie Renouvelable</h3>
                <p class="text-body-excerpt mt-30">Nous sommes déterminés à vous accompagner dans votre transition vers les énergies renouvelables. Notre équipe d'experts spécialisés dans l'installation de sources d'énergie renouvelable est là pour vous guider à chaque étape du processus. Que vous envisagiez l'installation de panneaux solaires, d'éoliennes ou d'autres solutions vertes, nous mettons à votre disposition notre expertise pour concevoir et mettre en place un 
                  système adapté à vos besoins spécifiques.</p>
                <div class="mt-40"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Lire plus</a></div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="block-video icon-pattern">
                <img class="img-responsive" src="assets/imgs/page/homepage1/img-1-4.jpg" alt="Agon"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End tab-->
      <!-- Start Tab-->
      <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab-5">
        <div class="bg-5 panel-box mt-50">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="box-optimized">
                <h3 class="text-heading-2">Vidéosurveillance</h3>
                <p class="text-body-excerpt mt-30">Nous sommes spécialisés dans l'installation professionnelle de systèmes de vidéosurveillance pour sécuriser vos biens et assurer la protection de votre espace. Que ce soit pour votre domicile, votre entreprise ou tout autre lieu, notre équipe expérimentée est là pour installer avec précision et fiabilité les appareils de vidéosurveillance nécessaires.</p>
                <div class="mt-40"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Lire plus</a></div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="block-video icon-pattern">
                <img class="img-responsive" src="assets/imgs/page/homepage1/img-1-5.jpg" alt="Agon"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End tab-->
      <!-- Start Tab-->
      <div class="tab-pane fade" id="tab-6" role="tabpanel" aria-labelledby="tab-6">
        <div class="bg-6 panel-box mt-50">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="box-optimized">
                <h3 class="text-heading-2">Commerce</h3>
                <p class="text-body-excerpt mt-30">Dans le domaine du commerce, nous nous engageons à vous accompagner dans le développement et la croissance de votre activité. Que vous soyez une petite entreprise locale ou une grande entreprise internationale, notre équipe expérimentée est là pour vous fournir l'assistance dont vous avez besoin pour prospérer sur le marché.</p>
                <div class="mt-40"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Lire plus</a></div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="block-video icon-pattern">
                <img class="img-responsive" src="assets/imgs/page/homepage1/img-1-6.jpg" alt="Agon"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="tab-7" role="tabpanel" aria-labelledby="tab-7">
        <div class="bg-6 panel-box mt-50">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="box-optimized">
                <h3 class="text-heading-2">Contrôle d'accès & de présence</h3>
                <p class="text-body-excerpt mt-30">Nous mettons à votre disposition notre expertise pour vous accompagner dans la mise en place efficace de solutions de contrôle d'accès et de présence. Que ce soit pour sécuriser vos locaux ou pour gérer efficacement la présence de votre personnel, notre équipe spécialisée est là pour vous fournir les meilleures solutions adaptées à vos besoins spécifiques.</p>
                <div class="mt-40"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Lire plus</a></div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="block-video icon-pattern">
                <img class="img-responsive" src="assets/imgs/page/homepage1/img-1-6.jpg" alt="Agon"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="tab-8" role="tabpanel" aria-labelledby="tab-8">
        <div class="bg-6 panel-box mt-50">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="box-optimized">
                <h3 class="text-heading-2">Audit, Conseil & Assistance Informatique</h3>
                <p class="text-body-excerpt mt-30">Nous offrons des services complets d'audit, de conseil et d'assistance informatique pour évaluer et améliorer la performance de votre système d'information ou de votre organisation. Notre équipe d'experts qualifiés mène une analyse approfondie pour identifier les forces et les faiblesses de votre infrastructure informatique, ainsi que les opportunités d'optimisation.</p>
                <div class="mt-40"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Lire plus</a></div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="block-video icon-pattern">
                <img class="img-responsive" src="assets/imgs/page/homepage1/img-1-6.jpg" alt="Agon"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="tab-9" role="tabpanel" aria-labelledby="tab-9">
        <div class="bg-3 panel-box mt-50">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="box-optimized">
                <h3 class="text-heading-2">Application web</h3>
                <p class="text-body-excerpt mt-30"> Découvrez notre service de conception d'applications web sur mesure, conçues pour répondre précisément à vos besoins sans nécessiter d'installation sur les appareils de vos utilisateurs. Notre équipe spécialisée combine expertise technique et créativité pour créer une application web unique à votre image.</p>
                <div class="mt-40"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Lire plus</a></div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="block-video icon-pattern">
                <img class="img-responsive" src="assets/imgs/page/homepage1/img-1-3.jpg" alt="Agon"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="tab-10" role="tabpanel" aria-labelledby="tab-10">
        <div class="bg-3 panel-box mt-50">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="box-optimized">
                <h3 class="text-heading-2">Site web</h3>
                <p class="text-body-excerpt mt-30">
                  Découvrez notre service de création de site web sur mesure, conçu pour répondre aux besoins spécifiques des professionnels, des PME, des indépendants et des libéraux. Que vous cherchiez à mettre en place un site vitrine pour présenter votre activité ou une plateforme e-commerce pour vendre vos produits en ligne, notre équipe est 
                  là pour vous accompagner à chaque étape du processus</p>
                <div class="mt-40"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Lire plus</a></div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="block-video icon-pattern">
                <img class="img-responsive" src="assets/imgs/page/homepage1/img-1-3.jpg" alt="Agon"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="tab-11" role="tabpanel" aria-labelledby="tab-11">
        <div class="bg-3 panel-box mt-50">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="box-optimized">
                <h3 class="text-heading-2">SEO & Référencement </h3>
                <p class="text-body-excerpt mt-30"> Notre service de SEO et référencement est spécialement conçu pour propulser votre présence en ligne vers de nouveaux sommets. Le SEO, ou référencement naturel, consiste à optimiser votre visibilité sur les moteurs de recherche, assurant ainsi une meilleure position dans les résultats de recherche et une plus grande attraction de trafic qualifié vers votre site web ou application.</p>
                <div class="mt-40"><a class="btn btn-default btn-white icon-arrow-right" href="page-service-1.html">Lire plus</a></div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="block-video icon-pattern">
                <img class="img-responsive" src="assets/imgs/page/homepage1/img-1-3.jpg" alt="Agon"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End tab-->
    </div>
  </div>
</section>

@endsection