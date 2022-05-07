<h3>Fornecedor</h3>

{{--@dd($fornecedores)--}}

    @isset($fornecedores)

        @forelse($fornecedores as $indice => $fornecedor)
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
        <hr>
        @empty
            Não existe fornecedores cadastrados.
        @endforelse

    @endisset


