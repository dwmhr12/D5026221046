<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')5026221046 - Dewi Maharani</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<div class="container"> 
    <header>
		{{-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<!-- Brand -->
			<a class="navbar-brand" href="#">5026221046 - Dewi Maharani</a>
		  
			<!-- Links -->
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link" href="#">Hai</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Hallo</a>
			  </li>
		  
			  <!-- Dropdown -->
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				  Database
				</a>
				<div class="dropdown-menu">
				  <a class="dropdown-item" href="/pegawai">Pegawai</a>
				  <a class="dropdown-item" href="#">Link 2</a>
				  <a class="dropdown-item" href="#">Link 3</a>
				</div>
			  </li>
			</ul>
		  </nav> --}}
		  <nav class="navbar navbar-expand-lg pt-4">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" style="margin-right:50px;" href="#">5026221046 - Dewi Maharani</a>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
		
						<li class="nav-item" style="margin-right: 50px;"> <!-- Tambahkan margin-right di sini -->
							<a class="nav-link" href="/masker">EAS</a>
						</li>
		
						<li class="nav-item" style="margin-right: 50px;"> <!-- Tambahkan margin-right di sini -->
							<a class="nav-link active" aria-current="page" href="/index">UTS</a>
						</li>
		
						<li class="nav-item" style="margin-right: 50px;"> <!-- Tambahkan margin-right di sini -->
							<a class="nav-link" href="/pegawai">Pegawai</a>
						</li>
		
						<li class="nav-item" style="margin-right: 70px;"> <!-- Tambahkan margin-right di sini -->
							<a class="nav-link" href="/masker">Masker</a>
						</li>
		
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
		
				</div>
			</div>
		</nav>
		
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	@yield('judul_halaman') 
    @yield('header')
    @yield('isihalaman')

    <!-- bagian konten blog -->
	@yield('konten')
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="https://www.malasngoding.com">Dewi Maharani</a>. PWEB D</p>
	</footer>
</div>

</body>
</html>