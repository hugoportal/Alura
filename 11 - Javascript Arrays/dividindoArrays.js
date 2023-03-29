const nomes = [
    'joao', 'juliana', 'ana', 'caio', 'lara', 'marjorie',
    'guilerme', 'aline', 'fabiana', 'andre', 'carlos', 'paulo',
    'bia', 'vivian', 'isabela', 'vinicius', 'renan', 'renata',
    'daisy', 'camilo'
];

const sala1 = nomes.slice(0,nomes.length/2);

const sala2 = nomes.slice(nomes.length/2);

console.log(nomes.length);
console.log(`Alunos da Sala 1: ${sala1}`);
console.log(`Alunos da Sala 2: ${sala2}`);


// REMOVER DOIS ELEMENTOS, E ADICIONAR NA SEGUNDA POSIÇÃO RODRIGO
const listaDeChamada = [ 'joao', 'ana', 'caio', 'lara', 'marjorie', 'leo'];

// RETIROU OS NOMES DAS POSIÇÕES 1 E 2 E ADICIONOU O NOME RODRIGO
listaDeChamada.splice(1,2,'rodrigo');
console.log(`Lista de Chamada: ${listaDeChamada}`);

// ADICIONAR HUGO NA POSIÇÃO 2 DA LISTA
listaDeChamada.splice(2,0,'hugo');
console.log(`Lista de Chamada: ${listaDeChamada}`);