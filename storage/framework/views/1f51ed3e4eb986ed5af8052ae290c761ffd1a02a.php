<!DOCTYPE html>
<html>

    <head>
        <h1 class = "header"><?php echo e(__('Informācija par pievienotajiem spēlētājiem')); ?> </h1>
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
 <?php if(count($players) == 0): ?>

 <p color='red'> <?php echo e(__('Datubāzē nav ierakstu!')); ?></p>
 <?php else: ?>
 <table border="1" class="center">
 <tr>

 <td>  <?php echo e(__('Vārds')); ?> </td>
 <td> <?php echo e(__('Uzvārds')); ?> </td>
 <td> <?php echo e(__('Nacionalitāte')); ?> </td>
 <td> <?php echo e(__('Apraksts')); ?> </td>
 <?php if(auth()->guard()->check()): ?>
 <td> <?php echo e(__('Izdzēst spēlētāju')); ?></td>
 <td> <?php echo e(__('Izmainīt informāciju')); ?></td>
 <?php endif; ?>
 </tr>
 <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td> <?php echo e($player->first_name); ?> </td>
 <td> <?php echo e($player->last_name); ?> </td>
 <td> <?php echo e($player->country); ?> </td>
 <td> <?php echo e($player->about); ?> </td>

 <?php if(auth()->guard()->check()): ?><td><form method="POST"
    action="<?php echo e(action([App\Http\Controllers\PlayerController::class, 'destroy'],
    $player->id)); ?>">
     <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><input type="submit" class="button"
    value="<?php echo e(__('Delete')); ?>"></form> </td>
    <td> <form method="POST" action="<?php echo e(action([App\Http\Controllers\PlayerController::class, 'edit'], $player->id)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('GET'); ?><input type="submit"class="button" value="<?php echo e(__('Update')); ?>"></form> </td>
        </td>
 </td><?php endif; ?>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
 <input type="button" value="<?php echo e(__('Back to start')); ?>"class="button"
 onclick="Back()">
 <?php endif; ?> <?php if(auth()->guard()->check()): ?>
 <p> <input type="button" class="button"value="<?php echo e(__('New player')); ?>" onclick="newPlayer( <?php echo e($team_id); ?>

 )"> </p> <?php endif; ?>

<script>
    function Back() {
    window.location.href = "/country";
    }
    </script>
  <script>
  function newPlayer(teamID) {
  window.location.href = "/league/country/team/players/" + teamID + "/create";
  }
  </script>
</body>
</html>
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/players.blade.php ENDPATH**/ ?>