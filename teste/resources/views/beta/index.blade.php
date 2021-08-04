Olá <br>
Resido no endereço: {{$endereco}} <br>
Necessito de: {{$ListaCompra}} <br>
Eu me chamo {{$nome}} e tenho {{$idade}} anos.

<ul>
    @foreach ($produtos as $produto)
        <li>
            {{$produto['nome']}} : {{$produto['quantidade']}} x {{$produto['valor']}} = R$ {{ ($produto['quantidade'] * $produto['valor']) }}
        </li>
    @endforeach
</ul>
