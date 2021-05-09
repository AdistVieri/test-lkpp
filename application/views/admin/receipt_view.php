  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<section class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1><?php echo $judul_halaman ?></h1>
  				</div>
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
  						<li class="breadcrumb-item active"><?php echo $judul_halaman ?></li>
  					</ol>
  				</div>
  			</div>
  		</div><!-- /.container-fluid -->
  	</section>

  	<!-- Main content -->
  	<section class="content">
  		<div class="row">
  			<div class="col-md-12">

  				<!-- Default box -->
  				<div class="card">
  					<div class="card-header">
  						<!-- <h3 class="card-title"><?php echo $judul_halaman ?></h3> -->

  						<div class="card-tools">
  							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
  								<i class="fas fa-minus"></i></button>
  							<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
  								<i class="fas fa-times"></i></button>
  						</div>
  					</div>
  					<div class="card-body">

  						<div class="col-md-8">
  							<p style="font-weight: bold;" style="font-size: 30px;">Cek Paket</p>
  							<div class="row">
  								<div class="col-10">
  									<input type="text" id="search-receipt" class="form-control">
  								</div>
  								<div class="col-2">
  									<button class="btn btn-primary" id="search-button"> <i class="fa fa-search"></i> Cari </button>
  								</div>
  							</div>

  							<!-- Expedition Lists -->
  							<div class="mt-2">
  								<div class="row">
  									<div class="form-check mx-2">
  										<input class="form-check-input" type="radio" name="courier" id="JNE Express" value="jne">
  										<label class="form-check-label" for="JNE Express">
  											JNE
  										</label>
  									</div>
  									<div class="form-check mx-2">
  										<input class="form-check-input" type="radio" name="courier" id="Tiki" value="tiki">
  										<label class="form-check-label" for="Tiki">
  											TIKI
  										</label>
  									</div>
  									<div class="form-check mx-2">
  										<input class="form-check-input" type="radio" name="courier" id="Pos Indonesia" value="pos">
  										<label class="form-check-label" for="Pos Indonesia">
  											POS
  										</label>
  									</div>
  									<div class="form-check mx-2">
  										<input class="form-check-input" type="radio" name="courier" id="SiCepat" value="SiCepat">
  										<label class="form-check-label" for="SiCepat">
  											SiCepat
  										</label>
  									</div>
  									<div class="form-check mx-2">
  										<input class="form-check-input" type="radio" name="courier" id="AnterAja" value="anteraja">
  										<label class="form-check-label" for="AnterAja">
  											AnterAja
  										</label>
  									</div>
  									<div class="form-check mx-2">
  										<input class="form-check-input" type="radio" name="courier" id="Ninja" value="ninja">
  										<label class="form-check-label" for="Ninja">
  											Ninja
  										</label>
  									</div>
  									<div class="form-check mx-2">
  										<input class="form-check-input" type="radio" name="courier" id="J&T Express" value="jnt">
  										<label class="form-check-label" for="J&T Express">
  											JNT
  										</label>
  									</div>
  								</div>
  							</div>
  							<!-- End Of Expedition List -->


  							<!-- History -->
  							<div class="row mt-4 bt-1">
  								<p id="history"></p>
  							</div>
  							<hr>
  							<!-- End Of History -->

  							<!-- Summary  -->
  							<div class="row">
  								<div class="col-md-3">
  									<b>Nomor Resi</b><br>
  									<span id="receipt"></span><br>
  									<span id="courier"></span><br>
  									<span id="service"></span>
  								</div>
  								<div class="col-md-3">
  									<b>Tanggal Pengiriman</b><br>
  									<span id="date"></span><br>
  								</div>
  								<div class="col-md-3">
  									<b>Pengirim</b><br>
  									<span id="sender"></span><br>
  									<span id="sender_location"></span><br>
  								</div>
  								<div class="col-md-3">
  									<b>Penerima</b><br>
  									<span id="receiver"></span><br>
  									<span id="receiver_location"></span><br>
  								</div>
  							</div>
  							<hr>
  							<!-- End Of Summary -->

  							<!-- Detail Pengiriman -->
  							<div class="mt-5">
  								<p style="font-weight: bold;">Detil Pengiriman</p>
  								<table class="table table-borderless" id="histories">

  								</table>
  							</div>
  							<!-- End of Detail Pengiriman -->
  						</div>
  					</div>


  					<!-- /.card-body -->

  					<div class="card-footer">

  					</div>
  					<!-- /.card-footer-->


  				</div>
  				<!-- /.card -->

  	</section>
  	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
