<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of webPage_SchemaOrg
 *
 * @author lloyd
 */
include ('publisher_SchemaOrg.php');

class webPage_SchemaOrg {
    
    private $vars = array();
public function setBasicWebPageVar($name,$pageUrl,$description,$pubType,$pubName)
{
      $vars= array('context'=>"http://schema.org",'type'=>'WebPage','name'=>'','description'=>'','urls'=>'','publishertype'=>'','publisherName'=>'');
      $vars['name']=$name;
      $vars['url']=$pageUrl;
      $vars['description']=$description;
       $vars['publishertype']=$pubType;
      $vars['publisherName']=$pubName;
       return $vars;
}

    
    public function getBasicWebPageSchema($vars)
    {
        $publisher = new publisher_SchemaOrg();
        
        $pub = $publisher ->setBasicPublisherVar($vars['publishertype'],$vars['publisherName']);
        $pubreturned  =$publisher ->getBasicPublisherSchemaArray($pub);
 $basicSchemaArray = array('@context'=>$vars['context'],'@type'=>$vars['type'],'name'=>$vars['name'],'url'=>$vars['url'],'description'=>$vars['description'],'publication'=>$pubreturned);
 
 //var_dump($basicSchemaArray);
 $basicSchema= json_encode($basicSchemaArray,JSON_UNESCAPED_SLASHES,JSON_PRETTY_PRINT);
       return $basicSchema;     
//           "@context": "http://schema.org",
//    "@type": "WebPage",
//    "name": "Lecture 12: Graphs, networks, incidence matrices",
//    "description": "These video lectures of Professor Gilbert Strang teaching 18.06 were recorded in Fall 1999 and do not correspond precisely to the current  edition of the textbook.",
//    "publisher": {
//        "@type": "CollegeOrUniversity",
//        "name": "MIT OpenCourseWare"
    }
}

