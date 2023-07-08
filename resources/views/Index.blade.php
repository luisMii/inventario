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
                    border: 3px solid hsla(34, 93%, 48%, 0.473);
                    margin-bottom: 1px;
                }
                .item-hover:hover {
                    background-color:#e27c28;
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
        <div style="display: flex; justify-content: center;">
            <img src="images/logo/logo-ant.jpeg" alt="logo" style="width: 300px; height: 300px;">
        </div>
        <h1 style="text-align: center;"><b>BIENVENIDO AL INVENTARIO</b></h1>
            <br><br><br>
        <body>
            <div class="col-md-4">
                <a href={{ route('dashboard.Proveedores') }}>
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48"><g fill="none" stroke="#000" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M32 6H38"/><path stroke-linecap="round" stroke-linejoin="round" d="M10 36H6V28H32V36H18"/><path stroke-linecap="round" stroke-linejoin="round" d="M32 36V12H38.5L44 24V36H41"/><path fill="#2F88FF" stroke-linejoin="round" d="M4 8L26 8L26 22L7 22L4 8Z"/><circle cx="37" cy="38" r="4" fill="#2F88FF"/><circle cx="14" cy="38" r="4" fill="#2F88FF"/></g></svg>
                        <p class="dots-1-lines title-def">Proveedores</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href={{ route('dashboard.Clientes') }}>
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48"><g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><circle cx="24" cy="12" r="8" fill="#2F88FF"/><path d="M42 44C42 34.0589 33.9411 26 24 26C14.0589 26 6 34.0589 6 44"/><path fill="#2F88FF" d="M24 44L28 39L24 26L20 39L24 44Z"/></g></svg>
                        <p class="dots-1-lines title-def">Clientes</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48"><g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path fill="#2F88FF" stroke="#000" d="M38 4H10C8.89543 4 8 4.89543 8 6V42C8 43.1046 8.89543 44 10 44H38C39.1046 44 40 43.1046 40 42V6C40 4.89543 39.1046 4 38 4Z"/><path stroke="#fff" d="M17 30L31 30"/><path stroke="#fff" d="M17 36H24"/><path stroke="#fff" d="M30 13L22 21L18 17"/></g></svg>
                        <p class="dots-1-lines title-def">Resumen de Inventario</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48"><g fill="none"><rect width="32" height="40" x="8" y="4" fill="#2F88FF" stroke="#000" stroke-linejoin="round" stroke-width="4" rx="2"/><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M21 14H33"/><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M21 24H33"/><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M21 34H33"/><path fill="#fff" fill-rule="evenodd" d="M15 16C16.1046 16 17 15.1046 17 14C17 12.8954 16.1046 12 15 12C13.8954 12 13 12.8954 13 14C13 15.1046 13.8954 16 15 16Z" clip-rule="evenodd"/><path fill="#fff" fill-rule="evenodd" d="M15 26C16.1046 26 17 25.1046 17 24C17 22.8954 16.1046 22 15 22C13.8954 22 13 22.8954 13 24C13 25.1046 13.8954 26 15 26Z" clip-rule="evenodd"/><path fill="#fff" fill-rule="evenodd" d="M15 36C16.1046 36 17 35.1046 17 34C17 32.8954 16.1046 32 15 32C13.8954 32 13 32.8954 13 34C13 35.1046 13.8954 36 15 36Z" clip-rule="evenodd"/></g></svg>
                        <p class="dots-1-lines title-def">Ordenes Pedientes</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href={{ route('productos.index') }}>
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48"><g fill="none" stroke-linecap="round" stroke-width="4"><path fill="#2F88FF" stroke="#000" stroke-linejoin="round" d="M4.59202 19.4667C4.29018 18.2091 5.24343 17 6.53679 17H41.4632C42.7566 17 43.7098 18.2091 43.408 19.4667L38.368 40.4667C38.1522 41.366 37.348 42 36.4232 42H11.5768C10.652 42 9.84784 41.366 9.63202 40.4667L4.59202 19.4667Z"/><rect width="8" height="10" x="11" y="7" stroke="#000" stroke-linejoin="round"/><path stroke="#000" stroke-linejoin="round" d="M19 17L25.5 8L38 17"/><path stroke="#fff" d="M15 25H23"/></g></svg>
                        <p class="dots-1-lines title-def">Productos</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href={{ route('dashboard.Cotizacion') }}>
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48"><g fill="none" stroke="#000" stroke-linejoin="round" stroke-width="4"><path stroke-linecap="round" d="M42 26V40C42 41.1046 41.1046 42 40 42H8C6.89543 42 6 41.1046 6 40V8C6 6.89543 6.89543 6 8 6L22 6"/><path fill="#2F88FF" d="M14 26.7199V34H21.3172L42 13.3081L34.6951 6L14 26.7199Z"/></g></svg>
                        <p class="dots-1-lines title-def">Cotizacion</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href={{ route('dashboard.Orden_compra') }}>
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48"><g fill="none"><path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M25 40H7C5.34315 40 4 38.6569 4 37V11C4 9.34315 5.34315 8 7 8H41C42.6569 8 44 9.34315 44 11V24.9412"/><path fill="#2F88FF" stroke="#000" stroke-width="4" d="M4 11C4 9.34315 5.34315 8 7 8H41C42.6569 8 44 9.34315 44 11V20H4V11Z"/><path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M32 35H44"/><path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M38 29V41"/><circle r="2" fill="#fff" transform="matrix(0 -1 -1 0 10 14)"/><circle r="2" fill="#fff" transform="matrix(0 -1 -1 0 16 14)"/></g></svg>
                        <p class="dots-1-lines title-def">Orden de compra</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href={{ route('dashboard.Orden_compra') }}>
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48"><g fill="none" stroke-linejoin="round" stroke-width="4"><rect width="40" height="28" x="4" y="12" fill="#2F88FF" stroke="#000" rx="3"/><path stroke="#000" stroke-linecap="round" d="M14 6V12"/><path stroke="#000" stroke-linecap="round" d="M34 6V12"/><path stroke="#fff" stroke-linecap="round" d="M10.2266 24L15.0006 19.0166V33"/><path stroke="#fff" stroke-linecap="round" d="M24 12V40"/><ellipse cx="34" cy="26" stroke="#fff" rx="3" ry="7"/><path stroke="#000" stroke-linecap="round" d="M21 12H27"/><path stroke="#000" stroke-linecap="round" d="M21 40H27"/></g></svg>
                        <p class="dots-1-lines title-def">Productos por vencer</p>
                    </div>
                </a>
            </div>
            
</x-app-layout>