@extends('user.layouts.master')
@php $companyName = "Quran Talent" @endphp
@section('title')
    Programs
@endsection


@section('content')

    @include('component/socialList')
    @include('user.homepage.navbar')
    @include('user.homepage.our-courses')
    @include('user.homepage.footer')

@endsection