var editButtons = document.getElementsByClassName("editpost");
var form = document.getElementsByClassName("myForm");
var textarea = document.getElementsByClassName("editarea")


for (var i = 0; i < editButtons.length; i++) {
    let x = editButtons[i].form.querySelector("textarea"); // mit .form springt man nach oben zu <form> und mit querySelector wählt man dann das erste textarea element in der form aus 

    editButtons[i].addEventListener("click", function (event) {
        changeValue(event, x)
    });
}
 

function changeValue(event, x) {
    event.target.value = "Save";
    x.style.display ="flex";
    x.style.width ="100%"
}

for (var i = 0; i < form.length; i++) {
    form[i].addEventListener("submit", function(event) {
        event.preventDefault();
    });
} 


/* : <li> $title["title"] irgendwie hidden sobald  man edit drückt  </li> 
    und wenn man dann auf Save drückt den neu eingegeben Text wieder mit <li>... angeben
*/

/*  function showTextArea() {
    textarea.style.display = "block";
}  */