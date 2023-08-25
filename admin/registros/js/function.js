function confirmacion(e){
    if(confirm("¿Esta  seguro de registrar una bebida?")){
        return true;
    }else{
        e.preventDefault();
    }
}
let linkDelete = document.querySelectorAll("#bebida");

for(var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click',confirmacion);
}
function confirmacion(e){
    if(confirm("¿Desea  ver los registros?")){
        return true;
    }else{
        e.preventDefault();
    }
}
let linkDelete1 = document.querySelectorAll(".bebida");

for(var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click',confirmacion);
}