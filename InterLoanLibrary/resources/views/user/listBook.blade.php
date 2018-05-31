@extends('layouts.user')
@section('content')
<div class="container-fluid">
      	<div class="row">
      		<div class="col-md-12">
      			<div class="row">
      				<div class="col-md-1">
      				</div>
      				<div class="col-md-10">
                <div class="row">
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-6">
                    <br>
                    <form class="" action="/action_page.php">
                     <input style="max-width: 500px text-align:center" class="form-control" type="text" placeholder="Cari buku, proposal, Tugas akhir , dll ...">
                     <br>
                     <div style="text-align:center;">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-3">
                  </div>
                </div>
                <br>
                <h3>List Buku diseluruh ITS</h3>
                <br><hr><br>
      					<div class="row">
      						<div class="col-md-4">
      							<img alt="Bootstrap Image Preview" src="{{asset('img/parents-matter.jpg')}}" class="img-thumbnail" width="250" height="300"/>
                    <hr>
                    <blockquote class="blockquote">
      								<p class="mb-2">
                        Parent-child math anxiety and math-gender stereotypes predict adolescents' math education outcomes
      								</p>
      								<footer class="blockquote-footer">
      									<cite>by</cite> Casad, Bettina J; Hale, Patricia; Wachs, Faye L
      								</footer>
      							</blockquote>
      						</div>
      						<div class="col-md-8">
      							<p>
      								Two studies examined social determinants of adolescents' math anxiety including parents' own math anxiety and children's endorsement of math-gender stereotypes. In Study 1, parent-child dyads were surveyed and the interaction between parent and child math anxiety was examined, with an eye to same- and other-gender dyads. Results indicate that parent's math anxiety interacts with daughters' and sons' anxiety to predict math self-efficacy, GPA, behavioral intentions, math attitudes, and math devaluing. Parents with lower math anxiety showed a positive relationship to children's math outcomes when children also had lower anxiety. The strongest relationships were found with same-gender dyads, particularly Mother-Daughter dyads. Study 2 showed that endorsement of math-gender stereotypes predicts math anxiety (and not vice versa) for performance beliefs and outcomes (self-efficacy and GPA). Further, math anxiety fully mediated the relationship between gender stereotypes and math self-efficacy for girls and boys, and for boys with GPA. These findings address gaps in the literature on the role of parents' math anxiety in the effects of children's math anxiety and math anxiety as a mechanism affecting performance. Results have implications for interventions on parents' math anxiety and dispelling gender stereotypes in math classrooms.
      							</p>
                    <p>
                      <cite>status</cite> : <span style="color:green">Tersedia</span>
                    </p>
                    <a href="/user/listbook/detailbook" class="btn btn-info" role="button">Detail & Peminjaman</a>
      						</div>
      					</div>
                <br><hr><br>
      					<div class="row">
      						<div class="col-md-4">
      							<img alt="Bootstrap Image Preview" src="{{asset('img/informatics-book.jpg')}}" class="img-thumbnail" width="250" height="300"/>
                    <hr>
                    <blockquote class="blockquote">
      								<p class="mb-0">
                        Energy Informatics: Current and Future Research Directions.
      								</p>
                      <br>
      								<footer class="blockquote-footer">
      									<cite>by</cite> Goebel, Christoph; Jacobsen, Hans-Arno; del Razo, Victor
      								</footer>
      							</blockquote>
      						</div>
      						<div class="col-md-8">
      							<p>
      								Due to the increasing importance of producing and consuming energy more sustainably, Energy Informatics (EI) has evolved into a thriving research area within the CS/IS community. The article attempts to characterize this young and dynamic field of research by describing current EI research topics and methods and provides an outlook of how the field might evolve in the future. It is shown that two general research questions have received the most attention so far and are likely to dominate the EI research agenda in the coming years: How to leverage information and communication technology (ICT) to (1) improve energy efficiency, and (2) to integrate decentralized renewable energy sources into the power grid. Selected EI streams are reviewed, highlighting how the respective research questions are broken down into specific research projects and how EI researchers have made contributions based on their individual academic background.
                    </p>
                    <p>
                      <cite>status</cite> : <span style="color:red">Kosong</span>
                    </p>
                    <a href="/user/listbook/detailbook" class="btn btn-info" role="button">Detail & Peminjaman</a>
      						</div>
      					</div>
                <br><hr><br>
                <nav>
      						<ul class="pagination">
      							<li class="page-item">
      								<a class="page-link" href="#">Previous</a>
      							</li>
      							<li class="page-item">
      								<a class="page-link" href="#">1</a>
      							</li>
      							<li class="page-item">
      								<a class="page-link" href="#">2</a>
      							</li>
      							<li class="page-item">
      								<a class="page-link" href="#">3</a>
      							</li>
      							<li class="page-item">
      								<a class="page-link" href="#">4</a>
      							</li>
      							<li class="page-item">
      								<a class="page-link" href="#">5</a>
      							</li>
      							<li class="page-item">
      								<a class="page-link" href="#">Next</a>
      							</li>
      						</ul>
					</nav>
      				</div>
      				<div class="col-md-1">
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
@endsection