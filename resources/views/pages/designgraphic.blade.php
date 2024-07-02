@extends('layout.master')
@section('content')
<section class="section-box">
  <div class="banner-hero banner-breadcrums">
    <div class="container text-center">
      <h1 class="text-heading-2 color-gray-1000 mb-20">
        Design & Graphisme</h1>
      </div>
    </div>
  </section>

  
  <div class="section-box mt-40">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-xl-6 col-lg-6 col-sm-12 block-we-do">
          <h3 class="text-heading-3 mt-20">AUDACIEUSE RENCONTRE BRAVE</h3>
          <p class="color-gray-600 mt-30  mb-30 text-body-excerpt"> Si vous êtes assez audacieux pour faire les choses différemment, vous avez besoin d’une agence suffisamment courageuse pour faire de même. Nous avons fondé la C BOX pour apporter une bouffée d’air frais dans un marché animé. Une petite équipe dédiée qui crée un travail honnête pour des clients honnêtes, des startups aux grands noms, à l’échelle mondiale.</p>
          <a class="btn btn-black text-heading-5 icon-arrow-right-white" href="{{url('/contact')}}">Faire une demande</a>
        </div>
        <div class="col-xl-6 col-lg-6 col-sm-12 mb-30"><img class="bdrd-16 img-responsive" src="assets/imgs/template/design.jpg" alt="C BOX"></div>

      </div>
    </div>
  </div>
  <section class="section-box">
    <div class="container mt-30">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 col-sm-12 block-img-we-do"><img class="bdrd-16 img-responsive" src="assets/imgs/template/4.png" alt="C BOX"></div>
        <div class="col-lg-6 col-sm-12 block-we-do">
          <h3 class="text-heading-1 mt-30">Une identité visuelle unique</h3>
          <p class="text-body-excerpt color-gray-600 mt-30">Lorsque vous travaillez avec nous, vous n’êtes pas simplement un autre nom sur une liste de 100. Vous êtes notre partenaire, notre collaborateur. Et ensemble, nous aiderons votre marque à prendre vie, en utilisant une combinaison soigneusement choisie de marque, d’impression, d’emballage, de formes Web, sociales et physiques pour raconter votre histoire unique.</p>
          <div class="line-bd-green mt-50"></div>
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-12 mt-50">
              <h4 class="text-heading-6">Implémentation de la marque</h4>
              <p class="text-body-excerpt color-gray-600 mt-15 icon-leaf">UX & UI Design</p>
              <p class="text-body-excerpt color-gray-600 mt-15 icon-leaf">Campagnes et contenu</p>

              <p class="text-body-excerpt color-gray-600 mt-15 icon-leaf">Branding de l’environnement</p>

              <p class="text-body-excerpt color-gray-600 mt-15 icon-leaf">Impression et emballage</p>
              <p class="text-body-excerpt color-gray-600 mt-15 icon-leaf"> Tutelle de la marque</p>

            </div>
            <div class="col-lg-6 col-sm-6 col-12 mt-50">
              <h4 class="text-heading-6">Création de marque</h4>
              <p class="text-body-excerpt color-gray-600 mt-15 icon-leaf">Stratégie </p>
              <p class="text-body-excerpt color-gray-600 mt-15 icon-leaf">Dénomination</p>

              <p class="text-body-excerpt color-gray-600 mt-15 icon-leaf">Identité visuelle</p>

              <p class="text-body-excerpt color-gray-600 mt-15 icon-leaf">Messagerie</p>

            </div>
            
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-1 col-12"></div>
        <div class="col-lg-8 col-sm-10 col-12 text-center mt-100">
          <h2 class="text-heading-1 color-gray-900">COMMUNICATION VISUELLE</h2>
        </div>
        <div class="col-lg-2 col-sm-1 col-12"></div>
      </div>
    </div>
    <div class="container mt-70">
      <div class="row">
        <div class="col-lg-4 col-sm-12">
          <div class="card-grid-1 bg-5 bg-business hover-up" style="height: 100%;">
            <div class="grid-1-img"><img src="assets/imgs/page/homepage1/business-strategy.svg" alt="C BOX"></div>
            <h3 class="text-heading-3 mt-20">Affiches</h3>
            <p class="text-body-excerpt mt-20">Création et développement d’affiches, flyers, brochures et dépliants, conçus pour être perçus et compris rapidement par le public, susciter une réaction de sympathie comme révéler l’esprit du temps.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="card-grid-1 bg-9 bg-local hover-up" style="height: 100%;">
            <div class="grid-1-img"><img src="assets/imgs/page/homepage1/local.svg" alt="C BOX"></div>
            <h3 class="text-heading-3 mt-20">Logos</h3>
            <p class="text-body-excerpt mt-20">Création de logos en différentes variantes adaptées à tous supports, comprenant une iconographie ou un symbolisme visuel unique et universel, respectant les spécificités de la marque.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="card-grid-1 bg-2 bg-social hover-up" style="height: 100%;">
            <div class="grid-1-img"><img src="assets/imgs/page/homepage1/social.svg" alt="C BOX"></div>
            <h3 class="text-heading-3 mt-20">Mockup</h3>
            <p class="text-body-excerpt mt-20">C'est une maquette de la future interface web ou mobile. C’est un outil de conception graphique, d’évaluation et de communication visuelle. Elle sert à améliorer l’ergonomie de l’interface et l’expérience utilisateur.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
  