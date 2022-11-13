@extends('Master-Page.Layout')


@section('title')
    Update Promotion
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
                    <span class="material-icons">new_label</span>&nbsp;Update Promotion
                </div>
                <div class="card-body">
                    @if (Session::has('promotion_updated'))
                        <div class="alert alert-success">
                            {{ Session::get('promotion_updated') }}
                        </div>
                    @endif
                    <form action="/edit_promotion/{{ $editpromotion->id }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom_promotion">Promotion's Name <span style="color:red;">*</span></label>
                            <input type="text" value="{{ $editpromotion->nom_promotion }}" name="nom_promotion" id="nom_promotion" class="form-control">
                        </div>
                        @error('nom_promotion')
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
