@extends('layout.app')

@section('title', 'Elenco dei libri')

@section('content')
    <h1>Lista dei libri:</h1>

    @if (count($books) > 0)
        <ul>
            @foreach ($books as $book)
                <li>
                    {{$book->id}} - {{$book->title}} - {{$book->description}} - {{$book->author}}
                </li>
            @endforeach
        </ul>
    @else
        Nessun risultato
    @endif

    <ul>
        @forelse  ($books as $book)
            <li>
                {{$book->id}} - {{$book->title}} - {{$book->description}} - {{$book->author}}
            </li>
        @empty
            <li>Nessun Risultato</li>
        @endforelse
    </ul>


@endsection
