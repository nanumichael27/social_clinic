<div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion " id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <div class="sb-nav-link-icon"><i class=" fa fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="{{ route('createorder') }}">
                            <div class="sb-nav-link-icon"><i class="fa fa-plus"></i></div>
                            Create Order
                        </a>
                        <a class="nav-link" href="{{ route('orders') }}">
                            <div class="sb-nav-link-icon"><i class="fa fa-list"></i></div>
                            All Orders
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa fa-wallet"></i></div>
                            Wallet
                            <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('fundwallet') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-landmark"></i></div>
                                Fund Wallet</a>
                                <!-- <a class="nav-link" href="{{ route('fundmanual') }}">Manual Payment</a>
                                <a class="nav-link" href="{{ route('fundcrypto') }}">Bitcoin Payment</a> -->
                                <a class="nav-link" href="{{ route('paymenthistory') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-history"></i></div>
                                Payment History</a>
                            </nav>
                        </div>
                        <!-- <a class="nav-link" href="api_documentation">
                            <div class="sb-nav-link-icon"><i class="fa fa-plug"></i></div>
                            API Documentation
                        </a> -->
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                </div>
            </nav>
        </div>