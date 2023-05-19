window.addEventListener("DOMContentLoaded",(e)=>{
    let parrafos=document.querySelectorAll("p");
    let btQuitarSeleccion=document.querySelector("#quitarSeleccion");
    let btQuitarFormato=document.querySelector("#quitarFormato");
    let btCopiarFormato=document.querySelector("#copiarFormato");
    let btPegarFormato=document.querySelector("#pegarFormato");
    let tTipo=document.querySelector("#tipo");
    let tColor=document.querySelector("#color");
    let tFondo=document.querySelector("#fondo");
    let tTam=document.querySelector("#tam");
    let tNuevo=document.querySelector("#nuevo");

    let estiloCopia="";

    for(let parrafo of parrafos){
        parrafo.addEventListener("click",(e)=>{
            e.target.classList.toggle("seleccionar");
        });
    }

    btQuitarSeleccion.addEventListener("click",(e)=>{
        let seleccionados=document.querySelectorAll(".seleccionar");
        for(let parrafo of seleccionados){
            parrafo.classList.remove("seleccionar");
        }
    });

    tColor.addEventListener("change",(e)=> {
        let seleccionados=document.querySelectorAll(".seleccionar");
        for(let parrafo of seleccionados){
            parrafo.style.color=tColor.value;
        }
    });

    tFondo.addEventListener("change",(e)=> {
        let seleccionados=document.querySelectorAll(".seleccionar");
        for(let parrafo of seleccionados){
            parrafo.style.backgroundColor=tFondo.value;
        }
    });

    tTam.addEventListener("change",(e)=> {
        let seleccionados=document.querySelectorAll(".seleccionar");
        for(let parrafo of seleccionados){
            parrafo.style.fontSize=tTam.value+"pt";
        }
    })

    tTipo.addEventListener("change",(e)=> {
        let seleccionados=document.querySelectorAll(".seleccionar");
        for(let parrafo of seleccionados){
            parrafo.style.fontFamily=tTipo.value;
        }
    });

    tNuevo.addEventListener("keyup",(e)=> {
        let seleccionados=document.querySelectorAll(".seleccionar");
        for(let parrafo of seleccionados){
            parrafo.textContent=tNuevo.value;
        }
    });

    btQuitarFormato.addEventListener("click",(e)=>{
        let seleccionados=document.querySelectorAll(".seleccionar");
        for(let parrafo of seleccionados){
            parrafo.style.cssText="";
        }
    });

    btCopiarFormato.addEventListener("click",(e)=>{
        let seleccionados=document.querySelectorAll(".seleccionar");
        if(seleccionados.length!=1){
            alert("Debe seleccionar sólo un párrafo");
        }
        else{
            estiloCopia=seleccionados[0].style.cssText;
            seleccionados[0].classList.remove("seleccionar");
        }
    });

    btPegarFormato.addEventListener("click",(e)=>{
        let seleccionados=document.querySelectorAll(".seleccionar");
        if(estiloCopia==""){
            alert("No hay nada copiado");
        }
        else{
            for(let parrafo of seleccionados){
                parrafo.style.cssText=estiloCopia;
            }
        }
    });
});