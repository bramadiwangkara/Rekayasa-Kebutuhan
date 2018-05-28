@extends('layouts.admin')
@section('content')
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
          <div class="card">
            <div class="card-header">
                <h3>Kelola Pemustaka</h3>
            </div>
            <div class="card-body">
              <p style="color:red">*Pencarian berdasarkan judul Nama dan NRP</p>
              <input class="form-control" id="myInput" type="text" placeholder="Search..">
              <br>
              <br>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>id Pemustaka</th>
                    <th>NRP</th>
                    <th>Nama Mahasiswa</th>
                    <th>Foto KTM</th>
                    <th>Status</th>
                    <th>Operasi</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                  <tr>
                    <td>0001</td>
                    <td>05111540000150</td>
                    <td>Brama Diwangkara</td>
                    <td>Foto</td>
                    <td>Cekal</td>
                    <td>
                      <a href="#" class="btn btn-secondary">Cekal</a>
                      <a href="#" class="btn btn-success">Clear</a>
                    </td>
                  </tr>
                  <tr>
                    <td>0002</td>
                    <td>05111540000024</td>
                    <td>Widhera Yoza</td>
                    <td>Foto</td>
                    <td>-</td>
                    <td>
                      <a href="#" class="btn btn-warning">Cekal</a>
                      <a href="#" class="btn btn-secondary">Clear</a>
                    </td>
                  </tr>
                  <tr>
                    <td>0003</td>
                    <td>05111540000170</td>
                    <td>Firza Gustama</td>
                    <td>Foto</td>
                    <td>-</td>
                    <td>
                      <a href="#" class="btn btn-warning">Cekal</a>
                      <a href="#" class="btn btn-secondary">Clear</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
				</div>
				<div class="col-md-1">
				</div>
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
