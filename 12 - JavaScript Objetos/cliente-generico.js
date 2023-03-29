function Cliente(nome, cpf, email, saldo) {
    this.nome = nome
    this.cpf = cpf
    this.email = email
    this.saldo = saldo
    this.depositar = function(valor) {
        this.saldo += valor
    }
}

const andre = new Cliente("Andre", "12345678910", "andre@gmail.com", 100);

console.log(andre);

