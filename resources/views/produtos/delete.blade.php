<!--Inicio criar view filha para o template-->
@extends('template.app')
@section('content')
<!--Fim criar view filha para o template-->
<div class="col-md-6 well">
    <div class="col-md-12">
        <h3>Deseja excluir esse Produto?</h3>
        <div style="float: right">
            <a class="btn btn-default" href="{{ url("produtos") }}">
                <i class="glyphicon glyphicon-chevron-left"></i>
                &nbsp;Cancelar
            </a>
            <a class="btn btn-danger" href="{{ url("produtos/$produto->id/destroy") }}">
                <i class="glyphicon glyphicon-remove"></i>
                &nbsp;Excluir
            </a>
        </div>
    </div>
</div>
@endsection
<!--fechando template-->