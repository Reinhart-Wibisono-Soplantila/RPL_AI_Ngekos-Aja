<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?php echo $__env->make('Include.livewire.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('multi-step-form')->html();
} elseif ($_instance->childHasBeenRendered('BWsOfo9')) {
    $componentId = $_instance->getRenderedChildComponentId('BWsOfo9');
    $componentTag = $_instance->getRenderedChildComponentTagName('BWsOfo9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BWsOfo9');
} else {
    $response = \Livewire\Livewire::mount('multi-step-form');
    $html = $response->html();
    $_instance->logRenderedChild('BWsOfo9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php echo $__env->make('Include.Sign.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Layout/livewire_layout.blade.php ENDPATH**/ ?>