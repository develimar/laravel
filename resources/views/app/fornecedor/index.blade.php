<h3>Fornecedor</h3>

{{--@dd($fornecedores)--}}


Fornecedor:{{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if($fornecedores[0]['status'] == 'N')
    Fornecedor Inativo
@else
    Fornecedor Ativo
@endif

@unless($fornecedores[0]['status'] == 'N')
    Fornecedor Inativo
@endunless
