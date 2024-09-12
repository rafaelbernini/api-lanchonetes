import './bootstrap';

// Função para buscar produtos de uma determinada categoria
function fetchProdutos(categoria) {
    // Define a URL da API com base na categoria selecionada
    const apiUrl = `http://localhost:8000/api/produtos/categoria/${categoria}`;

    // Faz uma requisição GET à API
    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Erro ao carregar os produtos');
            }
            return response.json();
        })
        .then(data => {
            // Chama a função para exibir os produtos na tela
            displayProdutos(data);
        })
        .catch(error => {
            console.error('Erro:', error);
            alert('Erro ao carregar os produtos. Tente novamente.');
        });
}

// Função para exibir os produtos na interface
function displayProdutos(produtos) {
    const produtosList = document.getElementById('produtos-list');
    produtosList.innerHTML = ''; // Limpa a lista de produtos

    // Itera sobre os produtos retornados pela API e os adiciona na lista
    produtos.forEach(produto => {
        const li = document.createElement('li');
        li.innerHTML = `<strong>${produto.nome}</strong> - ${produto.categoria} - R$ ${produto.preco.toFixed(2)}`;
        produtosList.appendChild(li);
    });
}

// Event listeners para os botões de categoria
document.getElementById('load-lanches').addEventListener('click', () => fetchProdutos('lanche'));
document.getElementById('load-bebidas').addEventListener('click', () => fetchProdutos('bebida'));
document.getElementById('load-doces').addEventListener('click', () => fetchProdutos('doce'));
