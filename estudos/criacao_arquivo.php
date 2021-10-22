<?php 

   $dir = dirname(__DIR__, 1);
   $dirTemplate = '/Views/_content/templates/email/';
   $path = $dir.$dirTemplate;

   $arqTempl = fopen($path.$nomeTemplate.'.php', 'w');  // cria o arquivo no diretorio         
   chmod($path.$nomeTemplate.'.php', 0755); // modifica as permissoes
   fwrite($arqTempl, $templateEmail); // insere o conteudo do template
   fclose($arqTempl); // fecha o arquivo 


   $nomeTempl = ($nomeTemplate === "") ? "template de email".date("d-m-Y H:i:s") : strtr($nomeTemplate, $strtr);   
   $nomeTempl = $this->normalizaString($nomeTempl); // removendo acentuacao 
   $variaveisTemplate = $this->retornaVariaveisTemplate();

   private function retornaVariaveisTemplate($templateJson="")
   {  
      $variaveisTemplate = [];

      // $temp = json_decode($templateJson);
      // foreach ($temp as $ch => $val) {
      //    if(is_object($val->insert)) { 
      //       $nomeVar = $val->insert->TemplateVar->title;
      //       $variavel =  "{{ ".$val->insert->TemplateVar->marker." }}";
      //       $variaveisTemplate[$nomeVar] = $variavel;
      //    }
      // }

      return ($variaveisTemplate!==[]) ? $variaveisTemplate : [];       
   }


   private function normalizaString($string) 
   {
      $string = iconv("UTF-8", "ASCII//TRANSLIT//IGNORE", $string);
      $string = preg_replace('/^[a-zA-Z0-9]\s/', '', $string);
      return mb_strtolower($string);
   }