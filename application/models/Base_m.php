<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/** 
**************************************************************************
* @todo         : Modulo Base 
* @author       : Gianpiere Ramo Bernuy.
* @subpackage   : Base_m 
* @package      : model
**************************************************************************
*/ # 
class Base_m extends MY_Model{
    public function __construct(){
        parent::__construct();
        $this->load->language('model');
        $this->load->language('errornum');
    }
    /*
    | Funciones Generales Base.
    */ // -------------- ------------ -------------
   
   /**
    * @todo  : un solo registro
    * @return  [result row]
    */
    public function record($store,$params = false,$covertresult = true){
        $exc_sql;
        if(empty($store)):
            return array('ERROR'=>'00','CODIGO'=>'01','DESCRIPTION'=>lang('error.query.empty'));
        elseif(is_array($params) && count($params)>0):
            $str_sql = join('',array('call ',$store,'(',implode(',', array_fill(0,count($params),'?')),')'));
            $exc_sql = $this->db->query($str_sql,$params);
        else:
            $str_sql = join('',array('call ',$store,'()'));
            $exc_sql = $this->db->query($str_sql);
        endif;
        
        $result_ = $exc_sql->row_array();
        $this->db->close();
        return $covertresult ? $this->QueryRows($result_) : $result_;
    }

    /**
    * @todo  : Listar filas de una query
    * @return  [result rows]
    */
    public function records($store,$params = false,$covertresult = true){
        $exc_sql;
        if(empty($store)):
            return array('ERROR'=>'00','CODIGO'=>'01','DESCRIPTION'=> lang('error.query.empty'));
        elseif(is_array($params) && count($params)>0):
            $str_sql = join('',array('call ',$store,'(',implode(',', array_fill(0,count($params),'?')),')'));
            $exc_sql = $this->db->query($str_sql,$params);
        else:
            $str_sql = join('',array('call ',$store,'()'));
            $exc_sql = $this->db->query($str_sql);
        endif;
        
        $result_ = $exc_sql->result_array();
        $this->db->close();
        return $covertresult ? $this->QueryResult($result_) : $result_;
    }

    /**
    * @todo  : ejecutar selects
    * @return  [result select]
    */
    public function select($table,$args = '*',$covertresult = true){
        return $this->db->select($table,$args);
    }

    /**
    * @todo  : ejecutar selects
    * @return  [result select]
    */
    public function query($sql){
        $query = $this->db->query($sql);
        return $query;
    }



}