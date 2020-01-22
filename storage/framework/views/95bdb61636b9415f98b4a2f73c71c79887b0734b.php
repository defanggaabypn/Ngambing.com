<?php $__env->startSection('title'); ?>
    <title>Detail pesanan</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">View Order</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Detail pesanan

                                <div class="float-right">
                                    <?php if($order->status == 1 && $order->payment->status == 0): ?>
                                    <a href="<?php echo e(route('orders.approve_payment', $order->invoice)); ?>" class="btn btn-primary btn-sm">Terima Pembayaran</a>
                                    <?php endif; ?>
                                </div>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Detail Pelanggan</h4>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="30%">Nama Pelanggan</th>
                                            <td><?php echo e($order->customer_name); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Telp</th>
                                            <td><?php echo e($order->customer_phone); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td><?php echo e($order->customer_address); ?> <?php echo e($order->customer->district->name); ?> - <?php echo e($order->customer->district->city->name); ?>, <?php echo e($order->customer->district->city->province->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Order Status</th>
                                            <td><?php echo $order->status_label; ?></td>
                                        </tr>
                                        <?php if($order->status > 1): ?>
                                        <tr>
                                            <th>Nomor Resi</th>
                                            <td>
                                                <?php if($order->status == 2): ?>
                                                <form action="<?php echo e(route('orders.shipping')); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="input-group">
                                                        <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                                                        <input type="text" name="tracking_number" placeholder="Masukkan Nomor Resi" class="form-control" required>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-secondary" type="submit">Kirim</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php else: ?>
                                                <?php echo e($order->tracking_number); ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endif; ?>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <h4>Detail Pembayaran</h4>
                                    <?php if($order->status != 0): ?>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="30%">Nama Pengirim</th>
                                            <td><?php echo e($order->payment->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Bank Tujuan</th>
                                            <td><?php echo e($order->payment->transfer_to); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Transfer</th>
                                            <td><?php echo e($order->payment->transfer_date); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Bukti Pembayaran</th>
                                            <td><a target="_blank" href="<?php echo e(asset('storage/payment/' . $order->payment->proof)); ?>">Lihat</a></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td><?php echo $order->payment->status_label; ?></td>
                                        </tr>
                                    </table>
                                    <?php else: ?>
                                    <h5 class="text-center">Belum Konfirmasi Pembayaran</h5>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-12">
                                    <h4>Detail Produk</h4>
                                    <table class="table table-borderd table-hover">
                                        <tr>
                                            <th>Produk</th>
                                            <th>Quantity</th>
                                            <th>Harga</th>
                                            <th>Berat</th>
                                            <th>Subtotal</th>
                                        </tr>
                                        <?php $__currentLoopData = $order->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($row->product->name); ?></td>
                                            <td><?php echo e($row->qty); ?></td>
                                            <td>Rp <?php echo e(number_format($row->price)); ?></td>
                                            <td><?php echo e($row->weight); ?> gr</td>
                                            <td>Rp <?php echo e($row->qty * $row->price); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\ngambing.com\resources\views/orders/view.blade.php ENDPATH**/ ?>