@extends('layouts.layout')
@section('content')
<br>
<div class="container-fluid">
    <div class="col-lg-10">
    <div class="card">
         <div class="header">
            <h3 class="title"><font color="white">Tambah Kandidat</font></h3>
         </div>
        <div class="content">
            <div class="row">
    		{{ Form::open(array('route' => 'candidates.store', 'files' => true)) }}
            <div class="col-lg-12">
            <div class="col-lg-4">
            	<div class="form-group">
    			{{ Form::text('name', $value = null, $attributes = array('required', 'class' => 'form-control','placeholder' => 'Nama')) }}
    			{{ $errors->first('name') }}
    			</div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                {{ Form::email('email', $value = null, $attributes = array('required', 'class' => 'form-control', 'placeholder' => 'email@email.com')) }}
                {{ $errors->first('email') }}
                </div>
            </div>
            <div class="col-lg-2">
            	<div class="form-group">
                {{ Form::text('born', $value = null, $attributes = array('required', 'class' => 'form-control', 'id' => 'datepicker', 'placeholder' => 'Tanggal Lahir')) }}
    			</div>
            </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <div class="form-group">
                    {{ Form::textarea('address', $value = null, $attributes = array('required', 'class' => 'form-control','placeholder' => 'Alamat')) }}
                    {{ $errors->first('address') }}
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-5">
                	<div class="form-group">
        			{{ Form::textarea('visi', $value = null, $attributes = array('required', 'class' => 'form-control', 'placeholder' => 'VISI')) }}
        			{{ $errors->first('visi') }}
        			</div>
                </div>
            <div class="col-lg-5">
            	<div class="form-group">
    			{{ Form::textarea('misi', $value = null, $attributes = array('required', 'class' => 'form-control', 'placeholder' => 'MISI')) }}
    			{{ $errors->first('misi') }}
    			</div>
            </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <div class="form-group">
                    {{ Form::file('image', $value = null, $attributes = array('required', 'class' => 'form-control')) }}
                    {{ $errors->first('image') }}
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-5">
                <div class="form-group">
                {{ Form::submit('Simpan', array('class'=>'btn btn-primary btn-primary')) }}
                </div>
                </div>
            </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
    </div>
</div>
<!-- JS Custom -->
<script type="text/javascript">
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy/mm/dd'
    });
  } );
</script>
@stop