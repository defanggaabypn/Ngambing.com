<?php $__env->startSection('title'); ?>
    <title>Daftar Komisi - Ngambing.com</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Daftar Komisi</h2>
					<div class="page_link">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="<?php echo e(route('customer.affiliate')); ?>">Daftar Komisi</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Login Box Area =================-->
	<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php echo $__env->make('layouts.ecommerce.module.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
				<div class="col-md-9">
                    <div class="row">
						<div class="col-md-12">
							<div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Komisi Afiliasi</h4>
                                </div>
								<div class="card-body">

                                    <?php if(session('error')): ?>
                                        <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                                    <?php endif; ?>

                                    <?php if(session('success')): ?>
                                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                                    <?php endif; ?>

									<div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Invoice</th>
                                                    <th>Penerima</th>
                                                    <th>Komisi</th>
                                                    <th>Status</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
                                                <tr>
                                                    <td>
                                                        <strong><?php echo e($row->invoice); ?></strong><br>
                                                        <?php if($row->return_count == 1): ?>
                                                        <small>Return: <?php echo $row->return->status_label; ?></small>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($row->customer_name); ?></td>
                                                    <td>Rp <?php echo e(number_format($row->commission)); ?></td>
                                                    <td><?php echo $row->ref_status_label; ?></td>
                                                    <td><?php echo e($row->created_at); ?></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">Tidak ada komisi</td>
                                                </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="float-right">
                                        <?php echo $orders->links(); ?>

                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.ecommerce', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\ngambing.com\resources\views/ecommerce/affiliate.blade.php ENDPATH**/ ?>