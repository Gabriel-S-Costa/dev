<div class="row pt-3 align-items-center">
   <div class="col-12 col-md-10">
      <h4 class="mb-0">Nova lista</h4>
   </div>   
   <div class="col-12 col-md-2 d-flex justify-content-end">
      <button type="submit" id="btn-save-list" class="btn-save px-4 d-flex align-items-center">
         <i class="fas fa-save mr-2"></i>
         Salvar
      </button>
   </div>
</div>
<div class="row my-4">
   <div class="col-12 col-md-9 col-lg-9">      
      <div class="card">
         <form action="/new-list" method="POST" id="form-cadastro">
            <div class="row">
               <div class="col-12">
                  <div></div>
               </div>
            </div>
            <div class="row mb-3">
               <div class="col-12">                  
                  <label for="txt-title" class="form-label">Título da lista</label>
                  <input type="text" class="form-control" id="txt-title" name="txt_title" required />
               </div>            
            </div>         
            <!-- <div class="row mb-3">
               <div class="col-12">                  
                  <label for="txta-description" class="form-label">Descrição</label>
                  <textarea class="txtarea-form" id="txt-title" rows="4" name="txta_description" required ></textarea>
               </div>
            </div> -->
            <!--    <div class="col-12 col-md-2">                  
                  <label for="color" class="form-label">Cor da lista</label>
                  <input type="color" class="p-0 w-25" id="color" name="color_list" />
               </div>
            </div>  -->
            <div class="row">
               <div class="col-12 col-md-10">
                  <label for="txt-title-item" class="form-label">Item</label>
                  <input type="text" class="form-control" id="txt-title" name="txt_item" required />
               </div>
               <div class="col-12 col-md-2" style="margin-top: 25px;">               
                  <button type="button" class="btn-add-item">
                     <i class="far fa-check-circle"></i>
                  </button>               
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div id="list-structure"></div>                  
               </div>
            </div>
         </form>      
      </div>
   </div>
   <div class="col-12 col-md-3 col-lg-3">
      <div class="card">
         <div class="row mb-4">
            <div class="col-12">
               <h4 class="mb-0">Tags</h4>               
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <ul class="tags-list">
                  <li class="tag-item">
                     <input type="checkbox" class="d-none" name="tag_option" id="opt-1" value="" />
                     <label for="opt-1" class="tags">
                        <span>Tag 1</span>
                        <i class="mr-2"></i>
                     </label>
                  </li>
                  <li class="tag-item">
                     <input type="checkbox" class="d-none" name="tag_option" id="opt-2" value="" />
                     <label for="opt-2" class="tags">
                        <span>Tag 2</span>
                        <i class="mr-2"></i>
                     </label>
                  </li>
                  <li class="tag-item">
                     <input type="checkbox" class="d-none" name="tag_option" id="opt-3" value="" />
                     <label for="opt-3" class="tags">
                        <span>Tag 3</span>
                        <i class="mr-2"></i>
                     </label>
                  </li>
               </ul>
            </div>
         </div>
         <div class="row">
            <div class="col-12 text-center">
               <div class="new-tag" data-target="#modal-form-cadastro" data-toggle="modal">Criar nova tag</div>
            </div>
         </div>
      </div>
   </div>
</div>
      
<!-- Modal de cadastro -->
<div class="modal fade" id="modal-form-cadastro" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
         <form action="" method="POST">            
            <div class="modal-header">
               <div class="row">
                  <div class="col-12">
                     <h4 class="mb-0">Criar tag</h4>
                  </div>
               </div>
            </div>
            <div class="modal-body">               
               <div class="row">
                  <div class="col-12">
                     <label class="form-label">Nome</label>
                     <input type="text" class="form-control" name="txt_name_tag" />
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-md-6">
                     <label class="form-label">Cor do fundo</label>
                     <input type="color" name="color_tag_background" id="color">
                  </div>
                  <div class="col-12 col-md-6">
                     <label class="form-label">Cor da fonte</label>
                     <input type="color" name="color_tag_font" id="color">
                  </div>
               </div>
            </div>            
            <div class="modal-footer">
               <div class="row">
                  <div class="col-12 d-flex align-items-center justify-content-end">
                     <button type="button" class="btn btn-success mr-3">Salvar</button>
                     <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancelar</button>
                  </div>                  
               </div>
            </div>
         </form>
      </div>
   </div>
</div>