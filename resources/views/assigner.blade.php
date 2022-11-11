@extends('Master-Page.Layout')


@section('title')
    Assigner Page
@endsection

@section('style')
a{
    text-decoration: none;
    font-size: 35px;
}
.a:hover {
    background:lightgrey;
    transition: .3s ease-in-out;
}
.a {
    text-decoration: none;
    font-size: 30px;
    border: 1px solid black;
    border-radius: 50%;
    height:46px;
    width:46px;
    text-align:center;
}
    .search-area {
        display:flex;
        justify-content: end;
        align-items:center;
    }
    main {
        display:flex;
        justify-content: center;
        align-items:center;
        {{-- background: yellow; --}}
    }
    main label, .a {
        margin: 15px;
    }
    main label {
        font-size: 30px;
    }
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-12">
            <div class="search-area">
                <input type="text" class="form-control w-25" placeholder="Chercher Apprenant">
            </div>
            @foreach ($infos as $value)
            <main>
                <label for="">{{ $value->nom." ".$value->prenom }}</label>
                <a class="a" href="#">+</a>
                <a class="a" href="#">-</a>
            </main>
            @endforeach
        </div>
    </div>
    {{-- <input type="hidden" value="{{  }}"> --}}
    <a href="/gestion_briefs" class="text-success d-flex justify-content-center">Retourner</a>
@endsection



@section('script')

@endsection



