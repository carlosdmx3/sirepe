@extends('adminlte::page')

@section('title', 'Plantilla persona')

@section('content_header')
    <h1>Plantilla personal</h1>
@stop

@section('content')
<div class="card card-warning card-outline shadow" >
    <div class="card-header bg-light shadow-sm d-flex">
        <div class="d-flex justify-content-between">
            <b><i class="fab fa-buromobelexperte dorado"></i>&nbsp;
                <span class="guinda2" >
                  Plantilla de personal
                    

                </span>
            </b> 
        </div>
    </div>
    <div class="card-body table-responsive guinda" style="font-size:14px;">
            
       <!-- Contenido -->

       <img src="img/plantilla_personal.png" alt="" width="68%" class="imag-fluid">

    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
