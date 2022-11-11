@extends('Master.Layout')


@section('style')
<style>

</style>
@endsection

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
                            <input type="datetime-local" value="{{ $brief->date_livraison }}" name="date_livraison"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Date De Recuperation</label>
                            <input type="datetime-local" value="{{ $brief->date_recuperation }}" name="date_recuperation"
                                class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 my-3">Add</button>
                        <a href="/" class="btn btn-dark w-100">cancel</a>
                    </form>
                </div>

            </div>
            <div class="tache-area my-3 d-flex justify-content-center align-items-center">
                {{-- @foreach ($briefs as $value) --}}
                <main>
                    <span class="brief-name">{{ $tache->nom_tache }}</span>
                    <a href="/delete_task/{{ $tache->id }}" class="text-danger">Supprimer</a>
                    <a href="/edit_task/{{ $tache->id }}" class="text-success">Modifier</a>
                </main>
                {{-- @endforeach --}}
                <a href="/add_task" class="text-primary">+ Add Task</a>

            </div>
        </div>
    @endsection
