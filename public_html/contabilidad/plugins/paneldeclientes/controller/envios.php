<?php

/*
 * @author MERCAINFORMATICA      comercial@mercainformatica.es
 * @copyright 2017, REPARACION Y MANTENIMIENTO INFORMATICO MADRID SL. All Rights Reserved.
 */


/**
 * Description of PANEL DE CLIENTES
 *
 * @author MERCAINFORMATICA
 */
class envios extends fs_controller
{
   public $texto;
   public $texto2;
   public $lista;
   public $resultados_sql;
   
   public function __construct()
   {
      parent::__construct(__CLASS__, 'Expediciones', 'Panel Cliente');
   }
   
   protected function private_core()
   {
      $this->texto = 'hola mundo';
      $this->texto2 = 'Bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla.';
      $this->lista = array('peras', 'manzanas', 'puerros', 'naranjas');
      
      $this->resultados_sql = $this->db->select("select * from albaranescli;");
   }
}
