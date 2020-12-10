@extends('../layout/App')

@section('titulo','Artigo Do Mês')
@section('styles',asset('css/artigo.css'))
@section('conteudo')
<div class="conteiner mx-auto my-5" id="contexto">
    <div class="conteiner mt-5">
        <h1>PANORAMA DA VIOLÊNCIA NO BRASIL</h1>
        <h4>Criminalidade sazonal, ineficácia investigativa e medidas de combate equivocadas tornam o País um dos mais
            inseguros
            do mundo</h4>
        <small>Por André Vicente dos Anjos</small>
    </div>
    <div class="conteiner mt-5">
        <img class="img-fluid" src="{{asset('/images/artigos/artigo-capa.png')}}" alt="">
        <p>É de comum sabença que grande parte do conteúdo disposto nas diferentes mídias versa sobre violência. Como
            pauta
            predominante, a mídia tem arremessado sobre a população doses cavalares de desesperança por dias melhores.
            Não
            por acaso, os números são preocupantes e mostram a cronicidade e a crescente escalada da violência em todo o
            território nacional. </p>
        <p>Algumas das principais pesquisas realizadas nos últimos anos mostram, em números, o cenário do Brasil no que
            tange a problemática da violência. Por exemplo, o Índice de Progresso Social (IPS), que é elaborado pela da
            organização sem fins lucrativos Social Progress Imperative, possui dados divididos em três grupos:
            necessidades
            humanas básicas, fundamentos de bem-estar e oportunidades. Cada um contempla quatro indicadores e no índice
            geral, de qualidade de vida, o Brasil ocupa o vergonhoso 45º lugar. </p>
        <p>A violência é o principal item que puxa para baixo o desempenho do Brasil em qualidade de vida, de acordo com
            dados do IPS. Entre os 132 países analisados pelo documento, o Brasil aparece na 122ª posição no ranking de
            segurança pessoal, ou seja, considerando o final do ranking como o de país mais inseguros, o Brasil aparece
            em 11º lugar. </p>
        <p>Da mesma forma, o Expat Insider realizou a mais abrangente pesquisa sobre vida no exterior e parte do seu
            conteúdo foi divulgado pelo site Forbes UOL. Em resumo, a pesquisa mostra que o Brasil não é considerado um
            lugar seguro pelos imigrantes, que também criticam a infraestrutura e o cenário político desfavorável para a
            permanência no País. </p>
        <p>Os tipos criminais observados nos últimos anos mostram que existe um caráter de sazonalidade nas diferentes
            ações criminosas, ou seja, há uma clara prática predominante durante determinado período que ganha grande
            destaque da mídia e parece ditar ou motivar ações iguais em diferentes pontos. Quem não se recorda da grande
            onda de assaltos a agências bancárias país afora, com ênfase em capitais como Rio de Janeiro e São Paulo,
            obrigando o aperfeiçoamento de grupos de policiais especializados de vários estados da federação. </p>
        <p>Outra grande modalidade criminosa que também ganhou destaque na mídia durante meses foi o sequestro de
            empresários, banqueiros e executivos de empresas, tirando o sono das autoridades durante um longo tempo. As
            ações de grande vulto seguiram esta trilha, passando pelos assaltos às casas lotéricas, explosões de caixas
            eletrônicos até chegar a vez dos shopping centers. Claro que nunca se deixou de praticar crimes distintos em
            diferentes locais, mas algumas destas modalidades ganharam maior destaque das diferentes mídias. </p>
        <p>Mais recentemente, seguindo esta espécie de sazonalidade mórbida, o roubo de carga assumiu seu destaque
            temporal. O site da Exame divulgou recente reportagem levantando dados estatísticos em nível Brasil e
            mundial. Segundo a pesquisa, o País ocupa o sexto lugar como um dos mais perigosos neste quesito, situação
            que inflaciona o mercado, elevando os valores de seguros a níveis jamais vistos para este serviço. </p>
    </div>
    <div class="conteiner mt-2">
        <h4>ESTATÍSTICAS DE ROUBO DE CARGAS POR REGIÃO</h4>
        <p>Outro importante elemento da mídia eletrônica, o site do Estadão também divulgou relevante balanço com a
            mesma temática. A matéria pontua que o prejuízo com roubos de carga cresceu 49% nos últimos anos com um
            prejuízo financeiro que está na ordem de R$ 1,5 bilhão. </p>
        <p>Aparenta ser uma coincidência, mas ao passo que a região Sudeste abriga a maioria das empresas de segurança
            privada e, consequentemente, o maior número de profissionais, as estatísticas apontam que a região é a mais
            afetada pelas ações predatórias e a que apresenta o maior índice de crescimento em determinados tipos
            criminais (como se vê na tabela abaixo). </p>
        <img class="img-fluid" src="{{asset('images/artigos/grafico.png')}}" alt="">
        <small> Estatística de roubo de cargas. Fonte: setcesp.org.br</small>

        <p>Em 2018, o Instituto Igarapé divulgou uma ampla pesquisa com dados estatísticos que descortinam o real
            cenário da segurança pública do ponto de vista de infraestrutura e os números apresentados confirmam a
            desconfiança dos brasileiros na crença de que a situação está longe de ser resolvida. Além de revelar dados
            desanimadores sobre a ineficácia do Estado, o Instituto apresenta algumas boas sugestões a serem
            implementadas nas diferentes áreas em que a pesquisa teve seu foco. </p>
        <p>Um dos tópicos da pesquisa ressalta a importância do poder do Estado e de seu aparato no combate à
            criminalidade e faz um comparativo entre Brasil e Estados Unidos, ponderando sobre o empenho do aparato para
            este fim. </p>
    </div>
    <div class="conteiner">
        <h4>COMPARATIVO DE EMPENHO ESTATAL:</h4>
        <p>Os dados também mostram que o Brasil é um País que investiga pouco e resolve menos crimes que as grandes
            potências econômicas do mundo. Um fato que agrava ainda mais este cenário é a falta de um banco de dados
            unificado. São diferentes órgãos emissores de documentos, cada um com seu respectivo banco de dados. </p>
        <img class="img-fluid" src="{{asset('images/artigos/grafico-federacao.png')}}" alt="">
        <small>Fonte: Bureau of Justice Estatistics, Instituto Cidade Segura e Ministério de Planejamento</small>
    </div>
    <div class="conteiner mt-3">
        <h4>COMPARATIVO DE RESOLUÇÃO DE CRIMES:</h4>
        <img class="img-fluid" src="{{asset('images/artigos/grafico-policia.png')}}" alt="">
        <small>Fonte: Criminologista Tulio Kahn, Instituto Cidade Segura e Sou da Paz</small>
        <p>Corroborando com informações contidas nas pesquisas e matérias contempladas no estudo, o fórum
            brasileiro de segurança pública divulga, através de
            seu anuário, uma compilação de dados estatísticos
            com um raio X do cenário e, de fato, os mesmos
            índices de crescimento assustadores de outros anos
            se mantém, o que comprova a ineficácia do Estado
            na tratativa deste importante tema. Uma das tentativas mais equivocadas de frear a violência no País foi
            a implantação do <b>Estatuto do Desarmamento</b>, uma
            experiência frustrada de redução dos níveis de violência sem a amplitude necessária para tal. Um projeto
            frágil que, no primeiro momento, contou com a
            adesão dos brasileiros, mas logo se mostrou ineficaz,
            pois não conseguiu atingir seu principal objetivo.
        </p>
        <p>De acordo com a justificação da norma, o projeto foi uma resposta do Senado à onda de violência que vinha se
            avolumando no País, que tinha como uma de suas principais causas a facilidade de obtenção e uso de arma de
            fogo, pressupostos de fato alegados para sua criação (Brasil, 1999). </p>
        <p>A relevância social do Estatuto constituía-se na expectativa de conter ou fazer retroceder os atos que
            assolam diariamente a sociedade brasileira de forma gradativa e que aparenta incontrole em relação aos
            índices de criminalidade já vistos. A realidade devastadora preocupa visto que os crimes continuam sendo
            praticados por indivíduos portando arma de fogo, e os números são crescentes. </p>
        <p>A sociedade oprimida pela criminalidade entende que aplicação do Estatuto não se mostrou eficaz sob o ponto
            de vista de resultados, demonstrando de forma clara que apenas o cidadão de bem cumpre o dispositivo legal e
            perdeu sua prerrogativa do direito de defesa. </p>
        <p>A legislação que proíbe e burocratiza a aquisição ou porte de arma de fogo por civis não atendeu aos anseios
            dos milhões de brasileiros que apoiaram a regra via plebiscito e ainda restringiu para os civis proponentes
            o Direito de porte nos ditames da Lei, pois o requisito “demonstração de efetiva necessidade” constitui-se
            num dos maiores empecilhos para o cidadão que deseja utilizar a arma de fogo como meio de defesa, pois
            sujeita-o à discricionariedade do Estado e a subjetividade de seus representantes, tanto para a concessão de
            autorização de compra da arma de fogo como para obtenção da licença de porte (Quintela; Barbosa, 2015). </p>
        <img class="img-fluid" src="{{asset('images/artigos/carro-baleado.png')}}" alt=""><br><br>
        <p>A Câmara dos Deputados apresentou razões mais condizentes para justificar o Estatuto através do relatório do
            Deputado Luiz Eduardo Greennhalgh (2003, p. 3). </p>
        <p>Segundo o referido parlamentar, a Lei 10.826/2003 se fazia extremamente necessária em razão da grande
            quantidade de armas de fogo no Brasil, em sua maioria equipamentos de pequeno calibre. Estudos da ONU teriam
            mostrado que 80% dos homicídios do País eram praticados por armas dessa natureza, notadamente revólveres.
            Ademais, acrescentou que 78% das armas apreendidas pela polícia à época seriam de procedência nacional. </p>
        <p>Assim, o raciocínio empregado pelo relator foi o
            seguinte: <b>a diminuição da quantidade de armas
                nas mãos do cidadão comum levaria à redução na
                quantidade de armas nas mãos dos criminosos,
                e, portanto, à redução da criminalidade.</b>
        </p>
        <p>Não obstante o intento do referido texto legal, hoje é possível perceber de forma inequívoca a ineficácia do
            Estatuto do Desarmamento e, mais ainda, pela descrença da sociedade, opina-se que o plebiscito conseguiu
            adesão em percentuais tão altos por conta do grande dispêndio de propaganda do governo aliado aos crescentes
            índices de violência na época. Essa era a alternativa predominante e não encontrou oposição em razão do
            cenário de violência que perdura até hoje em níveis cada vez mais assustadores. </p>
        <div class="card-body bg-white ">
            <h5 class="card-title text-dark">Autor</h5>
            <p class="card-text text-dark">
                André Anjos, Ph.D. C.P.S.I C.I.G.R – Doctor Of Philosophy
                In International Security Sciences. Especialista em Segurança
                Pública e Privada; Especialista em riscos corporativos e
                diretor de Arte e Design do CEAS - Brasil.
            </p>
            <div class="card-footer ">
                <small class="text-dark">janeiro/ fevereiro | 2020</small>
            </div>
        </div>
    </div>
</div>
@endsection