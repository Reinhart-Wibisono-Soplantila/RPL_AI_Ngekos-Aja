<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Booking | NgekostAja</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    @include('Include.booking.style')
    <body>
        @yield('main')
        @include('Include.booking.footer')
        @include('Include.booking.script')
        @stack('time')
    </body>
  </head>
</html>