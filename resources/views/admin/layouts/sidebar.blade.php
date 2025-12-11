<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                @if(Auth::user()->admin == 1)
                <li class="menu-title" key="t-menu">Information</li>

                <li>
                    <a href="/admin" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Home</span>
                    </a>
                </li>

                <li>
                    <a href="https://so-you-start.ru/update/" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Актуальные обновления</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/users" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Пользователи</span>
                    </a>
                </li>

                <li class="menu-title" key="t-menu">Wallet</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Пополнения</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/deps/1" key="t-product-detail">Успешные <span class="badge rounded-pill bg-success float-end">{{\App\Payment::where('status', 1)->count()}}</span></a></li>
                        <li><a href="/admin/deps/0" key="t-products">В ожидании <span class="badge rounded-pill bg-warning float-end">{{\App\Payment::where('status', 0)->count()}}</span></a></li>
                    </ul>
                </li>

                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Withdrawы</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/withdraws/0" key="t-products">В ожидании <span class="badge rounded-pill bg-warning float-end">{{\App\Withdraw::where('status', 0)->count()}}</span></a></li>
                        <li><a href="/admin/withdraws/1" key="t-product-detail">Успешные <span class="badge rounded-pill bg-success float-end">{{\App\Withdraw::where('status', 1)->count()}}</span></a></li>
                        <li><a href="/admin/withdraws/2" key="t-orders">Отклоненные <span class="badge rounded-pill bg-danger float-end">{{\App\Withdraw::where('status', 2)->count()}}</span></a></li>
                        <!-- <li><a href="/admin/withdraws/3" key="t-customers">Processing у плат. <span class="badge rounded-pill bg-secondary float-end">{{\App\Withdraw::where('status', 3)->count()}}</span></a></li> -->
                    </ul>
                </li>
                @endif
                <li class="menu-title" key="t-menu">Promo codeы</li>

                
                <li>
                    <a href="/admin/promo" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Денежные</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/dep_promo" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">К депозиту</span>
                    </a>
                </li>

                
                @if(Auth::user()->admin == 1)
                <li class="menu-title" key="t-menu">Settings</li>

                <li>
                    <a href="/admin/settings" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Settings сайта</span>
                    </a>
                </li>



                <li>
                    <a href="/admin/systems_deposit" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Системы пополнения</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/systems_withdraw" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Системы вывода</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/anti" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Антиминус</span>
                    </a>
                </li>


                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
