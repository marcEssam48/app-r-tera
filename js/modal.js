// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("button");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// Get the modal
var anothermodal = document.getElementById('myModalEssay');

// Get the button that opens the modal
var btn_essay = document.getElementById("essayButton");

// Get the <span> element that closes the modal
var span_essay = document.getElementsByClassName("close")[1];

// When the user clicks the button, open the modal 
btn_essay.onclick = function() {
    anothermodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span_essay.onclick = function() {
    anothermodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == anothermodal) {
        anothermodal.style.display = "none";
    }
}





