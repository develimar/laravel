<h3>Fornecedor</h3>


@php

/*if ($fornecedores){
    echo 'vali';
}elseif (1 == 3){
    echo 'vola';
}else{
    echo 'cast';
}

*/


@endphp

{{--@dd($fornecedores)--}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores Cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores Cadastrados</h3>
@else
    <h3>Não existe fornecedores Cadastrados</h3>
@endif
