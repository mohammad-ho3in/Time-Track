<!DOCTYPE html>
<html lang="fa" dir='rtl'>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}"/>
  <title>محمدحسین رشیدی</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/all.min.css" />
  <style>
    .profile-me:hover{
      transform: scale(1.04);
      transition: 0.3s;
    }
    .menu li:hover{
      background: #ffc83d;
      border-radius: 5px
    }
    .dir-ltr{
      direction: ltr;
    }
    .dir-rtl{
      direction: rtl;
    }
  </style>
</head>

<body>
  <header class="bg-warning">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top " id="menu">
      <div class="container-fluid">
        <a class="navbar-brand text-white float-start" href="#">محمدحسین رشیدی</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#about">درباره من</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#skills">مهارت ها</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#education">تحصیلات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#experience">تجربیات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#contact">ارتباطات</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="info mt-3 h-100 pt-5 pb-3">
      <div class="d-flex justify-content-center mb-3">
        <img src="{{ asset('cv/avatar.png') }}" class="img-fluid rounded mt-2 profile-me" width="180rem" alt="">
      </div>
      <h1 class="text-center">محمدحسین رشیدی</h1>
      <h4 class="text-center">توسعه دهنده لاراول</h4>
      <div class=" text-center mt-4">
        <a href="https://www.linkedin.com/in/mohamad-hosein-rashidi-ab869a229"
          class="fa-brands fa-2x fa-linkedin text-decoration-none link-dark"></a>
        <a href="http://github.com/mohammad-ho3in" class="fa-brands fa-2x fa-github text-decoration-none link-dark"></a>
      </div>
      <div class="d-flex justify-content-center mt-2">
        <a href="{{ asset('cv/rusume.pptx') }}" class="btn btn-danger">دانلود رزومه</a>
      </div>
    </div>
  </header>
  <section class="container mt-3">
    <div class="basic-info mx-sm-0 mx-3">
      <h4 class="text-center">اطلاعات پایه</h4>
      <div class="mt-3 information">
        <div class="shadow row  justify-content-end p-2 dir-ltr">
          <div class="col-sm-6 col-12 d-flex justify-content-center" >
            <img src="{{ asset('cv/basic-info.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-sm-6 col-12">
            <div class="d-sm-flex d-flex-none justify-content-between justify-content-row-reverse text-center">
              <p>29 فروردین 1377</p>
              <p class="fw-bold">:تاریخ تولد</p>
            </div>
            <div class="d-sm-flex d-flex-none justify-content-between text-center">
              <p>mhr.pyt@gmail.com</p>
              <p class="fw-bold">:ایمیل</p>
            </div>
            <div class="d-sm-flex d-flex-none justify-content-between text-center">
              <p>+98-903-821-2207</p>
              <p class="fw-bold">:موبایل</p>
            </div>
            <div class="d-sm-flex d-flex-none justify-content-between text-center">
              <p>ایران ، کرمانشاه</p>
              <p class="fw-bold">:آدرس</p>
            </div>
            <div class="d-sm-flex d-flex-none justify-content-between text-center">
              <p>فارسی و انگلیسی</p>
              <p class="fw-bold">:زبان ها</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container mt-4">
    <div class="basic-info mx-sm-0 mx-3">
      <h4 class="text-center">مهارت ها</h4>
      <div class="mt-3 information">
        <div class="shadow row p-2 dir-rtl">
          <div class="col-6 mt-4">
            <h5>لاراول</h5>
            <ul>
              <li>اتصال داده ها</li>
              <li>سازنده کوئری</li>
              <li>مجوزها</li>
              <li>بلید</li>
              <li>لایو وایر</li>
            </ul>
          </div>
          <div class="col-6 mt-4">
            <h5>پی اچ پی</h5>
            <ul>
              <li>شی گرایی</li>
              <li>عبارات با قاعده</li>
            </ul>
          </div>
          <div class="col-6 mt-4">
            <h5>پایگاه داده</h5>
            <ul>
              <li>مای اس کیو ال</li>
              <li>اس کیو ال سرور</li>
            </ul>
          </div>
          <div class="col-6 mt-4">
            <h5>مهارت های جانبی</h5>
            <ul>
              <li>تایپ سریع</li>
              <li>گیت هاب</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container mt-4 mb-4">
    <div class="basic-info mx-sm-0 mx-3 dir-ltr">
      <h4 class="text-center">تحصیلات</h4>
      <div class="mt-3 information">
        <div class="shadow row p-2">
          <div class="col-sm-9 col-12">
            <figure class="text-center">
              <blockquote class="blockquote">
                <p>لیسانس مهندسی نرم افزار</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                دانشگاه فنی کرمانشاه
              </figcaption>
            </figure>
          </div>
          <div class="col-sm-3 col-12 py-2 bg-warning text-center">
            <p>2018 - 2020</p>
            <h5>مدرک کارشناسی</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container mt-4 mb-4">
    <div class="basic-info mx-sm-0 mx-3 dir-ltr">
      <h4 class="text-center">تجربیات</h4>
      <div class="mt-3 information">
        <div class="shadow row p-2 bg-warning text-center">
          <div class="col-12">
            <figure>
              <blockquote class="blockquote text-dark">
                <p>آموزش پی اچ پی پیشرفته</p>
              </blockquote>
              <figcaption class="blockquote-footer text-white">
                ساخت و طراحی پنل ادمین
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="mt-3 information">
        <div class="shadow row p-2 bg-warning text-center">
          <div class="col-12">
            <figure>
              <blockquote class="blockquote text-dark">
                <p>آموزش جامع لاراول تاپ لرن</p>
              </blockquote>
              <figcaption class="blockquote-footer text-white">
                ساخت و طراحی سایت فروشگاهی
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container mt-4 mb-4">
    <div class="basic-info mx-sm-0 mx-3 dir-ltr">
      <h4 class="text-center">ارتباط با من</h4>
      <div class="mt-3 information">
        <form action="#" method="POST" class="shadow row p-2">
          <div class="mb-3 col-sm-6 col-12">
            <label for="firstName" class="form-label col-form-label-sm">نام</label>
            <input type="text" class="form-control form-control-sm" id="firstName" name="first_name" placeholder="نام">
          </div>
          <div class="mb-3 col-sm-6 col-12">
            <label for="lastName" class="form-label col-form-label-sm">نام خانوادگی</label>
            <input type="text" class="form-control form-control-sm" name="last_name" id="lastName" placeholder="نام خانوادگی">
          </div>
          <div class="mb-3 col-sm-6 col-12">
            <label for="email" class="form-label col-form-label-sm">آدرس ایمیل</label>
            <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="آدرس ایمیل">
          </div>
          <div class="mb-3 col-sm-6 col-12">
            <label for="Subject" class="form-label col-form-label-sm">موضوع</label>
            <input type="text" class="form-control form-control-sm" id="Subject" name="Subject" placeholder="موضوع">
          </div>
          <div class="mb-3">
            <label for="ckeditor" class="form-label col-form-label-sm">محتوا</label>
            <textarea name="Content" id="ckeditor"></textarea>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-sm btn-warning">ارسال</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <footer class="container-fluid bg-secondary py-2" >
    <div class="row text-white">
      <div class="col-sm-4 col-12 text-center">
        <div class="d-flex justify-content-center">
          <span class="fw-bold">موبایل</span>
          <i class="fa fa-phone me-2 mt-1 text-warning"></i>
        </div>
        <p><a class="link-light" href="tel:+989038212207">989038212207+</a></p>
      </div>
      <div class="col-sm-4 col-12 text-center">
        <div class="d-flex justify-content-center">
          <span class="fw-bold">تلگرام</span>
          <i class="fa-brands fa-telegram-plane me-2 mt-1 text-warning"></i>
        </div>
        <p><a class="link-light" href="https://t.me/MohamadH_r">MohamadHoseinRashidi</a></p>
      </div>
      <div class="col-sm-4 col-12 text-center">
        <div class="d-flex justify-content-center">
          <span class="fw-bold">ایمیل</span>
          <i class="fa fa-envelope me-2 mt-1 text-warning"></i>
        </div>
        <p><a class="link-light" href="mailto:mhr.pyt@gmail.com">mhr.pyt@gmail.com</a></p>
      </div>
    </div>
    <div class=" text-center my-2">
      <a href="https://www.linkedin.com/in/mohamad-hosein-rashidi-ab869a229"
        class="fa-brands fa-2x fa-linkedin text-decoration-none link-warning ms-3"></a>
      <a href="http://github.com/mohammad-ho3in" class="fa-brands fa-2x fa-github text-decoration-none link-warning me-3"></a>
    </div>
    <h5 class="text-center text-white">محمدحسین رشیدی</h5>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
      ClassicEditor.create( document.querySelector( '#ckeditor' ) )
    </script>
</body>

</html>