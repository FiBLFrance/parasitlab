@if (isset($type) && $type == 'mail') {{-- mailto --}}

  @include('fragments.boutonMailTo')


@elseif (isset($type) && $type == 'link') {{-- lien externe --}}

  <a class="btn {{$couleur ?? 'btn-bleu'}} {{ $taille ?? "" }}" href="{{ $lien }}" target="{{$target ?? '_blank'}}" >

    <i class="{{ $fa ?? '' }}"></i>

    {{ $intitule }}

    &nbsp&nbsp&nbsp<i class="{{ $fa2 ?? '' }}"></i>

  </a>

@elseif (isset($type) && $type == 'route') {{-- lien interne --}}

  <a class="btn {{$couleur ?? 'btn-bleu'}} {{ $taille ?? "" }}" href="{{ route( $route ) }}">

    <i class="{{ $fa ?? '' }}"></i>

    {{ $intitule }}

    &nbsp&nbsp&nbsp<i class="{{ $fa2 ?? '' }}"></i>


  </a>

@elseif (isset($type) && $type == 'phone') {{-- faux bouton --}}

  <div class="btn {{$couleur ?? 'btn-bleu'}} {{ $taille ?? "" }}">

    <i class="{{ $fa ?? ''}}"></i>

    {{ $intitule }}

    &nbsp&nbsp&nbsp<i class="{{ $fa2 ?? '' }}"></i>

  </div>

@else



@endif