<?php $__env->startSection('title'); ?>
    <title>Jual <?php echo e($product->name); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
                    <h2><?php echo e($product->name); ?></h2>
					<div class="page_link">
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="#"><?php echo e($product->name); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_product_img">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo e($product->name); ?></h3>
                        <h2>Rp <?php echo e(number_format($product->price)); ?></h2>
						<ul class="list">
							<li>
								<a class="active" href="#">
                                    <span>Kategori</span> : <?php echo e($product->category->name); ?></a>
							</li>
						</ul>
						<p>
							<?php if(auth()->guard('customer')->check()): ?>
							<label>Afiliasi Link</label>
							<input type="text" 
								value="<?php echo e(url('/product/ref/' . auth()->guard('customer')->user()->id . '/' . $product->id)); ?>" 
								readonly class="form-control">
							<?php endif; ?>
						</p>
						<form action="<?php echo e(route('front.cart')); ?>" method="POST">
							<?php echo csrf_field(); ?>
							<div class="product_count">
								<label for="qty">Quantity:</label>
								<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
								<input type="hidden" name="product_id" value="<?php echo e($product->id); ?>" class="form-control">
								<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
								class="increase items-count" type="button">
									<i class="lnr lnr-chevron-up"></i>
								</button>
								<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
								class="reduced items-count" type="button">
									<i class="lnr lnr-chevron-down"></i>
								</button>
							</div>
							<div class="card_area">
								<button class="main_btn">Add to Cart</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="color: black">
					<?php echo $product->description; ?>

				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Berat</h5>
									</td>
									<td>
                                        <h5><?php echo e($product->weight); ?> gr</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Harga</h5>
									</td>
									<td>
										<h5>Rp <?php echo e(number_format($product->price)); ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Kategori</h5>
									</td>
									<td>
										<h5><?php echo e($product->category->name); ?></h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.ecommerce', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\ngambing.com\resources\views/ecommerce/show.blade.php ENDPATH**/ ?>