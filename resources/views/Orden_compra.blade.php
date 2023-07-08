<x-app-layout>
    <div>
        <div class=" mb-6">
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageTitle" />
        </div>

        <head>
            <style>
              .order-form {
                width: 400px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
              }
              
              .order-form label,
              .order-form input {
                display: block;
                margin-bottom: 10px;
              }
              
              .order-form button {
                padding: 10px;
                font-size: 16px;
                background-color: #f2f2f2;
                border: 1px solid #ccc;
                border-radius: 3px;
                cursor: pointer;
              }
            </style>
            </head>
            <body>
              <div class="order-form">
                <h2>Orden de Compra</h2>
                <label for="product">Producto:</label>
                <input type="text" id="product" required>
                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" required>
                <label for="customer">Cliente:</label>
                <input type="text" id="customer" required>
                <label for="address">Dirección de envío:</label>
                <textarea id="address" rows="3" required></textarea>
                <button onclick="submitForm()">Enviar Orden</button>
              </div>
            
            <script>
              function submitForm() {
                const product = document.getElementById('product').value;
                const quantity = document.getElementById('quantity').value;
                const customer = document.getElementById('customer').value;
                const address = document.getElementById('address').value;
            
                // Aquí puedes realizar acciones adicionales con los datos de la orden, como enviarlos a un servidor o procesarlos de alguna manera.
            
                // Por ahora, simplemente mostramos una alerta con los datos de la orden.
                alert(`Orden de Compra:\n\nProducto: ${product}\nCantidad: ${quantity}\nCliente: ${customer}\nDirección de envío: ${address}`);
            
                // Luego, puedes redirigir al usuario a una página de confirmación o realizar cualquier otra acción necesaria.
              }
            </script>
            </body>
        
    </div>
</x-app-layout>