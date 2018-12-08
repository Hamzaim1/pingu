// If user clicks anywhere outside of the modal, Modal will close

var modal1 = document.getElementById('modal-wrapper');
var modal2 = document.getElementById('modal-msg');

window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
	else if (event.target == modal2) {
        modal2.style.display = "none";
    }
}