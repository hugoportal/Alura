const clientes = [
    {
        nome: 'Andre',
        cpf: '12345678910',
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
        ]
    },
    {
        nome: 'Juliana',
        cpf: '11122233344',
        dependentes: [
            {
                nome: 'Sophia',
                parenteste: 'Filha',
                dataNasc: '30/08/2022'
            }
        ]
    }
]

const listaDependentes = [...clientes[0].dependentes, ...clientes[1].dependentes];

//console.log(listaDependentes);
//console.table(listaDependentes);

function myFunction(clientes) {
    const listaHugo = [...clientes.dependentes];
    console.table(listaHugo);
}

clientes.forEach(myFunction);

