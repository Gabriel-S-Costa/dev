<script>

function confirma(){
   if(!confirm("Deseja excluir esse registro ?")) {
      return false;
   }
   return true;
}

</script>

<div class="pt-4 d-flex align-items-center justify-content-between">
   <h2 class="">Arquivo de notícias</h2>
   <a href="/news/create" class="btn btn-success">Nova notícia</a>
</div>

<table class="table table-bordered mt-4">
   <thead>
      <tr>
         <th>#</th>
         <th>Title</th>
         <th>Description</th>
         <th>Ação</th>
      </tr>
   </thead>
   <tbody>
      <?php if(!empty($news) && is_array($news)): 
         $num_row = 1;
         foreach($news as $new_item): ?>
            <tr>
               <td><?= $num_row++; ?></td>
               <td><a href="<?= "/news/view/".$new_item['id']; ?>"><?= $new_item['title']; ?></a></td>
               <td><?= $new_item['description']; ?></td>
               <td>
                  <a href="<?= "/news/edit/".$new_item['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
                  <a href="<?= "/news/delete/".$new_item['id']; ?>" onclick="return confirma()" class="btn btn-sm btn-danger">Excluir</a>
               </td>
            </tr>            
      <?php          
            endforeach; 
         else:
      ?>
         <tr>
            <td colspan="4" class="text-center">Nenhum registro encontrado</td>
         </tr>
      <?php          
         endif;
      ?>
   </tbody>

</table>