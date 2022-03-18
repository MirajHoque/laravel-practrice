<div class="row">
    <div class="col">
        <table>
            <thead>
                <th>Name</th>
                <th>Age</th>
                <th>soft delete</th>
                <th>Get back</th>
                <th>Peramnent delete</th>
            </thead>

            <tbody>
                @foreach ($customers as $element)
                    <tr>
                        <td>{{ $element->name }}</td>
                        <td>{{ $element->age }}</td>
                        <td>
                            <a href="{{ url('customer/delete/'.$element->id) }}">delete</a>      
                        </td>
                        <td>
                            <a href="{{ url('customer/back/'.$element->id) }}">Restore</a>
                        </td>
                        <td>
                            <a href="{{ url('customer/permanent/delete/'.$element->id) }}">permanet</a>      
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>