const alunos = ['Joao', 'Juliana', 'Caio', 'Ana'];

const medias = [10, 7, 9, 6];

let listaDeNotasEAlunos = [
    alunos, medias
];


const exibdeNomeNota = (nomeDoAluno) => {
    if ( listaDeNotasEAlunos[0].includes(nomeDoAluno) ) {
        let indice = listaDeNotasEAlunos[0].indexOf(nomeDoAluno)
        return listaDeNotasEAlunos[0][indice] + ' sua média é: ' +
            listaDeNotasEAlunos[1][indice];
    } else {
        return `Aluno ${nomeDoAluno} não está cadastrado.`;
    }
}

console.log(exibdeNomeNota("Ana"));
console.log(exibdeNomeNota("Juliana"));
console.log(exibdeNomeNota("Hugo"));