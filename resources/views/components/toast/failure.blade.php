<div class="position-fixed top-0 end-0 toast">
    <div class="">
        <div class="toast-header bg-danger text-white">
            <i class="fa fa-close" data-bs-dismiss="toast" aria-label="Close"></i>
            <strong class="me-auto ">{{ $message }}</strong>
        </div>
    </div>
    @section('script')
        <script>
            new bootstrap.Toast($('.toast')).show();
        </script>
    @endsection
</div>