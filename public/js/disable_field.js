var checkbox = document.getElementById('type_field');
var dropdown = document.getElementById('name_client_dropbox');
var name_client_txt = document.getElementById('name_client_txt');

name_client_txt.disabled = true;

checkbox.addEventListener('change', () =>{
    if(checkbox.checked){
        name_client_txt.disabled = false;
        dropdown.disabled = true;
        return;
    }
    name_client_txt.disabled = true;
    dropdown.disabled = false;

})