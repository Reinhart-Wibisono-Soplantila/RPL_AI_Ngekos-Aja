<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?php echo $__env->make('Include.livewireUpdate.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('update-multi-form', ['data_indekosan' => Route::current()->parameter('data_indekosan')])->html();
} elseif ($_instance->childHasBeenRendered('6a1jDKJ')) {
    $componentId = $_instance->getRenderedChildComponentId('6a1jDKJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('6a1jDKJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6a1jDKJ');
} else {
    $response = \Livewire\Livewire::mount('update-multi-form', ['data_indekosan' => Route::current()->parameter('data_indekosan')]);
    $html = $response->html();
    $_instance->logRenderedChild('6a1jDKJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php echo $__env->make('Include.livewireUpdate.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Layout/livewireUpdate.blade.php ENDPATH**/ ?>