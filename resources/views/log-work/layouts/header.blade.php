<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{ route('home') }}">{{ Auth::user()->first_name .' '.Auth::user()->last_name }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#about">تنظیمات حساب کاربری</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ route('log-work.partner.index') }}">همکاران</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ route('log-work.work.start.index') }}">شروع به کار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#contact">گزارش های هفتگی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#contact">گزارش ماهانه</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger mt-1">خروج</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-2">
        <div class="row d-flex justify-content-between text-center">
            <div class="col-md-6 col-12">
                <a class="fw-bold text-decoration-none digital-clock"></a>
            </div>
            <div class="col-md-6 col-12">
                <a class="fw-bold text-decoration-none">
                    {{ \Morilog\Jalali\Jalalian::forge('today')->format('%Y/%m/%d') }}
                </a>
            </div>
        </div>
    </div>
</header>
