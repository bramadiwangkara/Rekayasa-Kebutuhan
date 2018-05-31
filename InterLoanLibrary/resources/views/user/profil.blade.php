@extends('layouts.user')
@section('content')
<div class="card">
    <div class="card-body">
    <div class="container">
        <div class="row my-2">
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Riwayat peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Ubah password</a>
                    </li>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active" id="profile">
                        <h5 class="mb-3">Profil</h5>
                        <div class="row">
                            <div class="col-md-12 row">
                                <div class="col-md-4">
                                	<p>NIP/NRP</p>
                                	<p>Nama</p>
                                	<p>Email</p>
                                	<p>Alamat</p>
                                	<p>Jurusan</p>
                                	<p>Fakultas</p>
                                	<p>Tahun masuk</p>
                                </div>
                                <div class="col-md-8">
                                	<p>: 05111540000150</p>
                                	<p>: Brama Dhiwangkara</p>
                                	<p>: ndutank46@gmail.com</p>
                                	<p>: Bumi Marina Emas Timur 4 no 45</p>
                                	<p>: Teknik Informatika</p>
                                	<p>: FTIF</p>
                                	<p>: 2015</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5 class="mt-2">Status Peminjaman</h5>
                                <table class="table table-sm table-hover table-striped">
                                    <tbody>                                    
                                        <tr>
                                            <td>
                                                <strong> 12/01/18 </strong> - <strong> 17/01/18 </strong> buku <strong>`Data Mining`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong> 13/01/18 </strong> - <strong> 18/01/18 </strong> artikel <strong>`Graph`</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="tab-pane" id="messages">
                        <!-- <div class="alert alert-info alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                        </div> -->
                        <table class="table table-hover table-striped">
                            <tbody>                                    
                                <tr>
                                    <td>
                                       <span class="float-right font-weight-bold">3 jam lalu</span> Meminjam buku `Aljabar Linear` di RBSI
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <span class="float-right font-weight-bold">Yesterday</span> Mengembalikan buku `Kapal Terbang` di RBFTK
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <span class="float-right font-weight-bold">9 Jan</span> Meminjam buku `Interaksi Manusia Komputer` di RBTC
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <span class="float-right font-weight-bold">4 Jan</span> Meminjam buku `Matematika Diskrit` di RBFMIPA
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <span class="float-right font-weight-bold">3 Jan</span> Mengembalikan buku `Mesin Motor` di RBMesin
                                    </td>
                                </tr>
                            </tbody> 
                        </table>
                    </div>
                    <div class="tab-pane" id="edit">
                        <form role="form">
                        	<div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Password lama</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="password" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Password bar</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="password" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Konfirmasi password</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="password" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="reset" class="btn btn-secondary" value="Batal">
                                    <input type="button" class="btn btn-primary" value="Simpan">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center">
                <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                <h6 class="mt-2">Unggah foto lain</h6>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                    <span class="custom-file-control">Pilih foto</span>
                </label>
            </div>
        </div>
    </div>
</div>
</div>
@endsection