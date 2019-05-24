<!DOCTYPE html>
<!-- Splitting the layouts out into separate parts in order
to more easily integrate with bootstrap.

Used (Rizwan, 2018) as a guide (minus the typoes and outdated (?)
bootstrap CDN link).
-->

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
