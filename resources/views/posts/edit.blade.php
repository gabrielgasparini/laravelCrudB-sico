@extends ('layouts.master')

@section ('content')

    <h1> Editar Post - {{$post->titulo}} </h1>

    <form method="POST" action="{{action('PostController@update', $id)}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Título</label>
            <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" value="{{$post->titulo}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Texto</label>
            <input type="text" name="texto" class="form-control" id="exampleInputPassword1" value="{{$post->texto}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
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