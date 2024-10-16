<x-layout>
    <x-navbar></x-navbar>

    {{-- @dd($game) --}}

    <div class="container-fluid bg-black vh-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-white text-center display-4">Dettaglio istruttori: <br>
                    <span class="fst-italic">{{$teacher['name']}}</span></h1>:
                </div>

            </div>
            <div class="row justify-content-center align-items-center text-center text-white">
                {{-- @dd($game) --}}
                <div class="col-12 col-md-6">
                    <img src="{{$teacher['img']}}" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <h3>Nome: {{$teacher['name']}} </h3>
                    <h3>Tipologia: {{$teacher['gametype']}} </h3>
                    <p>Gioco preferito: {{$teacher['game']}}</p>
                </div>
            </div>
        </div>

    </x-layout>
