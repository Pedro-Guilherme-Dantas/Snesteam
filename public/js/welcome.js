btnStart.addEventListener('mouseover', alternate);
btnStart.addEventListener('mouseout', alternate);

btnStart.addEventListener('click', move);

var x = 0;

function alternate(){
    if(x%2==0){
        document.getElementById('btnStart').style.opacity = "1";
    }else{            
        document.getElementById('btnStart').style.opacity = "0.1";
    }
    x++;
}

function move(){
    document.getElementById('start').style.transform = "translateX(300px) scale(0)";
    // document.getElementById('logo').style.opacity = "0";
    document.getElementById('logo').style.transform = "translateX(-300px) scale(0)";
    // document.getElementById('logo').style.transform = "scale(0)";
}