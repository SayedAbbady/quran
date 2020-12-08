@php $companyName = "Quran Talent" @endphp
@extends('user.layouts.master')
@section('title')
  {{$companyName}}
@endsection

@section('btnup') 
@include('component/upBtn')
@include('component/socialList')
@endsection

@section('homePage')

{{-- Navbar --}}
@include('user.homepage.navbar')
{{-- Navbar --}}


{{-- home slider --}}

<section class="homesilder text-center">
  <div class="overllay"></div>
  <div class="container welcome-slide">
    <div class="row">
      <div class="col-12">
        <h1 class="mainFont bold">Learn Quran Online With <span>{{$companyName}}</span></h1>
        <p class="">Welcome to {{ $companyName }} instutite. to Read more about us and know our plans lets start with us</p>
        <a data-scroll href="#About">
          <button class="btnPrime">
            Start our journey
          </button>
        </a> 
        
      </div>
    </div>
  </div>
  
</section>
{{-- home slider --}}

@include('user.homepage.about-us')

@include('user.homepage.why-us')

@include('user.homepage.priceplan')

@include('user.homepage.book-free-trial')

@include('user.homepage.our-courses')

@include('user.homepage.contact-us')

@include('user.homepage.footer')


@endsection