@extends('layouts.master')

@section('content')


		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
		@endif
		<div class="row">
		<div class="col-6">
			<h1>Data Siswa</h1>
		</div>
		<div class="col-6">
						<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
			  Tambah data siswa
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			       <form action="/siswa/create" method="POST">
			       	{{csrf_field()}}
					  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Depan</label>
						    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
					  </div>
					  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Belakang</label>
						    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
					  </div>

					  <div class="form-group">
						    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
						    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
						      <option value="L">Laki-Laki</option>
						      <option value="P">Perempuan</option>
						    </select>
				  		</div>

				  		<div class="form-group">
						    <label for="exampleInputEmail1">Agama</label>
						    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
					  </div>

					  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
					  </div>
					  <div class="form-group">
						    <label for="exampleInputEmail1">Nomor telepon</label>
						    <input name="nomor_telepon" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor telepon">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Alamat</label>
					    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>


					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Pesan</label>
					    <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	<table class="table table-hover"> 
		<tr>
			<th>NAMA DEPAN</th>
			<th>NAMA BELAKANG</th>
			<th>JENIS KELAMIN</th>
			<th>AGAMA</th>
			<th>EMAIL</th>
			<th>NOMOR TELEPON</th>
			<th>ALAMAT</th>
			<th>PESAN</th>
			<th>AKSI</th>
		</tr>

		@foreach($data_siswa as $siswa) <!-- foreach adalah untuk pengulangan --> <!-- data_siswa as siswa adalah banyak nya data siswa untuk 1 siswa -->
		<tr>
			<td>{{$siswa -> nama_depan}}</td>
			<td>{{$siswa -> nama_belakang}}</td>
			<td>{{$siswa -> jenis_kelamin}}</td>
			<td>{{$siswa -> agama}}</td>
			<td>{{$siswa -> email}}</td>
			<td>{{$siswa -> nomor_telepon}}</td>
			<td>{{$siswa -> alamat}}</td>
			<td>{{$siswa -> pesan}}</td>
			<td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
			<td><a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('yakin mau di hapus ?')">Delete</a></td>
		</tr>
		@endforeach
	</table>	
		</div>
	</div>
	
	@endsection