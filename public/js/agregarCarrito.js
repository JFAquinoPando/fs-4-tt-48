import { obtener, guardar, limpiar } from "./almacenamiento.js";

const $ = (selector) => document.querySelector(selector)

const listado = []

document.addEventListener("DOMContentLoaded", function () {
    const categoriasListado = $(".categorias")

    categoriasListado?.addEventListener("click", function (evento) {
        const elemento = evento.target
        if (
            elemento.closest("[data-precio]").hasAttribute("data-precio")
        ) {
            const producto = elemento.closest("[data-precio]")

            console.log("Haz hecho click en un producto... se llama", producto.dataset.producto)
            Swal.fire({
                title: `Producto: ${producto.dataset.producto} y su precio es ${producto.dataset.precio}`,
                icon: "success",
                draggable: true
            });

            listado.push({
                "descripcion": producto.dataset.producto,
                "precio": producto.dataset.precio,
                "imagen": producto.querySelector("img").getAttribute("src")
            })

            console.log("Listado");
            console.table(listado)
            guardar("mi_carro", JSON.stringify(listado))

            const contadorCarrito = $(".contador-carrito")
            const cantidad = JSON.parse(obtener("mi_carro"))
            contadorCarrito.textContent = cantidad?.length
        }
    })

    const carritoComprar = $(".comprar-todo")
    if (carritoComprar) {
        carritoComprar.addEventListener("click", function (evento) {
            Swal.fire({
                title: `Productos comprados`,
                icon: "success",
                draggable: true
            });
            limpiar("mi_carro")
        })
    }

    const contadorCarrito = $(".contador-carrito")
    const cantidad = JSON.parse(obtener("mi_carro"))
    contadorCarrito.textContent = cantidad?.length
})