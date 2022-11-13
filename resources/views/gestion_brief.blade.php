@extends('Master-Page.Layout')


@section('title')
    Brief / Task Page
@endsection

@section('style')
    a{
    text-decoration: none;
    }
    form{
    display:flex;
    justify-content:center;
    align-items:center;
    }
    .form-group {
    display:flex;
    justify-content:center;
    align-items:center;
    margin: 15px 25px;
    }

    .form-group label {
    width:100%;
    }

    .envoyer {
    color: #00ff99;
    font-weight: 600;
    background: none;
    font-size: 30px;
    }
    main .main-content {
    display:flex;
    justify-content: center;
    align-items:center;
    transition: 0.3s;
    }
    main .main-content:hover {
    background: #eee;
    }
    .main-content a:last-child {
    margin-left: 25px;
    }
@endsection



@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="text-header d-flex justify-content-center align-items-center my-2">
                <h1>Update Brief</h1>
            </div>
            @if (Session::has('brief_updated'))
                <div class="alert alert-success">
                    {{ Session::get('brief_updated') }}
                </div>
            @endif
            <form action="/gestion_brief/{{ $brief->id }}" method="POST">
                @csrf
                <div class="form-content">
                    <div class="form-group">
                        <label for="nom_du_brief">Brief's Name</label>
                        <input type="text" id="nom_du_brief" name="nom_du_brief" class="form-control" placeholder="brief X" value="{{ $brief->nom_du_brief }}">
                    </div>
                    <input type="hidden" value="{{ $brief->id }}">
                    <div class="form-group">
                        <label for="Date_heure_livraison">Delivery-Date-Time</label>
                        <input value="{{ $brief->Date_heure_livraison }}" type="datetime-local" id="Date_heure_livraison" name="Date_heure_livraison" class="form-control"
                            placeholder="25/01/2022">
                    </div>
                    <div class="form-group">
                        <label for="Date_heure_recuperation">Recovery-Date-Time</label>
                        <input value="{{ $brief->Date_heure_recuperation }}" type="datetime-local" id="Date_heure_recuperation" name="Date_heure_recuperation" class="form-control"
                            placeholder="30/01/2022">
                    </div>
                </div>
                <input class="envoyer" type="submit" value="Update">
            </form>
            @if (Session::has('task_deleted'))
<div class="alert alert-danger">
    {{ Session::get('task_deleted') }}
</div>
            @endif
            <main>
                @foreach ($brief->tasks as $value)
                    <div class="main-content">
                        <a class="text-dark m-3 h5">{{ $value->nom_task }}</a>
                        <a href="/delete_task/{{ $value->id }}" class="text-danger">Delete</a>
                        <a href="/edit_task/{{ $value->id }}" class="text-success">Update</a>
                    </div>
                @endforeach
            </main>

            {{-- <div class="d-flex justify-content-center align-items-center">
                {{ $tasks->links() }}
            </div> --}}
            <a href="/add_task/" class="m-3 h1 d-flex justify-content-center align-items-center">+ Add Task</a>
            <a href="/gestion_briefs"
                class=" text-success m-3 d-flex justify-content-center align-items-center">Back Home</a>
        </div>
    </div>
@endsection



@section('script')
@endsection
