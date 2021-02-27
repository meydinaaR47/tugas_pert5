<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>

	<div class="card" style="width: 18rem;">
		<img class="card-img-top" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
		<div class="card-body">
			<p class="card-text"><?= $user['email']; ?><small class="text-muted">Member since
					<?= date('d F Y', $user['date_created']); ?></small></p>
		</div>
	</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
