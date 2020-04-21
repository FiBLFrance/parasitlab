@extends("layouts.app")

@section('menu')

  @include("extranet.menuExtranet")

@endsection

@section('content')

  <main>

    <noscript>
      <div class="container-fluid alert-secondary">
        <div class="row py-3 justify-content-center">
          <div class="col-md-8 bg-danger p-3 text-white shadow-lg">
            <h4>INFORMATION IMPORTANTE</h4>
            <p>
              Pour accéder à toutes les fonctionnalités de ce site, vous devez activer JavaScript.
            </p>
            <a class="btn btn-bleu" href="https://www.enable-javascript.com/fr/" target="_blank">Plus d'informations</a>.
          </div>
        </div>
      </div>
    </noscript>

    {{-- @include('cookieConsent::index') --}}

    @include('extranet.accueil.accueil_carousel')

    <div class="container-fluid text-center">

      @include('extranet.accueil.accueil_entetes')

      @include('extranet.accueil.accueil_labopresentation')

      <hr class="labo-divider">

      @include('extranet.accueil.accueil_pastilles')

      <hr class="labo-divider">

    </div>

  </main>

@endsection
