@extends('Master-Page.Layout')


@section('title')
    Edit Task
@endsection


@section('style')
    form {

    }
    .form-content {
    display:flex;
    justify-content: center;
    align-items: center;
    }
    .form-content label {
    margin-right: 15px;
    }
    .card-header {
        display:flex;
    }
@endsection



@section('content')
    <div class="row my-5 pt-5">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <span class="material-icons">new_label</span>&nbsp;Update Task
                </div>
                <div class="card-body">
                    @if (Session::has('brief_updated'))
                        <div class="alert alert-success">
                            {{ Session::get('brief_updated') }}
                        </div>
                    @endif
                    <form action="/edit_task/{{ $tasko->id }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom_task">Nom de Task</label>
                            <input type="text" value="{{ $tasko->nom_task }}" name="nom_task" id="nom_task" class="form-control">
                        </div>
                        @error('nom_task')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="debut_task">debut task</label>
                            <input value="{{ $tasko->debut_task }}" type="datetime-local" name="debut_task" id="debut_task" class="form-control">
                        </div>
                        @error('debut_task')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="fin_task">fin task</label>
                            <input value="{{ $tasko->fin_task }}" type="datetime-local" name="fin_task" id="fin_task" class="form-control">
                        </div>
                        @error('fin_task')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="description">description</label>
                            <input value="{{ $tasko->description }}" type="text" name="description" id="description" class="form-control">
                        </div>
                        @error('description')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="brief_id">brief's Number</label>
                            <input value="{{ $tasko->brief_id }}" type="text" name="brief_id" id="brief_id" class="form-control">
                        </div>
                        @error('brief_id')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn mt-3 btn-success w-100">Update</button>
                        <a href="/gestion_briefs" class="btn btn-dark w-100 mt-2">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
@endsection
