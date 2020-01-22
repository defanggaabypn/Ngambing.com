<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Pendaftaran Anda</title>
</head>

<body>
    <h2>Hai, <?php echo e($customer->name); ?></h2>
    <p>Terima kasih telah melakukan transaksi pada aplikasi kami, berikut password anda:
        <strong><?php echo e($password); ?></strong></p>
    <p>Jangan lupa untuk melakukan verifikasi pendaftaran
        <a href="<?php echo e(route('customer.verify', $customer->activate_token)); ?>">DISINI</a></p>
</body>

</html>
<?php /**PATH F:\ngambing.com\resources\views/emails/register.blade.php ENDPATH**/ ?>