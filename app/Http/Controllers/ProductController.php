<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

use App\Models\User;


class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        // Muestra el formulario para crear un nuevo producto
        return view('productos.create');
    }

    public function store(Request $request)
{
    // Valida los datos del formulario
    $validatedData = $request->validate([
        'producto' => 'required|string',
        'presentacion' => 'required|string',
        'proveedor' => 'required|string',
        'tipo_doc' => 'required|string',
        'concepto' => 'required|string',
        'lote' => 'required|string',
        'color' => 'required|string',
        'serie' => 'required|string',
        'numero' => 'required|string',
        'estado_producto' => 'required|string',
        'fecha_vencimiento' => 'required|date',
        'detalle_defecto' => 'required|string',
        'precio' => 'required|string',
        'cantidad' => 'required|integer',
    ]);

    // Crea un nuevo producto con los datos validados
    $producto = new Producto;
    $producto->producto = $validatedData['producto'];
    $producto->presentacion = $validatedData['presentacion'];
    $producto->proveedor = $validatedData['proveedor'];
    $producto->tipo_doc = $validatedData['tipo_doc'];
    $producto->concepto = $validatedData['concepto'];
    $producto->lote = $validatedData['lote'];
    $producto->color = $validatedData['color'];
    $producto->serie = $validatedData['serie'];
    $producto->numero = $validatedData['numero'];
    $producto->estado_producto = $validatedData['estado_producto'];
    $producto->fecha_vencimiento = $validatedData['fecha_vencimiento'];
    $producto->detalle_defecto = $validatedData['detalle_defecto'];
    $producto->precio = $validatedData['precio'];
    $producto->cantidad = $validatedData['cantidad'];
    $producto->save();

    return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente');
}

        public function edit($id)
        {
            // Muestra el formulario para editar un producto existente
            $producto = Producto::findOrFail($id);
            return view('productos.edit', compact('producto'));
        }

        public function update(Request $request, $id)
        {
            // Valida los datos del formulario y actualiza el producto en la base de datos
            $producto = Producto::findOrFail($id);
            $producto->producto = $request->input('producto');
            $producto->presentacion = $request->input('presentacion');
            $producto->proveedor = $request->input('proveedor');
            // Resto de los campos del formulario
            $producto->tipo_doc = $request->input('tipo_doc');
            $producto->concepto = $request->input('concepto');
            $producto->lote = $request->input('lote');
            $producto->color = $request->input('color');
            $producto->serie = $request->input('serie');
            $producto->numero = $request->input('numero');
            $producto->estado_producto = $request->input('estado_producto');
            $producto->fecha_vencimiento = $request->input('fecha_vencimiento');
            $producto->detalle_defecto = $request->input('detalle_defecto');
            $producto->precio = $request->input('precio');
            $producto->cantidad = $request->input('cantidad');
        
            $producto->save();
        
            return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente');
        }

    public function destroy($id)
    {
        // Elimina un producto de la base de datos
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente');
    }
}
