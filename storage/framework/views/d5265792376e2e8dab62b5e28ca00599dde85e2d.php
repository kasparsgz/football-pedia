<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    <?php $__currentLoopData = $available_locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale_name => $available_locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($available_locale === $current_locale): ?>
            <span class="ml-2 mr-2 text-gray-700"><?php echo e($locale_name); ?></span>
        <?php else: ?>
            <a class="ml-1 underline ml-2 mr-2" href="language/<?php echo e($available_locale); ?>">
                <span><?php echo e($locale_name); ?></span>
            </a>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/partials/language_switcher.blade.php ENDPATH**/ ?>