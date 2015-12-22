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
		<li><a href="{{ URL::to('cliente?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'cliente/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> Clientes</legend>
									
								  <div class="form-group  " >
									<label for="Codemp" class=" control-label col-md-4 text-left"> Codemp </label>
									<div class="col-md-6">
									  {!! Form::text('codemp', $row['codemp'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Codcli" class=" control-label col-md-4 text-left"> Codcli </label>
									<div class="col-md-6">
									  {!! Form::text('codcli', $row['codcli'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Nomacc" class=" control-label col-md-4 text-left"> Nomacc </label>
									<div class="col-md-6">
									  {!! Form::text('nomacc', $row['nomacc'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Nomcli" class=" control-label col-md-4 text-left"> Nomcli </label>
									<div class="col-md-6">
									  {!! Form::text('nomcli', $row['nomcli'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Domcli" class=" control-label col-md-4 text-left"> Domcli </label>
									<div class="col-md-6">
									  {!! Form::text('domcli', $row['domcli'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Pobcli" class=" control-label col-md-4 text-left"> Pobcli </label>
									<div class="col-md-6">
									  {!! Form::text('pobcli', $row['pobcli'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Codpos" class=" control-label col-md-4 text-left"> Codpos </label>
									<div class="col-md-6">
									  {!! Form::text('codpos', $row['codpos'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Provin" class=" control-label col-md-4 text-left"> Provin </label>
									<div class="col-md-6">
									  {!! Form::text('provin', $row['provin'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Pais" class=" control-label col-md-4 text-left"> Pais </label>
									<div class="col-md-6">
									  {!! Form::text('pais', $row['pais'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Telefo" class=" control-label col-md-4 text-left"> Telefo </label>
									<div class="col-md-6">
									  {!! Form::text('telefo', $row['telefo'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Telefx" class=" control-label col-md-4 text-left"> Telefx </label>
									<div class="col-md-6">
									  {!! Form::text('telefx', $row['telefx'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Person" class=" control-label col-md-4 text-left"> Person </label>
									<div class="col-md-6">
									  {!! Form::text('person', $row['person'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Cifdni" class=" control-label col-md-4 text-left"> Cifdni </label>
									<div class="col-md-6">
									  {!! Form::text('cifdni', $row['cifdni'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Forpag" class=" control-label col-md-4 text-left"> Forpag </label>
									<div class="col-md-6">
									  {!! Form::text('forpag', $row['forpag'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Codpro" class=" control-label col-md-4 text-left"> Codpro </label>
									<div class="col-md-6">
									  {!! Form::text('codpro', $row['codpro'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Tipiva" class=" control-label col-md-4 text-left"> Tipiva </label>
									<div class="col-md-6">
									  {!! Form::text('tipiva', $row['tipiva'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Sislog" class=" control-label col-md-4 text-left"> Sislog </label>
									<div class="col-md-6">
									  {!! Form::text('sislog', $row['sislog'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Fecalt" class=" control-label col-md-4 text-left"> Fecalt </label>
									<div class="col-md-6">
									  {!! Form::text('fecalt', $row['fecalt'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Fecbaj" class=" control-label col-md-4 text-left"> Fecbaj </label>
									<div class="col-md-6">
									  {!! Form::text('fecbaj', $row['fecbaj'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Serlib" class=" control-label col-md-4 text-left"> Serlib </label>
									<div class="col-md-6">
									  {!! Form::text('serlib', $row['serlib'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Serent" class=" control-label col-md-4 text-left"> Serent </label>
									<div class="col-md-6">
									  {!! Form::text('serent', $row['serent'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Sersal" class=" control-label col-md-4 text-left"> Sersal </label>
									<div class="col-md-6">
									  {!! Form::text('sersal', $row['sersal'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Autone" class=" control-label col-md-4 text-left"> Autone </label>
									<div class="col-md-6">
									  {!! Form::text('autone', $row['autone'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Autons" class=" control-label col-md-4 text-left"> Autons </label>
									<div class="col-md-6">
									  {!! Form::text('autons', $row['autons'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Copias" class=" control-label col-md-4 text-left"> Copias </label>
									<div class="col-md-6">
									  {!! Form::text('copias', $row['copias'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Tpapel" class=" control-label col-md-4 text-left"> Tpapel </label>
									<div class="col-md-6">
									  {!! Form::text('tpapel', $row['tpapel'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Ctactb" class=" control-label col-md-4 text-left"> Ctactb </label>
									<div class="col-md-6">
									  {!! Form::text('ctactb', $row['ctactb'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					<button type="button" onclick="location.href='{{ URL::to('cliente?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
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