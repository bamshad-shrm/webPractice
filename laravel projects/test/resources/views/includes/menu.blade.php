<style> 
	.navbar {
		margin-bottom: 0;
		border-radius: 0;
	}
</style>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="http://bamshad-shm.com/">Home</a>
		</div>
		<ul class="nav navbar-nav">
			@include(config('laravel-menu.views.bootstrap-items'), ['items' => $MyNavBar->roots()])
		</ul>
	</div>
</nav>
