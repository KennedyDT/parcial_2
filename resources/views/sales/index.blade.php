
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <a href="{{ url('sales/create') }}">Registar nueva venta </a></div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Nombre_empleado</th>
                        <th>Nombre_cliente</th>
                        <th>Nombre_producto</th>
                        <th>Precio</th>
                        <th>Fecha de compra</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ( $data_sales as $sales)
                    <tr>
                        <td>{{ $sales ->id }}</td>
                        <td>{{ $sales ->nombre_empleado }}</td>
                        <td>{{ $sales ->nombre_cliente }}</td>
                        <td>{{ $sales ->nombre_producto }}</td>
                        <td>{{ $sales ->precio }}</td>
                        <td>{{ $sales ->fecha_compra }}</td>


                        <td>

                        <a href="{{ url ('/sales/'.$sales->id.'/edit' ) }}">
                            Editar
                        </a>

                        |

                        <form action="{{ url ('/sales/'.$sales->id ) }}" method="post">

                        <!--llave para javascript-->
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">

                        </form>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
