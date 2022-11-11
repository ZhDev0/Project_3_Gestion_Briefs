@extends('Master.Layout')


@section('content')
    <div class="row my-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Brief</div>
                <div class="card-body">
                    <form action="/edit_brief/{{ $brief->id }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nom de Brief</label>
                            <input type="text" value="{{ $brief->nom_brief }}" name="nom_brief" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Date de Livraison</label>
                            <input type="datetime-local" value="{{ $brief->date_livraison }}" name="date_livraison" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Date De Recuperation</label>
                            <input type="datetime-local" value="{{ $brief->date_recuperation }}" name="date_recuperation" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 my-3">Add</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
