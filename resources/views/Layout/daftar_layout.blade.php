<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{$title ?? config('app.name')}}</title>
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        @include('Include.Sign.style')
    </head>
    <body>
        @yield('main')
        @include('Include.Sign.script')
    </body>
</html>