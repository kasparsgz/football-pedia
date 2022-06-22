<!DOCTYPE html>
<html>
<head>
<title>New country</title>
</head>
<body>
Input the information about the <b>new country:</b>
<form method="POST" action="<?php echo e(action([App\Http\Controllers\CountryController::class, 'store'])); ?>">
<?php echo csrf_field(); ?>
<label for="name">Country Name: </label>
<input type="string" name="name" id="name">
<br>
<br>
<label for="code">Country Code: </label>
<input type="string" name="code" id="code">
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
<?php /**PATH C:\wamp64\www\football-pedia\resources\views/country_new.blade.php ENDPATH**/ ?>