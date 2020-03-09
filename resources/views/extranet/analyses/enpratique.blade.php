@extends('layouts.app')

@extends('extranet.menuExtranet')

@section('content')

  <div class="container-fluid">

    @include('extranet.analyses.sousmenuAnalyses')

    <div class="row my-3 justify-content-end">

      <div class="col-md-10">

        @titre(['icone' => 'enpratique.svg', 'titre' => 'En pratique', 'soustitre' => '(comment prélever & envoyer dans les meilleures conditions)'])

      </div>

    </div>

    <div class="row my-3 justify-content-end">

      <div class="col-md-10">

        <a id="btn_prelever" class="btn btn-lg btn-bleu lead btn_enpratique my-1" href="#"><i class="fab fa-stack-overflow"></i> Comment prélever ?</a>

        <a id="btn_envoyer" class="btn btn-sm btn-rouge lead btn_enpratique my-1" href="#"><i class="far fa-paper-plane"></i> Comment envoyer ?</a>

{{-- PANNEAU DES DEUX ONGLETS --}}
      </div>

      <div class="col-md-10">

        <div class="panneau" id="prelever">

          @include('extranet.analyses.enpratique.prelever')

        </div>

        <div class="panneau" id="envoyer" style="display:none">

          @include('extranet.analyses.enpratique.envoyer')

        </div>

      </div>

    </div>

  </div>

@endsection