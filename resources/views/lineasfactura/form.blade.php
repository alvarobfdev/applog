@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('lineasfactura?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active">{{ Lang::get('core.addedit') }} </li>
      </ul>
	  	  
    </div>
 
 	<div class="page-content-wrapper">

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	

		 {!! Form::open(array('url'=>'lineasfactura/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> Líneas Factura</legend>
									
								  <div class="form-group  " >
									<label for="Codemp" class=" control-label col-md-4 text-left"> Codemp </label>
									<div class="col-md-6">
									  {!! Form::text('codemp', $row['codemp'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Cenfac" class=" control-label col-md-4 text-left"> Cenfac </label>
									<div class="col-md-6">
									  {!! Form::text('cenfac', $row['cenfac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Serfac" class=" control-label col-md-4 text-left"> Serfac </label>
									<div class="col-md-6">
									  {!! Form::text('serfac', $row['serfac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Ejefac" class=" control-label col-md-4 text-left"> Ejefac </label>
									<div class="col-md-6">
									  {!! Form::text('ejefac', $row['ejefac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Numfac" class=" control-label col-md-4 text-left"> Numfac </label>
									<div class="col-md-6">
									  {!! Form::text('numfac', $row['numfac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Aplica" class=" control-label col-md-4 text-left"> Aplica </label>
									<div class="col-md-6">
									  {!! Form::text('aplica', $row['aplica'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Numlin" class=" control-label col-md-4 text-left"> Numlin </label>
									<div class="col-md-6">
									  {!! Form::text('numlin', $row['numlin'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Feccal" class=" control-label col-md-4 text-left"> Feccal </label>
									<div class="col-md-6">
									  {!! Form::text('feccal', $row['feccal'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Descri" class=" control-label col-md-4 text-left"> Descri </label>
									<div class="col-md-6">
									  {!! Form::text('descri', $row['descri'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Bastar" class=" control-label col-md-4 text-left"> Bastar </label>
									<div class="col-md-6">
									  {!! Form::text('bastar', $row['bastar'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Unitas" class=" control-label col-md-4 text-left"> Unitas </label>
									<div class="col-md-6">
									  {!! Form::text('unitas', $row['unitas'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Import" class=" control-label col-md-4 text-left"> Import </label>
									<div class="col-md-6">
									  {!! Form::text('import', $row['import'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Docref" class=" control-label col-md-4 text-left"> Docref </label>
									<div class="col-md-6">
									  {!! Form::text('docref', $row['docref'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Perseg" class=" control-label col-md-4 text-left"> Perseg </label>
									<div class="col-md-6">
									  {!! Form::text('perseg', $row['perseg'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Seguro" class=" control-label col-md-4 text-left"> Seguro </label>
									<div class="col-md-6">
									  {!! Form::text('seguro', $row['seguro'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Tipalb" class=" control-label col-md-4 text-left"> Tipalb </label>
									<div class="col-md-6">
									  {!! Form::text('tipalb', $row['tipalb'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Txtadi" class=" control-label col-md-4 text-left"> Txtadi </label>
									<div class="col-md-6">
									  {!! Form::text('txtadi', $row['txtadi'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Cabfactu Id" class=" control-label col-md-4 text-left"> Cabfactu Id </label>
									<div class="col-md-6">
									  {!! Form::text('cabfactu_id', $row['cabfactu_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('lineasfactura?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop