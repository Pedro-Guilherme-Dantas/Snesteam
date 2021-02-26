var x = 0;
function alternate(){
    if(x%2 == 0){
    document.getElementById('avaliation').innerHTML = "<img id='avaliation' width='20px' src='/img/img/like.png'>";
    document.getElementById('avaliation2').innerHTML = "<img id='avaliation' class='img-rotate' width='20px' src='/img/img/white.png'>";
    }
    x++;
}

function alternate2(){
    if(x%2 != 0){
        document.getElementById('avaliation').innerHTML = "<img id='avaliation' width='20px' src='/img/img/white.png'>";
        document.getElementById('avaliation2').innerHTML = "<img id='avaliation2' width='20px' src='/img/img/dislike.png'>";
    }
    x++;
}