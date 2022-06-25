<!DOCTYPE html>
<html>
<head>
<title>New country</title>
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

                <?php echo e(__('Ievadiet informāciju par')); ?> <b> <?php echo e(__('jauno valsti:')); ?></b>
<form method="POST" action="<?php echo e(action([App\Http\Controllers\CountryController::class, 'store'])); ?>">
<?php echo csrf_field(); ?>
<label for="name"><?php echo e(__('Valsts nosaukums:')); ?> </label>
<input type="string" name="name" id="name">
<br>
<br>
<label for="code">    <?php echo e(__('Valsts kods:')); ?> </label>
<input type="string" name="code" id="code">
<br>
<br>
<label for="about"> <?php echo e(__('Apraksts:')); ?> </label>
<input type="text" name="about" id="about">
<br>
<br>
<input type="submit" class="button" value="<?php echo e(__('Add')); ?>">

</form>
</body>
</html>
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/country_new.blade.php ENDPATH**/ ?>