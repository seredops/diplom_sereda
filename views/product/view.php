<?php include ROOT . '/views/layouts/header_product.php'; ?>
    <div id="preloader">
        <div class="preloader-area">
            <div class="preloader-box">
                <div class="preloader"></div>
            </div>
        </div>
    </div>


    <section class="header-top-section">
        <div class="container">
            <div class="row">
                <div  class="col-md-6">
                    <div class="header-top-content">
                        <ul class="nav nav-pills navbar-left">
                            <li><a href="#"><i class="pe-7s-call"></i><span>555-55-55</span></a></li>
                            <li><a href="#"><i class="pe-7s-mail"></i><span> andrey_sereda@mail.ru</span></a></li>
                        </ul>
                    </div>
                </div>
                <div  class="col-md-6">
                    <div class="header-top-menu">
                        <ul class="nav nav-pills navbar-right">
                            </li>
                            <?php if (User::isGuest()): ?>
                                <li><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a></li>
                                <li><a href="/user/register"><i class="fa fa-user"></i> Регистрация</a></li>
                            <?php else: ?>
                                <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header class="header-section">
        <img src="../../template/images/favicon.png" >
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Главная</a></li>
                        <li><a href="/catalog/">Натяжные Потолки</a></li>
                        <li><a href="/contacts/">Контакты</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right cart-menu">
                        <li><a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <li><a href="/cart/">(<span id="cart-count"><?php echo Cart::countItems(); ?></span>)<span> Корзина</span> <span class="shoping-cart"> 0</span></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </header>
    <section>
                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="view-product">
                                    <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="product-information"><!--/product-information-->

                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                    <?php endif; ?>

                                    <h2><?php echo $product['name']; ?></h2>
                                    <p>Код товара: <?php echo $product['code']; ?></p>
                                    <span>
                                    <span>US $<?php echo $product['price']; ?></span>
                                    <a href="#" data-id="<?php echo $product['id']; ?>"
                                       class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>В корзину
                                    </a>
                                </span>
                                    <p><b>Наличие:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
                                    <p><b>Производитель:</b> <?php echo $product['brand']; ?></p>
                                </div><!--/product-information-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <br/>
                                <h5>Описание товара</h5>
                                <?php echo $product['description']; ?>
                            </div>
                        </div>
                    </div><!--/product-details-->

                </div>
            </div>
        </div>
    </section>


<?php include ROOT . '/views/layouts/footer_product.php'; ?>