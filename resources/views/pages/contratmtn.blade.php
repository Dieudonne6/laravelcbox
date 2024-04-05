@extends('layout.master')
@section('content')

<section class="section-box">
    <div class="banner-hero banner-breadcrums">
      <div class="container text-center">
        <h1 class="text-heading-2 color-gray-1000 mb-20" _msttexthash="160706" _msthash="36">Mon contrat de maintenance
      </div>
    </div>
</section>

<section class="section-box">

    <div class="container mb-20 mt-140">
        <div class="bdrd-58 box-gray-100 icon-wave">
            <div class="row">
                <div class="col-lg-12 mb-60">
                    <h2 class="text-heading-3 color-gray-900 mt-10">Vous avez un projet en tête ?</h2>
                    <p class="text-body-text color-gray-600 mt-20">Le bon geste au bon moment permet d’économiser votre
                        investissement.<br class="d-lg-block d-none"> Vivez le rêve d’agrandir votre entreprise.</p>
                </div>



                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" value=""
                                    placeholder="Nom">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" value=""
                                    placeholder="Prénoms">
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" value=""
                                    placeholder="E-mail">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" value=""
                                    placeholder="Nom de la structure">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" value=""
                                    placeholder="Numéros de téléphone">
                            </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group">
                             
                                  <select class="form-select">
                                    <option selected> Choisissez votre types de contrat </option>
                                     <option value="BASIC">BASIC</option>
                                     <option value="BASIC">PRO</option>
                                     <option value="BASIC">PERSONNALISÉ</option>
                                  </select>

                          </div>
                      </div>

                        <div class="col-lg-12 mt-15">
                            <button class="btn btn-black icon-arrow-right-white mr-40 mb-20" type="submit">Soumettre
                                </button><br class="d-lg-none d-block">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection