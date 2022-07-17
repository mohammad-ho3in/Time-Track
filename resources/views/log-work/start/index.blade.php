@extends('log-work.layouts.master')
@section('title','شروع به کار')

@section('head-tag')

<link rel="stylesheet" href="https://unpkg.com/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css">
<link rel="stylesheet" href="{{ asset('log-work/components/tag/tagify.css') }}">

@endsection

@section('content')

<section class="container mt-3 shadow py-3">
  <form action="" method="POST" class="row">
    <h4>ثبت لاگ</h4>
    <div class="dropdown-divider"></div>
    <div class="mb-3 col-sm-6 col-12">
      <label for="taskName" class="form-label">عنوان کار</label>
      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option value="0" selected>ندارد</option>
        <option value="1">نام کار</option>
      </select>
    </div>
    <div class="mb-3 col-sm-6 col-12">
      <label for="taskName" class="form-label">نام تسک</label>
      <input type="text" class="form-control form-control-sm" id="taskName" placeholder="نام تسک">
    </div>
    <div class="mb-3 col-12">
      <label for="tags" class="form-label">تگ ها</label>
      <input type="text" class="form-control form-control-sm" id="tags" placeholder="نگ ها">
    </div>
    <div class="mb-3 col-sm-6 col-12">
      <label for="taskTime" class="form-label">ساعت</label>
      <input type="time" class="form-control form-control-sm without_ampm" id="taskTime" value="00:00">
    </div>
    <div class="mb-3 col-sm-6 col-12">
      <label for="taskDate" class="form-label">تاریخ</label>
      <input type="text" class="form-control form-control-sm date" id="taskDate" value="1658017368000">
      <input type="text" class="observer-example-alt" name="date_work" hidden readonly>
    </div>
    <div class="mb-3 col-12">
      <label for="description" class="form-label">توضیحات</label>
      <textarea name="description" class="form-control form-control-sm" id="description"></textarea>
    </div>
    <div class="mb-3 col-sm-6 col-12">
      <button type="submit" class="btn btn-sm btn-info">ثبت</button>
    </div>
  </form>
</section>
<section class="container mt-4 shadow py-3">
  <div class="row">
    <h4>ایجاد کار جدید</h4>
    <div class="dropdown-divider"></div>
    <form action="" method="post" class="col-md-6 col-12">
      <div class="mb-3 col-12">
        <label for="taskName" class="form-label">عنوان کار</label>
        <input type="text" class="form-control form-control-sm" id="taskName" placeholder="عنوان کار">
      </div>
      <div class="mb-3 col-12">
        <label for="description" class="form-label">توضیحات</label>
        <textarea name="description" class="form-control form-control-sm" id="description"></textarea>
      </div>
      <div class="mb-3 col-12">
        <button type="submit" class="btn btn-sm btn-info">ایجاد</button>
      </div>
    </form>
    <div class="col-md-6 col-12">
      <div class="table-responsive">
        <table class="table table-striped text-center">
          <thead>
            <tr>
              <th>کارها</th>
              <th>وضعیت</th>
              <th>زمان کل</th>
              <th>توضیحات</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>نام کار</td>
              <th>
                <input type="checkbox" name="status" value="0">
              </th>
              <th>06:10</th>
              <th>ندارد</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </form>
  </div>
</section>
<section class="container mt-4 shadow py-3">
  <div class="row">
    <div class="col-md-6 col-12">
      <h4>ثبت لاگ</h4>
      <div class="dropdown-divider"></div>
      <form action="" method="POST">
        <div class="mb-3 col-12">
          <label for="taskName" class="form-label">عنوان کار</label>
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option value="0" selected>ندارد</option>
            <option value="1">نام کار</option>
          </select>
        </div>
        <div class="mb-3 col-12">
          <label for="taskName" class="form-label">نام تسک</label>
          <input type="text" class="form-control form-control-sm" id="taskName" placeholder="نام تسک">
        </div>
        <div class="mb-3 col-12">
          <label for="tags" class="form-label">تگ ها</label>
          <input type="text" class="form-control form-control-sm" id="tagsStart" placeholder="نگ ها">
        </div>
        <div class="mb-3 col-12">
          <label for="description" class="form-label">توضیحات</label>
          <textarea name="description" class="form-control form-control-sm" id="description"></textarea>
        </div>
        <div class="mb-3 col-12">
          <button type="submit" class="btn btn-sm btn-info">ثبت</button>
        </div>
      </form>
    </div>
    <div class="col-md-6 col-12">
      <h6>لیست لاگ های امروز</h6>
      <div class="table-responsive">
        <table class="table table-striped text-center">
          <thead>
            <tr>
              <th>عنوان کار</th>
              <th>نام</th>
              <th>آیکون شروع</th>
              <th>آیکون پایان</th>
              <th>کل تایم</th>
              <th>توضیحات</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>سایت علی</td>
              <td>طراحی ارتباط با ما</td>
              <td>
                <a href="" class="btn btn-sm bg-danger text-white rounded-bottom fa fa-play"></a>
              </td>
              <td>
                <a href="" class="btn btn-sm bg-danger text-white rounded-bottom fa fa-stop"></a>
              </td>
              <td>
                <span>20:00</span>
              </td>
              <td>ندارد</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

@endsection

@section('script')

<script src="{{ asset('log-work/components/tag/jQuery.tagify.min.js') }}"></script>
<script src="https://unpkg.com/persian-date@1.1.0/dist/persian-date.min.js"></script>
<script src="https://unpkg.com/persian-datepicker@1.2.0/dist/js/persian-datepicker.min.js"></script>
<script>
  $('#tags').tagify();
  $('#tagsStart').tagify();
  $(document).ready(function () {
    $(".date").pDatepicker({
      observer: true,
      format: 'YYYY/MM/DD',
      autoClose: true,
      altField: '.observer-example-alt'
    });
  });
</script>
@endsection