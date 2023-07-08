<x-app-layout>
    <div>
        <div class=" mb-6">
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageTitle" />
        </div>
        <style>
            .form-container {
                margin-bottom: 20px;
            }
        
            .form-row {
                display: flex;
                margin-bottom: 10px;
            }
        
            .form-row label {
                flex-basis: 100px;
                margin-right: 10px;
            }
        
            .form-row input[type="text"],
            .form-row input[type="date"],
            .form-row input[type="number"] {
                flex-grow: 1;
            }
        
            .form-row button {
                margin-left: 10px;
                background-color: #00ff00;
                color: #ffffff;
            }
        
            .table-container {
                margin-top: 20px;
            }
        
            .table-container table {
                width: 100%;
                border-collapse: collapse;
            }
        
            .table-container th,
            .table-container td {
                padding: 5px;
                border: 1px solid #ccc;
            }
        </style>
        
        <body>
            <div class="form-container">
                <div class="form-row">
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha">
                </div>
                <div class="form-row">
                    <label for="descripcion">Descripción:</label>
                    <input type="text" id="descripcion">
                </div>
                <div class="form-row">
                    <label for="precio">Precio:</label>
                    <input type="number" id="precio">
                </div>
                <div class="form-row">
                    <label for="lote">Lote:</label>
                    <input type="text" id="lote">
                </div>
                <div class="form-row">
                    <label for="vencimiento">Fecha de vencimiento:</label>
                    <input type="date" id="vencimiento">
                </div>
                <button onclick="agregarItem()">Agregar</button>
            </div>
        
            <div class="table-container">
                <table id="tablaPedido">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Lote</th>
                            <th>Vencimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        
            <script>
                function agregarItem() {
                    // Obtener los valores de los campos
                    var fecha = document.getElementById('fecha').value;
                    var descripcion = document.getElementById('descripcion').value;
                    var precio = document.getElementById('precio').value;
                    var lote = document.getElementById('lote').value;
                    var vencimiento = document.getElementById('vencimiento').value;
        
                    // Crear una nueva fila en la tabla con los valores ingresados
                    var tabla = document.getElementById('tablaPedido').getElementsByTagName('tbody')[0];
                    var fila = tabla.insertRow();
        
                    var celdaFecha = fila.insertCell();
                    celdaFecha.textContent = fecha;
        
                    var celdaDescripcion = fila.insertCell();
                    celdaDescripcion.textContent = descripcion;
        
                    var celdaPrecio = fila.insertCell();
                    celdaPrecio.textContent = precio;
        
                    var celdaLote = fila.insertCell();
                    celdaLote.textContent = lote;
        
                    var celdaVencimiento = fila.insertCell();
                    celdaVencimiento.textContent = vencimiento;
        
                    // Limpiar los campos del formulario
                    document.getElementById('fecha').value = '';
                    document.getElementById('descripcion').value = '';
                    document.getElementById('precio').value = '';
                    document.getElementById('lote').value = '';
                    document.getElementById('vencimiento').value = '';
                }
            </script>
        </body>
        

    </div>
</x-app-layout>