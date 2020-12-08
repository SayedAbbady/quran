
        <div class="price-card text-center">
          <header>
            <h3 class="mainFont">{{ $plans->p_title }}</h3>
            <p>{{ $plans->p_subtitle }}</p>
              <div class="price-number">
                <sup>	$</sup>
                <span>{{ $plans->p_price }}</span>
                <div>=</div>
                <sup>	&pound;</sup>
                <span>{{ $plans->p_GBPprice }}</span>
                <sub>/ mo</sub>
              </div>
          </header>
          <div class="items">
            <div class="">
              @php
                  $feature = explode(",",$plans->p_feature)
              @endphp
              @foreach ($feature as $item)   
              <p class="">{!!$item!!}</p>
              @endforeach

            </div>
          </div>
          <div>
            <a href=" {{ route('book',$plans->id)}} ">
              <button class="btnPrime">Register Now</button>
            </a>
          </div>
        </div> {{-- price-card --}}
     