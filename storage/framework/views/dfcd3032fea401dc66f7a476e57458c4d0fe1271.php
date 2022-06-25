<!DOCTYPE html>
<html>
<head>
 <title>New team</title>
</head>
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
<body>

    <?php echo e(__('Pievienosim jaunu komandu līgā -')); ?> <b><?php echo e($league->nosaukums); ?></b>:
 <br>
 <br>
 <form method="POST"
action="<?php echo e(action([App\Http\Controllers\TeamController::class, 'store'])); ?>">
 <?php echo csrf_field(); ?>
 <input type="hidden" name="league_id" value="<?php echo e($league->id); ?>">
 <label for="nosaukums"><?php echo e(__('Nosaukums:')); ?> </label>
 <input type="string" name="nosaukums" id="nosaukums">
 <br>
 <br>
 <label for="about"><?php echo e(__('Apraksts:')); ?> </label>
 <input type="string" name="about" id="about">
 <br>
 <br>
 <input type="submit" class = "button"value="<?php echo e(__('Add')); ?>">
 </form>
</body>
</html>
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/team_new.blade.php ENDPATH**/ ?>