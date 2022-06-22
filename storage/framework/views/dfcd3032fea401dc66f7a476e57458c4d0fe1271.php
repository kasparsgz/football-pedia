<!DOCTYPE html>
<html>
<head>
 <title>New team</title>
</head>
<body>
 We will add a team for <b><?php echo e($league->nosaukums); ?></b>:
 <form method="POST"
action="<?php echo e(action([App\Http\Controllers\TeamController::class, 'store'])); ?>">
 <?php echo csrf_field(); ?>
 <input type="hidden" name="league_id" value="<?php echo e($league->id); ?>">
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
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/team_new.blade.php ENDPATH**/ ?>