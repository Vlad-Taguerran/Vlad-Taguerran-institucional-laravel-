@extends('layout.App')

@section('styles',asset('css/home.css'))
@section('title','Bem vindo')

@section('conteudo')
<div class="container-fluid" id="container-body">
    <div class="row text-center text-dark my-5">
        <div id="boas-vindas"class="col-5 mx-auto">

                    <h4 class="text-dark">Seja bem vindo</h4>
                    <p class="text-dark text-justify">A Gestores estrategicos de segurança agradece o seu apoio.
                    Essa plataforma foi criada com intuito de transmitir conhecimentos
                    na area de segurança.</p>
                    <p class="text-dark text-justify">Embreve teremos poscasts sendo disponibilizados para os menbros
                    G.E.S.</p>
        </div>
        <div class="col-sm-7 mx-auto text-dark" id="table-fixed">
            <table class="table table-dark" >
                <thead>
                <tr>
                    <th scope="col">Baixe os PDFs informativos</th>
                </tr>
                </thead>
                @foreach($archivos as $archivo)
                <tbody>

                <td scope="col">{{$archivo->title}}
                        <td><a href="{{asset($archivo->archivo)}}" target="_blank" download>
                                <button class="btn btn-outline-success" >Baixar</button>
                            </a>
                         @if(Auth::user()->type === "admin")
                                <form action="{{route('delete')}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input  type="hidden" name="archivo" value="{{$archivo->archivo}}">
                                    <input  type="hidden" name="id" value="{{$archivo->id }}">
                                    <button type="submit" class="btn btn-outline-danger" >deletar</button>
                                </form>
                            @endif
                        </td>
                </td>

                </tbody>
                @endforeach
            </table>
        </div>
        @if(Auth::user()->type === "admin")
            <div class="col my-5 text-center">
                <form class="form my-5" action="{{route("post")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Digite um nome para o artigo</label>
                        <input name="title" type="text" id="title" class="form-control">
                    </div>
                    <div class="custom-file">
                        <label class="custom-file-label" for="artigo">
                            Selecione um artigo
                        </label>
                        <input name="archivo" type="file" class="custom-file-input" id="nome">

                    </div>
                    <button type="submit" class="btn btn-success float-right mt-4">enviar</button>
                </form>
            </div>
        @endif
    </div>
</div>

@endsection
