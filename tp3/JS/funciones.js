function generar(){
    // random user y leaflet.
   fetch(`https://randomuser.me/api/`)
   .then (function(response){
        return response.json()
   })
   .then (function(data){
        document.getElementById("rdmUser").innerHTML = `
        <img src="${data.results[0].picture.large}">
        <p>Nombre: ${data.results[0].name.first}
        <p>Apellido: ${data.results[0].name.last}
        <p>ID: ${data.results[0].id.value}
        <p>Latitud: ${data.results[0].location.coordinates.latitude}
        <p>Longitud: ${data.results[0].location.coordinates.longitude}</p>`
        if (data.results[0].gender == "male") {
        document.getElementById("rdmUser").style.backgroundColor = "yellow";
        } else {
        document.getElementById("rdmUser").style.backgroundColor = "green";
        }
    var lat = data.results[0].location.coordinates.latitude;
    var lng = data.results[0].location.coordinates.longitude;

    var container = L.DomUtil.get('map');
    if(container != null){
        container._leaflet_id = null;
    }

    var map = L.map('map').setView([lat, lng], 3);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 15,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([lat, lng]).addTo(map);
    })

    // rick & morty.
    var npj
    npj = Math.floor(Math.random() * 826) + 1;
    fetch(`https://rickandmortyapi.com/api/character/${npj}`)
    .then(function(response){
        return response.json()
    })
    .then(function(data){
        document.getElementById("rym").innerHTML = `
        <img src="${data.image}" style="height: 128px; width: 128px;">
        <p>Nombre: ${data.name}</p>
        <p>Estado: ${data.status}</p>
        <p>Sexo: ${data.gender}</p>`
        if (data.gender == "Male") {
            document.getElementById("rym").style.backgroundColor = "yellow";
        } else if (data.gender == "unknown") {
            document.getElementById("rym").style.backgroundColor = "red";
        } else if (data.gender == "Genderless") {
            document.getElementById("rym").style.backgroundColor = "grey";
        } else {
            document.getElementById("rym").style.backgroundColor = "green";
        }
    })
}

// boton consultar (html), trae una persona de random user y otro de rick and morty (simular random con un id), cuando coincida el genero mostrar que coincidio y cuando no tambien.