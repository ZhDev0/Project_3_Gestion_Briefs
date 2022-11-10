@extends('Master-Page.Layout')


@section('title')
    Add Task
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
                    <span class="material-icons">new_label</span>&nbsp;Add Promotion
                </div>
                <div class="card-body">
                    @if (Session::has('task_created'))
                        <div class="alert alert-success">
                            {{ Session::get('task_created') }}
                        </div>
                    @endif
                    <form action="{{ route('task.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom_task">nom de task</label>
                            <input type="text" name="nom_task" id="nom_task" class="form-control">
                        </div>
                        @error('nom_task')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="debut_task">Date Debut de Task</label>
                            <input type="datetime-local" name="debut_task" id="debut_task" class="form-control">
                        </div>
                        @error('debut_task')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="fin_task">Date Fin de Task</label>
                            <input type="datetime-local" name="fin_task" id="fin_task" class="form-control">
                        </div>
                        @error('fin_task')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="brief_number">Brief's Number</label>
                            <input type="text" name="brief_number" id="brief_number" class="form-control">
                        </div>
                        @error('brief_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="hidden" name="brief_id">

                        <button type="submit" class="btn mt-3 btn-primary w-100">Send</button>
                        <a href="/gestion_briefs" class="btn btn-dark w-100 mt-2">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
@endsection
