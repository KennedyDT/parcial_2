<div class="row">

    <div class="col-4">
        <label for="name"> Nombre empleado  </label>
        <input class="form-control" type="text" name="nombre_empleado"
            value="{{ isset($sales->nombre_empleado) ? $sales->nombre_empleado : '' }}" id="nombre_empleado">
        <br>

        <label for="name"> Nombre cliente  </label>
        <input class="form-control" type="text" name="nombre_cliente"
            value="{{ isset($sales->nombre_cliente) ? $sales->nombre_cliente : '' }}" id="nombre_cliente">
        <br>

        <label for="name"> Nombre producto  </label>
        <input class="form-control" type="text" name="nombre_producto"
            value="{{ isset($sales->nombre_producto) ? $sales->nombre_producto : '' }}" id="nombre_producto">
        <br>

        <label for="name"> Precio  </label>
        <input class="form-control" type="text" name="precio"
            value="{{ isset($sales->precio) ? $sales->precio : '' }}" id="precio">
        <br>

        <label for="name"> Fecha compra  </label>
        <input class="form-control" type="date" name="fecha_compra"
            value="{{ isset($sales->fecha_compra) ? $sales->fecha_compra : '' }}" id="fecha_compra">
        <br>



        <input type="submit" id="save_data" value="Guardar">

        <a href="{{ url('sales') }}">Regresar </a>
        <br>
    </div>

</div>
