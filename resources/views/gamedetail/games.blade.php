<x-layout>
    <x-navbar></x-navbar>

    {{-- @dd($game) --}}

    <div class="container-fluid bg-black vh-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-white text-center display-4">Dettaglio giochi: <br>
                    <span class="fst-italic">{{$game['name']}}</span></h1>:
                </div>

            </div>
            <div class="row justify-content-center align-items-center text-center text-white">
                {{-- @dd($game) --}}
                <div class="col-12 col-md-6">
                    <img src="{{$game['img']}}" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <h3>Nome: {{$game['name']}} </h3>
                    <h3>Tipologia: {{$game['gametype']}} </h3>
                    <p>Numero di giocatori: {{$game['players']}}</p>
                </div>
            </div>
        </div>


    </x-layout>
