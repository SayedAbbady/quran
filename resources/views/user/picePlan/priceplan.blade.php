@extends('user.layouts.master')
@php $companyName = "Quran Talent" @endphp
@section('title')
    Prising plans
@endsection

@section('content')

    @include('user.homepage.navbar')
    

    <section class="pricetable" id="price">
      <div class="container">

        <div class="row">
          <div class="col-12 text-center header">
            <p class="mainFont">Online Monthly Fee</p>
            <p class="subtitle text-danger">Get 30% OFF + First week will be Free</p>
          </div>
        </div>
          <div class="row">
            @foreach ($plan as $plans)
            <div class="col-md-4">
              @include('user.plans.index')
            </div>
            @endforeach
        </div>
        <div class="row price-controller">
          <div class="col-12 text-center">
            <p class="subtitle text-danger">Available Payment Methods: PayPal, Debit/Credit Cards, Western Union. </p>
            <span> 
            {{-- All plan prices are in English Pound (GBP) --}}
            </span><br>
            
          </div>
        </div>
      </div> {{-- container --}}
    </section>


    @include('user.homepage.footer')

@endsection

