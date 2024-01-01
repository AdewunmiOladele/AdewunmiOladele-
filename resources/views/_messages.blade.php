<div class="clear-both"></div>

@if (session('success'))
  <div class="alert alert-success " role="alert">
    {{ session('success') }}
  </div>
@endif

@if (session('error'))
  <div class="alert alert-danger " role="alert">
    {{ session('error') }}
  </div>
@endif

@if (session('payment-error'))
  <div class="alert alert-danger " role="alert">
    {{ session('payment-error') }}
  </div>
@endif

@if (session('warning'))
  <div class="alert alert-warning " role="alert">
    {{ session('warning') }}
  </div>
@endif

@if (session('info'))
  <div class="alert alert-info " role="alert">
    {{ session('info') }}
  </div>
@endif

@if (session('secondary'))
  <div class="alert alert-info " role="alert">
    {{ session('secondary') }}
  </div>
@endif

@if (session('primary'))
  <div class="alert alert-info " role="alert">
    {{ session('primry') }}
  </div>
@endif

@if (session('light'))
  <div class="alert alert-info " role="alert">
    {{ session('light') }}
  </div>
@endif