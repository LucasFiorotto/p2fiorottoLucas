function consultar() {
    var nconsultaP1 = document.getElementById("consulta1").value
    var nconsultaP2 = document.getElementById("consulta2").value
    fetch(`https://rickandmortyapi.com/api/character/${nconsultaP1},${nconsultaP2}`)
    .then (function(response){
        return response.json()
    })
    .then (function(data){
        console.log(data);
        document.getElementById("info").innerHTML =`
        <img src="${data[0].image}">
        <p>${data[0].name}
        <p>${data[0].status}
        <p>${data[0].gender}
        <p>Aparece en ${data[0].episode.length} episodios.</p><br>
        <img src="${data[1].image}"> 
        <p>${data[1].name}</p>
        <p>${data[1].status}</p>
        <p>${data[1].gender}</p>
        <p>Aparece en ${data[1].episode.length} episodios.</p>`
        if (data[0].episode.length > data[1].episode.length) {
            document.getElementById("masApariciones").innerHTML = `${data[0].name} tiene mas apariciones.`
        } else {
            document.getElementById("masApariciones").innerHTML = `${data[1].name} tiene mas apariciones.`
        }
    })
}
// obligar al usuario a ingresar dos valores en los input (sin required)