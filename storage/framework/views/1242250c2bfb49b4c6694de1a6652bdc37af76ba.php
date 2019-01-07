<?php $__env->startSection('content'); ?>
 
	<router-view></router-view>
 
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>