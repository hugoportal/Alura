const cliente = {
    nome:"André",
    idade:36,
    cpf:"78945612298",
    email:"andre@email.com"
}

const chaves = ["nome", "idade", "cpf", "email"];

console.log(cliente[chaves[0]]);
console.log(cliente["nome"]);

chaves.forEach(info => console.log(cliente[info]));

