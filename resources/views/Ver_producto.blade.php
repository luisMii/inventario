<x-app-layout>
  <div>
      <div class="mb-6">
          <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageTitle" />
      </div>

      <style>
          .button-container {
              display: flex;
              justify-content: center;
              margin-bottom: 20px;
          }

          .btn {
              flex-basis: 20%;
              padding: 10px 20px;
              font-size: 20px;
              text-align: center;
              text-decoration: none;
              background-color: #dd722a;
              color: #fff;
              border-radius: 4px;
              border: none;
              cursor: pointer;
              transition: background-color 0.3s ease;
              margin-right: 10px;
          }

          .btn:last-child {
              margin-right: 0;
          }

          .btn:hover {
              background-color: #ff8800;
          }
      </style>

      <body>
          <div class="button-container">
              <a href="button1.html" class="btn">Botón 1</a>
              <a href="button2.html" class="btn">Botón 2</a>
              <a href="button3.html" class="btn">Botón 3</a>
              <a href="button4.html" class="btn">Botón 4</a>
              <a href="button5.html" class="btn">Botón 5</a>
          </div>

          <div class="form-container">
              <!-- Aquí va el formulario de cotización -->
          </div>

          <div class="table-container">
              <!-- Aquí va la tabla de cotización -->
          </div>
      </body>
  </div>
</x-app-layout>