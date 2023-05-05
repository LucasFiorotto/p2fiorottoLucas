function mostrarColor() {
    const elemento=document.querySelector("input[name=color]:checked");
    alert("Eligió el color: " + elemento.value);
  }