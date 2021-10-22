<main>
   <section>
      <a href="index.php" class="btn btn-success">Voltar</a>
   </section>

   <h2 class="my-3"><?= TITLE; ?></h2>

   <form action="" method="POST">
      <div class="form-group">
         <label for="">Título</label>
         <input type="text" class="form-control" name="titulo" value="<?= $obVaga->titulo; ?>"/>
      </div>
      <div class="form-group">
         <label for="" class="label-form">Descrição</label>
         <textarea name="descricao" class="form-control" rows="5"><?= $obVaga->descricao; ?></textarea>
      </div>
      <div class="form-group">
         <label for="">Status</label>
         <div>
            <div class="form-check form-check-inline">
               <label for="status-ativo">
                  <input type="radio" id="status-ativo" name="status" value="1" checked> Ativo
               </label>
            </div>
            <div class="form-check form-check-inline">
               <label for="status-inativo" class="">
                  <input type="radio" id="status-inativo" name="status" value="0" <?= ($obVaga->ativo == '0' && $obVaga->ativo != '') ? 'checked' : ''; ?>> Inativo
               </label>
            </div>
         </div>
      </div>
      <div class="form-group">
         <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
   </form>
</main>