<!DOCTYPE html>
<html>
    <head>
        <h1 class = "header">Information about leagues that have been added </h1>
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

 <?php if(count($leagues) == 0): ?>
 <p color='red'> There is no league in the database!</p>
 <?php else: ?>
 <table border="1" class="center">
 <tr>

 <td> League Name </td>
 <td> League About </td>
 <td> Show Teams </td>
 <?php if(auth()->guard()->check()): ?>
 <td> Delete League</td>
 <td> Update League</td><?php endif; ?>
 </tr>
 <?php $__currentLoopData = $leagues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $league): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>

 <td> <?php echo e($league->nosaukums); ?> </td>
 <td> <?php echo e($league->about); ?> </td>
 <td> <input type="button" value="show"class="button"
    onclick="showTeams(<?php echo e($league->id); ?>)"> </td>
    <?php if(auth()->guard()->check()): ?>
 <td><form method="POST"
    action="<?php echo e(action([App\Http\Controllers\LeagueController::class, 'destroy'],
    $league->id)); ?>">
     <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><input type="submit"class="button"
    value="delete"></form> </td>
 </td>
 <td> <form method="POST" action="<?php echo e(action([App\Http\Controllers\LeagueController::class, 'edit'], $league->id)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('GET'); ?><input type="submit"class="button" value="Update"></form> </td>
    </td><?php endif; ?>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
 <?php endif; ?>
 <?php if(auth()->guard()->check()): ?>
 <p> <input type="button" value="New League"class="button" onclick="newLeague( <?php echo e($country_id); ?>

)"> </p><?php endif; ?>


<input type="button" value="Back"class="button"
    onclick="Back()">
<script>
    function showTeams(leagueID) {
    window.location.href = "team/"+leagueID ;
    }
    </script>
<script>
    function Back() {
    window.location.href = "/country";
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