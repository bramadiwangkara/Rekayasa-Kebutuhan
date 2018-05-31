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
                <h3>Kelola Pustakawan</h3>
            </div>
            <div class="card-body">
              <!-- <p style="color:red">*Pencarian berdasarkan judul Nama dan NIP</p> -->
              <input class="form-control" id="myInput" type="text" placeholder="Search..">
              <br>
              <a href="#" data-toggle="modal" data-target="#tambahpustakawan" class="btn btn-success"><i class="material-icons">add</i>Tambah Pustakawan</a>
              <br><br>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <!-- <th>id Pustakawan</th> -->
                    <th>NIP</th>
                    <th>Nama Pustakawan</th>
                    <th>Status</th>
                    <th>Operasi</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                  <tr>
                    <!-- <td>001</td> -->
                    <td>199789098123</td>
                    <td>Naufal P.F</td>
                    <td>Pustakawan</td>
                    <td>
                      <a href="#" data-toggle="modal" data-target="#editpustakawan" class="btn btn-info">Ubah</a>
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <!-- <td>002</td> -->
                    <td>199689098345</td>
                    <td>Findryan Kurnia </td>
                    <td>Admin</td>
                    <td>
                      <a href="#" data-toggle="modal" data-target="#editpustakawan" class="btn btn-info">Ubah</a>
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <!-- <td>002</td> -->
                    <td>199789098123</td>
                    <td>Superman </td>
                    <td>Pustakawan</td>
                    <td>
                      <a href="#" data-toggle="modal" data-target="#editpustakawan" class="btn btn-info">Ubah</a>
                      <a href="#" class="btn btn-danger">Hapus</a>
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



<div id="tambahpustakawan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">Tambah Pustakawan</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>



<div id="editpustakawan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">Edit Pustakawan: Naufal P.F</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
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
