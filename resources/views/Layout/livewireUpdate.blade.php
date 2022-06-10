<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        @include('Include.livewireUpdate.style')
        @livewireStyles
    </head>
    <body>
        @livewire('update-multi-form', ['data_indekosan' => Route::current()->parameter('data_indekosan')])
        @include('Include.livewireUpdate.script')
        
        @livewireScripts
        </body>
</html>
