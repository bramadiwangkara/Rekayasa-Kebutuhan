@extends('layouts.master')
@section('content')
        </nav>

        <!-- nav-bar end -->

        <!-- carlhouse start -->
        <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
          <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/book1.jpg') }}" alt="Los Angeles" width="1100" height="500">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/book2.jpg') }}" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                  <h2>Tomorrow's innovation</h2>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/book3.jpg') }}" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                  <h2>Manage your future</h2>
                  <p>We love being success!</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
        <div class="col-md-1">
        </div>
        </div>



          <!-- carlhouse end -->

          <br>
          <hr>
          <!--search book -->


          <div class="i-am-centered">
          <div class="row" >
            <div class="col-md-2">
            </div>
            <div class="col-md-8 ">
              <br>
              <h3 style="text-align:center;">"Life without books is like a body without a Soul"</h3>
              <p style="text-align:center;">Pencarian dengan nama buku, pengarang buku, penerbit buku dan lain lain ... </p>
              <br>
              <form class="" action="/listbook">
               <input style="max-width: 500px" class="form-control" type="text" placeholder="Cari buku, proposal, Tugas akhir , dll ...">
               <br>
               <div style="text-align:center;">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
              </form>
              <br>
              <hr>
                <h5 style="text-align:center;">10.000+ journals | 15.000+ Buku Umum | <span><br></span> 1.500+ referensi Tugas Akhir</h5>
              <br>
            </div>
            <div class="col-md-2">
            </div>
          </div>
          </div>
          <!--search book end -->

        <br>
        <br>

        <!--resources start-->
        <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
          <h3>Resources</h3>
          <div class="row">
            <div class="col-md-3 border-kanan">
              <h5>Pemustaka</h5>
              <a href="#">Register Online</a>
              <br>
              <a href="#">Learn about how to access</a>
            </div>
            <div class="col-md-3 border-kanan">
              <h5>Pustakawan</h5>
              <a href="#">Manage book</a>
              <br>
              <a href="#">Manage member</a>
            </div>
            <div class="col-md-3 border-kanan">
              <h5>Kepala Perpustakaan</h5>
              <a href="#">Manage policy</a>
              <br>
              <a href="#">Manage Pemustaka</a>
            </div>
            <div class="col-md-3 border-kanan">
              <h5>Pendukung</h5>
              <a href="#">Security</a>
              <br>
              <a href="#">Payment</a>
            </div>
          </div>
        </div>
        <div class="col-md-1">
        </div>
        </div>
@endsection
