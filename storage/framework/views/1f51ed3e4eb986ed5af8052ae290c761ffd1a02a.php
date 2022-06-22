<!DOCTYPE html>
<html>
<head>
 <title>Players</title>
</head>
<body>
 <?php if(count($players) == 0): ?>
 <p color='red'> There is player in the database!</p>
 <?php else: ?>
 <table border="1">
 <tr>
 <td> Team Id </td>
 <td> Player Id </td>
 <td> Vārds </td>
 <td> Uzvārds </td>
 <td> Nacionalitāte </td>
 <td> About </td>
 <td> Delete Player</td>
 <td> </td>
 </tr>
 <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td> <?php echo e($player->team_id); ?> </td>
 <td> <?php echo e($player->id); ?> </td>
 <td> <?php echo e($player->first_name); ?> </td>
 <td> <?php echo e($player->last_name); ?> </td>
 <td> <?php echo e($player->country); ?> </td>
 <td> <?php echo e($player->about); ?> </td>
 <td><form method="POST"
    action="<?php echo e(action([App\Http\Controllers\PlayerController::class, 'destroy'],
    $player->id)); ?>">
     <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><input type="submit"
    value="delete"></form> </td>
 </td>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
 <?php endif; ?>
 <p> <input type="button" value="New Player" onclick="newPlayer( <?php echo e($team_id); ?>

 )"> </p>
  <script>
  function newPlayer(teamID) {///te vel jālabo
  window.location.href = "/league/country/team/players/" + teamID + "/create";
  }
  </script>
</body>
</html>
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/players.blade.php ENDPATH**/ ?>