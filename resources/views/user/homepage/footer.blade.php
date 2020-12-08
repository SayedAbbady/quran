<footer class="mainFooter">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6 col-12">
        <p class="h5">{{$companyName ?? ''}} Institute</p>
        <p>institute is pleased to offer online courses to teach the Holy Quran, Arabic language and Islamic studies to you.</p>
        <div class="">
          <i class="fa fa-map-marker-alt fa-fw" aria-hidden="true"></i>
          Haram Giza - Egypt
        </div>
        <div class="my-2">
          <i class="fa fa-phone fa-fw" aria-hidden="true"></i>
          [002] 0103 345 2819
        </div>
        <div class="">
          <i class="fa fa-envelope fa-fw" aria-hidden="true"></i>
          hr@qurantalent.com
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-12">
        <p class="h5">My account</p>
        <ul class="list-unstyled">
          <li>
            <p>My account</p>
          </li>
          <li>
            <p>Contact</p>
          </li>
          <li>
            <p>FQA</p>
          </li>
          <li>
            <p>Portfolio</p>
          </li>
          <li>
            <p>checkout</p>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <p class="h5">Product</p>
        <ul class="list-unstyled">
          <li>
            <p>About us</p>
          </li>
          <li>
            {{-- <p>Blog</p> --}}
          </li>
          <li>
            <p>Contact</p>
          </li>
          <li>
            <p>services</p>
          </li>
          <li>
            <p>Portfolio</p>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <p class="h5">Follow us</p>
        <div class="row" >
          <div class="col-6">
            <ul class="list-unstyled">
              <span>
                <a class="" style="color: #fff" href="https://www.facebook.com/Quran-talent-114690510398608" target="_blank">
                  <i class="fab fa-facebook-f fa-fw" aria-hidden="true"></i> 
                {{-- <span>
                <i class="fab fa-facebook fa-fw"></i>
                  {{$companyName ?? ''}} </span> --}}
                  Facebook
              </a>
              </span>
              <br>
              <span>
                <a class="" style="color: #fff" href="mailto:hr@qurantalent.com">
                  <i class="fab fa-google fa-fw" aria-hidden="true"></i> Mail
                </a>
              </span>
              <br>
              <span>
                <a class="" style="color: #fff" href="https://api.whatsapp.com/send?phone=201015665071">
                  <i class="fab fa-whatsapp fa-fw"></i>
                    Whatsapp
                </a>
              </span>
            </ul>
          </div>
          
          <div class="col-12">
            <p class="h5">Payment Method</p>
            <i class="fab fa-cc-mastercard fa-2x" aria-hidden="true"></i>
            <i class="fab fa-paypal fa-2x" aria-hidden="true"></i>
            <i class="fab fa-cc-visa fa-2x" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
    <div class="text-center Copy">
      <a class="inline-block mr-4">Home</a>
      <a class="inline-block mr-4">search</a>
      <a class="inline-block mr-4">contact</a>
      <a class="inline-block mr-4">search</a>
      <a class="inline-block mr-4">advance</a>
      <a class="inline-block mr-4">about</a>
      <a class="inline-block mr-4" href="{{route('admin')}}">admin</a>
      <p class="mt-2">&copy; 2020
        <a href="#">{{$companyName ?? ''}} Institute</a>
      </p>
    </div>
  </div>
  <!--Container-->
</footer>