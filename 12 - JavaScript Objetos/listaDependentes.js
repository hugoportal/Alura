const cliente = {
    nome:"André",
    idade:36,
    cpf:"12345678900",
    email:"andre@email.com",
    fones: ["6132223417", "61981181122"],
    dependentes: [{
        nome: "Maria Magdalena",
        parentesto: "Filha",
        dtNascimento: "20/03/2011"
    }]
}

cliente.dependentes.push({
    nome: "Betty Daves Eyes",
    parentesto: "Filha",
    dtNascimento: "04/01/2014"
})

// console.log(cliente);

const filhaMaisNova = cliente.dependentes.filter(dependente => dependente.dtNascimento === "04/01/2014");

console.log(cliente.dependentes[1]);
console.log(filhaMaisNova);
console.log(filhaMaisNova[0].nome);

