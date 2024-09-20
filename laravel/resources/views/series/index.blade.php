<x-layout title="Séries">
    <a class="btn btn-dark mb-2" href="/series/criar">Adicionar Nova Serie</a>
    <ul class="list-group">
        @foreach ($aSeries as $serie)
            <li class="list-group-item">{{$serie}}</li>
        @endforeach
    </ul>
</x-layout>