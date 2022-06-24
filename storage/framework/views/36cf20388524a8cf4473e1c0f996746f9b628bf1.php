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
    Update information for country <b><?php echo e($countries->name); ?></b>:
    With previous information <b><?php echo e($countries->name); ?></b> , <b><?php echo e($countries->code); ?></b> , <b><?php echo e($countries->about); ?></b>
    <form method="POST" action="<?php echo e(action([App\Http\Controllers\CountryController::class, 'update'], $countries->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('GET'); ?>
     <label for="name">Updated country Name: </label>
     <input type="text" name="name" id="name" value="<?php echo e($countries->name); ?>">
     <label for="code">Updated country code: </label>
     <input type="text" name="code" id="code" value="<?php echo e($countries->code); ?>">
     <label for="about">Updated About: </label>
     <input type="text" name="about" id="about" value="<?php echo e($countries->about); ?>">
     <input type="submit" class="button"value="Update">
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