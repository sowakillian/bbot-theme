{{--
  Template Name: Company Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials.company.company-desc')
    @include('partials.company.company-values')
    @include('partials.company.company-team')
@endsection
