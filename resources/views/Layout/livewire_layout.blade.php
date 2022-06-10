<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        @include('Include.livewire.style')
        @livewireStyles
    </head>
    <body>
        @livewire('multi-step-form')
        @include('Include.Sign.script')
        @livewireScripts
    </body>
</html>