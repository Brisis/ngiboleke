<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <!-- Template CSS -->
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="index.html" class="brand-wrap">
                <img src="assets/imgs/theme/logo.svg" class="logo" alt="Evara Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item">
                    <a class="menu-link" href="index.html"> <i class="icon material-icons md-home"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-products-list.html"> <i class="icon material-icons md-shopping_bag"></i>
                        <span class="text">Products</span>
                    </a>
                    <div class="submenu">
                        <a href="page-products-list.html">Product List</a>
                        <a href="page-products-grid.html">Product grid</a>
                        <a href="page-products-grid-2.html">Product grid 2</a>
                        <a href="page-categories.html">Categories</a>
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-orders-1.html"> <i class="icon material-icons md-shopping_cart"></i>
                        <span class="text">Orders</span>
                    </a>
                    <div class="submenu">
                        <a href="page-orders-1.html">Order list 1</a>
                        <a href="page-orders-2.html">Order list 2</a>
                        <a href="page-orders-detail.html">Order detail</a>
                    </div>
                </li>
                <li class="menu-item has-submenu active">
                    <a class="menu-link" href="page-sellers-cards.html"> <i class="icon material-icons md-store"></i>
                        <span class="text">Sellers</span>
                    </a>
                    <div class="submenu">
                        <a href="page-sellers-cards.html">Sellers cards</a>
                        <a href="page-sellers-list.html" class="active">Sellers list</a>
                        <a href="page-seller-detail.html">Seller profile</a>
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-form-product-1.html"> <i class="icon material-icons md-add_box"></i>
                        <span class="text">Add product</span>
                    </a>
                    <div class="submenu">
                        <a href="page-form-product-1.html">Add product 1</a>
                        <a href="page-form-product-2.html">Add product 2</a>
                        <a href="page-form-product-3.html">Add product 3</a>
                        <a href="page-form-product-4.html">Add product 4</a>
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-transactions-1.html"> <i class="icon material-icons md-monetization_on"></i>
                        <span class="text">Transactions</span>
                    </a>
                    <div class="submenu">
                        <a href="page-transactions-1.html">Transaction 1</a>
                        <a href="page-transactions-2.html">Transaction 2</a>
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="#"> <i class="icon material-icons md-person"></i>
                        <span class="text">Account</span>
                    </a>
                    <div class="submenu">
                        <a href="page-account-login.html">User login</a>
                        <a href="page-account-register.html">User registration</a>
                        <a href="page-error-404.html">Error 404</a>
                    </div>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-reviews.html"> <i class="icon material-icons md-comment"></i>
                        <span class="text">Reviews</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-brands.html"> <i class="icon material-icons md-stars"></i>
                        <span class="text">Brands</span> </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" disabled href="#"> <i class="icon material-icons md-pie_chart"></i>
                        <span class="text">Statistics</span>
                    </a>
                </li>
            </ul>
            <hr>
            <ul class="menu-aside">
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="#"> <i class="icon material-icons md-settings"></i>
                        <span class="text">Settings</span>
                    </a>
                    <div class="submenu">
                        <a href="page-settings-1.html">Setting sample 1</a>
                        <a href="page-settings-2.html">Setting sample 2</a>
                    </div>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-blank.html"> <i class="icon material-icons md-local_offer"></i>
                        <span class="text"> Starter page </span>
                    </a>
                </li>
            </ul>
            <br>
            <br>
        </nav>
    </aside>
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform">
                    <div class="input-group">
                        <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                        <button class="btn btn-light bg" type="button"> <i class="material-icons md-search"></i></button>
                    </div>
                    <datalist id="search_terms">
                        <option value="Products">
                        <option value="New orders">
                        <option value="Apple iphone">
                        <option value="Ahmed Hassan">
                    </datalist>
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn-icon" href="#">
                            <i class="material-icons md-notifications animation-shake"></i>
                            <span class="badge rounded-pill">3</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage" aria-expanded="false"><i class="material-icons md-public"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                            <a class="dropdown-item text-brand" href="#"><img src="assets/imgs/theme/flag-us.png" alt="English">English</a>
                            <a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-fr.png" alt="Français">Français</a>
                            <a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-jp.png" alt="Français">日本語</a>
                            <a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-cn.png" alt="Français">中国人</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="assets/imgs/people/avatar2.jpg" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="#"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account Settings</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help center</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <section class="content-main">
            <div class="content-header">
                <h2 class="content-title">Sellers list</h2>
                <div>
                    <a href="#" class="btn btn-primary"><i class="material-icons md-plus"></i> Create new</a>
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input type="text" placeholder="Search..." class="form-control">
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <select class="form-select">
                                <option>Status</option>
                                <option>Active</option>
                                <option>Disabled</option>
                                <option>Show all</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <select class="form-select">
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                            </select>
                        </div>
                    </div>
                </header> <!-- card-header end// -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Seller</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Registered</th>
                                    <th class="text-end"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar1.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><template class="__cf_email__" data-cfemail="55303930343b3a276765676515302d34382539307b363a38">[email&#160;protected]</template></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar2.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Mary Monasa</h6>
                                                <small class="text-muted">Seller ID: #129</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><template class="__cf_email__" data-cfemail="d7bab8b9b6bbbea4b697b2afb6baa7bbb2f9b4b8ba">[email&#160;protected]</template></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>11.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar3.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Jonatan Ive</h6>
                                                <small class="text-muted">Seller ID: #400</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><template class="__cf_email__" data-cfemail="b9d4cbd3d6d1d7f9dcc1d8d4c9d5dc97dad6d4">[email&#160;protected]</template></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar4.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><template class="__cf_email__" data-cfemail="6a0f060f0b040518585a585a2a0f120b071a060f44090507">[email&#160;protected]</template></td>
                                    <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                                    <td>08.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar1.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Albert Pushkin</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><template class="__cf_email__" data-cfemail="c6b5a9aba3a9a8a386abbfaba7afaae8a5a9ab">[email&#160;protected]</template></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>20.11.2019</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar2.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Alexandra Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><template class="__cf_email__" data-cfemail="f5909990949b9a87c7c5c7c5b5908d9498859990db969a98">[email&#160;protected]</template></td>
                                    <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                                    <td>08.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar3.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><template class="__cf_email__" data-cfemail="5a3f363f3b343528686a686a1a3f223b372a363f74393537">[email&#160;protected]</template></td>
                                    <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                                    <td>08.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar4.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Alex Pushkina</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><template class="__cf_email__" data-cfemail="20414c455860474d41494c0e4f5247">[email&#160;protected]</template></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar1.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><template class="__cf_email__" data-cfemail="cda8a1a8aca3a2bffffdfffd8da8b5aca0bda1a8e3aea2a0">[email&#160;protected]</template></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar2.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><template class="__cf_email__" data-cfemail="e5808980848b8a97d7d5d7d5a5809d8488958980cb868a88">[email&#160;protected]</template></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table> <!-- table-responsive.// -->
                    </div>
                </div> <!-- card-body end// -->
            </div> <!-- card end// -->
            <div class="pagination-area mt-15 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">16</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </section> <!-- content-main end// -->
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                    document.write(new Date().getFullYear())
                    </script> ©, Evara - HTML Ecommerce Template .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/select2.min.js"></script>
    <script src="assets/js/vendors/perfect-scrollbar.js"></script>
    <script src="assets/js/vendors/jquery.fullscreen.min.js"></script>
    <!-- Main Script -->
    <script src="assets/js/main.js" type="text/javascript"></script>
</body>

</html>