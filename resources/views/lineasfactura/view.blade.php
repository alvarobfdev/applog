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
						<td width='30%' class='label-view text-right'>Codemp</td>
						<td>{{ $row->codemp }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cenfac</td>
						<td>{{ $row->cenfac }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Serfac</td>
						<td>{{ $row->serfac }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ejefac</td>
						<td>{{ $row->ejefac }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Numfac</td>
						<td>{{ $row->numfac }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Aplica</td>
						<td>{{ $row->aplica }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Numlin</td>
						<td>{{ $row->numlin }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Feccal</td>
						<td>{{ $row->feccal }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Descri</td>
						<td>{{ $row->descri }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Bastar</td>
						<td>{{ $row->bastar }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Unitas</td>
						<td>{{ $row->unitas }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Import</td>
						<td>{{ $row->import }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Docref</td>
						<td>{{ $row->docref }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Perseg</td>
						<td>{{ $row->perseg }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Seguro</td>
						<td>{{ $row->seguro }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipalb</td>
						<td>{{ $row->tipalb }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Txtadi</td>
						<td>{{ $row->txtadi }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cabfactu Id</td>
						<td>{{ $row->cabfactu_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Id</td>
						<td>{{ $row->id }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop