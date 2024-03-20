@extends('layout.master')
@section('content')
    <section class="section-box">
        <div class="banner-hero banner-breadcrums">
            <div class="container text-center">
                <h1 class="text-heading-2 color-gray-1000 mb-20">Contactez-nous</h1>
                <p class="text-body-text color-gray-500"> Trouvez sur cette page, toutes les informations nécessaires <br
                        class="d-lg-block d-none"> pour entrer en contact avec nous.</p>
            </div>
        </div>
    </section>

    <section class="section-box">

        <div class="container mb-20 mt-140">
            <div class="bdrd-58 box-gray-100 icon-wave">
                <div class="row">
                    <div class="col-lg-12 mb-60"><span class="text-body-capitalized text-uppercase">Contactez-nous</span>
                        <h2 class="text-heading-3 color-gray-900 mt-10">Vous avez un projet en tête ?</h2>
                        <p class="text-body-text color-gray-600 mt-20">Le bon geste au bon moment permet d’économiser votre
                            investissement.<br class="d-lg-block d-none"> Vivez le rêve d’agrandir votre entreprise.</p>
                    </div>

                    <div class="col-lg-4 mb-40">
                        <h4 class="text-heading-6 color-gray-900 icon-home mb-10 mt-10">C BOX SARL</h4>
                        <p class="text-body-text color-gray-600">IIot 903 "F" Quartier St jean Ggèdiga, <br>Cotonou, Bénin.
                        </p>
                        <p class="text-body-text color-gray-600">(+229) 21 60 31 79</p>
                        <p class="text-body-text color-gray-600">(+229) 97 79 17 17</p>
                        <p class="text-body-text color-gray-600">contact@cbox.bj</p>
                    </div>

                    <div class="col-lg-8">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" value=""
                                        placeholder="Votre adresse e-mail">
                                </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                  <input class="form-control" type="text" value=""
                                      placeholder="Votre entreprise (Optionelle)">
                              </div>
                          </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Saisissez votre message..."></textarea>
                                </div>
                            </div>


                            <div class="col-lg-12 mt-15">
                                <button class="btn btn-black icon-arrow-right-white mr-40 mb-20" type="submit">Envoyer le
                                    message</button><br class="d-lg-none d-block">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.199566613794!2d2.411977873880765!3d6.368214293621936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023556d3d51c7ff%3A0x5c7df9596f60791d!2sC%20BOX%20Sarl!5e0!3m2!1sfr!2sbj!4v1710935252482!5m2!1sfr!2sbj"
            width="100%" height="400" style="border:0; margin-top: 40px" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
