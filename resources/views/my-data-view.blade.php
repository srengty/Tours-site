<div>
    {!! '<h1>Cities list</h1>' !!}
   <table style="border:1px solid; border-collapse:collapse">
    <thead>
        <tr><th style="border:1px solid;">ID</th><th style="border:1px solid;">CITY</th></tr>
    </thead>
    <tbody>
        @foreach($cities as $city)
            <tr>
                <td style="border:1px solid;">{{ $city->id }}</td>
                <td style="border:1px solid;">{{ $city->city }}</td>
                <td style="border:1px solid;">
                    <a href="/cities/edit/{{ $city->id }}">Edit</a>
                </td>
                <td style="border:1px solid;">
                    <a href="/cities/delete/{{ $city->id }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
   </table>
   <a href="/cities/add">Add City</a>
</div>
