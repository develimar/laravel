<h3>Fornecedor</h3>

{{--@dd($fornecedores)--}}

@isset($fornecedores)
    Fornecedor:{{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido.'}}
    <br>
    Telefone: ({{ $fornecedores[0]['ddd'] ?? ''}}){{ $fornecedores[0]['telefone'] ?? ''}}
    <br>
    Cidade:
    @switch($fornecedores[0]['ddd'])
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
@endisset


