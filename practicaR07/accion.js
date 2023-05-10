window.addEventListener("DOMContentLoaded",function(e){
    let main=document.querySelector("main");
    let rojo=document.getElementById("rojo");
    let verde=document.getElementById("verde");
    let azul=document.getElementById("azul");
    let tY=document.getElementById("y");
    let tX=document.getElementById("x");
    let tRotacion=document.getElementById("rotacion");
    let colores=document.querySelectorAll("#fondo input");//array
    let mosca=document.querySelector(".mosca");
    let btNuevo=document.getElementById("nuevo");

    let moscas=document.querySelectorAll(".mosca");

    for(let color of colores){
        color.addEventListener("change",function(e){
            //para poner el color como tope a 128
            if(color.value<128)
                color.value=128;
            else if(color.value>255)
                color.value=255;

            let r=rojo.value;
            let v=verde.value;
            let a=azul.value;
            main.style.backgroundColor=`rgb(${r},${v},${a})`;
        });
    }

    tY.addEventListener("change",function(e){
      let y=tY.value;
      mosca.style.top=y+"px";
    });

    tX.addEventListener("change",function(e){
        let x=tX.value;
        mosca.style.left=x+"px";
    });

    tRotacion.addEventListener("change",function(e){
        let rotacion=tRotacion.value;
        mosca.style.rotate=rotacion+"deg";
    });

    btNuevo.addEventListener("click",function(e){
        let nuevaMosca=document.createElement("div");
        nuevaMosca.classList.add("mosca");
        nuevaMosca.classList.add("seleccionada");

        nuevaMosca.addEventListener("click",function(e){
            nuevaMosca.classList.add("seleccionada");
            mosca.classList.remove("seleccionada");
            mosca=nuevaMosca;
        })


        main.append(nuevaMosca);
        mosca.classList.remove("seleccionada");
        mosca=nuevaMosca;
        tX.value=0;
        tY.value=0;
        tRotacion.value=0;
    })

    for(let mos of moscas){
        mos.addEventListener("click",function(e){
           mos.classList.add("seleccionada");
           mosca.classList.remove("seleccionada");
           mosca=mos;
        });
    }


    /*
    CODIGO CORRECTO, PERO QUE ME CAPTURA TRES EVENTOS

    let r=255;
    let g=255;
    let b=255;

    rojo.addEventListener("change",function(e){
        r=rojo.value;
        if(r<128) {
            r=128;
            rojo.value=128;
        }
        main.style.backgroundColor=`rgb(${r},${g},${b})`;
        //main.style.backgroundColor="rgb("+r+","+g+","+b+")";
    });
    verde.addEventListener("change",function(e){
        g=verde.value;
        if(g<128) {
            g=128;
            verde.value=128;
        }
        main.style.backgroundColor=`rgb(${r},${g},${b})`;
    });
    azul.addEventListener("change",function(e){
        b=azul.value;
        if(b<128) {
            b=128;
            azul.value=128;
        }
        main.style.backgroundColor=`rgb(${r},${g},${b})`;
    });
*/


})