function  init() {
    console.log('your browser understands DOMContentLoaded');
    var editorForm = document.querySelector("form#editor");
    var title = document.querySelector("input[name='title']");
//this will prevent standard browser treatment of the required attribute
    title.required = false;
    editorForm.addEventListener("submit",checkTitle,false);
}

document.addEventListener("DOMContentLoaded",init,false);

function checkTitle(event) {
    var title = document.querySelector("input[name='title']");
    var warning = document.querySelector("form #title-warning");
    //if title is empty
    if(title.value ===""){
        event.preventDefault();
        warning.innerHTML = "*You must write a title for the entry";
    }
}