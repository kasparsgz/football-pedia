<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            <?php echo e(__('Football-pedia')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <p><?php echo e(__('Šī ir lapa par futbolu, precīzāk, par futbola komandām, spēlētājiem')); ?></p>
    <p><?php echo e(__('Lapa veidota kā informācijas krātuve, kur lietotāji var paaust savu viedokli, un uzzināt ko jaunu par futbolu!')); ?></p>
    <p>              <?php echo e(__('Lapā ir izveidotas sadaļas - valsts, līga, komanda, spēlētājs')); ?></p>
   <body class="antialiased">
            <?php echo $__env->make('partials/language_switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo e(__('Valodas maiņa!')); ?>

                <p>
                    <a  class="underline text-sm text-gray-600 hover:text-gray-900" href ="/country">    <?php echo e(__('Sākam darbību ar mājaslapu!')); ?></a>
                </p>
            </div>
</body>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/dashboard.blade.php ENDPATH**/ ?>