<!DOCTYPE html>
<html>
<head>
    <title>Superheroes</title>
</head>
<body>
    <h1>Superheroes</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Real Name</th>
                <th>Gender</th>
                <th>Universe ID</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $superheroes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($hero->id); ?></td>
                <td><?php echo e($hero->name); ?></td>
                <td><?php echo e($hero->real_name); ?></td>
                <td><?php echo e($hero->gender); ?></td>
                <td><?php echo e($hero->universe_id); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\activity4_superheroes\resources\views/superheroes.blade.php ENDPATH**/ ?>