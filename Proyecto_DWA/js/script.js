function Guardar() {
    let id = document.querySelector("#idp").value;
    let placa = document.querySelector("#placa").value;
    let marcaMotor = document.querySelector("#marcaMotor").value;
    let chasis = document.querySelector("#chasis").value;
    let combustible = document.querySelector("#combustible").value;
    let año = document.querySelector("#año").value;
    let estado = document.querySelector("#estado").value;
    let res = document.querySelector("#res");

    let xhr = new XMLHttpRequest();

    xhr.open("POST", "Logica/Logica.php", true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            res.innerHTML = this.responseText
            BuscarTodos();
        }
    }

    let data = JSON.stringify({ "id": id, "placa": placa, "marcaMotor": marcaMotor, "chasis": chasis, "combustible": combustible, "año": año, "estado": estado, "operacion": "Guardar" })

    xhr.send(data);

    document.querySelector("#idp").value = "";
}

function BuscarTodos() {
    let datos = document.querySelector("#datos");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "Logica/Logica.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            datos.innerHTML = this.responseText
        }
    }
    let data = JSON.stringify({ "operacion": "BuscarTodos" })

    xhr.send(data);
}


function Eliminar(id) {
    let res = document.querySelector("#res");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "Logica/Logica.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            res.innerHTML = this.responseText
            BuscarTodos();
        }
    }
    let data = JSON.stringify({ "id": id, "operacion": "Eliminar" })

    xhr.send(data);
}

function Rellenar(id) {
    let res = document.querySelector("#res");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "Logica/Logica.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {

            let aux = JSON.parse(this.responseText);

            res.innerHTML = "Se seleccionó el id: " + aux.id;

            console.log(aux);
            document.querySelector("#idp").value = aux.id;
            console.log(aux.anio);
            document.querySelector("#placa").value = aux.placa;
            document.querySelector("#marcaMotor").value = aux.marca;
            document.querySelector("#chasis").value = aux.chasis;
            document.querySelector("#combustible").value = aux.combustible;
            document.querySelector("#año").value = aux.anio;
            document.querySelector("#estado").value = aux.estado;
            BuscarTodos();
        }
    }
    let data = JSON.stringify({ "id": id, "operacion": "Rellenar" })

    xhr.send(data);
}