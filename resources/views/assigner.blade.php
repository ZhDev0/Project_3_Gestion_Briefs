@extends('Master-Page.Layout')


@section('title')
    Assigner Page
@endsection

@section('style')
a {
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
        justify-content: center;
        align-items:center;
    }
    main {
        display:flex;
        justify-content: center;
        align-items:center;
        {{-- background: yellow; --}}
    }
    main label, a {
        margin: 15px;
    }
    main label {
        font-size: 30px;
    }
@endsection

@section('content')
    <div class="row my-4">
        <div class="col-md-12">
            <div class="search-area">
                <input type="text" placeholder="Chercher Apprenant">
            </div>
            <main>
                <label for="">Test</label>
                <a href="#">+</a>
                <a href="#">-</a>
            </main>
        </div>
    </div>
@endsection



@section('script')

@endsection



