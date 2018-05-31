@extends('layouts.admin')
@section('content')
<div class="container">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
  		<li class="nav-item">
    		<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Peminjaman</a>
  		</li>
  		<li class="nav-item">
    		<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Buku</a>
  		</li>
	</ul>
	<div class="tab-content" id="myTabContent">
  		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  			<form role="form">
            	<div class="form-group row">
                    <label class="col-lg-2 col-form-label form-control-label">Lama peminjaman</label>
                    <div class="col-lg-2">
                        <input class="form-control" type="number" value="5">
                    </div>
                    <label class="col-lg-2 col-form-label form-control-label">Hari</label>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label form-control-label">Denda</label>
                    <div class="col-lg-2">
                        <input class="form-control" type="number" value="500">
                    </div>
                    <label class="col-lg-2 col-form-label form-control-label">Rupiah</label>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="button" class="btn btn-primary" value="Ubah">
                    </div>
                </div>
            </form>
  		</div>
  		<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  			<form role="form">
  				<div class="form-group row">
  					<label class="col-lg-2 col-form-label form-control-label">Artikel</label>
  					<div class="col-lg-2">
  						<select class="form-control">
  							<option>boleh</option>
  							<option>tidak</option>
  						</select>
  					</div>
  					<label class="col-lg-2 col-form-label form-control-label">dipinjamnkan</label>
  				</div>
  				<div class="form-group row">
  					<label class="col-lg-2 col-form-label form-control-label">Artikel</label>
  					<div class="col-lg-2">
  						<select class="form-control">
  							<option>boleh</option>
  							<option>tidak</option>
  						</select>
  					</div>
  					<label class="col-lg-2 col-form-label form-control-label">dipinjamnkan</label>
  				</div>
  				<div class="form-group row">
  					<label class="col-lg-2 col-form-label form-control-label">Buku</label>
  					<div class="col-lg-2">
  						<select class="form-control">
  							<option>boleh</option>
  							<option>tidak</option>
  						</select>
  					</div>
  					<label class="col-lg-2 col-form-label form-control-label">dipinjamnkan</label>
  				</div>
  				<div class="form-group row">
  					<label class="col-lg-2 col-form-label form-control-label">Jurnal</label>
  					<div class="col-lg-2">
  						<select class="form-control">
  							<option>boleh</option>
  							<option>tidak</option>
  						</select>
  					</div>
  					<label class="col-lg-2 col-form-label form-control-label">dipinjamnkan</label>
  				</div>
  				<div class="form-group row">
  					<label class="col-lg-2 col-form-label form-control-label">Buku Tugas AKhir</label>
  					<div class="col-lg-2">
  						<select class="form-control">
  							<option>boleh</option>
  							<option>tidak</option>
  						</select>
  					</div>
  					<label class="col-lg-2 col-form-label form-control-label">dipinjamnkan</label>
  				</div>
  				<div class="form-group row">
  					<label class="col-lg-2 col-form-label form-control-label">Majalah</label>
  					<div class="col-lg-2">
  						<select class="form-control">
  							<option>boleh</option>
  							<option>tidak</option>
  						</select>
  					</div>
  					<label class="col-lg-2 col-form-label form-control-label">dipinjamnkan</label>
  				</div>
  				<div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="button" class="btn btn-primary" value="Ubah">
                    </div>
                </div>
  			</form>
  		</div>
	</div>
</div>
@endsection