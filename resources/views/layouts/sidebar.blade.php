<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-circle" id="gradient" style="font-size: 20px;"></i><span>Admin</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('/dashboard')}}">
                        <i class="bi bi-grid" style="font-size: 15px;"></i><span>Dashboard</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#Devices" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-circle" id="gradient" style="font-size: 20px;"></i><span>Devices</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="Devices" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('/all_devices')}}">
                        <i class="bi bi-grid" style="font-size: 15px;"></i><span>All Devices</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text" id="gradient" style="font-size: 20px;"></i><span>Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('/create_product')}}">
                        <i class="bi bi-plus-square" style="font-size: 15px;"></i><span>Create Product</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/create_category')}}">
                        <i class="bi bi-plus-square" style="font-size: 15px;"></i><span>Create Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/create_unit')}}">
                        <i class="bi bi-plus-square" style="font-size: 15px;"></i><span>Create Unit</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/my_products')}}">
                        <i class="bi bi-box-seam" style="font-size: 15px;"></i><span>My Products</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-upc-scan" style="font-size: 15px;"></i><span>Barcode Print</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/create_tax')}}">
                        <i class="bi bi-percent" style="font-size: 15px;"></i><span>Create Tax</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse" id="gradient" style="font-size: 20px; "></i><span>POS</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-bag-plus" style="font-size: 15px;"></i><span>POS</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/credit_customer')}}">
                        <span><i class="bi bi-people" style="font-size: 15px;"></i>POS Credit Customer</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/reprint_invoice')}}">
                        <span><i class="bi bi-printer" style="font-size: 15px;"></i>Reprint POS Invoice</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/reprint_kot')}}">
                        <span><i class="bi bi-printer" style="font-size: 15px;"></i>Reprint Kot</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/desktop_pos')}}">
                        <span><i class="bi bi-printer" style="font-size: 15px;"></i>Desktop POS</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/pos_return')}}">
                        <span><i class="bi bi-arrow-clockwise" style="font-size: 15px;"></i>POS Return</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear-fill" id="gradient" style="font-size: 20px;"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-bell" style="font-size: 15px;"></i><span>Notifications</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/add_user')}}">
                        <i class="bi bi-person-add" style="font-size: 15px;"></i><span>Add User</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/my_user')}}">
                        <i class="bi bi-people" style="font-size: 15px;"></i><span>My Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/my_info')}}">
                        <i class="bi bi-info-circle" style="font-size: 15px;"></i><span>My Info</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/banners')}}">
                        <i class="bi bi-tag" style="font-size: 15px;"></i><span>Banners</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/subscribers')}}">
                        <i class="bi bi-people" style="font-size: 15px;"></i><span>Subscribers</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/menu_qr')}}">
                        <i class="bi bi-qr-code-scan" style="font-size: 15px;"></i><span>Menu QR</span>
                    </a>
                </li>
                <li>
                    <a href="social_links.php">
                        <i class="bi bi-link-45deg" style="font-size: 15px;"></i><span>Social Links</span>
                    </a>
                </li>
                <li>
                    <a href="payment_qr.php">
                        <i class="bi bi-cash-coin" style="font-size: 15px;"></i><span>Payment QR</span>
                    </a>
                </li>
                <li>
                    <a href="discount_coupon.php">
                        <i class="bi bi-percent" style="font-size: 15px;"></i><span>Discount Coupon</span>
                    </a>
                </li>
                <li>
                    <a href="my_logo.php">
                        <i class="bi bi-tag" style="font-size: 15px;"></i><span>My Logo</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#restaurant-nav" data-bs-toggle="collapse" href="#">
                <i class="fa fa-cutlery fa-fw w3-margin-right" id="gradient"></i><span>Restaurant</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="restaurant-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="createtable.php">
                        <i class="fa fa-plus-square fa-fw w3-margin-right" style="font-size: 15px;"></i><span>Create Table</span>
                    </a>
                </li>
                <li>
                    <a href="table_ordering.php">
                        <i class="fa fa-edit fa-fw w3-margin-right" style="font-size: 15px;"></i><span>Table Ordering</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-cash-coin" id="gradient" style="font-size: 20px;"></i><span>Finance</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="opening_balance.php">
                        <i class="bi bi-plus-square" style="font-size: 15px;"></i><span>Opening Balance</span>
                    </a>
                </li>
                <li>
                    <a href="add_voucher_type.php">
                        <i class="bi bi-plus-square" style="font-size: 15px;"></i><span>Add Voucher Type</span>
                    </a>
                </li>
                <li>
                    <a href="debit_voucher.php">
                        <i class="bi bi-plus-square" style="font-size: 15px;"></i><span>Debit Voucher</span>
                    </a>
                </li>
                <li>
                    <a href="credit_voucher.php">
                        <i class="bi bi-plus-square" style="font-size: 15px;"></i><span>Credit Voucher</span>
                    </a>
                </li>
                <li>
                    <a href="closing_balance.php">
                        <i class="bi bi-plus-square" style="font-size: 15px;"></i><span>Closing Balance</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->
    </ul>
</aside>
