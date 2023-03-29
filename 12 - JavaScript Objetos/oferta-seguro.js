const cliente = {
    nome: 'Andre',
    idade: 36,
    cpf: '12345678910',
    email: 'andre@email.com',
    fones: [ '559632223417', '559632224533'],
    dependentes: [
        {
            nome: 'Sara Silva',
            parenteste: 'Filha',
            dataNasc: '20/03/2011'
        },

        {
            nome: 'Samia Maria',
            parenteste: 'Filha',
            dataNasc: '04/01/2014'
        }
    ],
    saldo: 100,
    depositar:function(valor){
        this.saldo += valor
    }
}

// const propsClientes = Object.keys(cliente);
// console.log(propsClientes);

function oferecerSeguro(obj){
    const propsClientes = Object.keys(obj);
    if(propsClientes.includes("dependentes")) {
        console.log(`Oferecer seguro de vida para ${obj.nome}`);
    }
}

oferecerSeguro(cliente);

console.log(Object.values(cliente));
console.log(Object.entries(cliente));