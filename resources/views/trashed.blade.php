<div class="row">
    <div class="col">
        <table>
            <thead>
                <th>Name</th>
                <th>Age</th>
                <th>Restore</th>
            </thead>

            <tbody>
                @foreach ($data as $element)
                    <tr>
                        <td>{{ $element->name }}</td>
                        <td>{{ $element->age }}</td>
                        <td>
                            <a href="{{ url('customer/restore/'.$element->id) }}">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>