@extends('layouts.user')

@section('content')

  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <br><br>
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-6">
							<img alt="Bootstrap Image Preview" src="{{asset('img/parents-matter.jpg')}}" class="img-thumbnail" />
						</div>
						<div class="col-md-6">
							<ul>
								<li class="list-item ">
									<strong>Judul : </strong>Parent-child math anxiety and math-gender stereotypes predict adolescents' math education outcomes
								</li>
                <hr>
                <li class="list-item ">
									<strong>Ringkasan : </strong>Two studies examined social determinants of adolescents' math anxiety including parents' own math anxiety and children's endorsement of math-gender stereotypes. In Study 1, parent-child dyads were surveyed and the interaction between parent and child math anxiety was examined, with an eye to same- and other-gender dyads. Results indicate that parent's math anxiety interacts with daughters' and sons' anxiety to predict math self-efficacy, GPA, behavioral intentions, math attitudes, and math devaluing. Parents with lower math anxiety showed a positive relationship to children's math outcomes when children also had lower anxiety. The strongest relationships were found with same-gender dyads, particularly Mother-Daughter dyads. Study 2 showed that endorsement of math-gender stereotypes predicts math anxiety (and not vice versa) for performance beliefs and outcomes (self-efficacy and GPA). Further, math anxiety fully mediated the relationship between gender stereotypes and math self-efficacy for girls and boys, and for boys with GPA. These findings address gaps in the literature on the role of parents' math anxiety in the effects of children's math anxiety and math anxiety as a mechanism affecting performance. Results have implications for interventions on parents' math anxiety and dispelling gender stereotypes in math classrooms.
								</li>
                <hr>
								<li class="list-item ">
									<strong>Pengarang : </strong><cite>Casad, Bettina J; Hale, Patricia; Wachs, Faye L</cite>
								</li>
                <li class="list-item ">
									<strong>Penerbit : </strong>Regina Group
								</li>
								<li class="list-item ">
									<strong>Category : </strong>Technology
								</li>
								<li class="list-item ">
									<strong>Status : </strong><span style="color:green">tersedia</span>
								</li>

							</ul> <a href="#" class="btn btn-block btn-link" type="button" data-toggle="modal" data-target="#exampleModal">Pinjam</a>
						</div>
					</div>
				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peminjaman buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin meminjam buku ini?<br><br>
        Lama peminjaman adalah 5 hari kerja<br>
        Denda keterlambatan adalah Rp. 500,00- per hari<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#resiModal">Pinjam</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="resiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resi peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1>RES123</h1><br><br>
        Simpan nomor resi ini lalu tunjukan pada pustakawan untuk mendapatkan pinjaman buku
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#resiModal">Pinjam</button> -->
      </div>
    </div>
  </div>
</div>

@endsection
