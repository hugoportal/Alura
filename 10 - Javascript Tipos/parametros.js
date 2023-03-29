
function soma(x,y) {
    return x + y;
}
console.log(soma(1,2));

function nomeIdade(nome, idade) {
        return `Meu nome é ${nome} e minha idade é ${idade}.`;
}
console.log(nomeIdade("hugo", 39));

function multiplica(x= 1,y= 1 ) {
    return x * y;
}
console.log(
    multiplica(soma(5,4), soma(3,3))
);

console.log(
    multiplica(soma(5,4))
);