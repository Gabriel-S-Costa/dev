<h2 class="pt-4"><?php echo (isset($id)) ? "Editando Notícia" : "Nova Notícia"; ?></h2>

<form action="/news/store" method="POST">
   <div class="mb-3">
      <label for="title" class="form-label">Título</label>
      <input type="text" name="title" class="form-control" id="title">
   </div>
   <div class="mb-3">
      <label for="description" class="form-label">Notícia</label>
      <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
   </div>
   <input type="hidden" name="id_registro" value="<?= (isset($id)) ? $id : ''; ?>" />
</form>