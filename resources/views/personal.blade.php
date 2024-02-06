@extends('adminlte::page')

@section('title', 'Personal')

@section('content_header')
    <h1>Personal</h1>
@stop

@section('content')
<div class="card card-warning card-outline shadow" >
    <div class="card-header bg-light shadow-sm d-flex">
        <div class="d-flex justify-content-between">
            <b><i class="fab fa-buromobelexperte dorado"></i>&nbsp;
                <span class="guinda2" >
                  Datos de Personal
                    

                </span>
            </b> 
        </div>
    </div>
    <div class="card-body table-responsive guinda" style="font-size:14px;">


            <table class="table table-hover table-sm col-sm-8">                
                <tbody>
                    <tr class="table-secondary"><td colspan="6">Datos Generales</td></tr>
                    <tr>
                        <td align="right"> Filición/RFC</td>
                        <td> <input type="text" name="" id=""
                                    class="form-control input-sm"> 
                        </td>
                        <td align="right"> Curp</td>
                        <td> <input type="text" name="" id=""
                                    class="form-control input-sm"> 
                        </td>
                        <td align="right"> Fecha de nacimiento</td>
                        <td> <input type="date" name="" id=""
                                    class="form-control input-sm"> 
                        </td>
                    </tr>
                    <tr>
                        <td align="right"> Nombre(s)</td>
                        <td> <input type="text" name="" id=""
                                    class="form-control input-sm"> 
                        </td>
                        <td align="right"> Apellido Paterno</td>
                        <td> <input type="text" name="" id=""
                                    class="form-control input-sm"> 
                        </td>
                        <td align="right"> Apellido Materno</td>
                        <td> <input type="text" name="" id=""
                                    class="form-control input-sm"> 
                        </td>
                    </tr>                   
                </tbody>
            </table>
            
       

    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
