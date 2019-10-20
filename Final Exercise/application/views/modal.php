<div id="loginbox" class="modal">
	<div class="modal-container">
		<a href="#close" class="anywhere-close"></a>
		<div>
			<!-- <a href="#close" title="Close" class="close">&times;</a> -->
			<h2>Login</h2>

			<!-- <form class="form-login" action="#close" method="get"> -->
			<?php echo form_open('login', 'class="form-login" action="#close"');?>
				<input type="text" name="loginUsername" placeholder="Username" required><br>
				<input type="password" name="loginPassword" placeholder="Password" required><br>
				<button type="submit">Login</button>
			<!-- </form> -->
			<?php echo form_close();?>
		</div>
	</div>
</div>