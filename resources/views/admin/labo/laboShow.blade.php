@extends('layouts.app')

@extends('labo.laboMenu')

@section('content')

  <div class="container-fluid">
    <div class="row my-3 ">

      <div class="col-md-8 col-xl-6">

        @include('fragments.breadcrumb', ['liste' => [
          'Utilisateurs' => 'user.index',
          'Laboratoire' => 'laboAdmin.index'
        ]
      ])

      </div>

    </div>

    <div class="row my-3 justify-content-center">

      <div class="col-md-3">

        @include('admin.labo.laboCard')

      </div>

    </div>

  </div>


@endsection
