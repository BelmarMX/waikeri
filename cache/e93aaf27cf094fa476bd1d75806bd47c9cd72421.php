<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $__env->yieldContent('title'); ?></title>
	<?php echo $__env->yieldPushContent('css'); ?>
</head>
<body>
	<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	<?php echo $__env->yieldPushContent('js'); ?>
	<script src="<?php echo e(assets('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH /Volumes/Cloud/Server/apache/waikeri/views/layouts/site.blade.php ENDPATH**/ ?>