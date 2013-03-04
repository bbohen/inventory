<div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="<?= Uri::base()?>">We Distribute Furniture</a>     
   	     <?php if ( $account ): ?>
        	<p class="navbar-text pull-right">
        		Your logged in as <?= $account->email ?> <?= Html::anchor('logout', 'Logout?') ?></p>
          <?php else: ?>
          	<a class="login-link navbar-text pull-right" href="user_landing">
             	Distributor Log In
          	</a>
          <?php endif; ?>  
          
        </div>
      </div>
    </div>