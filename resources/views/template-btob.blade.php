{{--
  Template Name: BtoB Template
--}}

@extends('layouts.app')

@section('content')
  @include('partials.btob.btob-who')
  @include('partials.btob.btob-why')
  @include('partials.btob.btob-services')
  @include('partials.btob.btob-solutions')
  @include('partials.btob.btob-thanks')
  @include('partials.btob.btob-testimonials')
  @include('partials.front-page.front-page-review')
  @include('partials.front-page.front-page-faq')
@endsection
