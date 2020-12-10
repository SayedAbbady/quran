<div class="social-list ">
  
  <div class="list-social-items">
    <div class=" btn-bar-show">
      <i class="fas fa-times"></i>
    {{-- <i class="fas fa-times"></i> --}}
    </div>
      <form method="POST" id="bookTrial" enctype="multipart/form-data">
        
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-row">
          <div class="list-span-title">
            <span class="mb-3 list-title">
              Book Now To Get Free Lesson<br>
            </span>
            All required*
          </div>
          <div class="form-group col-md-6">
            <small class="text-danger errorClass font-weight-bold" id="firstnameErrors"></small>
            <input type="text" name="firstname" class="form-control" placeholder="First name">
          </div>
          <div class="form-group col-md-6">
            <small class="text-danger errorClass font-weight-bold" id="lastnameErrors"></small>
            <input type="text" name="lastname" class="form-control" placeholder="Last name">
          </div>
          <div class="form-group col-md-12">
            <small class="text-danger errorClass font-weight-bold" id="emailErrors"></small>
            <input type="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group col-md-12">
            <small class="text-danger errorClass font-weight-bold" id="phoneErrors"></small>
            <input type="text" class="form-control" placeholder="Phone" name="phone">
          </div>

          <div class="col-12 form-group">
            <small class="text-danger errorClass font-weight-bold" id="genderErrors"></small>
            <select name="gender" id="" class="form-control">
              <option value="">-- Gender* --</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="col-12 form-group">
            <small class="text-danger errorClass font-weight-bold" id="countryErrors"></small>
            <select name="country" id="" class="form-control">
              <option value="">-- SELECT COUNTRY --</option>
              @foreach ($country as $item)
              <option value="{{ $item->name }}">{{ $item->name }}</option>
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