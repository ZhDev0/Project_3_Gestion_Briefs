@extends('Master-Page.Layout')


@section('title')
    Add Brief
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
                <h1>Modifier brief</h1>
            </div>
            <form action="" method="POST">
                <div class="form-content">
                    <div class="form-group">
                        <label for="">Nom du brief</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="brief X">
                    </div>
                    <div class="form-group">
                        <label for="">Date/heure de livraison</label>
                        <input type="datetime-local" id="" name="" class="form-control"
                            placeholder="25/01/2022">
                    </div>
                    <div class="form-group">
                        <label for="">Date/heure de recuperation</label>
                        <input type="datetime-local" id="" name="" class="form-control"
                            placeholder="30/01/2022">
                    </div>
                </div>
                <input class="envoyer" type="submit" value="Envoyer">
            </form>
            <main>
                @foreach ($tasks as $value)
                    <div class="main-content">
                        <a class="text-dark m-3 h5">{{ $value->nom_task }}</a>
                        <a href="/delete_promotion/" class="text-danger">Supprimer</a>
                        <a href="/delete_promotion/" class="text-success">Modifier</a>
                    </div>
                @endforeach
            </main>

            <div class="d-flex justify-content-center align-items-center">
                {{ $tasks->links() }}
            </div>
            <a href="/add_task" class="m-3 h1 d-flex justify-content-center align-items-center">+ Ajouter Task</a>
            <a href="/gestion_briefs"
                class=" text-success m-3 d-flex justify-content-center align-items-center">Retourner</a>
        </div>
    </div>
@endsection



@section('script')
@endsection
