
<?php 

   $mensagem = '';
   $status = isset($_GET['s']) ? $_GET['s'] : '';
   switch ($status) {
      case 'success':
         $mensagem = "<div class='alert alert-success'>Ação realizada com sucesso!</div>";
         break;      
      case 'error':
         $mensagem = "<div class='alert alert-danger'>Ocorreu um erro!</div>";
         break;
   }

?>
<main>
   <section><?= $mensagem; ?></section>

   <section class="py-4">
      <a href="cadastrar.php" class="btn btn-success">Nova Vaga</a>
   </section>

   <section class="">
      <table class="table table-light table-bordered">
         <thead class="thead-light">
            <tr>
               <th>Id</th>
               <th>Título</th>
               <th>Descrição</th>
               <th>Status</th>
               <th>Data</th>
               <th class="text-center">Ações</th>
            </tr>
         </thead>
         <tbody>

            <?php 
               if (empty($vagas)): ?>
                  <tr>
                     <td colspan="6" class="text-center">Nenhuma vaga cadastrada</td>
                  </tr>
               <?php else: 
                  foreach($vagas as $vaga): ?>                   
                     <tr>
                        <td class="text-certer"><?= $vaga->id;?></td>
                        <td><?= $vaga->titulo;?></td>
                        <td><?= $vaga->descricao;?></td>
                        <td class="text-center"><?= ($vaga->ativo === '1') ? "<status class='badge badge-success'>Ativo</status>" : "<status class='badge badge-danger'>Inativo</status>";?></td>
                        <td><?= date('d/m/Y à\s H:i', strtotime($vaga->data)); ?></td>
                        <td>
                           <div class="d-flex justify-content-center">
                              <a href="<?= "editar.php?id={$vaga->id}";?>" class="btn btn-sm btn-primary mr-1">Editar</a>
                              <a href="<?= "excluir.php?id={$vaga->id}";?>" class="btn btn-sm btn-danger">Excluir</a>
                           </div>
                        </td>
                     </tr>
                     <?php endforeach; ?>
               <?php endif; ?>               
         </tbody>
      </table>
   </section>
</main>