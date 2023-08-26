    <!-- Menu -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logoDreamshop.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="pp"><a href="/dashboard">Home</a></li>
                            <li class="pp"><a href="/shop">Shop</a></li>
                            <li class="pp"><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/detailProduct">Shop Details</a></li>
                                    <li><a href="/shoppingCart">Shopping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="/logout" onclick="return confirm('Apakah anda yakin akan log out ?')">logout</a></li>
                                    <!-- <li><a href="./blog-details.html">Blog Details</a></li> -->
                                </ul>
                            </li>
                            <li class="pp"><a href="./contact.html">Contacts</a></li>
                            <li class="pp"><a href="/profile">Profile</a></li>
                            <!-- <li><a href="/product/tambah">Add Produk</a></li> -->
                        </ul>
                    </nav>
                </div>
                @if (!Auth::check())
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <!-- <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a> -->
                        <a href="/login" class="warnafont">Log in</a>
                        <a href="/register"class="warnafont">Daftar</a>
                    </div>
                </div>
                @endif
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->