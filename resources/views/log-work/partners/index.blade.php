@extends('log-work.layouts.master')
@section('title','همکاران')

@section('content')

<section class="container mt-3">
    <h6>لیست همکاران</h6>
    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">نام همکار</th>
                  <th scope="col">نام تسک</th>
                  <th scope="col">وضعیت</th>
                  <th scope="col">کل لاگ های روز</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>پویا نظری</td>
                  <td>یادگیری پایتون</td>
                  <td>
                    <span class="bg-success text-success rounded-circle px-1">O</span>
                  </td>
                  <td>دو ساعت</td>
                </tr>
                </tbody>
        </table>
      </div>
</section>

@endsection