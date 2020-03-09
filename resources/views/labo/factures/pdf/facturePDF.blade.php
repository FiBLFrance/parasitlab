@extends('layouts.facturesPDF')

@section('content')

  <div style="margin-left:280px; border: 1px solid black; padding-left:20px">

    <p class="adresse font-weight-bold mt-1">{{ $facture_completee->user->name }}</p>
    <p class="adresse">{{ $facture_completee->user->eleveur->address_1 }} - {{ $facture_completee->user->eleveur->address_2 }}</p>
    <p class="adresse mb-1">{{ $facture_completee->user->eleveur->cp }} {{ $facture_completee->user->eleveur->commune }}</p>

  </div>

  <p class="font-weight-bold lead">Facture n°{{ $facture_completee->id }} du {{ $facture_completee->faite_date }}</p>

  @foreach ($demandes as $demande)

    <p class="pl-3 color-bleu font-weight-bold">{{ ucfirst($demande->anapack->nom) }} du {{ $demande->date_reception }}</p>

  @endforeach

  @include('labo.factures.facture_detail')

  @if ($facture_completee->payee)

    <p>Facture réglée le {{ $facture_completee->payee_date }}</p>

  @else

    <p>Facture à régler avant le {{ Carbon\Carbon::createFromDate($facture_completee->faite_date)->addMonth()->format('d M Y') }} par chèque à l'ordre du Fibl France ou par virement.</p>

    <p>IBAN: </p>

  @endif

@endsection