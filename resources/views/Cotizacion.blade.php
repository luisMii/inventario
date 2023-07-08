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
                <a href={{ route('dashboard.Proveedores') }}>
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 32 32"><defs><linearGradient id="vscodeIconsFileTypeAzure0" x1="-231.477" x2="-231.5" y1="266.014" y2="265.909" gradientTransform="matrix(161.096 0 0 -241.217 37302.352 64171.913)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#114a8b"/><stop offset="1" stop-color="#0669bc"/></linearGradient><linearGradient id="vscodeIconsFileTypeAzure1" x1="-231.889" x2="-231.896" y1="265.964" y2="265.962" gradientTransform="matrix(224.69 0 0 -241.214 52119.718 64171.207)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-opacity=".3"/><stop offset=".071" stop-opacity=".2"/><stop offset=".321" stop-opacity=".1"/><stop offset=".623" stop-opacity=".05"/><stop offset="1" stop-opacity="0"/></linearGradient><linearGradient id="vscodeIconsFileTypeAzure2" x1="-232.026" x2="-231.998" y1="266.018" y2="265.914" gradientTransform="matrix(169.755 0 0 -241.217 39406.126 64171.912)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#3ccbf4"/><stop offset="1" stop-color="#2892df"/></linearGradient></defs><path fill="url(#vscodeIconsFileTypeAzure0)" d="M11.343 2.834h8.27l-8.585 25.435a1.319 1.319 0 0 1-1.249.9H3.343a1.316 1.316 0 0 1-1.243-1.74l8-23.7a1.319 1.319 0 0 1 1.249-.9Z"/><path fill="#0078d4" d="M23.36 19.894H10.247a.607.607 0 0 0-.414 1.051l8.427 7.865a1.325 1.325 0 0 0 .9.356h7.426Z"/><path fill="url(#vscodeIconsFileTypeAzure1)" d="M11.343 2.834a1.308 1.308 0 0 0-1.252.914L2.106 27.407a1.315 1.315 0 0 0 1.241 1.759h6.6a1.411 1.411 0 0 0 1.083-.921l1.592-4.693l5.688 5.306a1.346 1.346 0 0 0 .847.309h7.4l-3.245-9.272h-9.459l5.79-17.061Z"/><path fill="url(#vscodeIconsFileTypeAzure2)" d="M21.906 3.729a1.317 1.317 0 0 0-1.248-.9h-9.216a1.317 1.317 0 0 1 1.248.9l8 23.7a1.317 1.317 0 0 1-1.248 1.738h9.217a1.317 1.317 0 0 0 1.241-1.738Z"/></svg>
                        <p class="dots-1-lines title-def">Aditivos</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href={{ route('dashboard.Clientes') }}>
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 32 32"><defs><linearGradient id="vscodeIconsFileTypeMaya0" x1="-611.348" x2="-600.272" y1="-67.488" y2="-65.335" gradientTransform="matrix(1.437 0 0 -1.437 894.417 -82.292)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0f6067"/><stop offset=".5" stop-color="#05abac"/><stop offset="1" stop-color="#58bec4"/></linearGradient><linearGradient id="vscodeIconsFileTypeMaya1" x1="-603.594" x2="-602.011" y1="-77.699" y2="-59.604" gradientTransform="matrix(1.437 0 0 -1.437 894.417 -82.292)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#117c83"/><stop offset=".5" stop-color="#21b5b5"/><stop offset="1" stop-color="#7ed4d4"/></linearGradient><linearGradient id="vscodeIconsFileTypeMaya2" x1="-612.757" x2="-616.934" y1="-59.906" y2="-72.76" gradientTransform="matrix(1.437 0 0 -1.437 894.417 -82.292)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#9accd3"/><stop offset=".5" stop-color="#72aeb3"/><stop offset="1" stop-color="#317d7f"/></linearGradient><linearGradient id="vscodeIconsFileTypeMaya3" x1="-621.851" x2="-614.84" y1="-74.579" y2="-72.301" gradientTransform="matrix(1.437 0 0 -1.437 894.417 -82.292)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#21626e"/><stop offset=".5" stop-color="#157c84"/><stop offset="1" stop-color="#03a3a5"/></linearGradient><linearGradient id="vscodeIconsFileTypeMaya4" x1="-616.369" x2="-625.34" y1="-64.469" y2="-72.835" gradientTransform="matrix(1.437 0 0 -1.437 894.417 -82.292)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0b7c81"/><stop offset=".5" stop-color="#068d90"/><stop offset="1" stop-color="#16b1b1"/></linearGradient><linearGradient id="vscodeIconsFileTypeMaya5" x1="-608.072" x2="-603.488" y1="-74.678" y2="-70.966" gradientTransform="matrix(1.437 0 0 -1.437 894.417 -82.292)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0a8a8f"/><stop offset=".5" stop-color="#0f7c82"/><stop offset="1" stop-color="#1a5964"/></linearGradient><linearGradient id="vscodeIconsFileTypeMaya6" x1="-601.134" x2="-606.008" y1="-70.113" y2="-67.067" gradientTransform="matrix(1.437 0 0 -1.437 894.417 -82.292)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#256a77"/><stop offset=".5" stop-color="#0d9499"/><stop offset="1" stop-color="#06a0a2"/></linearGradient></defs><path fill="url(#vscodeIconsFileTypeMaya0)" d="M21.6 3.462H30L18.767 24.211s-1.893-5.5-2.706-7.459"/><path fill="url(#vscodeIconsFileTypeMaya1)" d="M23.669 29.118H30V3.462c-.005 13.407-5.64 25.656-6.331 25.656Z"/><path fill="url(#vscodeIconsFileTypeMaya2)" d="M18.767 24.211h-5.226L2 3.462c2.047-.26 6.135-.611 8.16-.776Z"/><path fill="url(#vscodeIconsFileTypeMaya3)" d="M8.693 16.019C6.96 22.866 1.995 29.32 2 29.314c5.752 0 6.991-.835 6.991-1.276V16.54c-.101-.17-.197-.346-.298-.521Z"/><path fill="url(#vscodeIconsFileTypeMaya4)" d="M2 3.462v25.852c3.147-5.2 4.981-8.6 6.6-13.45C4.6 8.794 2 3.462 2 3.462Z"/><path fill="url(#vscodeIconsFileTypeMaya5)" d="m23.233 28.102l.436 1.016V15.647l-.436.728"/><path fill="url(#vscodeIconsFileTypeMaya6)" d="M23.647 15.673v13.4l.016.043c.452 0 6.332-14.5 6.332-25.656c0 .002-3.589 7.487-6.348 12.213Z"/></svg>
                        <p class="dots-1-lines title-def">Mapei</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 32 32"><defs><linearGradient id="vscodeIconsFileTypeProcessinglang0" x1="16" x2="16" y1="3" y2="29" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1c4c70"/><stop offset="1" stop-color="#0c2b42"/></linearGradient></defs><path fill="url(#vscodeIconsFileTypeProcessinglang0)" d="M15.922 19.962a13 13 0 0 1-1.647-.077v5.552a27.76 27.76 0 0 1 3.332.461V29H5.968v-3.1a27.988 27.988 0 0 1 3.332-.462V6.715a28.215 28.215 0 0 1-3.331-.46v-3.1h2.986C10.18 3.153 13.549 3 16.23 3c6.318 0 9.8 2.948 9.8 8c.001 5.018-3.83 8.962-10.108 8.962ZM16 7.058c-.613 0-1.149 0-1.723.038v8.615a9.694 9.694 0 0 0 1.455.115c3.025-.038 5.13-1.723 5.13-4.519c0-2.607-1.455-4.249-4.862-4.249Z"/></svg>
                        <p class="dots-1-lines title-def">Penetron</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="tool-item item-hover">
                       <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 32 32"><defs><linearGradient id="vscodeIconsFileTypeAurelia0" x1="-73.299" x2="-69.112" y1="-36.757" y2="-40.601" gradientTransform="matrix(7.886 0 0 -8.589 578.084 -327.095)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#c06fbb"/><stop offset="1" stop-color="#6e4d9b"/></linearGradient><linearGradient id="vscodeIconsFileTypeAurelia1" x1="-75.72" x2="-76.857" y1="-29.976" y2="-28.423" gradientTransform="matrix(15.701 0 0 -16.956 1213.064 -480.525)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6e4d9b"/><stop offset=".14" stop-color="#77327a"/><stop offset=".29" stop-color="#b31777"/><stop offset=".84" stop-color="#cd0f7e"/><stop offset="1" stop-color="#ed2c89"/></linearGradient><linearGradient id="vscodeIconsFileTypeAurelia2" x1="-74.781" x2="-70.958" y1="-34.695" y2="-40.015" gradientTransform="matrix(8.637 0 0 -7.94 632.817 -284.546)" href="#vscodeIconsFileTypeAurelia0"/><linearGradient id="vscodeIconsFileTypeAurelia3" x1="-3.96" x2="31.012" y1="41.901" y2="13.213" href="#vscodeIconsFileTypeAurelia0"/><linearGradient id="vscodeIconsFileTypeAurelia4" x1="-72.241" x2="-69.334" y1="-41.388" y2="-43.773" gradientTransform="matrix(6.504 0 0 -6.517 478.263 -265.393)" href="#vscodeIconsFileTypeAurelia0"/><linearGradient id="vscodeIconsFileTypeAurelia5" x1="-74.154" x2="-70.411" y1="-34.519" y2="-37.816" gradientTransform="matrix(10.02 0 0 -10.013 732.69 -346.247)" href="#vscodeIconsFileTypeAurelia0"/><linearGradient id="vscodeIconsFileTypeAurelia6" x1="-74.562" x2="-75.704" y1="-31.575" y2="-30.013" gradientTransform="matrix(15.678 0 0 -16.922 1195.287 -503.63)" href="#vscodeIconsFileTypeAurelia1"/><linearGradient id="vscodeIconsFileTypeAurelia7" x1="-73.124" x2="-68.938" y1="-36.529" y2="-41.164" gradientTransform="matrix(7.887 0 0 -8.589 578.148 -327.094)" href="#vscodeIconsFileTypeAurelia0"/><linearGradient id="vscodeIconsFileTypeAurelia8" x1="-78.108" x2="-77.58" y1="-25.063" y2="-24.54" gradientTransform="matrix(37.627 7.508 7.477 -37.474 3130.474 -328.745)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6e4d9b"/><stop offset=".14" stop-color="#77327a"/><stop offset=".53" stop-color="#b31777"/><stop offset=".79" stop-color="#cd0f7e"/><stop offset="1" stop-color="#ed2c89"/></linearGradient></defs><path fill="url(#vscodeIconsFileTypeAurelia0)" d="m20.336 7.408l-2.6 1.734l-2.676-4.011l2.6-1.734l2.677 4.012Z"/><path fill="url(#vscodeIconsFileTypeAurelia1)" d="m22.449 19.461l4.44 6.654l-5.289 3.529l-4.44-6.654l-.775-1.161l5.289-3.53l.775 1.161Z"/><path fill="url(#vscodeIconsFileTypeAurelia2)" d="m15.787 23.907l.978 1.465l-4.026 2.687l-1.752-2.626l.88-.587l3.147-2.1l.775 1.161Z"/><path fill="url(#vscodeIconsFileTypeAurelia3)" d="m24.648 16.316l1.129-.754l1.752 2.626l-2.599 1.734l-.977-1.465l1.47-.981l-.775-1.16z"/><path fill="url(#vscodeIconsFileTypeAurelia4)" d="m23.953 18.457l-.775-1.161l1.47-.98l.775 1.16l-1.47.981z"/><path fill="url(#vscodeIconsFileTypeAurelia5)" d="m6.424 16.692l-.879.587l-2.677-4.012l4.026-2.687l1.876 2.813l-3.146 2.1l3.146-2.1l.8 1.2l-3.147 2.1Z"/><path fill="url(#vscodeIconsFileTypeAurelia6)" d="m15.432 8.947l.8 1.2l-5.289 3.53l-.8-1.2l-4.4-6.591l5.289-3.53l4.4 6.591Z"/><path fill="url(#vscodeIconsFileTypeAurelia7)" d="m19.207 8.162l-1.47.981l-.8-1.2l-1.877-2.812l2.6-1.734l2.677 4.012l-1.129.754Z"/><path fill="#714896" d="m12.64 26.006l-.775-1.161l3.147-2.1l.775 1.161l-3.146 2.1Z"/><path fill="#6f4795" d="m23.953 18.457l-.775-1.157l1.47-.981l.775 1.161l-1.47.981Z"/><path fill="#88519f" d="m6.424 16.692l-.8-1.2l3.146-2.1l.8 1.2l-3.147 2.1Z"/><path fill="#85509e" d="m17.737 9.143l-.8-1.2l1.47-.981l.8 1.2l-1.47.981Z"/><path fill="#8d166a" d="m22.449 19.461l-5.289 3.53l-.775-1.161l5.289-3.53l.775 1.161Z"/><path fill="#a70d6f" d="m15.432 8.947l.8 1.2l-5.289 3.53l-.8-1.2l5.289-3.53Z"/><path fill="#9e61ad" d="m3.428 8.987l1.496-.999l.999 1.497l-1.497.998z"/><path fill="#8053a3" d="m8.82 26.921l1.497-.998l.998 1.496l-1.496.999z"/><path fill="url(#vscodeIconsFileTypeAurelia8)" d="M6.38 27.43L2 20.813L25.407 5.157L30 11.668L6.38 27.43Z"/></svg>
                        <p class="dots-1-lines title-def">Xypex</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href={{ route('productos.index') }}>
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 256 302"><path fill="#27346A" d="M217.168 23.507C203.234 7.625 178.046.816 145.823.816h-93.52A13.393 13.393 0 0 0 39.076 12.11L.136 259.077c-.774 4.87 2.997 9.28 7.933 9.28h57.736l14.5-91.971l-.45 2.88c1.033-6.501 6.593-11.296 13.177-11.296h27.436c53.898 0 96.101-21.892 108.429-85.221c.366-1.873.683-3.696.957-5.477c-1.556-.824-1.556-.824 0 0c3.671-23.407-.025-39.34-12.686-53.765"/><path fill="#27346A" d="M102.397 68.84a11.737 11.737 0 0 1 5.053-1.14h73.318c8.682 0 16.78.565 24.18 1.756a101.6 101.6 0 0 1 6.177 1.182a89.928 89.928 0 0 1 8.59 2.347c3.638 1.215 7.026 2.63 10.14 4.287c3.67-23.416-.026-39.34-12.687-53.765C203.226 7.625 178.046.816 145.823.816H52.295C45.71.816 40.108 5.61 39.076 12.11L.136 259.068c-.774 4.878 2.997 9.282 7.925 9.282h57.744L95.888 77.58a11.717 11.717 0 0 1 6.509-8.74Z"/><path fill="#2790C3" d="M228.897 82.749c-12.328 63.32-54.53 85.221-108.429 85.221H93.024c-6.584 0-12.145 4.795-13.168 11.296L61.817 293.621c-.674 4.262 2.622 8.124 6.934 8.124h48.67a11.71 11.71 0 0 0 11.563-9.88l.474-2.48l9.173-58.136l.591-3.213a11.71 11.71 0 0 1 11.562-9.88h7.284c47.147 0 84.064-19.154 94.852-74.55c4.503-23.15 2.173-42.478-9.739-56.054c-3.613-4.112-8.1-7.508-13.327-10.28c-.283 1.79-.59 3.604-.957 5.477Z"/><path fill="#1F264F" d="M216.952 72.128a89.928 89.928 0 0 0-5.818-1.49a109.904 109.904 0 0 0-6.177-1.174c-7.408-1.199-15.5-1.765-24.19-1.765h-73.309a11.57 11.57 0 0 0-5.053 1.149a11.683 11.683 0 0 0-6.51 8.74l-15.582 98.798l-.45 2.88c1.025-6.501 6.585-11.296 13.17-11.296h27.444c53.898 0 96.1-21.892 108.428-85.221c.367-1.873.675-3.688.958-5.477c-3.122-1.648-6.501-3.072-10.14-4.279a83.26 83.26 0 0 0-2.77-.865"/></svg>
                        <p class="dots-1-lines title-def">Prodax</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href={{ route('dashboard.Cotizacion') }}>
                    <div class="tool-item item-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 512 512"><rect width="373" height="107" x="27.53" y="328.9" fill="#ea4335" rx="53.5"/><circle cx="81.36" cy="382.6" r="26.7" fill="#fff"/><rect width="373" height="107" x="53.33" y="250.94" fill="#fbbc04" rx="53.5" transform="rotate(-144 239.832 304.447)"/><circle cx="131.44" cy="225.44" r="26.7" fill="#fff"/><rect width="373" height="107" x="120.53" y="201.9" fill="#34a853" rx="53.5" transform="rotate(72 307.032 255.396)"/><circle cx="265.84" cy="129.28" r="26.7" fill="#fff"/><rect width="373" height="107" x="202.53" y="201.9" fill="#4285f4" rx="53.5" transform="rotate(-72 389.029 255.392)"/><circle cx="348.22" cy="381.64" r="26.7" fill="#fff"/><circle cx="430.67" cy="127.89" r="26.7" fill="#fff"/></svg>
                        <p class="dots-1-lines title-def">Integrado</p>
                    </div>
                </a>
            </div>
            
            
</x-app-layout>