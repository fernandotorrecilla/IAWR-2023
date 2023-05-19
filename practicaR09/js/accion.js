window.addEventListener("DOMContentLoaded",(e)=>{
    let tColor=document.getElementById("color");
    let sTipo=document.getElementById("tipo");
    let aTexto=document.getElementById("texto");
    let sTam=document.getElementById("tam");
    let focos=document.querySelectorAll("input,textarea,select");
    let cErrores=document.getElementById("errores");
    let cNuevaCorrecta=document.getElementById("nuevaCorrecta");



    tColor.addEventListener("change",(e)=>{
        aTexto.style.color=tColor.value;
    });

    sTipo.addEventListener("change",(e)=>{
        aTexto.style.fontFamily=sTipo.value;
    });

    sTam.addEventListener("change",(e)=>{
        aTexto.style.fontSize=sTam.value+"pt";
    });

    for(let foco of focos){
        foco.addEventListener("focus",(e)=>{
            if(cNuevaCorrecta)
                cNuevaCorrecta.style.display="none";
            if(cErrores)
                cErrores.style.display="none";
        });
    }

})