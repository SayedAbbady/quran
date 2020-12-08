<div class="social-list ">
  
  <div class="list-social-items">
    <div class=" btn-bar-show">
      <i class="fas fa-times"></i>
    {{-- <i class="fas fa-times"></i> --}}
    </div>
      <form action="{{route('trialbooking')}}" method="POST">
        @csrf
        <div class="form-row">
          <div class="list-span-title">
            <span class="mb-3 list-title">
              Book Now To Get Free Lesson<br>
            </span>
            All required*
          </div>
          <div class="form-group col-md-6">
            {{-- <label>Full name</label> --}}
            <input type="text" name="firstname" class="form-control" placeholder="First name">
          </div>
          <div class="form-group col-md-6">
            {{-- <label>Full name</label> --}}
            <input type="text" name="lastname" class="form-control" placeholder="Last name">
          </div>
          <div class="form-group col-md-12">
            {{-- <label>Email</label> --}}
            <input type="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group col-md-12">
            {{-- <label>Phone</label> --}}
            <input type="text" class="form-control" placeholder="Phone" name="phone">
          </div>
          <div class="col-12 form-group">
            {{-- <label for="">Country</label> --}}
            <select name="country" id="" class="form-control">
              <option value="">-- SELECT COUNTRY --</option>
              @foreach ($country as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
          
        <button type="submit" class="btn-block btnPrime" name="submit">
            Send
          </button>
      </form>
  </div>
</div>