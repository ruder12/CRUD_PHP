
function CrearUser(){
$('#Modalcrud').modal('show');
document.querySelector('#tile_modal').innerHTML="Crear Usuario";
}

function EditarUser(id,nombre,apellido,telefono,direccion){
$('#Modalcrud').modal('show');

document.querySelector('#tile_modal').innerHTML="Editar Usuario";
document.querySelector('#iduser').value=id;
document.querySelector('#nombre').value=nombre;
document.querySelector('#apellido').value=apellido;
document.querySelector('#telefono').value=telefono;
document.querySelector('#direccion').value=direccion;

}