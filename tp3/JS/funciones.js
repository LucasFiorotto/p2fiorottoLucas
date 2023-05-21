function generar(){
    // random user.
   fetch(`https://randomuser.me/api/`)
   .then (function(response){
        return response.json()
   })
   .then (function(data){
        //muestra de datos.
        document.getElementById("rdmUser").innerHTML = `
        <img src="${data.results[0].picture.large}">
        <p>Nombre: ${data.results[0].name.first}
        <p>Apellido: ${data.results[0].name.last}
        <p>ID: ${data.results[0].id.value}
        <p>Latitud: ${data.results[0].location.coordinates.latitude}
        <p>Longitud: ${data.results[0].location.coordinates.longitude}</p>`

    var userGdr = data.results[0].gender;

        //asignacion de color por genero.
        if (data.results[0].gender == "male") {
            document.getElementById("rdmUser").style.backgroundColor = "yellow";
        } else {
            document.getElementById("rdmUser").style.backgroundColor = "green";
        }

    var lat = data.results[0].location.coordinates.latitude;
    var lng = data.results[0].location.coordinates.longitude;

    // leaflet.
    var container = L.DomUtil.get('map');
    if(container != null){
        container._leaflet_id = null;
    }

    var map = L.map('map').setView([lat, lng], 3);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([lat, lng]).addTo(map);

    // rick & morty.
    var npj
    //variable a la que se le asigna un numero aleatorio.
    npj = Math.floor(Math.random() * 826) + 1;
    fetch(`https://rickandmortyapi.com/api/character/${npj}`)
    .then(function(response){
        return response.json()
    })
    .then(function(data1){
        //muestra de datos.
        document.getElementById("rym").innerHTML = `
        <img src="${data1.image}" style="height: 128px; width: 128px;">
        <p>Nombre: ${data1.name}</p>
        <p>Estado: ${data1.status}</p>
        <p>Sexo: ${data1.gender}</p>`

    var charGdr = data1.gender.toLowerCase();

        //asignacion de color por genero.
        if (data1.gender == "Male") {
            document.getElementById("rym").style.backgroundColor = "yellow";
        } else if (data1.gender == "unknown") {
            document.getElementById("rym").style.backgroundColor = "red";
        } else if (data1.gender == "Genderless") {
            document.getElementById("rym").style.backgroundColor = "grey";
        } else {
            document.getElementById("rym").style.backgroundColor = "green";
        }

        //comparacion generos entre api's.
        if (userGdr==charGdr) {
            document.getElementById("coincidencia").innerHTML="Coinciden";
            document.getElementById("coincidencia").style.backgroundColor = "green";
        } else {
            document.getElementById("coincidencia").innerHTML="No coinciden";
            document.getElementById("coincidencia").style.backgroundColor = "red";
        }
    })
    })
}