const lukeLogin = () => {
    let array = []
    for( i = 0; i < 90000; i++){
        array.push(i)
    }
    return "Luke logado com sucesso!"
}

const leiaLogin = () => {
    let array = []
    for( i = 0; i < 90000; i++){
        array.push(i)
    }
    return "Leia logada com sucesso!"
}

console.log(lukeLogin());
console.log(leiaLogin());

const usuarioLogin = (pessoa) => {
    let array = []
    for( i = 0; i < 90000; i++){
        array.push(i)
    }
    return `${pessoa} logou com sucesso no sistema!`
}

console.log(usuarioLogin("Luke"));

// --------------------------------------
const acesso = (nome) => {
    return `${nome} logou com sucesso no sistema!`
}

const usuarioLogin2 = (nome) => {
    let array = []
    for( i = 0; i < 90000; i++){
        array.push(i)
    }
    return acesso(nome)
}

console.log(usuarioLogin2("Luke"));



/*
Recebendo uma função e retornando uma função
 */
const acesso = (nome) => {
    return `${nome} logou com sucesso no sistema!`
}

const usuarioLogin = (nome) => {
    let array = []
    for( i = 0; i < 90000; i++){
        array.push(i)
    }
    return acesso(nome)
}

const diretoriaLogin = (nome) => {
    let array = []
    for( i = 0; i < 900000; i++){
        array.push(i)
    }
    return acesso(nome)
}

diretoriaLogin("Leia")


// para evitar vários acessos dependendo do tipo de perfil/cargo:

const autentica = (cargo) => {
    let array = []
    for( i = 0; i < cargo; i++){
        array.push(i)
    }
    return true;
}

const login = (pessoa, autentica) => {
    if(pessoa.cargo === `funcionario`) {
        autentica(90000)
    } else if(pessoa.cargo === `diretoria`) {
        autentica(900000)
    }
    return acesso(pessoa.nome)
}

login({cargo: `diretoria`, nome: `Leia`}, autentica)