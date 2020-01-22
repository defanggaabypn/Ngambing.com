<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan Anda Dikirim <?php echo e($order->invoice); ?></title>
</head>
<body>
    <h2>Hai, <?php echo e($order->customer->name); ?></h2>
    <p>Terima kasih telah melakukan transaksi pada aplikasi kami, berikut nomor resi dari pesanan anda: <strong><?php echo e($order->tracking_number); ?></strong></p>
</body>
</html><?php /**PATH F:\ngambing.com\resources\views/emails/order.blade.php ENDPATH**/ ?>