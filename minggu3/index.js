function theme(){

    var selectBox = document.getElementById("theme");
    var value = selectBox.options[selectBox.selectedIndex].value;
    if(value=="0"){
        var b = document.getElementById("bd");
        b.style.backgroundColor = "white";
        b.style.color = "black";
    }
    else{
        var b = document.getElementById("bd");
        b.style.backgroundColor = "black";
        b.style.color = "white";
    }
}

function cuaca(){
    var selectBox = document.getElementById("weather");
    var value = selectBox.options[selectBox.selectedIndex].value;
    var situation = document.getElementById("situation");
    if(value == "0"){
        
        situation.innerText = "It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream";
    }
    else{
        situation.innerText = "Rain is falling outside, take a rain coat and a brolly, and don't stay out for too long."
    }

}


function factor(){
    var x = document.getElementById("factor").value;
    var a = x;
    var hasil = document.getElementById("hasil");
    for(i = a-1; i > 1;i--){
        a*=i;
    }
    hasil.innerText = "The Factorial of "+x+" is "+a;
}