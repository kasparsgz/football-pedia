<!DOCTYPE html>
<html>
    <head>
        <h1 class = "header"><?php echo e(__('Informācija par pievienotajām komandām')); ?></h1>
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
 <?php if(count($teams) == 0): ?>

 <p color='red'> <?php echo e(__('Datubāzē nav ierakstu!')); ?></p>
 <?php else: ?>
 <table border="1" class="center">
 <tr>
 <td> <?php echo e(__('Nosaukums')); ?> </td>
 <td> <?php echo e(__('Apraksts')); ?> </td>
 <td><?php echo e(__('Parādīt spēlētājus')); ?> </td>
<?php if(auth()->guard()->check()): ?>
<td> <?php echo e(__('Izdzēst komandu')); ?></td>
<td> <?php echo e(__('Atjaunot informāciju')); ?></td>
<?php endif; ?>
 </tr>
 <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td> <?php echo e($team->nosaukums); ?> </td>
 <td> <?php echo e($team->about); ?> </td>
 <td> <input type="button" value="<?php echo e(__('Show')); ?>"class="button"
    onclick="showPlayers(<?php echo e($team->id); ?>)"> </td><?php if(auth()->guard()->check()): ?>
 <td><form method="POST"
    action="<?php echo e(action([App\Http\Controllers\TeamController::class, 'destroy'],
    $team->id)); ?>">
     <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><input type="submit"class="button"value="<?php echo e(__('Delete')); ?>"></form> </td>
    <td> <form method="POST" action="<?php echo e(action([App\Http\Controllers\TeamController::class, 'edit'], $team->id)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('GET'); ?><input type="submit"class="button" value="<?php echo e(__('Update')); ?>"></form> </td>
        </td>
 </td>
<?php endif; ?>
 <?php
 // function valsts()
//{
 //   $intance = $this->hasMany(Team::class);
 //   $intance->join('league', 'team.league_id', '=', 'league.id')
  //      ->get(['country_id','value']);
 //return $intance;
//}

?>


 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 </table>
 <input type="button" value="<?php echo e(__('Back to start')); ?>"class="button"
 onclick="Back()">
 <?php endif; ?> <?php if(auth()->guard()->check()): ?>
 <p> <input type="button" class="button"value="<?php echo e(__('New team')); ?>" onclick="newTeam( <?php echo e($league_id); ?>

 )"> </p> <?php endif; ?>


 <script>
     function showPlayers(teamID) {///te vel jālabo
     window.location.href = "players/" + teamID;
     }
     </script>
<script>
    function Back() {
    window.location.href = "/country";
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