<!--Inicio criar view filha para o template-->
@extends("template.app")
@section("content")
<!--Fim criar view filha para o template-->
<div class="col-md-12">
    <h3>Alterar Produto</h3>
</div>
<div class="col-md-6 well">
    <form class="col-md-12" action="{{ url('/produtos/update') }}" method="POST">
        {{ csrf_field() }}<!--chave interpolada do laravel-->
        <input type="hidden" name="id" value="{{ $produto->id }}">
        <div class="from-group col-md-12">
            <label class="control-label">Produto</label>
            <input name="produto" value="{{ $produto->produto }}" class="form-control" placeholder="Produto">
        </div>
        <div class="col-md-12">
            <button style="margin-top: 15px; float: right" class="btn btn-primary">salvar</button>
        </div>
    </form>
</div>
@endsection
<!--fechando template-->