<!DOCTYPE html>
<html lang="en">
  <head>

    @include('layouts.partials.head')

  </head>

  <body>

@include('layouts.partials.nav')
@include('layouts.partials.header')
    <div class="container d-flex justify-content-between">
      @yield('content')
    </div>
@include('layouts.partials.footer')
@include('layouts.partials.footer-scripts')

  </body>

</html>
