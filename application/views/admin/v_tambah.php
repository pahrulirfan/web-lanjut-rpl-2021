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

		<a href="<?= site_url('backend/index') ?>" class="btn btn-info">Semua Data</a>
		<hr>

		<div class="row">
			<div class="col-6">

				<form action="<?=site_url('backend/proses_tambah')?>" method="post">

					<div class="mb-3">
						<label>NIS</label>
						<input type="text" class="form-control" name="txtnis">
					</div>

					<div class="mb-3">
						<label>Nama</label>
						<input type="text" class="form-control" name="txtnama">
					</div>

					<div class="mb-3">
						<label>Alamat</label>
						<textarea class="form-control" rows="3" name="txtalamat"></textarea>
					</div>
					<input type="submit" class="btn btn-primary" value="Simpan Data">

				</form>
			</div>
		</div>
</body>

</html>
