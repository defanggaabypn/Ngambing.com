<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice #<?php echo e($order->invoice); ?></title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: normal;
            /* inherit */
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media  only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }

    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://1.bp.blogspot.com/-gipA0mMoPW4/XhNg6b7VuKI/AAAAAAAAAGM/13shuVIxXIQXDRaBmipgtR9GWZpfpVfZQCLcBGAsYHQ/s500/GG.png" width="150px">
                            </td>

                            <td>
                                Invoice : <strong>#<?php echo e($order->invoice); ?></strong><br>
                                <?php echo e($order->created_at); ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <strong>PENERIMA</strong><br>
                                <?php echo e($order->customer_name); ?><br>
                                <?php echo e($order->customer_phone); ?><br>
                                <?php echo e($order->customer_address); ?><br>
                                <?php echo e($order->district->name); ?>, <?php echo e($order->district->city->name); ?>

                                <?php echo e($order->postal_code); ?><br>
                                <?php echo e($order->district->city->province->name); ?>

                            </td>

                            <td>
                                <strong>PENGIRIM</strong><br>
                                Defangga Aby Vonega Admin Ngambing.com<br>
                                089524345376<br>
                                Dusun V Margaria<br>
                                No 21, Kab Lampung Tengah<br>
                                Lampung
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Produk</td>
                <td>Subtotal</td>
            </tr>

            <?php $__currentLoopData = $order->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="item">
                <td>
                    <?php echo e($row->product->name); ?><br>
                    <strong>Harga</strong>: Rp <?php echo e(number_format($row->price)); ?> x <?php echo e($row->qty); ?>

                </td>
                <td>Rp <?php echo e(number_format($row->price * $row->qty)); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <tr class="total">
                <td></td>
                <td>
                    Subtotal: Rp <?php echo e(number_format($order->subtotal)); ?>

                </td>
            </tr>

            <?php if($order->payment): ?>
            <tr class="total">
                <td></td>
                <td>
                    Pembayaran: Rp -<?php echo e(number_format($order->payment->amount)); ?>

                </td>
            </tr>
            <tr>
                <td><strong>Detail Pembayaran</strong></td>
                <td></td>
            </tr>
            <tr>
                <td>Pengirim: <?php echo e($order->payment->name); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Transfer ke: <?php echo e($order->payment->transfer_to); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Tanggal: <?php echo e($order->payment->transfer_date); ?></td>
                <td></td>
            </tr>
            <?php endif; ?>
        </table>
    </div>
</body>

</html>
<?php /**PATH F:\ngambing.com\resources\views/ecommerce/orders/pdf.blade.php ENDPATH**/ ?>