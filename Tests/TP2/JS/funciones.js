function consultar() {
    var npersonaje = document.getElementById("consulta").value;
    let image = document.getElementById("image");
    fetch(`https://rickandmortyapi.com/api/character/${npersonaje}`)
    // fetch('https://rickandmortyapi.com/api/character/1') "hardcodear"
    .then (function(response){
        return response.json()
    })
    .then (function(data){
        console.log(data);
        document.getElementById("name").innerHTML = data.name
        document.getElementById("status").innerHTML = data.status
        document.getElementById("species").innerHTML = data.species
        image.src = data.image
    })
}