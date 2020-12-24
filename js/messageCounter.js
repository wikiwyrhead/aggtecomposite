var maxchar = 500;
var i = document.getElementById("textinput");
var c = document.getElementById("count");
    c.innerHTML = maxchar;

    i.addEventListener("keydown",count);

    function count(e){
var len =  i.value.length;
        if (len >= maxchar){
            e.preventDefault();
        } else{
            c.innerHTML = maxchar - len-1;
        }
}
