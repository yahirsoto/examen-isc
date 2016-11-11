$(document).ready(inicio)
function inicio(){
$(".botoncompra").click(añade)
}
function añade(){
    $("#carrito").load("php/poncarrito.php");
}
