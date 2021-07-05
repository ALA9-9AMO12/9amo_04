@if (session('flash_status'))
    <div class="alert alert-warning" role="alert">
        <span>{{ session('flash_status') }}</span>
    </div>
@endif
