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
