function salvar(e){
    e.preventDefault();
    let codigo = document.querySelector('#cod_barras')
    console.log(codigo.value);
    codigo.value = ''
}