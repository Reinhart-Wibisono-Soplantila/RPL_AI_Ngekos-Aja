<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>{{$title ?? config('app.name')}}</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    @include('Include.login.style')
    </head>

  <body>
    @yield('main')
    <!-- Option 1: Bootstrap Bundle with Popper -->
    @include('Include.login.script')
  </body>
</html>
