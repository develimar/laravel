<h3>Fornecedor</h3>

{{--@dd($fornecedores)--}}

    @isset($fornecedores)

        @php $i = 0 @endphp
        @while(isset($fornecedores[$i]))
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
            @php $i++ @endphp
        @endwhile



    @endisset


