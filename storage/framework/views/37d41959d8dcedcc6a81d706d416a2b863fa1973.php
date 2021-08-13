<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                Sample Data 
            </div>
        </div>
    </div>
</div>

<table border="5">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Operation</td>
    </tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($user['id']); ?></td>
        <td><?php echo e($user['name']); ?></td>
        <td><?php echo e($user['email']); ?></td>
        <td><a href=<?php echo e("delete/".$user['id']); ?>>Delete</a></td> 
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\laragon\www\Finals\resources\views/users/sampledata.blade.php ENDPATH**/ ?>