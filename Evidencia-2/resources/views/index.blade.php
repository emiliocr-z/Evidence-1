<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pedidos</title>
</head>
<body>
    <h1>Listado de Pedidos</h1>
    <form action="{{ route('pedidos.search') }}" method="GET">
        <label for="invoice_number">Buscar por número de factura:</label>
        <input type="text" id="invoice_number" name="invoice_number">
        <button type="submit">Buscar</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Factura</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->numero_factura }}</td>
                    <td>{{ $pedido->estado }}</td>
                    <td>
                        @if ($pedido->estado === 'Delivered')
                            <a href="{{ route('pedidos.showPhoto', $pedido->id) }}">Ver foto</a>
                        @elseif ($pedido->estado === 'In process')
                            {{ $pedido->proceso }} - {{ $pedido->fecha_proceso }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
