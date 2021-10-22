<?php 

namespace App\Controllers;
use App\Controllers\BaseController as BaseController;
use App\Models\ListItemModel;
use App\Models\ListsModel as ListsModel;

class Lists extends BaseController
{
   public function index()
   {  
      $data = [
         "head" => [
            "title"=>"Nova lista"
         ]
      ];

      loadpage('new_list', 'main', $data);
   }

   public function saveList()
   {  
      $post = $this->post();
      $titleList = $post['title'];
      $dataListItem = $post['itens'];

      if(!empty($post) && !empty($titleList)) {       
         $list_model = new ListsModel();
         $id_list = $list_model->saveList($titleList);
         if(!empty($dataListItem)) {
            $cod_resp = $this->saveListItens($dataListItem, $id_list);
         } 
      }
      var_dump($this->post());
   }

   private function saveListItens($dataListItem=[], $id_list=0)
   {  
      if($id_list>0 && !empty($dataListItem)) {         
         $list_item_model = new ListItemModel();
         $cod_response = $list_item_model->saveListItem($dataListItem);

      } else {
         return false;
      }
   }

}