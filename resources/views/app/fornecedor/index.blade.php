<h3>Fornecedor</h3>

{{--@dd($fornecedores)--}}

@isset($fornecedores)
    Fornecedor:{{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido.'}}

{{--    $variavel testada não estiver definida --}}
{{--    ou se $variavel testar possuir o valor null--}}
{{--    valor default ultilizado acima no lugar da variavel--}}

    <br>
@endisset


