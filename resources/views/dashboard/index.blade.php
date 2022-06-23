@extends('_layouts.default')

@section('script-top')
	<style>
		a:link, a:visited {
			color:#0d2244;
			text-decoration: none;
		}
	</style>
@endsection

@section('konten')

	
	

	<section class="about_section layout_padding">
	    <div class="container">
	      <h2 class="main-heading ">Cari Loker</h2>
	      <p class="text-center">Yokkk cari pengalaman anda</p>
	     
	      <div class="d-flex mt-5">
	      		<div class="col-md-4">

	      			<div class="card">
	      				<div class="card-body">
	      					<form action="{{route('dashboard.index')}}" method="GET">
	      						<div class="form-group">
									<label for="nama_kota">Nama Kota</label>
					                <select name="nama_kota" id="nama_kota" class="form-control">
					                	<option value="">Pilih Nama Kota</option>
										@if(isset($namakota))
											@foreach($namakota as $index => $item)
												<option value="{{$item}}" {{request('nama_kota') == $item ? 'selected' : ''}}>{{$item}}</option>
											@endforeach
										@endif
					                </select>
								</div>

								<div class="form-group">
								  <label class="control-label" for="focusedInput">Nama Bidang</label>
								  <select class="form-control" id="bidang_id" name="bidang_id">
								  	<option value="">Pilih Bidang</option>
									@if(isset($bidang))
										@foreach($bidang as $index => $item)
											<option value="{{$item->id}}" {{request('bidang_id') == $item->id ? 'selected' : ''}}>{{$item->nama}}</option>
										@endforeach
									@endif
								  </select>
								</div>

								<div class="form-group">
								  <label class="control-label" for="focusedInput">Periode</label>
								  <select class="form-control" name="periode">
								  	<option value="">Pilih Periode</option>
								  	<option value="1" {{request('periode') == 1 ? 'selected' : ''}}>Januari - Juni</option>
								  	<option value="2" {{request('periode') == 2 ? 'selected' : ''}}>Juli - Desember</option>
								  </select>
								</div>

								<div class="form-group">
								  <label class="control-label" for="focusedInput">Tahun</label>
								  <select class="form-control" name="tahun">
								  	{{-- <option value="">Pilih Tahun</option> --}}
								  	@for($i = $tahun; $i >= $tahun_sebelumnya; $i--)
										<option value="{{$i}}" {{request('tahun') == $i ? 'selected' : ''}}>{{$i}}</option>
								  	@endfor
								  </select>
								</div>

								<div class="form-group">
									<button class="btn btn-success btn-md">Cari</button>
								</div>
	      					</form>
	      				</div>
	      			</div>
	      			
		        	</div>
		        <div class="col-md-8">


					@if(isset($lowongan))
						@foreach($lowongan as $index => $item)

							<div class="card mb-3" style="max-width: 540px;">
							  <div class="row g-0">
							    
							    <div class="col-md-12">
							      <div class="card-body">
							        <h5 class="card-title">{{$item->nama_perusahaan}}</h5>
							        <p class="card-text">{{$item->nama_bidang}} | {{$item->nama_kota}}</p>
							        <h6>
							        	@foreach($item->tanggungjawab as $key => $value)
											- {{$value->nama}},
										@endforeach
							        </h6>
							        <p class="card-text"><small class="text-muted">{{$item->tanggal}}</small></p>

							        <a href="{{route('dashboard.show', $item->id)}}">
							        	<button type="button" class="btn btn-primary">Lihat</button>	
							        </a>

							      </div>
							    </div>
							  </div>
							</div>

						@endforeach
					@endif
		        	{{-- <div class="row">
		        		<div class="col-md-12">
		        			<a href="{{url('detail')}}" >
			        			<div class="jumbotron">
					        		<h3>Nama Perusahaan</h3>
					        		<h6>Nama Bidang | Kota Lowongan | Tanggal</h6> <br>
					        		<p>
					        			Penjelasan Lowongan
					        		</p>
					        	</div>
					        </a>
		        		</div>
		        	</div>
		        	<div class="row">
		        		<div class="col-md-12">
		        			<a href="{{url('detail')}}" >
			        			<div class="jumbotron">
					        		<h3>Nama Perusahaan</h3>
					        		<h6>nama Bidang | Kota Lowongan | Tanggal</h6> <br>
					        		<p>
					        			Penjelasan Lowongan
					        		</p>
					        	</div>
					        </a>
		        		</div>
		        	</div>

		        </div>
	      </div>
	    </div>
    </section> 

	<div class="container">
	    <div class="row">
	        <div class="col-md-4"></div>
	        <div class="col-md-8">
				@if(isset($lowongan))
					@foreach($lowongan as $index => $item)
						<div class="row">
							<div class="col-md-12">
								<a href="{{route('dashboard.show', $item->id)}}" >
									<div class="jumbotron">
										<h3>{{$item->nama_perusahaan}}</h3>
										<h5>{{$item->nama_bidang}} | {{$item->nama_kota}} | {{$item->tanggal}}</h6> <br>
										<h6>
											@foreach($item->tanggungjawab as $key => $value)
												{{$value->nama}},
											@endforeach
										</h6>
									</div>
								</a>
							</div>
						</div>
					@endforeach
				@endif
	        	{{-- <div class="row">
	        		<div class="col-md-12">
	        			<a href="{{url('detail')}}" >
		        			<div class="jumbotron">
				        		<h3>Nama Perusahaan</h3>
				        		<h6>Nama Bidang | Kota Lowongan | Tanggal</h6> <br>
				        		<p>
				        			Penjelasan Lowongan
				        		</p>
				        	</div>
				        </a>
	        		</div>
	        	</div>
	        	<div class="row">
	        		<div class="col-md-12">
	        			<a href="{{url('detail')}}" >
		        			<div class="jumbotron">
				        		<h3>Nama Perusahaan</h3>
				        		<h6>nama Bidang | Kota Lowongan | Tanggal</h6> <br>
				        		<p>
				        			Penjelasan Lowongan
				        		</p>
				        	</div>
				        </a>
	        		</div>
	        	</div>
	        </div> --}}
	        {!! $lowongan->links(); !!}
	    </div>
	</div>
@endsection
