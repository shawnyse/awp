@extends ('layouts.app')

@section ('page_title')
    Guestbook | Comment from {{ $comment -> name }}
@endsection

@section ('page_heading')
    Comment from {{ $comment -> name }}
@endsection

@section ('content')
    <table class="table is-striped">
        <tbody>
        <tr>
            <td>Name:</td>
            <td>{{ $comment -> name }}</td>
        </tr>
        <tr>
            <td>Date:</td>
            <td>{{ $comment -> updated_at -> format ('l js F') }}</td>
        </tr>
        <tr>
            <td></td>
            <td>{{ $comment -> comment }}</td>
        </tr>
        </tbody>
    </table>
@endsection
