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
          <x-card dataId="{{$el['id']}}" name="{{$el['name']}}" gametype="{{$el['gametype']}}" players="{{$el['players']}}" img="{{$el['img']}}"/>
           </div>
            @endforeach
        </div>
    </div>

</x-layout>
<x-footer></x-footer>
