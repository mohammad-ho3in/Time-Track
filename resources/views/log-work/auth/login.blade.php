<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>صفحه ورود</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/all.min.css" />
</head>
<body>



  <section class="container mt-5 shadow py-3">
  <form action="{{ route('login') }}" method="POST" class="row">
    @csrf
    <div class="col">
      @if(!$errors->isEmpty())
      <x-alert-message :message="$errors->all()[0]"></x-alert-message>
    @endif
    </div>
    <h4>ورود</h4>
    <div class="dropdown-divider"></div>
    <div class="mb-3 col-12">
      <label for="email" class="form-label">ایمیل</label>
      <div class="input-group">
        <span class="input-group-text rounded-end" id="email">@</span>
        <input type="email" class="form-control form-control-sm text-start" id="email" placeholder="ایمیل" name="email">
      </div>
    </div>
    <div class="mb-3 col-12">
      <label for="password" class="form-label">رمزعبور</label>
      <div class="input-group">
        <span class="input-group-text rounded-end" id="password"><i class="fa fa-lock"></i></span>
        <input type="password" class="form-control form-control-sm" id="password" placeholder="رمزعبور" name="password">
      </div>
    </div>
    <div class="mb-3 col-12">
      <button type="submit" class="btn btn-sm btn-info">
        <i class="fa fa-unlock ms-2"></i>ورود
      </button>
      <a href="{{ route('register') }}" class="btn btn-sm btn-outline-primary">
        <i class="fa fa-registered ms-2"></i>ثبت نام
      </a>
    </div>
  </form>
</section>
</body>
</html>
