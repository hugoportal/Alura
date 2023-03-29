const cliente = {
    nome:"André",
    idade:36,
    cpf:"12345678900",
    email:"andre@email.com",
    fones: ["6132223417", "61981181122"]
}

cliente.dependentes = {
    nome: "Bill André",
    parentesto: "Filho",
    dtNascimento: "20/03/2011"
}

console.log(cliente);

cliente.dependentes.nome = "Jorge Nill";

console.log(cliente);