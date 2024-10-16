<x-layout>
    <x-navbar></x-navbar>

    {{-- @dd($game) --}}

    <div class="container-fluid bg-black vh-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-white text-center display-4">I Nostri Giochi</h1>
            </div>

        </div>
        <div class="row justify-content-center align-items-center text-center">
            @foreach ($games as $el)
            {{-- @dump($el) --}}
           <div class="col-12 col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$el['img']}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$el['name']}}</h5>
                  <p class="card-text">
                    <h4>Tipologia gioco:</h4> {{$el['gametype']}} <br>
                    <h4>Numero di giocatori:</h4>{{$el['players']}}
                  </p>
                  <a href="{{route('gamedetail',['id'=>$el['id']])}}" class="btn btn-primary">Dettaglio gioco</a>
                </div>
              </div>
           </div>
            @endforeach
        </div>
    </div>

</x-layout>
