@if (session('success'))
    <div class="sweetalert mb-3 mt-3">
        <button class="btn btn-success btn sweet-success">{{ session('success') }}</button>
    </div>
@endif

@if (session('warning'))
    <div class="sweetalert mb-3 mt-3">
        <button class="btn btn-warning btn sweet-success">{{ session('warning') }}</button>
    </div>
@endif
