<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

	<div class="container">

		<a href="<?= site_url('backend/tambah') ?>" class="btn btn-info mt-2">Tambah Data</a>
		<hr>

		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($isi as $row) {
				?>
					<tr>
						<td> <?= $no++; ?> </td>
						<td> <?= $row->nis; ?> </td>
						<td> <?= $row->nama; ?> </td>
						<td> <?= $row->alamat; ?> </td>
						<td>
							<a onclick="return confirm('Anda Yakin ?')"  href="<?= site_url('backend/hapus/' . $row->id) ?>" class="btn btn-danger">Del</a>

							<a href="<?= site_url('backend/edit/' . $row->id) ?>" class="btn btn-warning">Edit</a>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>

</body>

</html>
