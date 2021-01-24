<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success mt-3" title="Página Inicial">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Cadastrar Carro</h2>

    <form action="post">
        
        <div class="form-group">
            <label>Marca</label>
            <input class="form-control" type="text" name="txtMarca" id="" required>
        </div>

        <div class="form-group">
            <label>Modelo</label>
            <input class="form-control" type="text" name="txtModelo" id="" required>
        </div>

        <div class="form-group">
            <label>Versão</label>
            <input class="form-control" type="text" name="txtVersao" id="" >
        </div>

        <div class="form-group">
            <label>Ano</label>
            <input class="form-control" type="number" name="txtAno" id="" minlength="4" maxlength="4" required>
        </div>

        <div class="form-group">
            <label>Placa</label>
            <input class="form-control" type="text" name="txtModelo" id="">
        </div>

        <div class="form-group">
            <label>Tabela Fipe</label>
            <input class="form-control" type="number" name="txtFipe" id="" required>
        </div>

        <div class="form-group">
            <label>Preço</label>
            <input class="form-control" type="number" name="txtPreco" id="" required>
        </div>

        <div class="form-group mb-3">
           <input class="btn mt-3 btn-success" type="submit" name="btnCadastrar" value="Cadastrar">
           <input class="btn mt-3 btn-danger" type="reset" name="btnCancelar" value="Cancelar">
        </div>
    </form>
</main>