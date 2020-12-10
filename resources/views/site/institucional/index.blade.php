@extends('../layout/App')

@section('titulo','Institucioal')
@section('styles',asset('css/institucional.css'))

@section('conteudo')
<div class="conteiner-fluid text-center my-5">
    <img src="{{asset('/images/logos/logo-inst.webp')}}" alt="Gestores estrategicos de segurança">
    <h1>Gestores Estratégicos de Segurança – G.E.S</h1>
</div>
<div class="conteiner-fluid" id="contexto">
    <h4>Missão</h4>
    <p>Contribuindo para com o desenvolvimento de uma cultura de segurança, assim podermos discutir melhores práticas e
        formatar para desenvolvimento de nosso segmento ideias e informações pertinentes a nossa área.</p>
    <br>
    <h4>Visão</h4>
    <p>Buscar inovações, desenvolver áreas de interesse na prevenção de segurança e informações obtidas em estudos
        estratégicos.</p>
    <br>
    <h4>Valores</h4>
    <p>Compromisso com ás melhores praticas.</p>
    <p>Ética Profissional.</p>
    <p>Honestidade.</p>
    <p>Honra.</p>
    <p>Lealdade. </p>
    <p>Respeito.</p>
    <br>
    <p><b>A Malha Gestores Estratégicos de Segurança</b> – G.E.S
        <br>Foi criado com o objetivo para unir profissionais, funcionários e empresários envolvidos ou relacionados com
        a prestação de segurança, assim podermos discutir
        melhores práticas e formas para desenvolvimento de nosso segmento ideias e informações pertinentes a nossa área.
    </p>
</div>
@endsection
