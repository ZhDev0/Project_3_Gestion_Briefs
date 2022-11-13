@extends('Master-Page.Layout')


@section('title')
    Update Apprenant
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
                    <span class="material-icons">new_label</span>&nbsp;Update Apprenant
                </div>
                <div class="card-body">
                    @if (Session::has('apprennat_updated'))
                        <div class="alert alert-success">
                            {{ Session::get('apprennat_updated') }}
                        </div>
                    @endif
                    <form action="/edit_apprenant/{{ $apprenantUp->id }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="prenom">Last Name <span style="color:red;">*</span></label>
                            <input type="text" name="prenom" id="prenom" value="{{ $apprenantUp->prenom }}" class="form-control">
                        </div>
                        @error('prenom')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="nom">First Name <span style="color:red;">*</span></label>
                            <input type="text" name="nom" id="nom" value="{{ $apprenantUp->nom }}" class="form-control">
                        </div>
                        @error('nom')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="email">Email <span style="color:red;">*</span></label>
                            <input type="text" name="email" id="email" value="{{ $apprenantUp->email }}" class="form-control">
                        </div>
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="id_promotion">Choose a Promotion <span style="color:red;">*</span></label>
                            <input type="text" name="id_promotion" value="{{ $apprenantUp->id_promotion }}" id="id_promotion" class="form-control">
                        </div>
                        @error('id_promotion')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn mt-3 btn-success w-100">Update</button>
                        <a href="/" class="btn btn-dark w-100 mt-2">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
@endsection
