function imc() {
    let peso = parseFloat(document.getElementById('peso').value)
    let altura = parseFloat(document.getElementById('altura').value)
    if (peso === NaN) {
        return alert('Insira um peso valida')
    } if (altura === NaN){
        return alert('Insira uma altura valida')
    }
    console.log(peso, altura)
}