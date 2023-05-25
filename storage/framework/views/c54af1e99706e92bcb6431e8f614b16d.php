<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="<?php echo e(route('home')); ?>"><i class="bi-hexagon-fill me-2"></i> Data Master </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto">
                        <a class="nav-link active" href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    <li class="nav-item col-2 col-md-auto">
                        <a class="nav-link" href="<?php echo e(route('employees.index')); ?>">Employee List</a>
                    </li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a class="btn btn-outline-light my-2 ms-md-auto" href="<?php echo e(route('profile')); ?>"><i class="bi-person-circle me-1"></i>My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a class="btn btn-primary" href="<?php echo e(route('employees.create')); ?>">Create Employee</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Positions</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($employee->firstname); ?></td>
                            <td><?php echo e($employee->lastname); ?></td>
                            <td><?php echo e($employee->email); ?></td>
                            <td><?php echo e($employee->age); ?></td>
                            <td><?php echo e($employee->position_name); ?></td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-outline-dark btn-sm me-2" href="<?php echo e(route('employees.show',['employee' => $employee->employee_id])); ?>"><i class="bi-person-lines-fill"></i></a>
                                    <a class="btn btn-outline-dark btn-sm me-2" href="<?php echo e(route('employees.edit',['employee'=>$employee->employee_id])); ?>"><i class="bi-pencil-square"></i></a>
                                    <div>
                                        <form method="POST" action="<?php echo e(route('employees.destroy', ['employee'=>$employee->employee_id])); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\rosi\raflycv\resources\views/employee/index.blade.php ENDPATH**/ ?>