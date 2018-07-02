@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/mahasiswas') }}">Mahasiswa</a> :
@endsection
@section("contentheader_description", $mahasiswa->$view_col)
@section("section", "Mahasiswas")
@section("section_url", url(config('laraadmin.adminRoute') . '/mahasiswas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Mahasiswas Edit : ".$mahasiswa->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($mahasiswa, ['route' => [config('laraadmin.adminRoute') . '.mahasiswas.update', $mahasiswa->id ], 'method'=>'PUT', 'id' => 'mahasiswa-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'Name')
					@la_input($module, 'Email')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/mahasiswas') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#mahasiswa-edit-form").validate({
		
	});
});
</script>
@endpush
