window.addEventListener("DOMContentLoaded",function(e){
    let main=document.querySelector("main");
    let rojo=document.getElementById("rojo");
    let verde=document.getElementById("verde");
    let azul=document.getElementById("azul");
    let colores=document.querySelectorAll("#fondo input");//array

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


    /*
    CODIGO CORRECTO, PERO QUE ME CAPTUTA TRES EVENTOS

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