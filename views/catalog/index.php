<?php include ROOT . '/views/layouts/header.php'; ?>
<section class="featured-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>Натяжные потолки</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="filter-menu">
                    <ul class="button-group sort-button-group">
                        <?php foreach ($categories as $categoryItem): ?>
                        <a href="/category/<?php echo $categoryItem['id'];?>">
                            <li class="button active" data-category="all"><?php echo $categoryItem['name']; ?></li></a>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
        <?php foreach ($latestProducts as $product): ?>
        <div class="row featured isotope">
                <div class="col-md-3 col-sm-6 col-xs-12 ">
                    <div class="product-item">
                        <img src="<?php echo Product::getImage($product['id']); ?>" class="img-rounded" width="255" height="322" alt="">
                        <div class="product-title">
                            <a href="/product/<?php echo $product['id']; ?>">
                                <h3><?php echo $product['name']; ?></h3>
                                <span>$<?php echo $product['price']; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
</section>
<?php include ROOT . '/views/layouts/footer.php'; ?>