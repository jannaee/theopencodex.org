	<!-- Join Us Modal -->
	<div id="joinUsModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="Join TheOpenCodex" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Join TheOpenCodex</h3>
		</div>
		<div class="modal-body">	
			<form action="/form-submit.php?form=joinUsModal" method="post" class="form-horizontal">
				<fieldset>
					<div class="control-group">
						<!-- Name -->
						<label class="control-label" for="input01">Name</label>
						<div class="controls">
							<input type="text" placeholder="" class="input-xlarge">
							<p class="help-block">Please enter your name.</p>
						</div>
					</div>
					<div class="control-group">
						<!-- Email-->
						<label class="control-label" for="input01">Email</label>
						<div class="controls">
							<input type="email" required placeholder="name@example.com" class="input-xlarge">
							<p class="help-block">Please enter your email</p>
						</div>
					</div>
					<div class="control-group">
						<!-- Design -->
						<label class="control-label">Design</label>
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox" value="Static (2D)">
								Static (2D)
							</label>
							<label class="checkbox">
								<input type="checkbox" value="Static (3D)">
								Static (3D)
							</label>
							<label class="checkbox">
								<input type="checkbox" value="Animation (2D)">
								Animation (2D)
							</label>
							<label class="checkbox">
								<input type="checkbox" value="Animation (3D)">
								Animation (3D)
							</label>
							<label class="checkbox">
								<input type="checkbox" value="Logo design">
								Logo design
							</label>
						</div>
					</div>
					<div class="control-group">
						<!-- Development -->
						<label class="control-label">Development</label>
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox" value="HTML">
								HTML
							</label>
							<label class="checkbox">
								<input type="checkbox" value="CSS">
								CSS
							</label>
							<label class="checkbox">
								<input type="checkbox" value="Javascript">
								Javascript
							</label>
							<label class="checkbox">
								<input type="checkbox" value="jQuery">
								jQuery
							</label>
							<label class="checkbox">
								<input type="checkbox" value="Java">
								Java
							</label>
							<label class="checkbox">
								<input type="checkbox" value="C++">
								C++
							</label>
							<label class="checkbox">
								<input type="checkbox" value="C#">
								C#
							</label>
							<label class="checkbox">
								<input type="checkbox" value="PHP">
								PHP
							</label>
							<label class="checkbox">
								<input type="checkbox" value="Scala">
								Scala
							</label>
						</div>
					</div>
					<div class="control-group">
						<!-- GitHub Handle -->
						<label class="control-label" for="input01">GitHub Handle</label>
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on">@</span>
								<input class="input-xlarge" id="prependedInput" type="text" placeholder="Username">
							</div>
							<p class="help-block">So we can add you to the repo!</p>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<footer class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary">Save changes</button>
		</footer>
	</div>

	<hr>

	<footer class="footer">
		<p>&copy; TheOpenCodex <?php echo date('Y'); ?></p>
		
		<!-- Scripts -->
		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/js/jquery-1.9.1.js"><\/script>')</script>
		<!-- Bootstrap -->
		<script src="/js/bootstrap.js"></script>
		<!-- Add fancyBox -->
		<script type="text/javascript"
		src="../js/vendor/fancybox/jquery.fancybox.pack.js?v=2.1.4"></script>
		<!-- Optionally add helpers - button, thumbnail and/or media 
		<script type="text/javascript"
		src="js/vendor/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript"
		src="js/vendor/fancybox/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
		<script type="text/javascript"
		src="js/vendor/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>-->
		<script src="/js/plugins.js"></script>
		<script src="/js/main.js"></script>
	</footer>

</div><!-- /container -->
</body>
</html>
