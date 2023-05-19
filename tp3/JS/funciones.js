function consultar(){
   fetch(`https://randomuser.me/api/`)
   .then (function(response){
        return response.json()
   })
   .then (function(data){
    console.log(data);
    // nombre, apellido, dni, coord (lat, long), foto
    document.getElementById("info").innerHTML = `
    <img src="${data.results[0].picture.large}">
    <p>Nombre: ${data.results[0].name.first}
    <p>Apellido: ${data.results[0].name.last}
    <p>ID: ${data.results[0].id.value}
    <p>Latitud: ${data.results[0].location.coordinates.latitude}
    <p>Longitud: ${data.results[0].location.coordinates.longitude}</p>`
    if (data.results[0].gender == "male") {
        document.getElementById("info").style.backgroundColor = "yellow";
    } else {
        document.getElementById("info").style.backgroundColor = "green";
    }

    var latitud = data.results[0].location.coordinates.latitude;
    var longitud = data.results[0].location.coordinates.longitude;
    var map = L.map('map').setView([latitud, longitud], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
    var marker = L.marker([latitud, longitud]).addTo(map);
   })
}

// boton consultar (html), trae una persona de random user y otro de rick and morty (simular random con un id), cuando coincida el genero mostrar que coincidio y cuando no tambien.