<!--Inicio criar view filha para o template-->
@extends("template.app")
@section("content")
<!--Fim criar view filha para o template-->
<div class="col-md-12">
    <h3>Novo Produto</h3>
</div>
<div class="col-md-6 well">
    <!--inicio validado campo-->
    <div class="panel-body">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <!--fim validado campo-->
    <form class="col-md-12" action="{{ url('/produtos/cadastrar') }}" method="POST">
        {{ csrf_field() }}<!--chave interpolada do laravel-->
        <div class="from-group col-md-12">
            <label class="control-label">Produto</label>
            <input name="produto" id="produto" class="form-control" value="{{old('produto')}}" placeholder="Produto">
        </div>
        <div class="col-md-12">
            <button style="margin-top: 15px; float: right" class="btn btn-primary">salvar</button>
        </div>
    </form>
</div>
@endsection
<!--fechando template-->