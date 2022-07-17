<!DOCTYPE html>
<html lang="en" dir='rtl'>

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
  </style>
</head>

<body>
  <header class="bg-warning">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top " id="menu">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">MohammadHossein Rashidi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#about">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#skills">SKILLS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#education">EDUCATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#experience">EXPERIENCE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#contact">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="info mt-3 h-100 pt-5 pb-3">
      <div class="d-flex justify-content-center mb-3">
        <img src="{{ asset('cv/avatar.png') }}" class="img-fluid rounded mt-2 profile-me" width="180rem" alt="">
      </div>
      <h1 class="text-center">Mohammad Hossein Rashidi</h1>
      <h4 class="text-center">LARAVEL DEVELOPER</h4>
      <div class=" text-center mt-4">
        <a href="https://www.linkedin.com/in/mohamad-hosein-rashidi-ab869a229"
          class="fa-brands fa-2x fa-linkedin text-decoration-none link-dark"></a>
        <a href="http://github.com/mohammad-ho3in" class="fa-brands fa-2x fa-github text-decoration-none link-dark"></a>
      </div>
      <div class="d-flex justify-content-center mt-2">
        <a href="{{ asset('cv/rusume.pptx') }}" class="btn btn-danger">Download Resume</a>
      </div>
    </div>
  </header>
  <section class="container mt-3">
    <div class="basic-info mx-sm-0 mx-3">
      <h4 class="text-center">Basic Information</h4>
      <div class="mt-3 information">
        <div class="shadow row p-2" style="direction: ltr;">
          <div class="col-sm-6  col-12">
            <div class="d-sm-flex d-flex-none justify-content-between text-center">
              <p class="fw-bold">BIRTH YEAR:</p>
              <p>April 18, 1998</p>
            </div>
            <div class="d-sm-flex d-flex-none justify-content-between text-center">
              <p class="fw-bold">EMAIL:</p>
              <p>mhr.pyt@gmail.com</p>
            </div>
            <div class="d-sm-flex d-flex-none justify-content-between text-center">
              <p class="fw-bold">PHONE:</p>
              <p>+98-903-821-2207</p>
            </div>
            <div class="d-sm-flex d-flex-none justify-content-between text-center">
              <p class="fw-bold">ADDRESS:</p>
              <p>Iran, Kermanshah</p>
            </div>
            <div class="d-sm-flex d-flex-none justify-content-between text-center">
              <p class="fw-bold">LANGUAGE:</p>
              <p>English, Persian</p>
            </div>
          </div>
          <div class="col-sm-6 col-12 d-flex justify-content-center" >
            <img src="{{ asset('cv/basic-info.png') }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container mt-4">
    <div class="basic-info mx-sm-0 mx-3">
      <h4 class="text-center">Professional Skills</h4>
      <div class="mt-3 information">
        <div class="shadow row p-2" style="direction: ltr;">
          <div class="col-6 mt-4">
            <h5>LARAVEL</h5>
            <ul>
              <li>Data binding</li>
              <li>Query builder</li>
              <li>Authorization</li>
              <li>Blade</li>
              <li>Livewire</li>
            </ul>
          </div>
          <div class="col-6 mt-4">
            <h5>PHP</h5>
            <ul>
              <li>OOP</li>
              <li>Regular Expressions</li>
            </ul>
          </div>
          <div class="col-6 mt-4">
            <h5>Database</h5>
            <ul>
              <li>Mysql</li>
              <li>Sql Server</li>
            </ul>
          </div>
          <div class="col-6 mt-4">
            <h5>Side Skills</h5>
            <ul>
              <li>Fast typing</li>
              <li>Git</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container mt-4 mb-4">
    <div class="basic-info mx-sm-0 mx-3" style="direction: ltr;">
      <h4 class="text-center">Education</h4>
      <div class="mt-3 information">
        <div class="shadow row p-2">
          <div class="col-sm-3 col-12 py-2 bg-warning text-center">
            <p>2018 - 2020</p>
            <h5>Bachelor's Degree</h5>
          </div>
          <div class="col-sm-9 col-12">
            <figure class="text-center">
              <blockquote class="blockquote">
                <p>Bachelor of software engineer</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                TECHNICAL UNIVERSITY OF KERMANSHAH
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container mt-4 mb-4">
    <div class="basic-info mx-sm-0 mx-3" style="direction: ltr;">
      <h4 class="text-center">Experience</h4>
      <div class="mt-3 information">
        <div class="shadow row p-2 bg-warning text-center">
          <div class="col-12">
            <figure>
              <blockquote class="blockquote text-dark">
                <p>Learn PHP Advanced Toplearn</p>
              </blockquote>
              <figcaption class="blockquote-footer text-white">
                CREATE AND DESIGN PANEL ADMIN CREATE
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
                <p>Learn Laravel Toplearn</p>
              </blockquote>
              <figcaption class="blockquote-footer text-white">
                CREATE AND DESIGN SHOP STORE
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container mt-4 mb-4">
    <div class="basic-info mx-sm-0 mx-3" style="direction: ltr;">
      <h4 class="text-center">Contact Me</h4>
      <div class="mt-3 information">
        <form action="#" method="POST" class="shadow row p-2">
          <div class="mb-3 col-sm-6 col-12">
            <label for="firstName" class="form-label col-form-label-sm">First Name</label>
            <input type="text" class="form-control form-control-sm" id="firstName" name="first_name" placeholder="Name">
          </div>
          <div class="mb-3 col-sm-6 col-12">
            <label for="lastName" class="form-label col-form-label-sm">Last Name</label>
            <input type="text" class="form-control form-control-sm" id="lastName" name="last_name" placeholder="Family">
          </div>
          <div class="mb-3 col-sm-6 col-12">
            <label for="email" class="form-label col-form-label-sm">Email</label>
            <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Email">
          </div>
          <div class="mb-3 col-sm-6 col-12">
            <label for="Subject" class="form-label col-form-label-sm">Subject</label>
            <input type="text" class="form-control form-control-sm" id="Subject" name="Subject" placeholder="Subject">
          </div>
          <div class="mb-3">
            <label for="ckeditor" class="form-label col-form-label-sm">Content</label>
            <textarea name="Content" id="ckeditor"></textarea>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-sm btn-warning">Send</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <footer class="container-fluid bg-secondary py-2" >
    <div class="row text-white">
      <div class="col-sm-4 col-12 text-center">
        <div class="d-flex justify-content-center">
          <span class="fw-bold">Phone</span>
          <i class="fa fa-phone me-2 mt-1 text-warning"></i>
        </div>
        <p><a class="link-light" href="tel:+989038212207">989038212207+</a></p>
      </div>
      <div class="col-sm-4 col-12 text-center">
        <div class="d-flex justify-content-center">
          <span class="fw-bold">Telegram</span>
          <i class="fa-brands fa-telegram-plane me-2 mt-1 text-warning"></i>
        </div>
        <p><a class="link-light" href="https://t.me/MohamadH_r">MohamadHoseinRashidi</a></p>
      </div>
      <div class="col-sm-4 col-12 text-center">
        <div class="d-flex justify-content-center">
          <span class="fw-bold">Email</span>
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
    <h5 class="text-center text-white">Mohammad Hossein Rashidi</h5>
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