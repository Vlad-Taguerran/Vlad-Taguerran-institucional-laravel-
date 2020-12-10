@extends('../layout/App')

@section('titulo', 'Home')
@section('styles',asset('css/style.css'))

@section('conteudo')
<div class="conteiner  my-5 px-3">
    <div class="jumbotron jumbotron-fluid bg-black-alpha">
        <div class="container">
            <img src="{{asset('/images/logos/egm.jpg')}}" style="width: 20%" alt="logo gestores estrategicos de segurança">
            <p class="left mt-3"> A MALHA GESTORES ESTRATÉGICOS DE SEGURANÇA – G.E.S ,foi criado com o objetivo
                de unir
                profissionais,
                funcionários e empresários envolvidos ou relacionados com a prestação de segurança,
                assim podermos discutir melhores práticas e formatar para desenvolvimento de nosso
                segmento ideias e informações pertinentes a nossa área.</p>
        </div>
    </div>
</div>
<div class="conteiner  my-5">
    <div class="row mx-auto ">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header text-center text-dark">
                    PANORAMA DA VIOLÊNCIA NO BRASIL
                </div>
                <div class="card-body">
                    <img src="{{asset('/images/artigos/artigo.jpg')}}" alt="">
                    <p class="card-text text-dark">É de comum sabença que grande parte do conteúdo disposto nas
                        diferentes mídias versa sobre violência. Como pauta predominante, a mídia tem arremessado sobre
                        a população doses cavalares de desesperança por dias melhores. Não por acaso, os números são
                        preocupantes e mostram a cronicidade e a crescente escalada da violência em todo o território
                        nacional... </p>
                    <a href="{{route('artigos')}}" class=" btn btn-primary">Continuar lendo...</a>
                </div>
            </div>
        </div>
        <div id="fundador" class="col">
            <div class="card" >
                <img src="{{asset('/images/pp.jpg')}}" class="card-img-top img-fluid" alt="fundador da GES Gerre Pacheco">
                <div class="card-header text-center text-dark">
                    Gerre Adriano De Souza Pacheco
                </div>
                <div class="card-body">
                    <p class="card-text text-dark">Idealizador e entusiasta da malha Gestores Estratégicos se Segurança
                        - G.E.S
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
