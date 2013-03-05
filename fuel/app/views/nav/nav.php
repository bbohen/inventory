<div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="<?= Uri::base()?>">We Distribute Furniture</a>
          <ul class= "nav pull-right">
          <?php if ( $account ): ?>
          <p class="nav-notice navbar-text pull-left"> Logged in as <?= $account->email ?> </p>     
        		<li><?= Html::anchor('manifest', 'Inventory') ?></li>
        		<li><?= Html::anchor('logout', 'Logout') ?></li>
          <?php else: ?>
          	<li><a class="login-link navbar-text pull-right" href="user_landing">
             	Distributor Log In
          	</a></li>
          <?php endif; ?>  
      	  </ul>
          
        </div>
      </div>
    </div>