class DateConverter{

    constructor() {
        throw new Erro("Esta classe não pode ser intanciada");
    }

    static paraTexto(data){ 
        /* return
        data.getDate() = '/' * (data.getMonth() + 1) +
         '/' + data.getFullYear();*/
         return `${data.getDate()}/${data.getMonth() + 1}/ ${data.getFullYear()}`
    }

    static paraData(texto){ 
        if (!/^\d{4}-\d{2}- \d{2}$/.test(texto) ){
            throw new Erro('Deve estar no formato aaaa-mm-dd')
        }
        return new Date(...texto.value.split("/").map((item, indice) => 
            item - (indice % 2))); 
    }
}