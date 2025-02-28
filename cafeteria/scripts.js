/* Lógica de programação
    [x] Saber quando o usuario clicou no botão
    [x] Mudar o posicionamento do modal
    [x] Fazer a máscara ficar visível
    [x] Quando clicar na máscara, fechar o modal
*/
const modal = document.querySelector(".modal")
const mascara = document.querySelector(".mascara-modal")
function mostrarModal(){
    modal.Style.left = '50%'
    mascara.style.visibility = 'visible'
}

function esconderModal(){
    modal.style.left = '-30%'
    mascara.style.visibility = 'hidden'
}


