export function guardar(clave, valor) {
    localStorage.setItem(clave, valor)
}

export function obtener(clave) {
    return localStorage.getItem(clave)
}

export function limpiar(clave) {
    return localStorage.removeItem(clave)
}