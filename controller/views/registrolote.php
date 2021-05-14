<div class = 'main-div-reg-suino'>
<form class = 'reg-suino'>
<div>
        <h2>Registro de lote de Suínos</h2>
        <h3>Registre aqui seu lote</h3>
                <div class = 'suino-reg'>
                    <label for="id_entregue"><strong>Número do lote</strong></label> 
                    <input type="campo" name="reg-suino" placeholder="Número do lote">
                </div> 
                <div class = 'suino-reg'>
                    <label for="id_entregue"><strong>Intervalo até receber o lote</strong></label> 
                    <input type="campo" name="reg-suino" placeholder="Dias do intervalo">
                </div>
                
                <div class = 'suino-reg'>
                    <label for="id_recebimento"><strong>Selecione a data de recebimento do lote</strong></label>
                    <div>
                        <label for="id_recebimento">Data:
                            <input type = "date" name="recebimento" id="id_recebimento">
                        </label>
                    </div>
                
                </div>
                <div class = 'suino-reg'>
                <label for="id_recebimento"><strong>Selecione a data de entrega do lote</strong></label>
                    <div>
                        <label for="id_recebimento">Data:
                            <input type = "date" name="recebimento" id="id_recebimento">
                        </label>
                    </div>
                
                </div>
                <div class = 'suino-reg'>
                    <label for="id_entregue"><strong>Número de leitões recebidos</strong></label> 
                    <input type="campo" name="reg-suino" placeholder="Número de leitões recebidos">
                </div>
               
                <div class = 'suino-reg'>
                    <label for="id_entregue"><strong>Número de leitões entregues</strong></label> 
                    <input type="campo" name="reg-suino" placeholder="Número de leitões entregues">
               
                </div>
                <div class = 'suino-reg'>
                    <label for="id_entregue"><strong>Número de suínos mortos</strong></label> 
                    <input type="campo" name="reg-suino" placeholder="Numero de suínos mortos">
                </div>
            </div>
        <input type="button" class="button-cad" value="Concluir"  onclick="reglote()">
    </form>
</div>
</body>


