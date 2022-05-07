<h3>Fornecedor</h3>

{{--@dd($fornecedores)--}}

    @isset($fornecedores)

        @forelse($fornecedores as $indice => $fornecedor)
            Iteração atual: {{ $loop->iteration }}
            Iteração last: {{ $loop->last }}
            <br>
        Fornecedor:{{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido.'}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}){{ $fornecedor['telefone'] ?? ''}}
        <br>
        Cidade:
        @switch( $fornecedor['ddd'])
            @case ('11')
                São paulo
                @break
            @case ('38')
                Curvelo
                @break
            @case ('31')
                Sete Lagoas
                @break
            @default
                Estado não identificado.
        @endswitch
            <br>
            @if($loop->first)
                Primeira Iteração do loop
            @endif
            @if($loop->last)
                Ultima Iteração do loop
                <br>
                Total de Registros: {{ $loop->count }}
            @endif
        <hr>
        @empty
            Não existe fornecedores cadastrados.
        @endforelse

    @endisset


