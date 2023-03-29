
function apresentar(nome) {
    return `meu nome é ${nome}`;
}

const apresentarArrow = nome => `meu nome é ${nome}`;
const soma = (num1, num2) => `A soma de ${num1} + ${num2} é: ` + (num1 + num2);

console.log(apresentarArrow('Hugo'));
console.log(soma(1,6));

const somaNumerosPequenos = (num1, num2) => {
    if (num1 >= 10 || num2 >= 10) {
        return "Somente números de 0 a 9";
    } else {
        return num1 + num2;
    }
}

console.log(somaNumerosPequenos(1,10));