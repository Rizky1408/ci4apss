<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1>Halaman home</h1>

			<div class="jumbotron">
				<h1 class="display-4">Hello, world!</h1>
				<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
				<hr class="my-4">
				<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
				<a class="btn btn-primary btn-lg" href="/pages/about" role="button">Learn more</a>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>