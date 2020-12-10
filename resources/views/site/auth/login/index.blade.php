@extends('layout.App')

@section('titulo','login')
@section('styles',asset('css/login.css'))

@section('conteudo')
    <div class="container mx-auto my-5">
        <div class="row mx-auto">
            <div class="col-sm">
        <div class="card">
            <div class="card-header mx-auto my-5">
                <img src="{{asset('images/logos/logo-inst.webp')}}" alt="Logo gestores estrategicos de segurança"
                class="card-img">
            </div>
            <div class="card-body">
                <form action="{{route("login.do")}}" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" required class="form-control ">
                    </div>
                    <div class="form-goup">
                        <label for="password">Password</label>
                        <input type="password" name="password" required class="form-control">
                    </div>
                    <button class="btn btn-lg btn-success mt-5 float-md-right" type="submit">
                        Logar
                    </button>
                </form>
            </div>
        </div>
            </div>
       </div>
    </div>
@endsection
