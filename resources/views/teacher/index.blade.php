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
            <x-cardTeacher dataId="{{$teacher['id']}}" name="{{$teacher['name']}}" gametype="{{$teacher['gametype']}}" game="{{$teacher['game']}}" img="{{$teacher['img']}}"/>
           </div>
            @endforeach
        </div>
    </div>
</x-layout>
<x-footer></x-footer>
