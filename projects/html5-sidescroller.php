<?php include '../inc/header.php'; ?>
<div class="whitespace"></div>
<!-- About Project -->
<div class='row-fluid'>
	<div class='span12 mainDiv'>
		<div class='topImgDesc'>
			<div class='row-fluid'>
				<div class='span9 textImgDesc'>
					
						<h1 class='projectText ptH1'>HTML5 Sidescroller</h1>
						<p class='projectText ptP'>
							This is a description. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
						</p>
						<a href="#joinUsModal" role="button" class="btn btn-large btn-success" data-toggle="modal">Join us!</a>
				</div>
				<div class='span3 actionImgDesc pagination-centered'>
					<div class='task-container'>
						<fieldset>
							<p class='tasks'>Tasks</p>
							<hr>
							<ol class="taskList">
								<!-- Each Link will go to the appropriate forum post -->
								<li><a href='#'>First Task</a></li>
								<hr>
								<li><a href='#'>Second Task</a></li>
								<hr>
								<li><a href='#'>Third Task</a></li>
								<hr>
								<li><a href='#'>Fourth Task</a></li>
								<hr>
								<li><a href='#'>Fifth Task</a></li>
								<hr>
							</ol>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="whitespace"></div>
<!--Google Forum Embed-->
<div class='row-fluid'>
	<div class='span12 forum'>
		<iframe id="forum_embed" src="javascript:void(0)" scrolling="no" frameborder="0" width="100%" height='900'>
			<p>
				Visit the Google Group <a href="#">Here</a>.
				<br>
				This should link to the Google Group, it doesn't.
			</p>
		</iframe>
		<script type="text/javascript">
		document.getElementById('forum_embed').src =
		'http://groups.google.com/forum/embed/?place=forum/theopencodexsidescroller'
		+ '&showsearch=true&showpopout=true&showtabs=false&hideforumtitle=false'
		+ '&parenturl=' + encodeURIComponent(window.location.href);
		</script>
	</div>
</div>


<?php include '../inc/footer.php'; ?>