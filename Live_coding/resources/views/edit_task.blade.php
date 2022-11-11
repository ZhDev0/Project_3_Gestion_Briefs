@extends('Master.Layout')


@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Task</div>
                <div class="card-body">
                    <form action="/edit_task/{{ $tache->id }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nom de Task</label>
                            <input type="text" value="{{ $tache->nom_tache }}" name="nom_tache" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Date de debut</label>
                            <input type="datetime-local" value="{{ $tache->date_debut }}" name="date_debut"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Date De fin</label>
                            <input type="datetime-local" value="{{ $tache->date_fin }}" name="date_fin"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" value="{{ $tache->Description }}" name="Description"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Choose Brief</label>
                            <input type="text" value="{{ $tache->brief_id }}" name="brief_id"
                                class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success w-100 my-3">Update</button>
                        <a href="/" class="btn btn-dark w-100">Cancel</a>
                    </form>
                </div>

            </div>
        </div>
    @endsection
