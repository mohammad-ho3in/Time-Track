@extends('log-work.layouts.master')
@section('title','شروع به کار')

@section('head-tag')

<link rel="stylesheet" href="https://unpkg.com/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css">
<link rel="stylesheet" href="{{ asset('log-work/components/tag/tagify.css') }}">
@livewireStyles()
<style>
  .height17rem {
    height: 17rem;
  }
</style>
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
    <form action="{{ route('log-work.work.start.store',['userID'=>Auth::user()->id]) }}" method="post"
      class="col-md-6 col-12">
      @csrf
      <div class="mb-3 col-12">
        <label for="groupId" class="form-label">انتخاب گروه</label>
        <select class="form-select form-select-sm" name="group_id" id="groupId" aria-label=".form-select-sm example">
          <option selected value="0">فاقد گروه</option>
        </select>
      </div>
      <div class="mb-3 col-12">
        <label for="taskName" class="form-label">عنوان کار</label>
        <input type="text" class="form-control form-control-sm" id="taskName" placeholder="عنوان کار"
          name="{{ old('task_name') }}">
        @error('task_name')
        <label class="bg-danger text-center d-block rounded text-white mt-1">{{ $message }}</label>
        @enderror
      </div>
      <div class="mb-3 col-12">
        <label for="description" class="form-label">توضیحات</label>
        <textarea name="description" class="form-control form-control-sm"
          id="description">{{ old('description') }}</textarea>
        @error('description')
        <label class="bg-danger text-center d-block rounded text-white mt-1">{{ $message }}</label>
        @enderror
      </div>
      <div class="mb-3 col-12">
        <button type="submit" class="btn btn-sm btn-info">ایجاد</button>
      </div>
    </form>
    <div class="col-md-6 col-12">
      @livewire('show-big-tasks')
    </div>
    </form>
  </div>
</section>
<section class="container mt-4 shadow py-3">
  <div class="row">
    <div class="col-md-6 col-12">
      <h4>ثبت لاگ</h4>
      <div class="dropdown-divider"></div>
      <form action="{{ route('log-work.work.start.storeNewTask') }}" method="POST">
        @csrf
        @livewire('select-task')
        <div class="mb-3 col-12">
          <label for="taskName" class="form-label">نام تسک</label>
          <input type="text" class="form-control form-control-sm" id="taskName" placeholder="نام تسک" name="title" value="{{ old('title') }}">
          @error('title')
        <label class="bg-danger text-center d-block rounded text-white mt-1">{{ $message }}</label>
        @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="tags" class="form-label">تگ ها</label>
          <input type="text" class="form-control form-control-sm" id="tagsStart" placeholder="نگ ها" name="tags" value='{{ old("tags") }}'>
          @error('tags')
        <label class="bg-danger text-center d-block rounded text-white mt-1">{{ $message }}</label>
        @enderror
        </div>
        <div class="mb-3 col-12">
          <label for="description" class="form-label">توضیحات</label>
          <textarea name="description" class="form-control form-control-sm" id="description">{{ old('description') }}</textarea>
          @error('description')
        <label class="bg-danger text-center d-block rounded text-white mt-1">{{ $message }}</label>
        @enderror
        </div>
        <div class="mb-3 col-12">
          <button type="submit" class="btn btn-sm btn-info">ثبت</button>
        </div>
      </form>
    </div>
    <div class="col-md-6 col-12">
      @if (session()->has('starting'))
        <x-toast.failure message="{{ session('starting') }}" />
      @elseif (session()->has('started'))
        <x-toast.success message="{{ session('started') }}" />
      @endif
      @if (session()->has('updating'))
      <x-toast.failure message="{{ session('updating') }}" />
      @elseif (session()->has('updated'))
        <x-toast.success message="{{ session('updated') }}" />
      @endif
      <h6>لیست لاگ های امروز</h6>
      @livewire('show-log')
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
@livewireScripts()
@endsection