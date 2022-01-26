<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
  	<div class="container-fluid">
	  	<div class="row justify-content-md-center">
	  		<div class="col-8">
	  			<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="#">DATA KARYAWAN</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNav">
			      <ul class="navbar-nav">
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="{{ url('/karyawan') }}">Daftar Karyawan</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="{{ url('/karyawan/create') }}">Tambah Karyawan Baru</a>
			        </li>
			      </ul>
			    </div>
				</nav>
	  		</div>
	  	</div>
  	</div>

	@yield('container')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>