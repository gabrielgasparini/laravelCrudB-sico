@extends ('layouts.master')

@section ('content')

    <h1> Criar Post </h1>

    <form method="POST" action="{{url('posts')}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Título</label>
            <input type="text" name="titulo" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Texto</label>
            <input type="text" name="texto" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
        {{ csrf_field() }}
        @if (\Session::has('success'))
        <br />
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        <br />
        @endif
    </form>

    <br>
    
@endsection