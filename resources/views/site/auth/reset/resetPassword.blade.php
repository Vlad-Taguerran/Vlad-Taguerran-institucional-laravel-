@extends('layout.App')
@section('styles',asset('css/resetPassword.css'))

    @section('conteudo')

        <div class="container-sm mx-auto my-5" id="container">
            <div id="title" class="container">
                <h1>Recuperração de senha</h1>
            </div>
            <div class="container" id="form">
                <form action="{{route('sendReset')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Digite o email para recuperar a senha</label>
                        <input type="email" name="email" class="form-control" required>
                     </div>
                    <button class="bt btn-primary float-right rounded">Enviar</button>
                </form>
            </div>
        </div>



    @endsection
