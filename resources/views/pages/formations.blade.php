@extends('layout.master')
@section('content')
<section class="section-box">
  <div class="banner-hero banner-breadcrums">
    <div class="container text-center">
      <h1 class="text-heading-2 color-gray-1000 mb-20">Formations</h1>
      <p class="text-body-text color-gray-500">Nos differentes formation.</p>
    </div>
  </div>
</section>
<section class="section-box">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-sm-1 col-12"></div>
      <div class="col-lg-8 col-sm-10 col-12 text-center mt-100">
          <h2 class="titleabout color-gray-700">Nos formation</h2>
          <p class="soustitleabout color-gray-600 mt-20">Les differentes formations que nous proposons.</p>
      </div>
      <div class="col-lg-2 col-sm-1 col-12"></div>
  </div>
  </div>
  <div class="container mt-90">
    <div class="row">
      <div class="col-lg-4 col-sm-12 pr-30">
        <div class="grid-4-img"><a><img src="assets/imgs/page/homepage1/wordpress800x600.jpg" alt="Agon" style="border-radius: 8px"></a></div>
        <div class="card-grid-style-4  mt-8"><a class="text-heading-6" style="color: #cf171e;">conception de site wordpress</a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 pr-30">
        <div class="grid-4-img"><a><img src="assets/imgs/page/homepage1/laravel800x600.jpg" alt="Agon" style="border-radius: 8px"></a></div>
        <div class="card-grid-style-4  mt-8"><a class="text-heading-6" style="color: #cf171e;">Formation en Laravel</a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 pr-30">
        <div class="grid-4-img"><a><img src="assets/imgs/page/homepage1/maintenance800x600.jpg" alt="Agon" style="border-radius: 8px"></a></div>
        <div class="card-grid-style-4  mt-8"><a class="text-heading-6" style="color: #cf171e;">
          Formation en électronique et maintenance
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- <section class="section-box">
  <div class="container mt-120">
    <div class="bg-2 bdrd-58 pattern-white pb-60">
      <div class="row">
        <div class="col-lg-2 col-sm-1 col-12"></div>
        <div class="col-lg-8 col-sm-10 col-12 text-center mt-70">
          <h2 class="text-heading-1 color-gray-900">What We Offer</h2>
          <p class="text-body-lead-large color-gray-600 mt-20">What makes us different from others? We give holistic solutions with strategy, design &amp; technology.</p>
        </div>
        <div class="col-lg-2 col-sm-1 col-12"></div>
      </div>
      <div class="container mt-70">
        <div class="box-swiper">
          <div class="swiper-container swiper-group-3">
            <div class="swiper-wrapper pb-70 pt-5">
              <div class="swiper-slide">
                <div class="card-grid-style-2 hover-up">
                  <div class="grid-2-img"><img src="assets/imgs/page/homepage1/market.svg" alt="Agon"></div>
                  <h3 class="text-heading-5 mt-20">Market research</h3>
                  <p class="text-body-text color-gray-600 mt-20">One make creepeth, man bearing theira firmament.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card-grid-style-2 hover-up">
                  <div class="grid-2-img"><img src="assets/imgs/page/homepage1/consulting.svg" alt="Agon"></div>
                  <h3 class="text-heading-5 mt-20">Strategic Consulting</h3>
                  <p class="text-body-text color-gray-600 mt-20">One make creepeth, man bearing theira firmament.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card-grid-style-2 hover-up">
                  <div class="grid-2-img"><img src="assets/imgs/page/homepage1/cognity.svg" alt="Agon"></div>
                  <h3 class="text-heading-5 mt-20">Cognitive Solution</h3>
                  <p class="text-body-text color-gray-600 mt-20">One make creepeth, man bearing theira firmament.</p>
                </div>
              </div>
            </div>
            <div class="swiper-pagination swiper-pagination3"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
@endsection