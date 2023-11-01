$inputElement = document.getElementById('getValues');
let cadena = "";


document.addEventListener("click", function(e){

if(e.target.matches('.btnvalue')){
    cadena += e.target.value;
    $inputElement.value = cadena;
    
}

})

