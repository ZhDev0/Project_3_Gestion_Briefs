@extends('Master-Page.Layout')


@section('title')
    Apprenant Page
@endsection


@section('style')
* {
    margin:0;
    padding:0;
    box-sizing:border-box;
}
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
    nav ul li {
    margin: 0 15px;
    }
    nav ul li:last-child {
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
    .update-promotion-name {
        display:flex;
        justify-content: center;
    }
    .assigned-briefs {
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .update-promotion-name {
        display:flex;
        justify-content:center;
        align-items:center;
    }
@endsection



@section('content')
    <div class="row my-4">
        <div class="col-md-12">
            <nav>
                <h1 class="d-flex justify-content-center align-items-center text-dark">Current Promotion</h1>
                <div class="update-promotion-name">
                    <h4 class="d-flex justify-content-center align-items-center text-dark">Promotion's Name&nbsp&nbsp&nbsp</h4>
                    <form action="" method="POST">
                        <input type="text" name="nom_promotion" class="text-primary w-100 d-flex justify-content-center align-items-center" value="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  {{ $promotion->nom_promotion }}">
                        {{-- <input type="submit" value="Modifier" class="text-success bg-white"> --}}
                    </form>
                </div>
                <br>
                {{-- <div class="assigned-briefs d-flex justify-content-center align-items-center">
                    <h4>Briefs assignes a la promotion&nbsp&nbsp&nbsp</h4>
                    <h5 class="text-primary">Briefs 2&nbsp&nbsp&nbsp</h5>
                    <h5 class="text-primary">Briefs 3</h5>
                </div> --}}
            </nav>
            @if (Session::has('Apprenant_deleted'))
                <div class="alert alert-danger">
                    {{ Session::get('Apprenant_deleted') }}
                </div>
            @endif
            <div class="middle-nav">
                <ul>
                    <li><a href="{{ route('apprenant.add') }}" class="btn btn-primary mt-3">Add Student</a></li>
                </ul>
                <div class="form-group">
                    <input type="text" style="background-color: transparent;"id="searcha" name="searcha" class="form-control" placeholder="Search Here">
                </div>
            </div>

            <main id="tbodyy">
                @foreach ($apprenant as $value)
                    <div class="main-content">
                        <div class="text-dark">{{ $value->prenom . " " . $value->nom }}</div>
                        <a href="/delete_apprenant/{{ $value->id }}" class="text-danger">Delete</a>
                        <a href="/edit_apprenant/{{ $value->id }}" class="text-success">Update</a>
                    </div>
                @endforeach
            </main>
        </div>
    </div>
    {{-- <div class="d-flex flex-column justify-content-center align-items-center"> --}}
        {{ $apprenant->links() }}
        <a href="{{ route('promotion.get') }}" class="text-success d-flex justify-content-center align-items-center mt-5">Back Home</a>
    {{-- </div> --}}
@endsection



@section('script')
@endsection
