<!DOCTYPE html>
<html>
<head>
<title>Update countries</title>
</head>
<body>
    <style>
    body {
        background-color:#e3eaa7;
        }
        .header {
        text-align: center;
        }
        table, th, td {
        border: 6px solid ;
        border-color :#b5e7a0;
        border-collapse: collapse;
        }

        table.center {
        margin-left: auto;
        margin-right: auto;

        }
        .center {
        text-align: center;
        }
        .button {
        display: flex;
        justify-content: center;
        align-items: center;

        border: 3px solid #86af49;}
        .button:hover {background-color: #86af49}
        </style>
    <?php
    use App\Http\Controllers\CountryController;
    ?>
    <?php echo e(__('Atjaunosim informāciju par valsti -')); ?>

     <b><?php echo e($countries->name); ?></b>:
     <?php echo e(__('Ar iepriekšējo informāciju')); ?>

     <b><?php echo e($countries->name); ?></b> , <b><?php echo e($countries->code); ?></b> , <b><?php echo e($countries->about); ?></b>
    <form method="POST" action="<?php echo e(action([App\Http\Controllers\CountryController::class, 'update'], $countries->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('GET'); ?>

     <label for="name"><?php echo e(__('Jaunais valsts nosaukums:')); ?> </label>
     <input type="text" name="name" id="name" value="<?php echo e($countries->name); ?>">
     <label for="code"><?php echo e(__('Jaunais valsts kods:')); ?> </label>
     <input type="text" name="code" id="code" value="<?php echo e($countries->code); ?>">
     <label for="about"><?php echo e(__('Jaunais apraksts:')); ?> </label>
     <input type="text" name="about" id="about" value="<?php echo e($countries->about); ?>">
     <input type="submit" class="button"value="<?php echo e(__('Update')); ?>">
    </form>
     <?php if(count($errors) > 0): ?>
     <div>
     <ul>
     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <li><?php echo e($error); ?></li>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </ul>
     </div>
     <?php endif; ?>


    </body>
    </html>
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/countries_update.blade.php ENDPATH**/ ?>