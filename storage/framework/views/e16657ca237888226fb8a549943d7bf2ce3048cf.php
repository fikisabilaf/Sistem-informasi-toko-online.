<?php $__env->startSection('css'); ?>
	<link type="text/css" rel="stylesheet" href="http://localhost/blog/public/css/style.css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Pembayaran</h4>
			<div class="site-pagination">
				<a href="<?php echo e(route('home')); ?>">Home</a> /
				<a href="#">Pembayaran</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<!-- checkout section  -->
	<section class="section spad">
		<div class="container">
        <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div id="hot-post" class="row hot-post">
                <div class="col-12 hot-post-left">
                    <div class="post post-row">
                        <a class="post-img"><img src="<?php echo e(asset($data->mobil->gambar)); ?>"></a>
                        <div class="post-body">
                            <h3 class="post-title"><?php echo e($data->namaMobil($data->mobil_id)); ?></h3>
                            <h3 class="post-title">Quantity: <?php echo e($data->quantity); ?></h3>
                            <h3 class="post-title">Total: $ <?php echo e(number_format( $data->total , 0)); ?></h3>
                            <h3 class="post-title">Status: 
                                <?php if($data->payment_status == 'Sudah Dibayar'): ?>
                                    <span class="badge badge-success"><?php echo e($data->payment_status); ?></span>
                                <?php elseif($data->payment_status == 'Belum Dibayar'): ?>
                                    <span class="badge badge-danger"><?php echo e($data->payment_status); ?></span>
                                <?php else: ?>
                                    <span class="badge badge-warning text-white"><?php echo e($data->payment_status); ?></span>
                                <?php endif; ?>
                            </h3>
                            <ul class="post-meta">
                                <li><?php echo e($data->created_at->format('l, H:i:s d M Y')); ?></li>
                            </ul>
                            <?php if($data->payment_status == 'Belum Dibayar'): ?>
                                <form action="<?php echo e(route('order.destroy', $data->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <a href="<?php echo e(route('pembayaran', $data->id)); ?>" class="btn btn-primary btn-sm mr-2" style="width: 100px;">Bayar</a>
                                    <button type="submit" class="btn btn-danger btn-sm" style="width: 100px;" name="button" onclick="return confirm('Yakin');">Cancel</button>
                                </form>
                            <?php elseif($data->payment_status == 'Dipending'): ?>
                                <form action="<?php echo e(route('order.destroy', $data->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" style="width: 100px;" name="button" onclick="return confirm('Yakin');">Cancel</button>
                                </form>
                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</section>
	<!-- checkout section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_frontend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Toko-Online-Laravel\resources\views/user/history.blade.php ENDPATH**/ ?>