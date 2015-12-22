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
<div class="col-md-6">
						<fieldset><legend> Factura</legend>
									
								  <div class="form-group  " >
									<label for="Núm. Factura" class=" control-label col-md-4 text-left"> Núm. Factura </label>
									<div class="col-md-6">
									  {!! Form::text('numfac', $row['numfac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Cliente" class=" control-label col-md-4 text-left"> Cliente </label>
									<div class="col-md-6">
									  <select name='codcli' rows='5' id='codcli' class='select2 '   ></select> 
									 </div> 
									 <div class="col-md-2">
									 	<a href="#" data-toggle="tooltip" placement="left" class="tips" title="Cliente"><i class="icon-question2"></i></a>
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Domicilio" class=" control-label col-md-4 text-left"> Domicilio </label>
									<div class="col-md-6">
									  {!! Form::text('domici', $row['domici'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Cód. Postal" class=" control-label col-md-4 text-left"> Cód. Postal </label>
									<div class="col-md-6">
									  {!! Form::text('codpos', $row['codpos'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="País" class=" control-label col-md-4 text-left"> País </label>
									<div class="col-md-6">
									  <select name='pais' rows='5' id='pais' class='select2 '   ></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Impuesto" class=" control-label col-md-4 text-left"> Impuesto </label>
									<div class="col-md-6">
									  {!! Form::text('impbru', $row['impbru'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Base Imponible" class=" control-label col-md-4 text-left"> Base Imponible </label>
									<div class="col-md-6">
									  {!! Form::text('basiva', $row['basiva'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Cuota IVA" class=" control-label col-md-4 text-left"> Cuota IVA </label>
									<div class="col-md-6">
									  {!! Form::text('impiva', $row['impiva'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Total" class=" control-label col-md-4 text-left"> Total </label>
									<div class="col-md-6">
									  {!! Form::text('totfac', $row['totfac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Oberservaciones" class=" control-label col-md-4 text-left"> Oberservaciones </label>
									<div class="col-md-6">
									  {!! Form::text('observ', $row['observ'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Reducida" class=" control-label col-md-4 text-left"> Reducida </label>
									<div class="col-md-6">
									  
					<?php $reducida = explode(',',$row['reducida']);
					$reducida_opt = array( '0' => 'Detallada' ,  '1' => 'Reducida' , ); ?>
					<select name='reducida' rows='5'   class='select2 '  > 
						<?php 
						foreach($reducida_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['reducida'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			<div class="col-md-6">
						<fieldset><legend> Factura</legend>
									
								  <div class="form-group  " >
									<label for="Ejercicio" class=" control-label col-md-4 text-left"> Ejercicio </label>
									<div class="col-md-6">
									  {!! Form::text('ejefac', $row['ejefac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Fecha" class=" control-label col-md-4 text-left"> Fecha </label>
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
									<label for="Código tercero" class=" control-label col-md-4 text-left"> Código tercero </label>
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
									<label for="Población" class=" control-label col-md-4 text-left"> Población </label>
									<div class="col-md-6">
									  {!! Form::text('poblac', $row['poblac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Provincia" class=" control-label col-md-4 text-left"> Provincia </label>
									<div class="col-md-6">
									  <select name='provin' rows='5' id='provin' class='select2 '   ></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Dto. Factura" class=" control-label col-md-4 text-left"> Dto. Factura </label>
									<div class="col-md-6">
									  {!! Form::text('dtofac', $row['dtofac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Importe Descuento" class=" control-label col-md-4 text-left"> Importe Descuento </label>
									<div class="col-md-6">
									  {!! Form::text('impdfac', $row['impdfac'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Tipo IVA" class=" control-label col-md-4 text-left"> Tipo IVA </label>
									<div class="col-md-6">
									  {!! Form::text('tipiva', $row['tipiva'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Forma Pago" class=" control-label col-md-4 text-left"> Forma Pago </label>
									<div class="col-md-6">
									  
					<?php $forpag = explode(',',$row['forpag']);
					$forpag_opt = array( 'RC' => 'PAGO A 30 DIAS DE FECHA FACTURA' ,  'RC60' => 'PAGO A 60 DIAS DE FECHA FACTURA' ,  'SP' => 'AL CONTADO. EN EFECTIVO O PAGARE A LOGIVAL, S.L.' , ); ?>
					<select name='forpag' rows='5'   class='select2 '  > 
						<?php 
						foreach($forpag_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['forpag'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
									 </div> 
									 <div class="col-md-2">
									 	
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
		
		$("#pais").jCombo("{{ URL::to('factura/comboselect?filter=paises:pais:nombre') }}",
		{  selected_value : '{{ $row["pais"] }}' });
		
		$("#provin").jCombo("{{ URL::to('factura/comboselect?filter=paispro:provin:nombre') }}",
		{  selected_value : '{{ $row["provin"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});

		$("select[name='codcli']").on('change', function(e) {

			if(typeof e.val !== 'undefined') {
				var url = "{{url('cliente/json')}}/"+ e.val;
				$.getJSON( url, function(data) {
					if(data) {
						$("input[name='nif']").val(data.cifdni);
						$("input[name='poblac']").val(data.pobcli);
						$("input[name='domici']").val(data.domcli);
						$("input[name='codpos']").val(data.codpos);
						$("#pais").select2("val", data.pais);
						$("#provin").select2("val", data.provin);

					}
				});
			}

		});
		
	});
	</script>		 
@stop