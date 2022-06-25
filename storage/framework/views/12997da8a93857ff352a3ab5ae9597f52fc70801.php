<!DOCTYPE html>
<html>
<head>
<title>Update leagues</title>
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
    use App\Http\Controllers\PlayerController;
    ?>

 <?php echo e(__('Atjaunosim informāciju par spēlētāju -')); ?>  <b><?php echo e($players->first_name); ?></b> , <b><?php echo e($players->last_name); ?></b>:
    <br>
    <?php echo e(__('Ar iepriekšējo informāciju')); ?> <b><?php echo e($players->country); ?></b> , <b><?php echo e($players->about); ?></b>
    <form method="POST" action="<?php echo e(action([App\Http\Controllers\PlayerController::class, 'update'], $players->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('GET'); ?>
     <label for="first_name"> <?php echo e(__('Jaunais vārds:')); ?> </label>
     <input type="text" name="first_name" id="first_name" value='<?php echo e($players->first_name); ?>'>
     <label for="last_name"><?php echo e(__('Jaunais uzvārds:')); ?> </label>
     <input type="text" name="last_name" id="last_name" value="<?php echo e($players->last_name); ?>">
     <label for="country"><?php echo e(__('Jaunā nacionalitāte:')); ?> </label>
     <input type="text" name="country" id="country" value="<?php echo e($players->country); ?>">
     <label for="about"><?php echo e(__('Jaunais apraksts:')); ?> </label>
     <input type="text" name="about" id="about" value="<?php echo e($players->about); ?>">
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
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/player_update.blade.php ENDPATH**/ ?>