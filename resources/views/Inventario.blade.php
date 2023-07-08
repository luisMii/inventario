<x-app-layout>
    <div>
        <head>
            <style>
                .col-md-4 {
                    width: calc(23.33% - 20px);
                    float: left;
                    margin: 10px;
                }
                .tool-item {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                    padding: 10px;
                    border: 1px solid hsla(34, 93%, 48%, 0.473);
                    margin-bottom: 1px;
                }
                .item-hover:hover {
                    background-color: #e27c28;
                }
                .title-def {
                    font-weight: bold;
                }
                .tool-item img {
                    max-width: 100%;
                    height: auto;
                }
            </style>
        </head>
        <body>
            <div class="col-md-4">
                <a href={{ route('productos.create') }}>
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" d="M16 7h3v4h-3V7Zm-7 8h11M9 11h4M9 7h4M6 18.5a2.5 2.5 0 1 1-5 0V7h5.025M6 18.5V3h17v15.5a2.5 2.5 0 0 1-2.5 2.5h-17"/></svg>
                        <p class="dots-1-lines title-def">Agregar Productos</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/web/qualification?s=08db1c16-f16d-435f-8369-4937a1f2b244">
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" d="M9 18v-6m3 6v-5m3 5v-8m2-7h4v20H3V3h4m0-2h10v4H7V1Z"/></svg>
                        <p class="dots-1-lines title-def">Editar Productos</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/web/qualification?s=08db1c16-f16d-435f-8369-4937a1f2b244">
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" d="M16 7h3v4h-3V7Zm-7 8h11M9 11h4M9 7h4M6 18.5a2.5 2.5 0 1 1-5 0V7h5.025M6 18.5V3h17v15.5a2.5 2.5 0 0 1-2.5 2.5h-17"/></svg>
                        <p class="dots-1-lines title-def">Stock</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/web/qualification?s=08db1c16-f16d-435f-8369-4937a1f2b244">
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" d="M16 7h3v4h-3V7Zm-7 8h11M9 11h4M9 7h4M6 18.5a2.5 2.5 0 1 1-5 0V7h5.025M6 18.5V3h17v15.5a2.5 2.5 0 0 1-2.5 2.5h-17"/></svg>
                        <p class="dots-1-lines title-def">Productos de Muestra</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/web/qualification?s=08db1c16-f16d-435f-8369-4937a1f2b244">
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" d="M16 7h3v4h-3V7Zm-7 8h11M9 11h4M9 7h4M6 18.5a2.5 2.5 0 1 1-5 0V7h5.025M6 18.5V3h17v15.5a2.5 2.5 0 0 1-2.5 2.5h-17"/></svg>
                        <p class="dots-1-lines title-def">Productos de Servicio</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/web/qualification?s=08db1c16-f16d-435f-8369-4937a1f2b244">
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" d="M16 7h3v4h-3V7Zm-7 8h11M9 11h4M9 7h4M6 18.5a2.5 2.5 0 1 1-5 0V7h5.025M6 18.5V3h17v15.5a2.5 2.5 0 0 1-2.5 2.5h-17"/></svg>
                        <p class="dots-1-lines title-def">detalles del producto</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href={{ route('dashboard.Certificado_calidad') }}>
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48"><g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path d="M40 23V14L31 4H10C8.89543 4 8 4.89543 8 6V42C8 43.1046 8.89543 44 10 44H22"/><path fill="#2F88FF" d="M34 27L36.5234 32.5269L42.5595 33.2188L38.0829 37.3266L39.2901 43.2812L34 40.293L28.7099 43.2812L29.9171 37.3266L25.4405 33.2188L31.4766 32.5269L34 27Z"/><path d="M30 4V14H40"/></g></svg>
                        <p class="dots-1-lines title-def">certificados de Calidad</p>
                    </div>
                </a>
            </div>
            
            
            <!-- Repite el código anterior para los otros elementos del menú -->
            <!-- Puedes copiar y pegar el código y cambiar los valores de los atributos según sea necesario -->
        </body>
    </div>
</x-app-layout>