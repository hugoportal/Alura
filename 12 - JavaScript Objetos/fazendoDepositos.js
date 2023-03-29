const cliente = {
    nome:"André",
    idade:36,
    cpf:"12345678900",
    email:"andre@email.com",
    fones: ["6132223417", "61981181122"],
    dependentes: [
        {
            nome: "Maria Magdalena",
            parentesto: "Filha",
            dtNascimento: "20/03/2011"
        },
        {
            nome: "Betty Daves Eyes",
            parentesto: "Filha",
            dtNascimento: "04/01/2014"
        }
    ],
    saldo: 100,

    depositar:function(valor)
    {
        this.saldo += valor
    }
}

console.log(cliente.saldo);
cliente.depositar(30);
console.log(cliente.saldo);
//console.log(cliente);