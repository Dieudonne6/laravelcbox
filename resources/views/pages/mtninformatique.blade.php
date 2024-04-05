@extends('layout.master')
@section('content')

<section class="section-box">
  <div class="banner-hero banner-breadcrums">
    <div class="container text-center">
      <h1 class="text-heading-2 color-gray-1000 mb-20" _msttexthash="160706" _msthash="36">Maintenance Informatique
    </div>
  </div>
</section>

<section class="section-box mt-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 col-12">
          <h2 class="text-heading-4 color-gray-900 mb-50">CBOX vous permet de vous libérer des contraintes relatives à la gestion quotidienne du parc informatique et de maîtriser les coûts d’exploitation en vous offrant des services de maintenance informatique<br class="d-lg-block d-none"> </h2>
          <div class="text-start mb-25"><span class="tag-1 bg-6 color-green-900">Ce que nous proposons</span></div>
        </div>
      </div>
    </div>
    <div class="container mt-20">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="list-icons">
            <div class="item-icon none-bd"><span class="icon-left"><img src="assets/imgs/page/services/1/icon-support.svg" alt="Agon"></span>
              <h4 class="text-heading-6">AUDIT DIAGNOSTIC OPTIMISATION CONSEIL</h4>
              <p class="text-body-text color-gray-600 mt-15">Nous nous engageons à fournir un travail original de la plus haute qualité et à donner le crédit là où il est dû.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="list-icons">
            <div class="item-icon none-bd"><span class="icon-left"><img src="assets/imgs/page/services/1/icon-web.svg" alt="Agon"></span>
              <h4 class="text-heading-6">DÉPANNAGE HOTLINE INTERVENTION</h4>
              <p class="text-body-text color-gray-600 mt-15">Nous nous engageons à maintenir la stabilité des systèmes, à résoudre les problèmes des utilisateurs et à garantir une expérience informatique fluide pour tous</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="list-icons">
            <div class="item-icon none-bd"><span class="icon-left"><img src="assets/imgs/page/services/1/icon-business.svg" alt="Agon"></span>
              <h4 class="text-heading-6">INSTALLATION FORMATION MATÉRIEL & SOFTAWARE</h4>
              <p class="text-body-text color-gray-500 mt-15">Nous nous engageons de contribuer à l’efficacité opérationnelle, à la satisfaction des utilisateurs et à la stabilité des systèmes.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="list-icons">
            <div class="item-icon none-bd"><span class="icon-left"><img src="assets/imgs/page/services/1/icon-share.svg" alt="Agon"></span>
              <h4 class="text-heading-6">SUIVI EN MAINTENANCE PÉRENNISATION</h4>
              <p class="text-body-text color-gray-500 mt-15">Avec un corpus d’œuvres en pleine croissance,nous veillerons à la pérennité des systèmes, à la satisfaction des utilisateurs et à la continuité des activités.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
 
  <section class="section-box mt-70">
    <div class="container mt-50">
      <h3 class="text-heading-1 text-center mb-10">Choisissez le meilleur plan<br class="d-lg-block d-none"> qui vous convient</h3>
    </div>

    <div class="container mt-20">
      {{-- <div class="text-center block-bill-2 mt-10"><span class="text-lg text-billed">Billed Monthly</span>
        <label class="switch ml-20 mr-20">
          <input id="cb_billed_type" type="checkbox" name="billed_type" onchange="checkBilled()"><span class="slider round"></span>
        </label><span class="text-lg text-billed">Bill Annually</span>
      </div> --}}
      
      <div class="block-pricing block-pricing-2 mt-70">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="row">

              <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                <div class="box-pricing-item hover-up">
                  <div class="box-info-price"><span class="text-heading-3 for-month display-month">27.000 FCFA</span><span class="text-heading-3 for-year">$420</span></div>
                  <div class="line-bd-bottom">
                    <h4 class="text-heading-5 mb-15">BASIC</h4>
                    <p class="text-body-small color-gray-400">par TRIMESTRE</p>
                  </div>
                  <ul class="list-package-feature">
                    <li>1 à 5 PC</li>
                    <li>2 Interventions par Mois</li>
                    <li>Entretien des Postes</li>
                    <li>Antivirus pour les 5 PCs</li>
                    <li>Intervention sur site</li>
                    <li>Support technique 24/7</li>
                  </ul>
                  <div><a class="btn btn-black text-body-lead icon-arrow-right-white" href="{{url('/contratmtn')}}">SOUSCIRE</a></div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                <div class="box-pricing-item active hover-up">
                  <div class="box-info-price"><span class="text-heading-3 for-month display-month">50.000 FCFA</span><span class="text-heading-3 for-year">$1068</span></div>
                  <div class="line-bd-bottom">
                    <h4 class="text-heading-5 mb-15"></h4>
                    <p class="text-body-small color-gray-400">par TRIMESTRE</p>
                  </div>
                  <ul class="list-package-feature">
                    <li>1 à 10 PC</li>
                    <li>3 Interventions par Mois</li>
                    <li>Entretien des Postes</li>
                    <li>Antivirus pour les 10 PCs</li>
                    <li>Intervention sur site</li>
                    <li>Support technique 24/7</li>
                  </ul>
                  <div><a class="btn btn-black text-body-lead icon-arrow-right-white" href="{{url('/contratmtn')}}">SOUSCIRE</a></div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                <div class="box-pricing-item hover-up">
                  <div class="box-info-price"><span class="text-heading-3 for-month display-month">Sur DEVIS</span><span class="text-heading-3 for-year">$1500</span></div>
                  <div class="line-bd-bottom">
                    <h4 class="text-heading-5 mb-15">Personnalisé</h4>
                    <p class="text-body-small color-gray-400">par TRIMESTRE</p>
                  </div>
                  <ul class="list-package-feature">
                    <li>+ 10 PC</li>
                    <li>4 Interventions par Mois</li>
                    <li>Entretien des Postes</li>
                    <li>Antivirus pour les 10 PCs</li>
                    <li>Intervention sur site</li>
                    <li>Support technique 24/7</li>
                  </ul>
                  <div><a class="btn btn-black text-body-lead icon-arrow-right-white" href="{{url('/contratmtn')}}">SOUSCIRE</a></div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection