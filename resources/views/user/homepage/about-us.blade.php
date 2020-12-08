<section id="About" class="about-us">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        {{-- title --}}
        <h1 class="mainFont mainColor bold">{{$companyName}} instituite</h1>
        <p class="about-desc">{{$companyName}}  institute is pleased to offer online courses to teach the Holy Quran, Arabic language and Islamic studies to you. We hope that we will obtain Allah's approval so that he will enter Heaven by memorizing his book and to teach the correct Islam as we have commanded
          <br><br>
          The {{$companyName}}  institute provides all the courses you need in order to be a Muslim as God said and to obtain the intercession of the Prophet Muhammad.
          if you want to start free session <a href="{{route('book')}}">Click here</a>
        </p>
        <div class="col-12 row">
          <div class="col-md-6">

            <div class="about-contact">
              <img src="{{asset("/assets/img/facebook.svg")}}" alt="">
              <span class="">
                <a class="facebook" href="https://www.facebook.com/Quran-talent-114690510398608" target="_blank">
                   {{$companyName}}
                </a>
              </span>
            </div>
            <div class="about-contact">
              <img src="{{asset("/assets/img/whatsapp.svg")}}" alt="">
              <span class="">
                <a class="whatsapp" href="https://api.whatsapp.com/send?phone=201015665071">
                  +2 0101 566 5071
                </a>
              </span>
            </div>
            
          </div>
          <div class="col-md-6">
            <div class="about-contact">
              <img src="{{asset("/assets/img/gmail.svg")}}" alt="">
              <span class="">
                <a class="google" href="mailto:hr@qurantalent.com">
                  hr@qurantalent.com
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-about">
          <div class="overllay"></div>
          <img src="{{asset("/assets/img/rachid-oucharia-2d1-OSHkHXM-unsplash.jpg")}}" alt="photo">
        </div>
      </div>
    </div>
  </div>
</section>