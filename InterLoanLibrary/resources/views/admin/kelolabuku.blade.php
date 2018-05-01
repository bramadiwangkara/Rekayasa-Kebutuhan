@extends('layouts.admin')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"><h3>Kelola Buku</h3></div>
          <div class="card-body">

            <div class="row">
              <div class="col-md-3">
                <div class="dropdown">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Kelola berdasarkan
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Buku Umum</a>
                    <a class="dropdown-item" href="#">Tugas Akhir</a>
                    <a class="dropdown-item" href="#">Proposal</a>
                    <a class="dropdown-item" href="#">PDF</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <button type="button" class="btn btn-success">
                  Tambah buku
                </button>
              </div>
              <div class="col-md-3">
              </div>
              <div class="col-md-3">
              </div>
            </div>

            <hr>
            <p style="color:red">*Pencarian berdasarkan judul Buku dan Pengarang</p>
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            <br>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>id buku</th>
                  <th>Judul</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>Tahun terbit</th>
                  <th>Jumlah</th>
                  <th>Operasi</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <tr>
                  <td>51001</td>
                  <td>The Art of Fielding</td>
                  <td>Chad Harmlat</td>
                  <td>Chad Group</td>
                  <td>2007</td>
                  <td>1</td>
                  <td>
                    <a href="#" class="btn btn-info"><i class="material-icons">update</i></a>
                    <a href="#" class="btn btn-danger"><i class="material-icons">delete</i></a>
                    <a href="#" class="btn btn-dark"><i class="material-icons">picture_as_pdf</i></a>
                    <a href="#" class="btn btn-success"><i class="material-icons">file_download</i></a>
                  </td>
                </tr>
                <tr>
                  <td>41001</td>
                  <td>Catherine The Great</td>
                  <td>Robert K.Massie</td>
                  <td>Robert Group</td>
                  <td>1998</td>
                  <td>3</td>
                  <td>
                    <a href="#" class="btn btn-info"><i class="material-icons">update</i></a>
                    <a href="#" class="btn btn-danger"><i class="material-icons">delete</i></a>
                    <a href="#" class="btn btn-dark"><i class="material-icons">picture_as_pdf</i></a>
                    <a href="#" class="btn btn-success"><i class="material-icons">file_download</i></a>
                  </td>
                </tr>
                <tr>
                  <td>21001</td>
                  <td>The Great Gatsby</td>
                  <td>F.Scott FitzGerald</td>
                  <td>Chad Group</td>
                  <td>2005</td>
                  <td>1</td>
                  <td>
                    <a href="#" class="btn btn-info"><i class="material-icons">update</i></a>
                    <a href="#" class="btn btn-danger"><i class="material-icons">delete</i></a>
                    <a href="#" class="btn btn-dark"><i class="material-icons">picture_as_pdf</i></a>
                    <a href="#" class="btn btn-success"><i class="material-icons">file_download</i></a>
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
