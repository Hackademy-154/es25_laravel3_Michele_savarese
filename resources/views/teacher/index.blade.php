<x-layout>

    <x-navbar></x-navbar>

    {{-- @dd($game) --}}

    <div class="container-fluid bg-black vh-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-white text-center display-4">I Nostri Istruttori</h1>
            </div>

        </div>
        <div class="row justify-content-center align-items-center text-center">
            @foreach ($teachers as $teacher)
           <div class="col-12 col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$teacher['img']}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$teacher['name']}}</h5>
                  <p class="card-text">
                    <h4>Tipologia gioco:</h4> {{$teacher['gametype']}} <br>
                    <h4>Gioco preferito:</h4>{{$teacher['game']}}
                  </p>
                  <a href="{{route('teacherDetail',['id'=>$teacher['id']])}}" class="btn btn-primary">Dettaglio docente</a>
                </div>
              </div>
           </div>
            @endforeach
        </div>
    </div>
</x-layout>
