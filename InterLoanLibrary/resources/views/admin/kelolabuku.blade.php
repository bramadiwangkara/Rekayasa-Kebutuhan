@extends('layouts.admin')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-12">
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
              </div>
              <div class="col-md-3">
              </div>
              <div class="col-md-3">
                <a style="margin-left: 150px" href="#" class="btn btn-success" data-toggle="modal" data-target="#buku">Tambah Buku</a>
              </div>
            </div>

            <hr>
            <!-- <p style="color:red">*Pencarian berdasarkan judul Buku dan Pengarang</p> -->
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            <br>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>id buku</th>
                  <th>Kode buku</th>
                  <th>Judul</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>Tahun terbit</th>
                  <th>Lokasi</th>
                  <th>Jumlah</th>
                  <th>Operasi</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <tr>
                  <td>51001</td>
                  <td>ISBN 978-602-8519</td>
                  <td>The Art of Fielding</td>
                  <td>Chad Harmlat</td>
                  <td>Chad Group</td>
                  <td>2007</td>
                  <td>Teknik Informatika</td>
                  <td>1</td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#editbuku" class="btn btn-info">Ubah</a>
                    <a href="#" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
                <tr>
                  <td>41001</td>
                  <td>ISBN 098-452-8669</td>
                  <td>Catherine The Great</td>
                  <td>Robert K.Massie</td>
                  <td>Robert Group</td>
                  <td>1998</td>
                  <td>Sistem Informasi</td>
                  <td>3</td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#editbuku" class="btn btn-info">Ubah</a>
                    <a href="#" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
                <tr>
                  <td>21001</td>
                  <td>ISBN 999-112-0119</td>
                  <td>The Great Gatsby</td>
                  <td>F.Scott FitzGerald</td>
                  <td>Chad Group</td>
                  <td>2005</td>
                  <td>Fakultas Teknik Perkapalan</td>
                  <td>1</td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#editbuku" class="btn btn-info">Ubah</a>
                    <a href="#" class="btn btn-danger">Hapus</a>
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



<div id="buku" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">Form Tambah Buku</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="#">
          <div class="form-group">
            <label class="control-label col-sm-2" for="judul_buku">Judul:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="pwd" placeholder="Judul Buku" name="pwd">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="judul_buku">Pengarang:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="pwd" placeholder="Pengarang Buku" name="pwd">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="judul_buku">Penerbit:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="pwd" placeholder="Penerbit Buku" name="pwd">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="judul_buku">Tahun:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="pwd" placeholder="Tahun terbit Buku" name="pwd">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="judul_buku">Lokasi:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="pwd" placeholder="Lokasi Buku" name="pwd">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="judul_buku">Jumlah:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="pwd" placeholder="Jumlah Buku" name="pwd">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="judul_buku">Abstraksi:</label>
            <div class="col-sm-10">          
              <textarea type="text" class="form-control" id="pwd" placeholder="Abstraksi Buku" name="pwd" rows="5"></textarea> 
            </div>
          </div>
          <div class="form-group right">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-dark">Scan Barcode</button>
            </div>
        </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Tambahkan</button>
            </div>
          </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>


<div id="editbuku" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">Edit Buku : The Art of Fielding </h4>
      </div>
      <div class="modal-body">
                <form class="form-horizontal" action="#">
          <div class="form-group">
            <label class="control-label col-sm-2" for="judul_buku">Judul:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="pwd" value="The Art of Fielding" name="pwd">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="judul_buku">Pengarang:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="pwd" value="Chad Harmlat" name="pwd">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="judul_buku">Penerbit:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="pwd" value="Chad Group" name="pwd">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="judul_buku">Tahun:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="pwd" value="2007" name="pwd">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="judul_buku">Lokasi:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="pwd" value="Teknik Informatika" name="pwd">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="judul_buku">Jumlah:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="pwd" value="1" name="pwd">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="judul_buku">Abstraksi:</label>
            <div class="col-sm-10">          
              <textarea type="text" class="form-control" id="pwd" name="pwd" rows="5">"The Art of Fielding is a 2011 novel by American author Chad Harbach. It centers on the fortunes of shortstop Henry Skrimshander and his career playing college baseball with the fictional Westish College Harpooners"</textarea> 
            </div>
          </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            </div>
          </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">tutup</button>
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
