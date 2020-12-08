@extends('user.layouts.master')
@php $companyName = "Quran Talent" @endphp
@section('title')
    Book Trial
@endsection

@section('content')
  
    @include('user.homepage.navbar')
    <section class="contact-us" id="contact-us">
  <div class="container">
    <h1 class="mainFont"> Book Now to Get Free Session</h1>
    <div class="row contact-items">
      <div class="col-lg-6 info-contect">
        <h1>{{$companyName}} Institute</h1>
        <h2>
          Learn quran online with<span> {{$companyName}} institute </span>all night and day parties
          our support team is available 24/7. contact us <span>NOW</span> by click on your available method
        </h2>
        <div class="social-media-links">
          <a class="" href="https://www.facebook.com/Quran-talent-114690510398608" target="_blank">
            <span>
            <i class="fab fa-facebook fa-fw"></i>
              {{$companyName}} </span>
          </a>

          <a class="" href="https://api.whatsapp.com/send?phone=00201033452819">
            <span>
            <i class="fab fa-whatsapp fa-fw"></i>
              +2 0103 345 2819</span>
          </a>

          <a class="" href="mailto:hr@qurantalent.com">
            <i class="far fa-envelope fa-fw"></i>
            <span>hr@qurantalent.com</span>
          </a>

          <a href="https://www.google.com/maps/place/Giza,+El+Omraniya,+Giza+Governorate/@30.0167698,31.1196021,12z/data=!3m1!4b1!4m5!3m4!1s0x1458469235579697:0x4e91d61f9878fc52!8m2!3d30.0130557!4d31.2088526" target="_blank">
            <i class="fas fa-directions "></i>
            <span>Direction</span>
          </a>
          
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110550.39964803508!2d31.119602918545084!3d30.0167697565721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458469235579697%3A0x4e91d61f9878fc52!2sGiza%2C%20El%20Omraniya%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1603216248356!5m2!1sen!2seg" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="col-lg-6">
        <form method="POST" class="form-group row" action="{{route('trialbooking')}}">
          @csrf
          <p>Please Use The Form Below:</p>
          {{$state??''}}
          <div class="col-6">

            <input type="text"    class="form-mine" name="firstname" placeholder="First name*">
          </div>
          <div class="col-6">
            <input type="text"    class="form-mine" name="lastname" placeholder="Last name*">
          </div>
          <div class="col-12"> 
            <input type="email"    class="form-mine" name="email" placeholder="Email*">
          </div>
          <div class="col-12">
            <input type="text"    class="form-mine" name="phone" placeholder="Phone*">
          </div>
          <div class="col-12">
            <select name="gender" id="" class="form-mine">
              <option value="">-- Gender* --</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <div class="col-12">
            <select name="country" id="" class="form-mine">
              <option value="">-- SELECT COUNTRY* --</option>
              @foreach ($country as $item)
              <option value="{{ $item->name }}">{{ $item->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12">
            <select name="plan" id="" class="form-mine">
              <option value="">-- SELECT Plan --</option>
              @foreach ($plan as $item)
              <option value="{{ $item->p_title.' => '. $item->p_subtitle.' => '.$item->p_price}}">{{ $item->p_title.' => '. $item->p_subtitle .' => '.$item->p_price}} $</option>
              @endforeach
            </select>
          </div>
          <div class="col-12">
            <textarea name="comment" id="" rows="3" class="form-mine" placeholder="Additional Comments (optional)"></textarea>
          </div>
          <div class="col-12">

            <div class="text-right">
              <input type="submit"  class="btnPrime" name="submit">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

    @include('user.homepage.footer')

@endsection