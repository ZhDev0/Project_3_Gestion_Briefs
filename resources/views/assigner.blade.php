@extends('Master-Page.Layout')


@section('title')
    Assigner Page
@endsection

@section('style')
    a{
    text-decoration: none;
    font-size: 35px;
    }
    .a:hover {
    background:lightgrey;
    transition: .3s ease-in-out;
    }
    .a {
    text-decoration: none;
    font-size: 25px;
    border: 1px solid black;
    border-radius: 50%;
    height:46px;
    width:46px;
    text-align:center;
    background: white;
    }
    .search-area {
    display:flex;
    justify-content: end;
    align-items:center;
    }
    main {
    display:flex;
    justify-content: center;
    align-items:center;
    {{-- background: yellow; --}}
    }

    main > .div {
    margin: 0 30px;
    font-size: 30px;
    }
    main > .operation {
    margin: 0 10px;
    }
    main label, .a {
    margin: 15px;
    }
    main label {
    font-size: 30px;
    }
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-12">
            <div class="search-area">
                <input type="text" class="form-control w-25" placeholder="Chercher Apprenant">
            </div>
            @foreach ($infos as $apprenant)
                <main>
                    {{-- <div>{{ $apprenant->id }}</div> --}}
                    <div class="div">{{ $apprenant->nom }} {{ $apprenant->prenom }}</div>
                    {{-- <label for="">{{ $value->nom . ' ' . $value->prenom }}</label> --}}
                    {{-- <a class="a" value="{{ $value->id }}" href="">+</a>
                    <a class="a" style="cursor: pointer;">-</a> --}}
                    <form action="/assigner" method="post">
                        @csrf
                        <input type="hidden" value="{{ $apprenant->id }}" name="apprenant_id">
                        <input type="hidden" value="{{ $brieff->id }}" name="brief_id">
                        <input class="a" type="submit" value="+">
                        <div class="a pt-1">-</div>
                    </form>
                </main>
            @endforeach
        </div>
    </div>
    <input type="hidden">

    <a href="/gestion_briefs" class="text-success d-flex justify-content-center">Retourner</a>
@endsection



@section('script')
@endsection


{{--

<h1>All student</h1>
<table>
    </thead>
    <tbody>
        @foreach ($apprenants as $apprenant)
            <tr>
                <td>
                    <form action="" method="post">
                        @csrf
                        {{-- <input type="hidden" value="{{$item->id}}" name="student_id">
                    <input type="hidden" value="{{$id}}" name="brief_id"> --}}
{{-- </form>
                </td>
                <td>-</td>
            </tr>
        @endforeach
    </tbody>
</table>
<button>
    <a href="/editBrief">Back</a> --}}
