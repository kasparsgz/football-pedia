<!DOCTYPE html>
<html>
<head>
    <h1 class = "header"><?php echo e(__('Informācija par pievienotajām valstīm')); ?></h1>
</head>
<body>
    <link rel="stylesheet" href="css\cssTT2.css" />
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

 <?php if(count($countries) == 0): ?>
 <p color='red'><?php echo e(__('Datubāzē nav ierakstu!')); ?></p>
 <?php else: ?>
 <table class="center">
    <tr>
    <td>    <?php echo e(__('Valsts nosaukums')); ?></td>
    <td>   <?php echo e(__('Valsts kods')); ?> </td>
    <td>   <?php echo e(__('Apraksts')); ?></td>
    <td> <?php echo e(__('Parādīt līgas')); ?> </td>
    <?php if(auth()->guard()->check()): ?><td>  <?php echo e(__('Izdzēst valsti')); ?> </td>
    <td>  <?php echo e(__('Mainīt informāciju')); ?> </td><?php endif; ?>

    </tr>
 <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
            <td> <?php echo e($country->name); ?> </td>
            <td> <?php echo e($country->code); ?> </td>
            <td> <?php echo e($country->about); ?> </td>
            <td>
                <input type="button" value="<?php echo e(__('Show')); ?>" class="button"
onclick="showLeagues(<?php echo e($country->id); ?>)"> </td>


<?php if(auth()->guard()->check()): ?>
<td> <form method="POST" action="<?php echo e(action([App\Http\Controllers\CountryController::class, 'destroy'], $country->id)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><input type="submit"class="button" value="<?php echo e(__('Delete')); ?>"></form> </td>
    </td>

    <td> <form method="POST" action="<?php echo e(action([App\Http\Controllers\CountryController::class, 'edit'], $country->id)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('GET'); ?><input type="submit"class="button" value="<?php echo e(__('Update')); ?>"></form> </td>
        </td>

        <?php endif; ?>


</td>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
 <a  class="underline text-sm text-gray-600 hover:text-gray-900" href ="/dashboard"><?php echo e(__('Atpakaļ uz sākumu!')); ?> </a>
 <?php endif; ?>
 <?php if(auth()->guard()->check()): ?>
 <td> <form method="POST" action="<?php echo e(action([App\Http\Controllers\CountryController::class, 'create'])); ?>"><?php echo csrf_field(); ?> <?php echo method_field('GET'); ?>
    <input type="submit"class="button" value="<?php echo e(__('New country')); ?>"></form> </td>
    </td><?php endif; ?>
 <script>
 function showLeagues(countryID) {
 window.location.href = "/league/country/" + countryID;
 }
 </script>
</body>
</html>
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/countries.blade.php ENDPATH**/ ?>