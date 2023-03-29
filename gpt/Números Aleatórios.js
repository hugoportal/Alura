function fechamento() {
    let numeros = [];
    while (numeros.length < 6) {
        let numeroAleatorio = Math.floor(Math.random() * 60) + 1;
        if (numeros.indexOf(numeroAleatorio) === -1) {
            numeros.push(numeroAleatorio);
        }
    }
    return numeros;
}

console.log(fechamento());
