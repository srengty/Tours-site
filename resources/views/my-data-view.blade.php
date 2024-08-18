<div>
   <table style="border:1px solid; border-collapse:collapse">
    <thead>
        <tr><th style="border:1px solid;">ID</th><th style="border:1px solid;">CITY</th></tr>
    </thead>
    <tbody>
        @foreach($cities as $city)
            <tr>
                <td style="border:1px solid;">{{ $city->id }}</td>
                <td style="border:1px solid;">{{ $city->city }}</td>
            </tr>
        @endforeach
    </tbody>
   </table>
</div>
