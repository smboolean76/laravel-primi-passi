@extends('layouts.main')

@section('content')
    <h2>{{ $name }}</h2>

    @if (!empty($students))
        <ul>
            @foreach ($students as $student) 
            @if($loop->first)
                <li><strong>Inizio lista</strong></li>
            @endif
                <li @if($loop->last) style="color:red" @endif>{{ $student }}</li>
            @endforeach
        </ul>
    @else
        Non ci sono studenti
    @endif
@endsection