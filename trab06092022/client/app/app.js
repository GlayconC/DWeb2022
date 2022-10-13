let controller = new NegociacaoController();

document.querySelector('form').addEventListener('submit', function(e) {
    controller.adiciona.bind(controller);
})