function consultar() {
    var nconsultaP1 = document.getElementById("consulta1").value
    var nepisodesP1
    var nconsultaP2 = document.getElementById("consulta2").value
    var nepisodesP2
    var PJ
    var PJ1
    var PJ2
    fetch(`https://rickandmortyapi.com/api/character/${nconsultaP1}`)
    .then (function(response){
        return response.json()
    })
    .then (function(data){
        document.getElementById("infoP1").innerHTML =`
        <img src="${data.image}">
        <p>${data.name}</p>
        <p>${data.status}</p>
        <p>${data.gender}</p>
        <p>Aparece en ${data.episode.length} episodios.`
        nepisodesP1 = data.episode.length;
        PJ1 = data.name;
    })

    fetch(`https://rickandmortyapi.com/api/character/${nconsultaP2}`)
    .then (function(response){
        return response.json()
    })
    .then (function(data){
        document.getElementById("infoP2").innerHTML =`
        <img src="${data.image}">
        <p>${data.name}</p>
        <p>${data.status}</p>
        <p>${data.gender}</p>
        <p>Aparece en ${data.episode.length} episodios.`
        nepisodesP2 = data.episode.length;
        PJ2 = data.name;
    })

    if (nepisodesP1>nepisodesP2) {
        PJ = PJ1;
    } else {
        PJ = PJ2;
    }
    document.getElementById("masApariciones").innerHTML = `El personaje que aparece en más episodios es: ${PJ}`
    ganador();
}

function ganador() {
    var nconsultaP1 = document.getElementById("consulta1").value
    var nconsultaP2 = document.getElementById("consulta2").value
    fetch(`https://rickandmortyapi.com/api/character/${nconsultaP1}`)
    .then (function(response){
        return response.json()
    })
    .then (function(data){ })

}

// obligar al usuario a ingresar dos valores en los input (sin required)