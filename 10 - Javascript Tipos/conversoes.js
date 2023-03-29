
// conversão implicita
const numero = 456;
const numeroString = '456';

console.log(numero == numeroString);

console.log(numero + numeroString);

// conversão explicita
//Number()
//String()
console.log(numero + Number(numeroString));
console.log(numero + Number("456a"));
