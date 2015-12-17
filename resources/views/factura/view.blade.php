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
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> 
   		<a href="{{ URL::to('factura?return='.$return) }}" class="tips btn btn-xs btn-default pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('factura/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Ejefac</td>
						<td>{{ $row->ejefac }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Numfac</td>
						<td>{{ $row->numfac }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecfac</td>
						<td>{{ $row->fecfac }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Codcli</td>
						<td>{!! SiteHelpers::gridDisplayView($row->codcli,'codcli','1:clientes:codcli:nomcli') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nif</td>
						<td>{{ $row->nif }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Domici</td>
						<td>{{ $row->domici }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Poblac</td>
						<td>{{ $row->poblac }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Codpos</td>
						<td>{{ $row->codpos }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pais</td>
						<td>{!! SiteHelpers::gridDisplayView($row->pais,'pais','1:paises:pais:nombre') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Provin</td>
						<td>{!! SiteHelpers::gridDisplayView($row->provin,'provin','1:paispro:provin:nombre') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Totfac</td>
						<td>{{ $row->totfac }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Forpag</td>
						<td>{!! SiteHelpers::gridDisplayView($row->forpag,'forpag','1:forpagos:forpag:descri') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Reducida</td>
						<td>{{ $row->reducida }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Id</td>
						<td>{{ $row->id }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	<hr />
	
	<h5> Líneas factura </h5>
	
	<div class="table-responsive">
    <table class="table table-striped ">
        <thead>
			<tr>
				<th class="number"> No </th>
					@foreach ($subgrid['tableGrid'] as $t)
					@if($t['view'] =='1')
						<th>{{ $t['label'] }}</th>
					@endif
				@endforeach
				
			  </tr>
        </thead>

        <tbody>
            @foreach ($subgrid['rowData'] as $row)
            <tr>
				<td width="30">  </td>		
			 @foreach ($subgrid['tableGrid'] as $field)
				 @if($field['view'] =='1' )
				 <td>					 
				 	@if($field['attribute']['image']['active'] =='1')
						{!! SiteHelpers::showUploadedFile($row->$field['field'],$field['attribute']['image']['path']) !!}
					@else	
						{{--*/ $conn = (isset($field['conn']) ? $field['conn'] : array() ) /*--}}
						{!! SiteHelpers::gridDisplay($row->$field['field'],$field['field'],$conn) !!}	
					@endif						 
				 </td>
				 @endif					 
			 
			 @endforeach
			@endforeach
			</tr> 


        </tbody>	

     </table>   
     </div>
	
	</div>
</div>	

	</div>
</div>
	  
@stop