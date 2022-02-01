/* ** Misol #1** */

document.querySelector("#myRange").addEventListener('input', function(e){
    document.querySelector("#font").style.fontSize= this.value + "px";
    document.querySelector("#fontSize").innerHTML = this.value;
});


// let slider = document.querySelector("#myRange");
// let output = document.querySelector("#fontSize");
// output.innerHTML = slider.value;
// let matn = document.querySelector("#font");
// matn.style.fontSize= output.innerHTML;
    
// slider.oninput = function(e) {
//     output.innerHTML = this.value;
//     document.querySelector("#font").style.fontSize = output.innerHTML   + "px";
// }
