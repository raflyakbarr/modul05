<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Controller & View pada laravel</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <div class="container text-center my-5">
        <h1>Belajar Controller & View pada Laravel</h1>
        
        <img class="img-thumbnail" alt="image" src="<?php echo e(Vite::asset('resources/images/laravel.png')); ?>">
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a href="home" class="btn btn-dark">Home</a>
            </div>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\rosi\raflycv\resources\views/welcome.blade.php ENDPATH**/ ?>