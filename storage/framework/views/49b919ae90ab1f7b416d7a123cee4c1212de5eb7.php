<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="nav-icon icon-speedometer"></i> Dashboard
            </a>
        </li>

        <li class="nav-title">MANAJEMEN PRODUK</li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('category.index')); ?>">
                <i class="nav-icon icon-drop"></i> Kategori
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('product.index')); ?>">
                <i class="nav-icon icon-drop"></i> Produk
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('orders.index')); ?>">
                <i class="nav-icon icon-drop"></i> Pesanan
            </a>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="javascript">
                <i class="nav-icon icon-settings"></i> Laporan
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('report.order')); ?>">
                        <i class="nav-icon icon-puzzle"></i> Order
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('report.return')); ?>">
                        <i class="nav-icon icon-puzzle"></i> Return
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav><?php /**PATH F:\ngambing.com\resources\views/layouts/module/sidebar.blade.php ENDPATH**/ ?>