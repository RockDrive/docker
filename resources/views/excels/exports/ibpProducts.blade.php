<table>
    <thead>
    <tr>
        @foreach($headlines as $code => $name)
            <th><b>{{ $name }}</b></th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            @foreach($headlines as $code => $name)
                <th>{{ $product->{$code} }}</th>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
