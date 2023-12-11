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
							<a class="nav-link" href="/karyawan">Karyawan</a>
						</li>
		
						<li class="nav-item" style="margin-right: 50px;"> <!-- Tambahkan margin-right di sini -->
							<a class="nav-link active" aria-current="page" href="/index">UTS</a>
						</li>
		
						<li class="nav-item" style="margin-right: 50px;"> <!-- Tambahkan margin-right di sini -->
							<a class="nav-link" href="/pegawai">Pegawai</a>
						</li>
		
						<li class="nav-item" style="margin-right: 50px;"> <!-- Tambahkan margin-right di sini -->
							<a class="nav-link" href="/masker">Masker</a>
						</li>

						<li class="nav-item" style="margin-right: 70px;"> <!-- Tambahkan margin-right di sini -->
							<a class="nav-link" href="/nilaikuliah">Nilai Kuliah</a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							  Database
							</a>
							<div class="dropdown-menu">
							  <a class="dropdown-item" href="/pegawai">Pegawai</a>
							  <a class="dropdown-item" href="/masker">Masker</a>
							  <a class="dropdown-item" href="/nilaikuliah">Nilai Kuliah</a>
							</div>
						  </li>

					</ul>
					
		
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
	{{-- <footer>
		<p>&copy; <a href="https://www.malasngoding.com">Dewi Maharani</a>. PWEB D</p>
	</footer> --}}

	<section class="footer d-flex align-items-center py-lg-0 py-5 mx-3">
		<div class="container">
		  <div class="row d-flex justify-content-between">
			<div class="col col-lg-5 col-12 mb-lg-0 mb-4">
			  <h3 class="fw-bold">This is me Rani.</h3>
			  <p class="mb-0">Thank you for visiting my web, nice to meet you and see you soon</p>
			</div>
			<div class="col col-lg-2 col-12 d-flex flex-column mb-lg-0 mb-4">
			  <h5 class="fw-bold">Menu</h5>
			  <a class="text-decoration-none mb-2" href="/karyawan">Karyawan</a>
			  <a class="text-decoration-none mb-2" href="/index">UTS</a>
			  <a class="text-decoration-none mb-2" href="/pegawai">Pegawai</a>
			  <a class="text-decoration-none mb-2" href="/masker">Masker</a>
			  <a class="text-decoration-none" href="/nilaikuliah">Nilai Kuliah</a>
			</div>
			<div class="col col-lg-2 col-12 d-flex flex-column">
			  <h5 class="fw-bold">Follow Me</h5>
			  <a class="text-decoration-none mb-2" href="https://www.instagram.com/dwmhr1.2_/"target="_blank">Instagram</a>
			  <a class="text-decoration-none mb-2" href="https://www.linkedin.com/in/dewi-maharani-274366209/"target="_blank">LinkedIn</a>
			  <a class="text-decoration-none" href="https://twitter.com/pinocio12_"target="_blank">Twitter</a>
			</div>
			<div class="col col-lg2 col-12 d-flex flex-column">
			  <a class="fw-bold" href="https://www.instagram.com/dwmhr1.2_/"target="_blank">Contact Me.</a>
			</div>
		  </div>
		</div>
	  </section>
</div>

</body>
</html>