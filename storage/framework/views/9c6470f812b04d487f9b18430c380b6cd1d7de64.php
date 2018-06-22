<?php $__env->startSection('content'); ?>
    <h1>This is Index page <?php echo e($title); ?></h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>