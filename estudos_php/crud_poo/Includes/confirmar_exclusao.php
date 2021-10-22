<main>

   <h2 class="my-3">Excluir vaga</h2>

   <form action="" method="POST">
      <div class="form-group">
         <p class="my-4">Você deseja realmente excluir essa vaga <strong><?= $obVaga->titulo; ?></strong></p>
      </div>
     
      <div class="form-group">
         <a href="index.php" class="btn btn-success">Cancelar</a>
         <button type="submit" class="btn btn-danger" name="excluir">Excluir</button>
      </div>
   </form>
</main>