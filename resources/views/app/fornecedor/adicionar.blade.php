@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')


{{-- este conteudo vai para o Yeld do basico.blade.php , mas 
para fazer isso tenho que extender(herda) a view que quero adicionnar essa section(conteudo)
hmlt --}}
@section('conteudo')


    <div class="conteudo-pagina">

        {{-- action="{{route('')}}" --}}

        <div class="titulo-pagina-2">
            <p>Fornecedor = Adicionar</p>
        </div>

        <div class="menu">

            <ul>
                <li><a href="">Novo</a></li>
                <li><a href="">Consulta</a></li>
                <li><a href="">Editar</a></li>
            </ul>

        </div>

        <div class="informacao-pagina">
            {{-- aplicando esse  estilo para centralizar a div --}}
            <div style="width: 30%; margin-right: auto; margin-left: auto;">

            <form method="POST">
                <input type="text" name="nome" class="borda-preta" placeholder="Nome">
                <input type="text" name="site" class="borda-preta" placeholder="digite o site">
                <input type="text" name="uf" class="borda-preta" placeholder="Digite o Nome do Estado">
                <input type="text" name="email" class="borda-preta" placeholder="digite o Email">
                <button class="borda-preta" type="submit">Pesquisar</button>

            </form>

            </div>

        </div>


    </div>


@endsection
