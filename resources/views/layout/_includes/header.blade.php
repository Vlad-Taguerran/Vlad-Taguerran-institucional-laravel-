<!doctype html>
<html lang="pt-br">

<head>
  <title>@yield("titulo")</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
    <!-- styles css -->
    <link rel="stylesheet" type="text/css" href="@yield('styles')">
</head>

<body>
  <!--conteiner geral-->
  <div id="conteiner-geral" class="container-fluid-lg">

    <header>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logos/logo.webp')}}" alt="GES"
            srcset=""></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('artigos')}}">Artigos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="true">Gestão</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="{{route('institu')}}">Institucional</a>
              </div>
            </li>
          </ul>
        </div>

        @if(!Auth::user())

              <div class="conteiner" id="login">
                  <div class="dropdown open">
                      <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                          Login
                      </button>
                      <div class="dropdown-menu"id="home-login">
                          <form action="{{route('login.do')}}" method="post" class="px-4 py-3" >
                              @csrf
                              <div class="form-group">
                                  <label for="email">Email </label>
                                  <input type="email" name="email" class="form-control" id="email" placeholder="email@example.com">
                              </div>
                              <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                              </div>
                              <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                  <label class="form-check-label" for="dropdownCheck">
                                      Remember me
                                  </label>
                              </div>
                              <button type="submit" class="btn btn-primary">Sign in</button>
                          </form>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" id="text-login" href="{{route('register')}}">Cadastre-se</a>
                          <a class="dropdown-item" id="text-login" href="{{route('reset.password')}}">Esqueceu a senha?</a>
                      </div>
                  </div>
              </div>
              @if($errors->any())
                  <div class="container-sm">
                      <p class="alert alert-danger">{{$errors->first()}}</p>
                  </div>
              @endif
          @else
            <div class="container-sm mx-auto">
               <a href="{{route('home.user')}}"> <button class="btn btn-success">Painel</button></a>
                <a href="{{route('logout')}}"><button class="btn btn-info"> Logout</button></a>
            </div>
          @endif
      </nav>
    </header>
