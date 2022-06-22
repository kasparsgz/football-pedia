<!DOCTYPE html>
<html>
<head>
 <title>Leagues</title>
</head>
<body>
 <?php if(count($leagues) == 0): ?>
 <p color='red'> There is no league in the database!</p>
 <?php else: ?>
 <table border="1">
 <tr>
 <td> Country Id </td>
 <td> League Id </td>
 <td> League Name </td>
 <td> League About </td>
 <td> Show Teams </td>
 <td> Delete League</td>
 </tr>
 <?php $__currentLoopData = $leagues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $league): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td> <?php echo e($league->country_id); ?> </td>
 <td> <?php echo e($league->id); ?> </td>
 <td> <?php echo e($league->nosaukums); ?> </td>
 <td> <?php echo e($league->about); ?> </td>
 <td> <input type="button" value="show"
    onclick="showTeams(<?php echo e($league->id); ?>)"> </td>
 <td><form method="POST"
    action="<?php echo e(action([App\Http\Controllers\LeagueController::class, 'destroy'],
    $league->id)); ?>">
     <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><input type="submit"
    value="delete"></form> </td>
 </td>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
 <?php endif; ?>
 <p> <input type="button" value="New League" onclick="newLeague( <?php echo e($country_id); ?>

)"> </p>
<script>
    function showTeams(leagueID ) {
    window.location.href = "team/"+ leagueID;
    }
    </script>

 <script>
 function newLeague(countryID) {
 window.location.href = "/league/country/" + countryID + "/create";
 }
 </script>

</body>
</html>
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/leagues.blade.php ENDPATH**/ ?>