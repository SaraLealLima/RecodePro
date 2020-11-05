function exibirCategoria(categoria) {
    let elementos = document.getElementsByClassName('box-produto');
    let elementoCategorias = document.getElementsByClassName('categorias');


    for (i = 0; i < elementos.length; i++) {
        if (categoria == 'todos') {
            elementos[i].style = "display: inline-block;";
            elementoCategorias[0].style = "height: 2351px;";
        } else if (elementos[i].classList.contains(categoria)) {
            elementos[i].style = "display: inline-block;";
            elementoCategorias[0].style = "height: 350px";
        } else {
            elementos[i].style = "display: none";
            elementoCategorias[0].style = "height: 350px";

        }
    }
}



window.onload = function () {
    let boxProdutos = document.getElementsByClassName('box-produto')
    let modalContainer = document.getElementById('modal-container')
    let closeBtn = document.getElementsByClassName('close')

    for (let i = 0; i < boxProdutos.length; i++) {
        let produto = boxProdutos[i]                         // let produto se torna um dos produtos da pagina
        produto.addEventListener('click', function () {      // aplica o EventListener a todos os produtos
            console.log(boxProdutos[i])
            modalContainer.style.visibility = "visible"      // torna o modal visível ao clicar no produto
            console.log(produto.id)

            let botaoComprar = document.getElementById('btn-comprar')
            botaoComprar.onclick = function () {
                window.location.href = "pedido.php?idproduto="+produto.id
            }
        
            
            //Alterando a imagem do modal de acordo com o produto selecionado
            let produtoImagem = produto.getElementsByTagName("img")[0]
            let modalImagem = modalContainer.getElementsByClassName("modal-img")[0]
            modalImagem.src = produtoImagem.src

            //Alterando o nome do produto no modal de acordo com o produto selecionado
            let produtoNome = produto.getElementsByClassName('nome-produto')[0]
            let modalNome = modalContainer.getElementsByClassName("modal-nome-produto")[0]
            modalNome.innerHTML = produtoNome.innerHTML

            //Alterando o antigo preço no modal de acordo com o produto selecionado
            let antigoPreco = produto.getElementsByClassName('antigo-preco')[0]
            let modalAntigoPreco = modalContainer.getElementsByClassName('modal-antigo-preco')[0]
            modalAntigoPreco.innerHTML = antigoPreco.innerHTML

            //Alterando o novo preço no modal de acordo com o produto selecionado
            let novoPreco = produto.getElementsByClassName('novo-preco')[0]
            let modalNovoPreco = modalContainer.getElementsByClassName('modal-novo-preco')[0]
            modalNovoPreco.innerHTML = novoPreco.innerHTML
        })
    }

    


    for (i = 0; i < closeBtn.length; i++) {
        let fechar = closeBtn[i]
        fechar.addEventListener('click', function () {            // fecha o modal
            modalContainer.style.visibility = "hidden"
    })
    }
}
