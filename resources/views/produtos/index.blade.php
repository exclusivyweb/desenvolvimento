<!--Inicio criar view filha para o template-->
@extends("template.app")
@section("content")
<!--Fim criar view filha para o template-->
<style>
    .btn-action {
        padding: 5px;
        margin-left: 5px;
        float: right;
    }
</style>
<div>
    <!--Inicio Listando os produtos através do método foreach-->
    @foreach($produtos as $produto)
    <div class="col-md-3">
        <div class="panel panel-info">
            <div class="panel-heading">
                <strong>
                    {{ $produto->produto }}
                </strong>
                <a href="{{ url("/produtos/$produto->id/excluir") }}" class="btn btn-xs btn-danger btn-action" title="Excluir Produto">
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
                <a href="{{ url("/produtos/$produto->id/editar") }}" class="btn btn-xs btn-primary btn-action" title="Alterar Produto">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>
            </div>
        </div>
    </div>
    @endforeach
    <!--Fim Listando os produtos através do método foreach-->
</div>
@endsection
<!--fechando template-->