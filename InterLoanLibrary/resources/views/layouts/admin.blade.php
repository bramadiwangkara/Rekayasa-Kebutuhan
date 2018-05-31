<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <link href="{{ asset('css/tambahan.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <style type="text/css">
    	.nav li a {
		    margin-right: 80px;
		}
    </style>

    {{-- footer --}}

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  </head>
  <body>

    <!-- nav-bar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light my-lg-3">
        <!-- Brand -->
        <a class="navbar-brand" href="/admin">
          <img src="https://upload.wikimedia.org/wikipedia/id/thumb/c/c4/Badge_ITS.png/200px-Badge_ITS.png" width="30" height="30" class="d-inline-block align-top" alt="">
          InterLibraryLoan ITS</a>

              <!-- Links -->
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item">
                  <a class="nav-link" href="/admin/datapeminjaman">Data Peminjaman</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/admin/kelolabuku">Kelola Buku</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/admin/kelolapemustaka">Kelola Pemustaka</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/admin/kelolapustakawan">Kelola Pustakawan</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right mt-lg-0">
            	<li class="dropdown">
		        	<a class="nav-link" data-toggle="dropdown" href="#">#Admin</a>
			        <ul class="dropdown-menu">
			          <!-- <li><a class="nav-link" href="#"></a></li> -->
			          <li><a class="nav-link" href="/index">Index</a></li>
			          <li><a class="nav-link" href="/">Logout</a></li>
			        </ul>
		      	</li>

            </ul>
                

              

            </nav>
    @yield('content')

  <br><br><br>

  <section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Beranda</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Tentang ITS</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Kehidupan Kampus</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Inisiatif</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Riset</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Interloan Library</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Perpustakaan pusat</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Fasilitas Perpustakaan</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Pengembangan diri</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Tentang ITS</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Kantor ITS</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Fasilitas Kampus</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Profil Singkat</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p>Institute Teknology Sepuluh Nopember</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.its.ac.id/en/home/" target="_blank">ITS Surabaya</a></p>
				</div>
				</hr>
			</div>
		</div>
	</section>

  </body>
</html>
