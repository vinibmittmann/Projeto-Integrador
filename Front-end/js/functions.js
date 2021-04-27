function recebimento() {
    var base  = document.getElementById("id_base").value;
    var bonificacao = document.getElementById("id_bonificacao").value;
    var pontuacao = document.getElementById("id_pontuacao").value;
    var quilo = document.getElementById("id_quilo").value;
    var valorEmpresa = document.getElementById("id_valorEmpresa").value;
    var bonifProdutor = document.getElementById("id_bonifProdutor").value;
    var valorLiquido = document.getElementById("id_valorLiquido").value;
    
    if (base = "") {
      alert("Digite o Valor Base Vigente");
    }
    else if (bonificacao == ""){
      alert("Insira o Valor de Bonificação");
    }
    else if (pontuacao == "") {
      alert("Insira o Valor da Pontuação");
    }
    else if (quilo == "") {
      alert("Insira o Valor da Bonificação por Quilo");
    }
    else if (valorEmpresa == "") {
      alert("Insira o Valor referencial Bonificação da empresa");
    }
    else if (bonifProdutor == "") {
      alert("Insira o Valor total de Bonificação do Produtor");
    }
    else if (valorLiquido == "") {
        alert("Insira o Valor total de Bonificação do Produtor");
      }
    else {
      alert("Recebimentos inseridos com Sucesso !!!");
    }
}

function gastos() {
    var veterinario  = document.getElementById("id_veterinario").value;
    var medicamento = document.getElementById("id_medicamento").value;
    var mortal = document.getElementById("id_mortal").value;
    var porcentagem = document.getElementById("id_porcentagem").value;
    var funrural = document.getElementById("id_funrural").value;
    var manutencao = document.getElementById("id_manutencao").value;
    var abate = document.getElementById("id_abate").value;
    
    if (veterinario = "") {
      alert("Digite o gasto com Veterinário");
    }
    else if (medicamento == ""){
      alert("Insira o gasto com Medicamento");
    }
    else if (mortal == "") {
      alert("Insira o gasto com Mortalidade");
    }
    else if (porcentagem == "") {
      alert("Insira o gasto com Mortalidade acima de 1,5%");
    }
    else if (funrural == "") {
      alert("Insira o gasto com o Fundo Rural");
    }
    else if (manutencao == "") {
      alert("Insira o gasto com Manutenção");
    }
    else if (abate == "") {
        alert("Insira o desconto com Abate");
      }
    else {
      alert("Gastos inseridos com Sucesso !!!");
    }
}