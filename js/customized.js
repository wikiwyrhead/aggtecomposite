function preLoad() {
    document.getElementById("cladding-service").style.display = "none";
    document.getElementById("gate-service").style.display = "none";
    document.getElementById("repair-service").style.display = "none";
    document.getElementById("decking-service").style.transition = "all 2s";
    document.getElementById("cladding-service").style.transition = "all 2s";
    document.getElementById("gate-service").style.transition = "all 2s";
    document.getElementById("repair-service").style.transition = "all 2s";
}
window.onload = preLoad;

function Focus1(){
    document.getElementById("decking-service").style.display = "block";
    document.getElementById("cladding-service").style.display = "none";
    document.getElementById("gate-service").style.display = "none";
    document.getElementById("repair-service").style.display = "none";


    //Color
    document.getElementById("decking-button").style.borderLeft = "4px solid";
    document.getElementById("decking-button").style.borderLeftColor = "#228b22";
    document.getElementById("decking-button").style.color = "#228b22";

    document.getElementById("cladding-button").style.borderLeftColor = "#f9f9f9";
    document.getElementById("cladding-button").style.color = "#323232";

    document.getElementById("gates-button").style.borderLeftColor = "#f9f9f9";
    document.getElementById("gates-button").style.color = "#323232";

    document.getElementById("repair-button").style.borderLeftColor = "#f9f9f9";
    document.getElementById("repair-button").style.color = "#323232";
}
function Focus2(){
    document.getElementById("decking-service").style.display = "none";
    document.getElementById("cladding-service").style.display = "block";
    document.getElementById("gate-service").style.display = "none";
    document.getElementById("repair-service").style.display = "none";


    //Color
    document.getElementById("decking-button").style.borderLeftColor = "#f9f9f9";
    document.getElementById("decking-button").style.color = "#323232";

    document.getElementById("cladding-button").style.borderLeft = "4px solid";
    document.getElementById("cladding-button").style.borderLeftColor = "#228b22";
    document.getElementById("cladding-button").style.color = "#228b22";

    document.getElementById("gates-button").style.borderLeftColor = "#f9f9f9";
    document.getElementById("gates-button").style.color = "#323232";

    document.getElementById("repair-button").style.borderLeftColor = "#f9f9f9";
    document.getElementById("repair-button").style.color = "#323232";
}
function Focus3(){
    document.getElementById("decking-service").style.display = "none";
    document.getElementById("cladding-service").style.display = "none";
    document.getElementById("gate-service").style.display = "block";
    document.getElementById("repair-service").style.display = "none";


    //Color
    document.getElementById("decking-button").style.borderLeftColor = "#f9f9f9";
    document.getElementById("decking-button").style.color = "#323232";

    document.getElementById("cladding-button").style.borderLeftColor = "#f9f9f9";
    document.getElementById("cladding-button").style.color = "#323232";

    document.getElementById("gates-button").style.borderLeft = "4px solid";
    document.getElementById("gates-button").style.borderLeftColor = "#228b22";
    document.getElementById("gates-button").style.color = "#228b22";

    document.getElementById("repair-button").style.borderLeftColor = "#f9f9f9";
    document.getElementById("repair-button").style.color = "#323232";
}
function Focus4(){
    document.getElementById("decking-service").style.display = "none";
    document.getElementById("cladding-service").style.display = "none";
    document.getElementById("gate-service").style.display = "none";
    document.getElementById("repair-service").style.display = "block";


    //Color
    document.getElementById("decking-button").style.borderLeftColor = "#f9f9f9";
    document.getElementById("decking-button").style.color = "#323232";

    document.getElementById("cladding-button").style.borderLeftColor = "#f9f9f9";
    document.getElementById("cladding-button").style.color = "#323232";

    document.getElementById("gates-button").style.borderLeftColor = "#f9f9f9";
    document.getElementById("gates-button").style.color = "#323232";

    document.getElementById("repair-button").style.borderLeft = "4px solid";
    document.getElementById("repair-button").style.borderLeftColor = "#228b22";
    document.getElementById("repair-button").style.color = "#228b22";
}