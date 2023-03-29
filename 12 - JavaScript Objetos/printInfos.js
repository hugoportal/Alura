const cliente = {
    nome:"André",
    idade:36,
    cpf:"78945612298",
    email:"andre@email.com"
}

console.log(cliente.nome);
console.log(`Meu nome é ${cliente.nome} e tenho ${cliente.idade} anos.`);
console.log(cliente.cpf.substring(0,3));