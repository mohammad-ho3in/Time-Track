<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ثبت نام</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/all.min.css" />
</head>
<body>
  
</body>
</html>
  <section class="container mt-5 shadow py-3">
    <form action="{{ route('register') }}" method="POST" class="row">
      @csrf
      <h4>ثبت نام</h4>
      <div class="dropdown-divider"></div>
      <div class="mb-3 col-sm-6 col-12">
        <label for="firstName" class="form-label">نام</label>
        <input type="text" class="form-control form-control-sm" id="firstName" placeholder="نام" name="first_name" value="{{ old('first_name') }}">
        @error('first_name')
          <label class="bg-danger text-center d-block rounded text-white mt-1">{{ $message }}</label>
        @enderror        
      </div>
      <div class="mb-3 col-sm-6 col-12">
        <label for="lastName" class="form-label">نام خانوادگی</label>
        <input type="text" class="form-control form-control-sm" id="lastName" placeholder="نام خانوادگی" name="last_name" value="{{ old('last_name') }}">
        @error('last_name')
          <label class="bg-danger text-center d-block rounded text-white mt-1">{{ $message }}</label>
        @enderror 
      </div>
      <div class="mb-3 col-sm-6 col-12">
        <label for="job" class="form-label">شغل</label>
        <input type="text" class="form-control form-control-sm" id="job" placeholder="شغل" name="job" value="{{ old('job') }}">
        @error('job')
          <label class="bg-danger text-center d-block rounded text-white mt-1">{{ $message }}</label>
        @enderror 
      </div>
      <div class="mb-3 col-sm-6 col-12">
        <label for="nationalCode" class="form-label">کدملی</label>
        <input type="text" class="form-control form-control-sm" id="nationalCode" placeholder="کدملی" name="national_code" value="{{ old('national_code') }}">
        @error('national_code')
          <label class="bg-danger text-center d-block rounded text-white mt-1">{{ $message }}</label>
        @enderror 
      </div>
      <div class="mb-3 col-12">
        <label for="email" class="form-label">ایمیل</label>
        <input type="email" class="form-control form-control-sm" id="email" placeholder="ایمیل" name="email" value="{{ old('email') }}">
        @error('email')
          <label class="bg-danger text-center d-block rounded text-white mt-1">{{ $message }}</label>
        @enderror 
      </div>
      <div class="mb-3 col-sm-6 col-12">
        <label for="password" class="form-label">رمزعبور</label>
        <input type="password" class="form-control form-control-sm" id="password" placeholder="رمزعبور" name="password">
        @error('password')
          <label class="bg-danger text-center d-block rounded text-white mt-1">{{ $message }}</label>
        @enderror 
      </div>
      <div class="mb-3 col-sm-6 col-12">
        <label for="password_confirmation" class="form-label">تکرار رمزعبور</label>
        <input type="password" class="form-control form-control-sm" id="password_confirmation" placeholder="تکرار رمزعبور" name="password_confirmation">
        @error('password_confirmation')
          <label class="bg-danger text-center d-block rounded text-white mt-1">{{ $message }}</label>
        @enderror
      </div>
      <div class="mb-3 col-12">
        <button type="submit" class="btn btn-sm  btn-info">
          <i class="fa fa-registered ms-2"></i>ثبت نام
        </button>
        <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary">
          <i class="fa fa-unlock ms-2"></i>ورود
        </a>
      </div>
    </form>
  </section>