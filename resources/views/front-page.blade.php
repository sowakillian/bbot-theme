@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @include('partials.front-page.front-page-header')
  @include('partials.front-page.front-page-map')
  @include('partials.front-page.front-page-cycle')

@endsection
