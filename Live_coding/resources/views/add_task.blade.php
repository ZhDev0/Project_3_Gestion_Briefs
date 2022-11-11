@extends('Master.Layout')


@section('title')
@endsection


@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Task</div>
                <div class="card-body">
                    <form action="{{ route('task.submit') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nom de Tache</label>
                            <input type="text" name="nom_tache" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Date de debut</label>
                            <input type="datetime-local" name="date_debut" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Date De fin</label>
                            <input type="datetime-local" name="date_fin" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" name="Description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Choose Brief</label>
                            <input type="text" name="brief_id" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 my-3">Add Task</button>
                        <a href="/" class="btn btn-dark w-100">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
