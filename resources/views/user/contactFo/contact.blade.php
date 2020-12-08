@extends('user.layouts.master')
@php $companyName = "Quran Talent" @endphp
@section('title')
    Contact us
@endsection

@section('content')

    @include('user.homepage.navbar')
    @include('user.homepage.contact-us')
    @include('user.homepage.footer')

@endsection