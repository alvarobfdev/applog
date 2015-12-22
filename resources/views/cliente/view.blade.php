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
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> 
   		<a href="{{ URL::to('cliente?return='.$return) }}" class="tips btn btn-xs btn-default pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('cliente/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
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
						<td width='30%' class='label-view text-right'>Codcli</td>
						<td>{{ $row->codcli }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nomacc</td>
						<td>{{ $row->nomacc }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nomcli</td>
						<td>{{ $row->nomcli }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Domcli</td>
						<td>{{ $row->domcli }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pobcli</td>
						<td>{{ $row->pobcli }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Codpos</td>
						<td>{{ $row->codpos }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Provin</td>
						<td>{{ $row->provin }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pais</td>
						<td>{{ $row->pais }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Telefo</td>
						<td>{{ $row->telefo }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Telefx</td>
						<td>{{ $row->telefx }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Person</td>
						<td>{{ $row->person }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cifdni</td>
						<td>{{ $row->cifdni }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Forpag</td>
						<td>{{ $row->forpag }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Codpro</td>
						<td>{{ $row->codpro }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipiva</td>
						<td>{{ $row->tipiva }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sislog</td>
						<td>{{ $row->sislog }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecalt</td>
						<td>{{ $row->fecalt }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecbaj</td>
						<td>{{ $row->fecbaj }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Serlib</td>
						<td>{{ $row->serlib }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Serent</td>
						<td>{{ $row->serent }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sersal</td>
						<td>{{ $row->sersal }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Autone</td>
						<td>{{ $row->autone }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Autons</td>
						<td>{{ $row->autons }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Copias</td>
						<td>{{ $row->copias }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tpapel</td>
						<td>{{ $row->tpapel }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ctactb</td>
						<td>{{ $row->ctactb }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop