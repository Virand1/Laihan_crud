@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Tutorial CRUD Laravel 5.3</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('crud.store')}}" method="post">
					{{csrf_field()}}
						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
							<input type="text" name="nama" class="form-control" placeholder="Nama">
							{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
							<input type="text" name="kelas" class="form-control" placeholder="Kelas">
							{!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('jurusan') ? ' has-error' : '' }}">
							<input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
							{!! $errors->first('jurusan', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
							<input type="text" name="alamat" class="form-control" placeholder="Alamat">
							{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
						</div>
						
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Simpan">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
</script>
@endsection