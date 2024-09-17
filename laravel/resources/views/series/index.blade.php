<x-layout title="Séries">
    <a href="/series/criar">Adicionar Nova Serie</a>
    <ul>
        @foreach ($aSeries as $serie)
            <li>{{$serie}}</li>
        @endforeach
    </ul>
</x-layout>