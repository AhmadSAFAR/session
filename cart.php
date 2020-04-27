<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php';?>
<?php
if (empty($_SESSION['loginname'])){
    header("location:login.php");
} 

$quantities = array_count_values($_SESSION['cart']);?>
<section class="cookies container-fluid">
<p class="botoun"><a  href="sign_out.php">déconnexion</a></p>
    <div class="row bg danger">
       <table class="table">
          <thead>
              <tr>
                  <th>Réf.</th>
                  <th>Produit</th>
                  <th>Prix Uitaire</th>
                  <th>Quantité</th>
                  <th>Prix Totale</th>
             </tr>
          </thead>
          <tbody>
          <?php $totalprice = 0;?>
             <?php  foreach ($quantities as $id => $quantity ){?>
                <?php $cookie= $catalog[$id]; ?>
                
            
              <tr>
                  <td><?= $id;?></td>
                  <td><?= $cookie['name'];?></td>
                  <td><?= number_format($cookie['price'],2) ;?>€</td>
                  <td><?= $quantity;?></td>
                  <td><?= number_format($cookie['price']*$quantity,2);?>€</td>
                  <?= $totalprice += $cookie['price']*$quantity; ?>
              </tr>
             <?php } ?>
          </tbody>
          <tfoot>
              <tr>
                  <td colspan="4">TOTALE</td>
                  <td><?= number_format($totalprice,2) ;?>€</td>
              </tr>
          </tfoot>
       </table>
    </div>
</section>

<?php require 'inc/foot.php'; ?>
