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
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> 
   		<a href="{{ URL::to('lineasfactura?return='.$return) }}" class="tips btn btn-xs btn-default pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('lineasfactura/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Servicio</td>
						<td>{{ $row->aplica }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Núm. Línea</td>
						<td>{{ $row->numlin }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha calculo</td>
						<td>{{ $row->feccal }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Descripción</td>
						<td>{{ $row->descri }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Base Aplicación</td>
						<td>{{ $row->bastar }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Unidades para tasacion</td>
						<td>{{ $row->unitas }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Importe sujeto a IVA</td>
						<td>{{ $row->import }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Documento referencia</td>
						<td>{{ $row->docref }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Porc. Seguro</td>
						<td>{{ $row->perseg }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Seguro</td>
						<td>{{ $row->seguro }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Albaran (E/S)</td>
						<td>{{ $row->tipalb }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Texto adicional</td>
						<td>{{ $row->txtadi }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop