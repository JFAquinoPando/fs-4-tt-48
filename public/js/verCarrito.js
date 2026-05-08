import { obtener, limpiar } from "./almacenamiento.js";

const $ = (selector) => document.querySelector(selector)
const $$ = (selector) => document.querySelectorAll(selector)

document.addEventListener("DOMContentLoaded", function () {
    cargarProductos()
    actualizarContador()
})

function cargarProductos() {
    const contenedorProductos = $(".contenedor-productos")
    const productosCarro = JSON.parse(obtener("mi_carro")) || []

    if (productosCarro.length === 0) {
        contenedorProductos.innerHTML = `
            <div class="text-center py-12">
                <p class="text-lg text-gray-600">Tu carrito está vacío</p>
                <a href="./index.html" class="mt-4 inline-block bg-[#febd69] hover:bg-[#f3a847] text-black font-bold py-2 px-6 rounded">
                    Continuar comprando
                </a>
            </div>
        `
        return
    }

    // Generar HTML de productos
    const productosHTML = productosCarro.map((producto, index) => `
        <article class="bg-white border-b border-gray-200 py-4 hover:shadow-sm transition">
            <div class="grid grid-cols-4 gap-4 items-start">
                <div class="col-span-1">
                    <img src="${producto.imagen}" alt="${producto.descripcion}" class="w-full h-32 object-cover rounded border border-gray-300">
                </div>
                <div class="col-span-2">
                    <h3 class="text-lg font-medium text-gray-800 hover:text-[#147efb] cursor-pointer">${producto.descripcion}</h3>
                    <div class="mt-2 flex items-center gap-2">
                        <span class="text-sm text-gray-500">En stock</span>
                        <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Envío disponible</span>
                    </div>
                    <p class="mt-3 text-sm text-gray-600">Vendido y enviado por <strong class="text-gray-900">Amazon</strong></p>
                </div>
                <div class="col-span-1 text-right">
                    <p class="text-2xl font-bold text-red-600">${producto.precio}</p>
                    <div class="mt-4 flex flex-col gap-2">
                        <select class="border border-gray-300 rounded px-2 py-1 text-sm text-gray-700 cursor-pointer cantidad-selector" data-index="${index}">
                            <option value="1" selected>Cantidad: 1</option>
                            <option value="2">Cantidad: 2</option>
                            <option value="3">Cantidad: 3</option>
                            <option value="4">Cantidad: 4</option>
                            <option value="5">Cantidad: 5</option>
                        </select>
                        <button class="text-blue-600 hover:text-red-600 hover:underline text-sm font-medium btn-eliminar" data-index="${index}">
                            Eliminar del carrito
                        </button>
                    </div>
                </div>
            </div>
        </article>
    `).join("")

    contenedorProductos.innerHTML = productosHTML

    // Agregar eventos
    $$(".btn-eliminar").forEach(btn => {
        btn.addEventListener("click", function () {
            const index = this.dataset.index
            eliminarProducto(index)
        })
    })

    calcularSubtotal()
}

function eliminarProducto(index) {
    const productosCarro = JSON.parse(obtener("mi_carro")) || []
    productosCarro.splice(index, 1)
    
    if (productosCarro.length === 0) {
        limpiar("mi_carro")
    } else {
        guardar("mi_carro", JSON.stringify(productosCarro))
    }
    
    cargarProductos()
    actualizarContador()
}

function calcularSubtotal() {
    const productosCarro = JSON.parse(obtener("mi_carro")) || []
    const total = productosCarro.reduce((sum, producto) => {
        const precio = parseFloat(producto.precio.replace(/[^\d]/g, ""))
        return sum + precio
    }, 0)

    const elementoSubtotal = $(".subtotal-cantidad")
    const elementoTotal = $(".total-amount")

    if (elementoSubtotal) {
        elementoSubtotal.textContent = `(${productosCarro.length} ${productosCarro.length === 1 ? "producto" : "productos"})`
    }

    if (elementoTotal) {
        elementoTotal.textContent = `Gs. ${total.toLocaleString("es-PY", { minimumFractionDigits: 0 })}`
    }
}

function actualizarContador() {
    const contadorCarrito = $(".contador-carrito")
    const cantidad = JSON.parse(obtener("mi_carro"))
    contadorCarrito.textContent = cantidad?.length || 0
}

// Importar guardar para usar en eliminarProducto
import { guardar } from "./almacenamiento.js"