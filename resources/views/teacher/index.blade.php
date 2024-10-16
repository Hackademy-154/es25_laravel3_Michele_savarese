<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es23-Michele Savarese</title>
    <!-- CDN BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-custom">
        <div class="container-fluid ">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('Home')}}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('drwho')}}">Chi siamo</a>
                </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('game')}}">I Nostri Giochi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('teacherIndex')}}">I nostri docenti</a>
                  </li>

            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
