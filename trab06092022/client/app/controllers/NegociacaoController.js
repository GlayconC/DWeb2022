class NegociacaoController{
    constructor(){
        let $ = document.querySelector.bind(document);

        this._inputData = $("#data")
        this._inputQuantidade = $("#quantidade")
        this._inputValor = $("#valor")
        this._negociacoes = new Negociacoes();
        this._negociacoesView = new NegociacoesViews('#negociacoes');
        this._newgociacoesView.update(this._negociacoes);
    }

    adiciona(event) {
        event.preventDefault();

        this._negociacoes.adiciona(this._criaNegociacao());
        this._negociacoesView.update(this._negociacoes);
        this._limparFormulario();
    }

    _limparFormulario(){
        this._inputData.value= '2020-01-01';
        this._inputQuantidade.value = 1;
        this._inputValor.value = 2.0;
        this._inputData.focus();
    }

    _criaNegociacao(){
        new Negociacao(
            data, 
            parseInt(this._inputQuantidade.value),
            parseFloat(this._inputValor.value)
        )
    }
}