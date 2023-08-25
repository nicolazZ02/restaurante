const formulario = document.getElementById("contact")
const enviar = document.getElementById("enviar1")
const contenido  = document.getElementById("contenido")

enviar.addEventListener("click", (e) => {
    e.preventDefault()

    const datos = new FormData(formulario)

    fetch("../menu/modificar.php", {
        method:"POST",
        body:datos
    }).then(res => res.text()).then(info => {
        
        if (info == 2) {
            alert("Algo salio mal")
        } else {
            alert("Se actualizo correctamente correctamente")
            window.location='index.php'
        }
    })
})