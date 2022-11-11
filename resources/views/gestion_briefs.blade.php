@extends('Master-Page.Layout')


@section('title')
    Briefs Page
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
    .main-content a{
    margin-left: 25px;
    }
@endsection



@section('content')
    <div class="row my-4">
        <div class="col-md-12">
            <nav>
                <ul class="links">
                    <li><a href="{{ route('promotion.get') }}" class="btn btn-warning w-100">Promotions</a></li>
                    <li><a href="{{ route('briefs.get') }}">Briefs</a></li>
                </ul>
            </nav>
            <div class="middle-nav">
                <ul>
                    <li><a href="{{ route('brief.add') }}" class="btn btn-primary mt-3">Ajouter Brief</a></li>
                </ul>
                <form action="" method="POST">
                    <input type="text" class="form-control" placeholder="Chercher Brief">
                </form>
            </div>
            <main>
                @foreach ($briefs as $value)
                    <div class="main-content">
                        <div class="text-dark lead">{{ Str::limit($value->nom_du_brief, '26') }}</div>
                        <a href="/delete_brief/{{ $value->id }}" class="text-danger">Delete</a>
                        <a href="/gestion_brief/{{ $value->id }}" class="text-success">Update</a>
                        <a href="/assigner" class="text-primary">assign</a>
                        <a href="/add_task" class="text-info">+ Tasks</a>
                    </div>
                @endforeach
            </main>
        </div>
    </div>
    {{-- <div class="d-flex flex-column justify-content-center align-items-center"> --}}
    {{ $briefs->links() }}
    {{-- </div> --}}
@endsection



@section('script')
@endsection
