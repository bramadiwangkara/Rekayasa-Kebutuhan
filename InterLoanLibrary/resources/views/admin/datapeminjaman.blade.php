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
              <p style="color:red">*Pencarian berdasarkan judul ID Reservasi dan status</p>
              <input class="form-control" id="myInput" type="text" placeholder="Search..">
              <br><br>
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>id Reservasi</th>
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
                    <td style="color:green">2 days remaining</td>
                    <td>
                      <a href="#" class="btn btn-warning">Extend</a>
                      <a href="#" class="btn btn-success"><i class="material-icons">done</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>RES100</td>
                    <td>05111540000150</td>
                    <td>KIM103</td>
                    <td style="color:red">past the deadline</td>
                    <td>
                      <a href="#" class="btn btn-warning">Extend</a>
                      <a href="#" class="btn btn-success"><i class="material-icons">done</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>RES051</td>
                    <td>05111540000170</td>
                    <td>MCN002</td>
                    <td style="color:green">0 days remaining</td>
                    <td>
                      <a href="#" class="btn btn-warning">Extend</a>
                      <a href="#" class="btn btn-success"><i class="material-icons">done</i></a>
                    </td>
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
