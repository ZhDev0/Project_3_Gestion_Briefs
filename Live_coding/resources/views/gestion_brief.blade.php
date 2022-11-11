@extends('Master.Layout')


@section('title')

@endsection


@section('style')
<style>

</style>
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        @foreach ($briefs as $value)
        <main>
            <span class="brief-name">{{ $value->nom_brief }}</span>
            <a href="/deleto/{{ $value->id }}" class="text-danger">Supprimer</a>
            <a href="/edit_brief/{{ $value->id }}" class="text-success">Modifier</a>
        </main>
        @endforeach
        <a href="/add_brief" class="text-primary">+ Add Brief</a>
    </div>
</div>
@endsection


@section('script')

@endsection
