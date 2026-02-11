<!DOCTYPE html>
<html>
<head>
    <title>Superpowers</title>
</head>
<body>
    <h1>Superpowers</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $superpowers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $power): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($power->id); ?></td>
                <td><?php echo e($power->name); ?></td>
                <td><?php echo e($power->description); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\activity4_superheroes\resources\views/superpowers.blade.php ENDPATH**/ ?>