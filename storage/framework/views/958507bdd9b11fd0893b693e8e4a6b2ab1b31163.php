<!DOCTYPE html>
<html>
<head>
 <title>Countries</title>
</head>
<body>
 <?php if(count($countries) == 0): ?>
 <p color='red'> There are no records in the database!</p>
 <?php else: ?>
 <table style="border: 1px solid black">
    <tr>
    <td> Country Id </td>
    <td> Country Name </td>
    <td> Country Code </td>
    <td> About </td>
    <td> Show Leagues </td>
    <td> Delete country </td>
    </tr>
 <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
            <td> <?php echo e($country->id); ?> </td>
            <td> <?php echo e($country->name); ?> </td>
            <td> <?php echo e($country->code); ?> </td>
            <td> <?php echo e($country->about); ?> </td>
            <td> <input type="button" value="show"
onclick="showLeagues(<?php echo e($country->id); ?>)"> </td>
<td> <form method="POST" action="<?php echo e(action([App\Http\Controllers\CountryController::class, 'destroy'], $country->id)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><input type="submit" value="delete"></form> </td>
    </td>
</td>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
 <?php endif; ?>
 <td> <form method="POST" action="<?php echo e(action([App\Http\Controllers\CountryController::class, 'create'])); ?>"><?php echo csrf_field(); ?> <?php echo method_field('GET'); ?>
    <input type="submit" value="New Country"></form> </td>
    </td>
 <script>
 function showLeagues(countryID) {
 window.location.href = "/league/country/" + countryID;
 }
 </script>
</body>
</html>
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/countries.blade.php ENDPATH**/ ?>