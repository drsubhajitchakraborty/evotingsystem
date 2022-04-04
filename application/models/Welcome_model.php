<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model 
{

	
	public function search($data)
	{
        if($data['epic']==""  )
        {
           redirect("Welcome/invaild");
        }

        else     
        {
                 $query = $this->db->select('epic',"name")->where('epic', $data['epic'] )->get('publicdata');
               
                 if($query->num_rows()>0) 
                    {
                        redirect("Welcome/home");
                    }
                else
                    {
                        redirect("Welcome/error");
                    }         
        }

    }  

 function insert($data)
  {
    $epic=$_SESSION['epic'];
    $this->db->where('epic', $epic);
    $this->db->update('publicdata', $data);
  }


  function votecount($name)
  {
    $party=$name['nam'];
    $queryy = $this->db->select('VOTE')->where('epic', $_SESSION['epic'] )->get('publicdata')->result_array();
    $val=$queryy[0];
    $cc=$val['VOTE'];
    
   if($cc=="Done") 
       {
           redirect("Welcome/home");
       }  
   else
   {
                       if($party=='Aam Admi Party')
                       {
                         $this->db->select('VOTE');
                         $query = $this->db->get_where('party', array('NAME' => $party))->result_array();
                         //print_r($query);
                         $value=$query[0];
                         $a=$value['VOTE'];
                         $a++;
                         $p=$a;
                         $data=[ "vote"=> $p];

                         $this->db->where('NAME', $party);
                         $this->db->update('party', $data);   		   
                       }

                       else if($party=='All India Trinamool Congress')
                       {
                        $this->db->select('VOTE');
                        $query = $this->db->get_where('party', array('NAME' => $party))->result_array();
                        //print_r($query);
                        $value=$query[0];
                        $a=$value['VOTE'];
                        $a++;
                        $p=$a;
                        $data=[ "vote"=> $p];

                        $this->db->where('NAME', $party);
                        $this->db->update('party', $data);
                       }

                       else if($party=='Bharatiya Janata Party')
                       {
                        $this->db->select('VOTE');
                        $query = $this->db->get_where('party', array('NAME' => $party))->result_array();
                        //print_r($query);
                        $value=$query[0];
                        $a=$value['VOTE'];
                        $a++;
                        $p=$a;
                        $data=[ "vote"=> $p];

                        $this->db->where('NAME', $party);
                        $this->db->update('party', $data);
                       }

                       else if($party=='Communist Party of India (Marxist)')
                       {
                                  $this->db->select('VOTE');
                         $query = $this->db->get_where('party', array('NAME' => $party))->result_array();
                         //print_r($query);
                         $value=$query[0];
                         $a=$value['VOTE'];
                         $a++;
                         $p=$a;
                         $data=[ "vote"=> $p];

                         $this->db->where('NAME', $party);
                         $this->db->update('party', $data);
                       }

                         else if($party=='Indian National Congress')
                       {
                         $this->db->select('VOTE');
                         $query = $this->db->get_where('party', array('NAME' => $party))->result_array();
                         //print_r($query);
                         $value=$query[0];
                         $a=$value['VOTE'];
                         $a++;
                         $p=$a;
                         $data=[ "vote"=> $p];

                         $this->db->where('NAME', $party);
                         $this->db->update('party', $data);
                       }

                       else 
                       {
                         $this->db->select('VOTE');
                         $query = $this->db->get_where('party', array('NAME' => $party))->result_array();
                         //print_r($query);
                         $value=$query[0];
                         $a=$value['VOTE'];
                         $a++;
                         $p=$a;
                         $data=[ "vote"=> $p];

                         $this->db->where('NAME', $party);
                         $this->db->update('party', $data);
                       }   
     }
  }      
}


?>