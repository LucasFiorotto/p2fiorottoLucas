function consultar() {
    fetch('https://rickandmortyapi.com/api/character')
    // fetch('https://rickandmortyapi.com/api/character/1') "hardcodear"
    .then (function(response){
        return response.json()
    })
    .then (function(data){
        console.log(data);
    })
}