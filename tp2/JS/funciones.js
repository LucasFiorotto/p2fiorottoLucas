function consultar() {
    var nconsulta = document.getElementById("consulta").value
    fetch(`https://rickandmortyapi.com/api/character/${nconsulta}`)
    .then (function(response){
        return response.json()
    })
    .then (function(data){
        document.getElementById("info").innerHTML =`
        <img src="${data.image}">
        <p>${data.name}</p>
        <p>${data.status}</p>
        <p>${data.gender}</p>
        <p>Aparece en ${data.episode.length} episodios.`
    })
}