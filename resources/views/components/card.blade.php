<div class="card" style="width: 18rem;">
    <img src="{{$img}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$name}}</h5>
      <p class="card-text">
        <h4>Tipologia gioco:</h4> {{$gametype}} <br>
        <h4>Numero di giocatori:</h4>{{$players}}
      </p>
      <a href="{{route('gamedetail',['id'=>$dataId])}}" class="btn btn-primary">Dettaglio gioco</a>
    </div>
  </div>
