<!DOCTYPE html>
<html>
<head>
 <title>New league</title>
</head>
<body>
 We will add a new league for <b><?php echo e($country->country_name); ?></b>:
 <form method="POST"
action="<?php echo e(action([App\Http\Controllers\LeagueController::class, 'store'])); ?>">
 <?php echo csrf_field(); ?>
 <input type="hidden" name="country_id" value="<?php echo e($country->id); ?>">

 <label for="nosaukums">Nosaukums: </label>
 <input type="string" name="nosaukums" id="nosaukums">
 <br>
 <br>
 <label for="about">About: </label>
 <input type="string" name="about" id="about">
 <br>
 <br>
 <input type="submit" value="add">
 </form>
</body>
</html>
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/league_new.blade.php ENDPATH**/ ?>