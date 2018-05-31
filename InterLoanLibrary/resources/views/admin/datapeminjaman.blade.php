@extends('layouts.admin')
@section('content')
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3>Data Peminjaman</h3>
            </div>
            <div class="card-body">
              <div class="dropdown">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Kelola berdasarkan
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" style="color: green">Sedang Meminjam</a>
                    <a class="dropdown-item" style="color:#E9E900 ">Menunggu Pengambilan</a>
                    <a class="dropdown-item" style="color:red">Melebihi Waktu</a>
                  </div>
                </div>
                <br>
              <!-- <p style="color:red">*Pencarian berdasarkan judul ID Peminjaman dan status</p> -->
              <input class="form-control" id="myInput" type="text" placeholder="Search..">
              <br><br>
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>id Peminjaman</th>
                    <th>id Pemustaka</th>
                    <th>id Buku</th>
                    <th>status</th>
                    <th>Operasi</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                  <tr>
                    <td>RES123</td>
                    <td>05111540000024</td>
                    <td>IF1012</td>
                    <td style="color:green">2 hari lagi</td>
                    <td>
                      <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#perpanjang">Perpanjang</a>
                      <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal">Selesai</a>
                    </td>
                  </tr>
                  <tr>
                    <td>RES100</td>
                    <td>05111540000150</td>
                    <td>KIM103</td>
                    <td style="color:red">Melebihi tenggat waktu</td>
                    <td>
                      <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#perpanjang">Perpanjang</a>
                      <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal">Selesai</a>
                    </td>
                  </tr>
                  <tr>
                    <td>RES051</td>
                    <td>05111540000170</td>
                    <td>MCN002</td>
                    <td style="color:#E9E900">Menunggu Pengambilan</td>
                    <td>
                      <button class="btn btn-info">Pinjamkan</button>
<!--                       <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#perpanjang">Perpanjang</a>
                      <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal">Selesai</a>
 -->                    </td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>

				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Form pengembalian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- <h4 class="modal-title">Modal Header</h4> -->
      </div>
      <div class="modal-body row">
        <div class="col-sm-4">
          <p>Pemustaka</p>
          <p>Buku</p>
          <p>Tgl peminjaman</p>
          <p>Tgl pengembalian</p>
          <p>Hari ini</p>
          <p>Total denda</p>
        </div>
        <div class="col-sm-8">
          <p>: Brama Dhiwangkara</p>
          <p>: The Great Gatsby</p>
          <p>: Kamis, 01 Januari 2018</p>
          <p>: Rabu, 07 Januari 2018</p>
          <p>: Jumat, 09 Januari 2018</p>
          <p>: Rp. 1.000,00-</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Kembalikan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>

<div id="perpanjang" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Form perpanjangan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- <h4 class="modal-title">Modal Header</h4> -->
      </div>
      <div class="modal-body row">
        <div class="col-sm-4">
          <p>Pemustaka</p>
          <p>Buku</p>
          <p>Tgl peminjaman</p>
          <p>Tgl pengembalian</p>
          <p>Perpanjang hingga</p>
          <p>Hari ini</p>
          <p>Total denda</p>
        </div>
        <div class="col-sm-8">
          <p>: Muhammad Firza Gustama</p>
          <p>: The Great Gatsby</p>
          <p>: Kamis, 03 Januari 2018</p>
          <p>: Jumat, 09 Januari 2018</p>
          <p>: Jumat, 16 Januari 2018</p>
          <p>: Jumat, 09 Januari 2018</p>
          <p>: Rp. 0,00-</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Perpanjang</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection
