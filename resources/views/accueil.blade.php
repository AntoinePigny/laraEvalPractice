@extends('layouts.base')

@section('title', 'Accueil')
@section('main')
    <h1>Cat's Eyes</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Size (cm)</th>
            <th>Weight (kg)</th>
            <th>Age (yrs)</th>
            <th>Gender</th>
            <th>Color(s)</th>
            <th>Delete</th>
            <th>Upuh-datuh !!</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cats as $cat)
        <tr>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->size }}</td>
            <td>{{ $cat->weight }}</td>
            <td>{{ $cat->age }}</td>
            @if($cat->gender)
            <td>{{ $cat->gender->gender }}</td>
            @else <td>castré</td>
            @endif
            <td>
                @foreach($cat->colors as $color)
                    <span>{{$color->colors}}</span>
                @endforeach
            </td>
            <td>
                <form method="get" action="/newcat/delete/{{$cat->id}}">
                {{ csrf_field() }}
                    <button type="submit" class="btn btn-outline-info">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>
                </form>
            </td>
            <td>
                <form method="get" action="/newcat/update/{{$cat->id}}">
                {{ csrf_field() }}
                    <button type="submit" class="btn btn-outline-info">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection