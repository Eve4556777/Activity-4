<!DOCTYPE html>
<html>
<head>
    <title>Universes</title>
</head>
<body>
    <h1>Universes</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Company</th>
                <th>Era</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $universes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $universe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($universe->id); ?></td>
                <td><?php echo e($universe->universe); ?></td>
                <td><?php echo e($universe->company); ?></td>
                <td><?php echo e($universe->era); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\activity4_superheroes\resources\views/universes.blade.php ENDPATH**/ ?>