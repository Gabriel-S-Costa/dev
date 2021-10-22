<?php 

namespace App\Controllers;
use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
   private $m_New = '';

   public function __construct()
   {
      $this->m_New = new NewsModel();      
   }

   public function index()
   {      
      $data = [
         'title'=>"Overview",
         'news'=>$this->m_New->getNews(),
      ];
      echo view('templates/header', $data);
      echo view('news/overview', $data);
      echo view('templates/footer');
   }   

   public function view($id=null)
   {
      $new = $this->m_New->getNews($id);

      if(empty($new)) {
         throw new \CodeIgniter\Exceptions\AlertError("Erro ao buscar a notícia");
      }

      $data = [
         'title'=>"Overview",
         'news'=> $new,
      ];

      echo view('templates/header', $data);
      echo view('news/view', $data);
      echo view('templates/footer');

   }

   public function create()
   {
      helper('form');

      $data = ['title'=>'Adicionar notícia'];

      echo view('templates/header', $data);
      echo view('news/form');
      echo view('templates/footer');
   }

   public function store()
   {
      helper('form');
      $rules = [
         'title'       =>'require|min_length[3]|max_length[255]',
         'description' => 'require',
      ];
      $data_form = [
         'id' => $this->request->getPost('id'),
         'title'=>$this->request->getPost('title'),
         'slug'=>url_title($this->request->getPost('title')),
         'description'=>url_title($this->request->getPost('description')),            
      ];

      if($this->validate($rules)) {
         $this->m_New->save($data_form);
      }
   }

}