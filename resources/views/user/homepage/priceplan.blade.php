<section class="pricetable" id="price">
  <div class="container">

    <div class="row">
      <div class="col-12 text-center header">
        <p class="mainFont">Online Monthly Fees</p>
        <p class="subtitle text-danger">Get 30% OFF + First week will be Free</p>
      </div>
    </div>
      <div class="owl-carousel">
        @foreach ($plan as $plans)
          @include('user.plans.index')
        @endforeach
    </div>
    <div class="row price-controller">
      <div class="col-12 text-center">
        <p class="subtitle text-danger">Available Payment Methods: PayPal, Debit/Credit Cards, Western Union. </p>
        <span> 
        {{-- All plan prices are in English Pound (GBP) --}}
        </span><br>
        <a href="{{route('userPlan')}}" target="_blank">
          <button class="btnPrime">See all plan</button>
        </a>
      </div>
    </div>
  </div> {{-- container --}}
</section>