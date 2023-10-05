<!-- formulario de alta de tarea -->
<form action="agregar" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Deudor</label>
                <input required name="deudor" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Numeor de cuota</label>
                <input required name="cuota" type="number" class="form-control">
            </div>
            <div class="form-group">
                <label>Monto</label>
                <input required name="cuota_capital" type="number" class="form-control">
            </div>
            <div class="form-group">
                <label>Fecha del pago</label>
                <input required name="fecha_pago" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>DNI</label>
                <input required name="dni_deudor" type="number" class="form-control">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>