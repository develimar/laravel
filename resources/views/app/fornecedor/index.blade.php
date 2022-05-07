<h3>Fornecedor</h3>

{{--@dd($fornecedores)--}}

    @isset($fornecedores)

        @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor:{{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido.'}}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}){{ $fornecedores[$i]['telefone'] ?? ''}}
        <br>
        Cidade:
        @switch($fornecedores[$i]['ddd'])
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

        @endfor

    @endisset


