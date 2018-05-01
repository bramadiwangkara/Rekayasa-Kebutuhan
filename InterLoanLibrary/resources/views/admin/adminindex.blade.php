@extends('layouts.admin')
@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Dashboard Pustakawan</div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                          </div>
                      @endif

                      <div class="row">
                    		<div class="col-md-12">
                    			<div class="row">
                    				<div class="col-md-3">
                              <a href="/admin/datapeminjaman" class="btn btn-info">Data Peminjaman</a>
                    				</div>
                    				<div class="col-md-3">
                    				</div>
                    				<div class="col-md-3">
                    				</div>
                    				<div class="col-md-3">
                    				</div>
                    			</div>
                          <hr>
                    			<div class="row">
                    				<div class="col-md-3">
                    				</div>
                    				<div class="col-md-3">
                              <a href="/admin/kelolabuku" class="btn btn-info">Kelola Buku</a>
                    				</div>
                    				<div class="col-md-3">
                    				</div>
                    				<div class="col-md-3">
                    				</div>
                    			</div>
                          <hr>
                    			<div class="row">
                    				<div class="col-md-3">
                    				</div>
                    				<div class="col-md-3">
                    				</div>
                    				<div class="col-md-3">
                              <a href="/admin/kelolapemustaka" class="btn btn-info">Kelola Pemustaka</a>
                    				</div>
                    				<div class="col-md-3">
                    				</div>
                    			</div>
                          <hr>
                    			<div class="row">
                    				<div class="col-md-3">
                    				</div>
                    				<div class="col-md-3">
                    				</div>
                    				<div class="col-md-3">
                    				</div>
                    				<div class="col-md-3">
                              <a href="/admin/kelolapustakawan" class="btn btn-info">Data Pustakawan</a>
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
