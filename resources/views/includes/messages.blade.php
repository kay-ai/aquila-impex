@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible z-index-2 ms-auto me-3" style="width: max-content" role="alert">
        <i class="fa fa-check-circle"></i>
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible text-white z-index-2 ms-auto me-3" style="width: max-content" role="alert">
        <i class="fa fa-times-circle"></i>
        {{session('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
