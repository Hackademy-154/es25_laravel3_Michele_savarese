<div class="col-12 col-md-3">
    <div class="card" style="width: 18rem;">
        <img src="{{$img}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$name}}</h5>
          <p class="card-text">
            <h4>Tipologia gioco:</h4> {{$gametype}} <br>
            <h4>Gioco preferito:</h4>{{$game}}
          </p>
          <a href="{{route('teacherDetail',['id'=>$dataId])}}" class="btn btn-primary">Dettaglio docente</a>
        </div>
      </div>
