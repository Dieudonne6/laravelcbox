@extends('layout.master')
@section('content')

<section class="section-box">
    <div class="banner-hero banner-breadcrums">
      <div class="container text-center">
        <h1 class="text-heading-2 color-gray-1000 mb-20" _msttexthash="160706" _msthash="36">Commerce</h1>
      </div>
    </div>
</section>

<div class="section-box mt-90">
    <div class="container text-center">
      <h2 class="titleabout color-gray-700">Quel commerce faisons-nous ?</h2>
      <div class="row"></div>
    
          <p class="text-body-lead-large color-gray-600 mt-20">Tous les appareils intelligents, électroniques ou logiciels dont vous avez besoin sont prêts à être découverts. Allons-y!</p>
    
    </div>
    <div class="container mt-70">
      <div class="row">
        <div class="col-xl-4 col-lg-3 col-md-2 col-sm-6 col-12">
          <div class="category-grid-3 hover-up">
            <div class="category-img"><a href="#"><img src="assets/imgs/page/shop1/pc.svg" alt="C BOX"></a></div>
            <h4 class="text-heading-5 mb-5">Desktop PC</h4>
            <p class="text-body-text color-gray-500">Vente d'ordinateur de diverses gammes dernières générations</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-3 col-md-2 col-sm-6 col-12">
          <div class="category-grid-3 hover-up">
            <div class="category-img"><a href="#"><img src="assets/imgs/page/shop1/printer.svg" alt="C BOX"></a></div>
            <h4 class="text-heading-5 mb-5">Imprimantes</h4>
            <p class="text-body-text color-gray-500">Hautes performances , dernières générations et compatibles bluetooth</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-3 col-md-2 col-sm-6 col-12">
          <div class="category-grid-3 hover-up">
            <div class="category-img"><a href="#"><img src="assets/imgs/page/shop1/scan.svg" alt="C BOX"></a></div>
            <h4 class="text-heading-5 mb-5">Scanneur</h4>
            <p class="text-body-text color-gray-500">Hautes performances , dernières générations et compatibles wifi</p>
          </div>
        </div>
        </div>


        <div class="row"></div>
        <p class="text-body-lead-large color-gray-600 mt-20 text-center">Et bien plus encore ! Il suffit juste de nous contacter</p>

      </div>
    </div>
  </div>
  


  <div class="col-lg-7 text-end"><a class="btn btn-default hover-up icon-arrow-right mt-20" href="{{url('/contact')}}">Contactez-nous</a></div>

@endsection