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
		<li><a href="{{ URL::to('factura?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'factura/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> Facturas</legend>
									
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
									<label for="Fecfac" class=" control-label col-md-4 text-left"> Fecfac </label>
									<div class="col-md-6">
									  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('fecfac', $row['fecfac'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
									 </div> 
									 <div class="col-md-2">
									 	<a href="#" data-toggle="tooltip" placement="left" class="tips" title="Fecha factura"><i class="icon-question2"></i></a>
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Codcli" class=" control-label col-md-4 text-left"> Codcli </label>
									<div class="col-md-6">
									  <select name='codcli' rows='5' id='codcli' class='select2 '   ></select> 
									 </div> 
									 <div class="col-md-2">
									 	<a href="#" data-toggle="tooltip" placement="left" class="tips" title="Cliente"><i class="icon-question2"></i></a>
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Codter" class=" control-label col-md-4 text-left"> Codter </label>
									<div class="col-md-6">
									  {!! Form::text('codter', $row['codter'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Nif" class=" control-label col-md-4 text-left"> Nif </label>
									<div class="col-md-6">
									  {!! Form::text('nif', $row['nif'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
									<label for="Domici" class=" control-label col-md-4 text-left"> Domici </label>
									<div class="col-md-6">
									  {!! Form::text('domici', $row['domici'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Poblac" class=" control-label col-md-4 text-left"> Poblac </label>
									<div class="col-md-6">
									  {!! Form::text('poblac', $row['poblac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
									<label for="Pais" class=" control-label col-md-4 text-left"> Pais </label>
									<div class="col-md-6">
									  {!! Form::text('pais', $row['pais'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
									<label for="Impbru" class=" control-label col-md-4 text-left"> Impbru </label>
									<div class="col-md-6">
									  {!! Form::text('impbru', $row['impbru'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Dtofac" class=" control-label col-md-4 text-left"> Dtofac </label>
									<div class="col-md-6">
									  {!! Form::text('dtofac', $row['dtofac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Impdfac" class=" control-label col-md-4 text-left"> Impdfac </label>
									<div class="col-md-6">
									  {!! Form::text('impdfac', $row['impdfac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Basiva" class=" control-label col-md-4 text-left"> Basiva </label>
									<div class="col-md-6">
									  {!! Form::text('basiva', $row['basiva'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
									<label for="Impiva" class=" control-label col-md-4 text-left"> Impiva </label>
									<div class="col-md-6">
									  {!! Form::text('impiva', $row['impiva'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Totfac" class=" control-label col-md-4 text-left"> Totfac </label>
									<div class="col-md-6">
									  {!! Form::text('totfac', $row['totfac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
									<label for="Indctb" class=" control-label col-md-4 text-left"> Indctb </label>
									<div class="col-md-6">
									  {!! Form::text('indctb', $row['indctb'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Observ" class=" control-label col-md-4 text-left"> Observ </label>
									<div class="col-md-6">
									  {!! Form::text('observ', $row['observ'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group hidethis " style="display:none;">
									<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
									<div class="col-md-6">
									  {!! Form::text('id', $row['id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Reducida" class=" control-label col-md-4 text-left"> Reducida <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  
					<?php $reducida = explode(',',$row['reducida']);
					$reducida_opt = array( '0' => 'Detallada' ,  '1' => 'Reducida' , ); ?>
					<select name='reducida' rows='5' required  class='select2 '  > 
						<?php 
						foreach($reducida_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['reducida'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
									 </div> 
									 <div class="col-md-2">
									 	<a href="#" data-toggle="tooltip" placement="left" class="tips" title="Factura reducida"><i class="icon-question2"></i></a>
									 </div>
								  </div> </fieldset>
			</div>
			
			

					
	<hr />
	<div class="clr clear"></div>
	
	<h5> Líneas factura </h5>
	
	<div class="table-responsive">
    <table class="table table-striped ">
        <thead>
			<tr>
				@foreach ($subgrid['tableGrid'] as $t)
					@if($t['view'] =='1' && $t['field'] !='id')
						<th>{{ $t['label'] }}</th>
					@endif
				@endforeach
				<th></th>	
			  </tr>

        </thead>

        <tbody>
        @if(count($subgrid['rowData'])>=1)
            @foreach ($subgrid['rowData'] as $rows)
            <tr class="clone clonedInput">
									
			 @foreach ($subgrid['tableGrid'] as $field)
				 @if($field['view'] =='1' && $field['field'] !='id')
				 <td>					 
				 	{!! SiteHelpers::bulkForm($field['field'] , $subgrid['tableForm'] , $rows->$field['field']) !!}							 
				 </td>
				 @endif					 
			 
			 @endforeach
			 <td>
			 	<a onclick=" $(this).parents('.clonedInput').remove(); return false" href="#" class="remove btn btn-xs btn-danger">-</a>
			 	<input type="hidden" name="counter[]">
			 </td>
			@endforeach
			</tr> 

		@else
            <tr class="clone clonedInput">
									
			 @foreach ($subgrid['tableGrid'] as $field)

				 @if($field['view'] =='1' && $field['field'] !='id')
				 <td>					 
				 	{!! SiteHelpers::bulkForm($field['field'] , $subgrid['tableForm'] ) !!}							 
				 </td>
				 @endif					 
			 
			 @endforeach
			 <td>
			 	<a onclick=" $(this).parents('.clonedInput').remove(); return false" href="#" class="remove btn btn-xs btn-danger">-</a>
			 	<input type="hidden" name="counter[]">
			 </td>
			
			</tr> 

		
		@endif	


        </tbody>	

     </table>  
     <input type="hidden" name="enable-masterdetail" value="true">
     </div>
	<br /><br />
     
     <a href="javascript:void(0);" class="addC btn btn-xs btn-info" rel=".clone"><i class="fa fa-plus"></i> New Item</a>
     <hr />
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('factura?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		$('.addC').relCopy({});
		
		$("#codcli").jCombo("{{ URL::to('factura/comboselect?filter=clientes:codcli:nomcli') }}",
		{  selected_value : '{{ $row["codcli"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop