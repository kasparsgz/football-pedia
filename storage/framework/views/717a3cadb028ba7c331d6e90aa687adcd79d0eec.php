<!DOCTYPE html>
<html>
<head>
 <title>Teams</title>
</head>
<body>
 <?php if(count($teams) == 0): ?>
 <p color='red'> There is no team in the database!</p>
 <?php else: ?>
 <table border="1">
 <tr>
 <td> League Id </td>
 <td> Team Id </td>
 <td> Nosaukums </td>
 <td> Team About </td>
 <td> Show Players </td>
 <td> Delete Team</td>
 <td> </td>
 </tr>
 <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td> <?php echo e($team->league_id); ?> </td>
 <td> <?php echo e($team->id); ?> </td>
 <td> <?php echo e($team->nosaukums); ?> </td>
 <td> <?php echo e($team->about); ?> </td>
 <td> <input type="button" value="show"
    onclick="showPlayers(<?php echo e($team->id); ?>)"> </td>
 <td><form method="POST"
    action="<?php echo e(action([App\Http\Controllers\TeamController::class, 'destroy'],
    $team->id)); ?>">
     <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><input type="submit"
    value="delete"></form> </td>
 </td>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
 <?php endif; ?>
 <p> <input type="button" value="New Team" onclick="newTeam( <?php echo e($league_id); ?>

 )"> </p>
 <script>
     function showPlayers(teamID) {///te vel jālabo
     window.location.href = "players/" + teamID;
     }
     </script>

  <script>
  function newTeam(leagueID) {///te vel jālabo
  window.location.href = "/league/country/team/" + leagueID + "/create";
  }
  </script>
</body>
</html>
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/teams.blade.php ENDPATH**/ ?>