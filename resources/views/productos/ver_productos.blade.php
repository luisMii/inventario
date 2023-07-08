<x-app-layout>
  <div>


        <h1>Crear nuevo producto</h1>
    
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
    
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="proveedor">Proveedor:</label>
                <input type="text" name="proveedor" id="proveedor" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="concepto">Concepto:</label>
                <input type="text" name="concepto" id="concepto" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="tipo_documento">Tipo de Documento:</label>
                <input type="text" name="tipo_documento" id="tipo_documento" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="serie">Serie:</label>
                <input type="text" name="serie" id="serie" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="numero">Número:</label>
                <input type="text" name="numero" id="numero" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" name="color" id="color" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="presentacion">Presentación:</label>
                <input type="text" name="presentacion" id="presentacion" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="lote">Lote:</label>
                <input type="text" name="lote" id="lote" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
                <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" required>
            </div>
    
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    
    
</div>
</x-app-layout>