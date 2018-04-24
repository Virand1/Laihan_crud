@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Latihan CRUD</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					@if(Session::has('alert-success'))
					    <div class="alert alert-success">
				            {{ Session::get('alert-success') }}
				        </div>
					@endif
					<a href="{{route('crud.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Kelas</th>
							<th>Jurusan</th>
							<th>Alamat</th>							
							<th>Action</th>
						</tr>
						<?php $no=1; ?>
						@foreach($cruds as $crud)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$crud->nama}}</td>
							<td>{{$crud->kelas}}</td>	
							<td>{{$crud->jurusan}}</td>	
							<td>{{$crud->alamat}}</td>
													
							<td>
								<form method="POST" action="{{ route('crud.destroy', $crud->id) }}" accept-charset="UTF-8">
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            <a href="{{route('crud.edit', $crud->id)}}" class="btn btn-primary">Edit</a>
		                        	<input type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data ?');" value="Delete">
		                        </form>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection