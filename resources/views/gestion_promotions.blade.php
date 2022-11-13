@extends('Master-Page.Layout')


@section('title')
    Promotion's Page
@endsection


@section('style')
{{-- * {
    margin:0;
    padding:0;
    box-sizing:border-box;
} --}}
    {{-- Global Styles  --}}

    a {
    text-decoration: none;
    }
    li {
    list-style: none;
    }

    {{-- Main Style  --}}
    nav ul{
    display:flex;
    justify-content: center;
    align-items: center;
    }
    nav .links > li {
    margin: 0 15px;
    }
    nav .links > li:last-child {
    width: 100px;
    }
    .middle-nav {
    display:flex;
    justify-content: space-around;
    align-items: center;
    {{-- background: yellow; --}}
    }
    main .main-content {
        display:flex;
        justify-content: center;
        align-items:center;
        padding: 10px 0;
        transition: 0.3s;
    }
    main .main-content:hover {
        background: #eee;
    }
    .main-content a {
        margin-left: 25px;
    }
@endsection



@section('content')
    <div class="row my-4">
        <div class="col-md-12">
            <nav>
                <ul class="links">
                    <li><a href="{{ route('promotion.get') }}">Promotions</a></li>
                    <li><a href="{{ route('briefs.get') }}" class="btn btn-warning w-100">Briefs</a></li>
                </ul>
            </nav>
            @if (Session::has('promotion_deleted'))
                <div class="alert alert-danger">
                    {{ Session::get('promotion_deleted') }}
                </div>
            @endif
            <div class="middle-nav">
                <ul>
                    <li><a href="{{ route('promotion.add') }}" class="btn btn-primary mt-3">Add Promotion</a></li>
                </ul>
                <div class="form-group">
                    <input type="text" id="search" name="search" class="form-control" placeholder="Search Here">
                </div>
            </div>

            <main id="tbody">
                @foreach ($promotion as $value)
                    <div class="main-content">
                        <a href="/gestion_apprenant/{{ $value->id }}" class="btn btn-success">{{ $value->nom_promotion }}</a>
                        <a href="/delete_promotion/{{ $value->id }}" class="text-danger">Delete</a>
                        <a href="/edit_promotion/{{ $value->id }}" class="text-success">Update</a>
                    </div>
                @endforeach
            </main>
        </div>
    </div>
    {{-- <div class="d-flex flex-column justify-content-center align-items-center"> --}}
        {{ $promotion->links() }}
    {{-- </div> --}}
@endsection



@section('script')
@endsection
