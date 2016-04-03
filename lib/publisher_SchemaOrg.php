<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of publisher_SchemaOrg
 *
 * @author lloyd
 */
class publisher_SchemaOrg {
  // private $vars= array();
   
   public function setBasicPublisherVar($pubType,$pubName)
   {
       $vars= array('type'=>'','name'=>'');
      $vars['type']=$pubType;
      $vars['name']=$pubName;
       return $vars;
   }
   
   public function getBasicPublisherSchema($vars)
   {
       $basicSchema= json_encode(array('publication'=>(array('@type'=>$vars['type'],'name'=>$vars['name']))));
       return $basicSchema;
   }
    public function getBasicPublisherSchemaArray($vars)
   {
       $basicSchema= array('@type'=>$vars['type'],'name'=>$vars['name']);
       return $basicSchema;
   }
}
