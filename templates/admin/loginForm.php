<?php include "templates/admin/include/adminHeader.php" ?>

	<div class="container-login animated fadeInUp">
      <form id="login" action="admin.php?action=login" method="post">
        <input type="hidden" name="login" value="true" />

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

            <input type="text" name="username" id="username" placeholder="username"/>
            <input type="password" name="password" id="password" placeholder="password"/>
			
        <div class="buttons">
          <input type="submit" id="submit" name="login" value="Login" />
        </div>

      </form>
	</div>

