<div>
@if(!empty($data))
    <table>
        {{-- Table headers --}}
        <thead>
            <tr>
                {{-- Assume your data columns --}}
                <th>Column 1</th>
                <th>Column 2</th>
                {{-- Add more columns as needed --}}
            </tr>
        </thead>
        <tbody>
            {{-- Loop through the data to display table rows --}}
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->column1 }}</td>
                    <td>{{ $item->column2 }}</td>
                    {{-- Add more cells as needed --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Please select a scheme to view the data.</p>
@endif

</div>
