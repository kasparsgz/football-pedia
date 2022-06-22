<!DOCTYPE html>
<html>
<head>
 <title>New player</title>
</head>
<body>
 We will add a player for <b><?php echo e($team->nosaukums); ?></b>:
 <form method="POST"
action="<?php echo e(action([App\Http\Controllers\PlayerController::class, 'store'])); ?>">
 <?php echo csrf_field(); ?>
 <input type="hidden" name="team_id" value="<?php echo e($team->id); ?>">
 <label for="first_name">Vārds: </label>
 <input type="string" name="first_name" id="first_name">
 <br>
 <br>
 <label for="last_name">Uzvārds: </label>
 <input type="string" name="last_name" id="last_name">
 <br>
 <br>
 <label for="country">Nacionalitāte: </label>
 <input type="string" name="country" id="country">
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
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/player_new.blade.php ENDPATH**/ ?>