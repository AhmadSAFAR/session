<?php 
require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>

<?php $cart = [];     
if (isset($_GET['add_to_cart']))
{   
    $_SESSION['cart'][] = $_GET['add_to_cart'];     }
    ?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $id.'-'.$cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <p><?=number_format($cookie['price'],2) ; ?>€</p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                                    
                    </figcaption>
                </figure>
                
            </div>
        <?php } ?>
    </div>
    <p class="botoun"><a  href="sign_out.php">déconnexion</a></p>
   
</section>
<?php require 'inc/foot.php'; ?>
