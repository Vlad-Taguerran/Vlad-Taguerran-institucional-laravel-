@extends('layout.App')

@section('title','Cadastre-se')

@section('styles',asset('css/register.css'))
@section('conteudo')

    <div id="card-form" class="container mx-auto my-5">
                <div  class="card">
                    @if(isset($errors) && count($errors)>0)
                        @foreach($errors->all() as $error)
                            <div class="mx-auto">
                                <p class="alert-danger alert">{{$error}}</p>
                            </div>
                        @endforeach
                    @endif
                    <div class="card-header mx-auto my-5">

                        <img src="{{asset('images/logos/logo-inst.webp')}}" alt="Logo gestores estrategicos de segurança"
                             class="card-img">
                    </div>
                    <div class="card-body">
                        <form action="{{route("register.do")}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" id="name" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required class="form-control ">
                            </div>
                            <div class="form-goup">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" required class="form-control">
                            </div>
                            <button class="btn btn-lg btn-success mt-5 float-md-right" type="submit">
                                Salvar
                            </button>
                        </form>
                    </div>
                </div>
    </div>

@endsection
