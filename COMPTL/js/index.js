
var array = [];

document.getElementById("button_guardar").addEventListener("click", function(event) { // ese es el codigo que se ejecuta cuando se da clic al boton de guardar
      
    if( validarCampos() ){ // aqui se valida que los campos no esten vacios
        // evita que la pagina se recargue cuando se da click en el boton de guardar
        event.preventDefault();  
        guardar();
    }
});

function validarCampos(){  // 
    // Validamos que no esten vacios
    if( 
        document.getElementById("Nombre").value == ""  ||
        document.getElementById("Apellido").value == "" ||
        document.getElementById("Cedula").value == "" ||
         document.getElementById("Edad").value == "" ||
        
        document.getElementById("Sexo").value == "" ||
     
        document.getElementById("Nivel").value == "" ||
           document.getElementById("Fecha").value == "" ||
               document.getElementById("Email").value == "" ||
              document.getElementById("Uso").value == "" ||
    
        document.getElementById("Sugerencias").value == "" 
    ){  
        console.log("Hay campos sin llenar");
        return false;
    }

    // Validamos que esté seleccionado al menos un radio button
    if(
        !document.getElementById("Masculino").checked &&
        !document.getElementById("Femenino").checked 
    ){
        console.log("falta chequear sexo")
        return false;
    }

    return true;
}

function guardar(){ //  guarda los campos en un objeto
    var objeto = new Object();

    objeto.Nombre = document.getElementById("Nombre").value;
    objeto.Apellido = document.getElementById("Apellido").value;
    objeto.Cedula = document.getElementById("Cedula").value;
    objeto.Edad = document.getElementById("Edad").value;
    objeto.Sexo = document.getElementById("Sexo").value;
    objeto.Nivel = document.getElementById("Nivel").value;
    objeto.Fecha = document.getElementById("Fecha").value;
    objeto.Email = document.getElementById("Email").value;
     objeto.Uso = document.getElementById("Uso").value;
    objeto.Sugerencias = document.getElementById("Sugerencias").value;
    

    if( document.getElementById("Masculino").checked ) // si el estado civil el soltero se guarda el estado civil commo soltero
        objeto.Sexo = document.getElementById("Masculino").value;

    if( document.getElementById("Femenino").checked ) // si el estado civil es casado se guarda el estado civil commo casado
        objeto.Sexo = document.getElementById("Femenino").value;


     if( document.getElementById("Si").checked ) // si el estado civil el soltero se guarda el estado civil commo soltero
        objeto.Uso = document.getElementById("Si").value;

    if( document.getElementById("No").checked ) // si el estado civil es casado se guarda el estado civil commo casado
        objeto.Uso = document.getElementById("No").value;

    array.push(objeto); // agrega el objeto al array
}

function Mostrar(){ // muestra la tabla con los datos guardadas
    document.getElementById("bodytable").innerHTML = "";

    for(var i = 0; i < array.length; i++){ // recorre el array y lo muestra en la tabla
        document.getElementById("bodytable").innerHTML += "<tr> <td>"+array[i].Nombre+"</td> <td>"+array[i].Apellido+"</td> <td>"+array[i].Cedula+"</td> <td>"+array[i].Edad+"</td> <td>"+array[i].Sexo+"</td> <td>"+array[i].Nivel+"</td> <td>"+array[i].Fecha+"</td>  <td>"+array[i].Email+"</td> <td>"+array[i].Uso+"</td> <td>"+array[i].Sugerencias+"</td>  </tr>";
    }

}
