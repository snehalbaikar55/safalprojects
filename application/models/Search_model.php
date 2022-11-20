<?php
//birds_model.php (Array of Objects)
class Search_model extends CI_Model{


  function get_result($name)
  {
   $this->load->database();
   

          $this->db->select('*');
          $this->db->from('central-mumbai');
          $this->db->where('active',1)

                  
                  ->where("central-mumbai.name LIKE '%kalpataru%$name%'");

          $query1 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('harbour-mumbai');
          $this->db->where('active',1)
          
                  ->where("harbour-mumbai.name LIKE '%kalpataru%$name%'");
          $query2 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('western-mumbai');
          $this->db->where('active',1)
          
                  ->where("western-mumbai.name LIKE '%kalpataru%$name%'");
          $query3 = $this->db->get_compiled_select();
          
          $this->db->select('*');
          $this->db->from('others');
          $this->db->where('active',1)
          
                  ->where("others.name LIKE '%kalpataru%$name%'");
          $query4 = $this->db->get_compiled_select();

          $query = $this->db->query($query1 . ' UNION ' . $query2 . ' UNION '. $query3. ' UNION '. $query4);


          return $query->result();
   // return $query;
    }


    function get_kalpataru_projects()
  {
   $this->load->database();
   

          $this->db->select('*');
          $this->db->from('central-mumbai');
          $this->db->where('active',1)
                  ->where("central-mumbai.name LIKE '%kalpataru%'")
                  ->limit(6);

          $query = $this->db->get();

          

          return $query->result();
  
    }



    public function search_property_type($property_type, $budget, $status)
  {

      $this->load->database(); 
      if($property_type)
      {
        $this->db->select('*');
          $this->db->from('central-mumbai');
          $this->db->where('active',1)
                  ->where('property_type', $property_type);
          $query1 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('harbour-mumbai');
          $this->db->where('active',1)
                  ->where('property_type', $property_type);
          $query2 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('western-mumbai');
          $this->db->where('active',1)
                  ->where('property_type', $property_type);
          $query3 = $this->db->get_compiled_select();

          $query = $this->db->query($query1 . ' UNION ' . $query2 . ' UNION '. $query3);

      }
      
      if($status)
      {
        
        $this->db->select('*');
          $this->db->from('central-mumbai');
          $this->db->where('active',1)
                  ->where('status', $status);
          $query1 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('harbour-mumbai');
          $this->db->where('active',1)
                  ->where('status', $status);
          $query2 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('western-mumbai');
          $this->db->where('active',1)
                  ->where('status', $status);
          $query3 = $this->db->get_compiled_select();

          $query = $this->db->query($query1 . ' UNION ' . $query2 . ' UNION '. $query3);
      
      
      }

      if($budget)
      {
        $this->db->select('*');
          $this->db->from('central-mumbai');
          $this->db->where('active',1)
                  ->where('actual_price', $budget);
          $query1 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('harbour-mumbai');
          $this->db->where('active',1)
                  ->where('actual_price', $budget);
          $query2 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('western-mumbai');
          $this->db->where('active',1)
                    ->where('actual_price', $budget);
          $query3 = $this->db->get_compiled_select();

          $query = $this->db->query($query1 . ' UNION ' . $query2 . ' UNION '. $query3);

      }

      if($budget && $status && !$property_type)
      {
        $this->db->select('*');
          $this->db->from('central-mumbai');
          $this->db->where('active',1)
                    ->where('actual_price', $budget)
                    ->where('status', $status);
          $query1 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('harbour-mumbai');
         $this->db->where('active',1)
                    ->where('actual_price', $budget)
                    ->where('status', $status);
          $query2 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('western-mumbai');
         $this->db->where('active',1)
                    ->where('actual_price', $budget)
                    ->where('status', $status);
          $query3 = $this->db->get_compiled_select();

          $query = $this->db->query($query1 . ' UNION ' . $query2 . ' UNION '. $query3);


         
      }

      if(!$budget && $status && $property_type)
      {
          $this->db->select('*');
          $this->db->from('central-mumbai');
          $this->db->where('active',1)
                    ->where('property_type ', $property_type)
                    ->where('status', $status);
          $query1 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('harbour-mumbai');
         $this->db->where('active',1)
                    ->where('property_type ', $property_type)
                    ->where('status', $status);
          $query2 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('western-mumbai');
         $this->db->where('active',1)
                    ->where('property_type ', $property_type)
                    ->where('status', $status);
          $query3 = $this->db->get_compiled_select();

          $query = $this->db->query($query1 . ' UNION ' . $query2 . ' UNION '. $query3);


          
      }

      if($budget && !$status && $property_type)
      {
        $this->db->select('*');
          $this->db->from('central-mumbai');
          $this->db->where('active',1)
                    ->where('property_type ', $property_type)
                    ->where('actual_price', $budget);
          $query1 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('harbour-mumbai');
         $this->db->where('active',1)
                    ->where('property_type ', $property_type)
                    ->where('actual_price', $budget);
          $query2 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('western-mumbai');
         $this->db->where('active',1)
                    ->where('property_type ', $property_type)
                    ->where('actual_price', $budget);
          $query3 = $this->db->get_compiled_select();

          $query = $this->db->query($query1 . ' UNION ' . $query2 . ' UNION '. $query3);

      }

      if($budget && $status && $property_type)
      {
        $this->db->select('*');
          $this->db->from('central-mumbai');
          $this->db->where('active',1)
                    ->where('property_type ', $property_type)
                    ->where('status', $status)
                    ->where('actual_price', $budget);
          $query1 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('harbour-mumbai');
          $this->db->where('active',1)
                    ->where('property_type ', $property_type)
                    ->where('status', $status)
                    ->where('actual_price', $budget);
          $query2 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('western-mumbai');
         $this->db->where('active',1)
                    ->where('property_type ', $property_type)
                    ->where('status', $status)
                    ->where('actual_price', $budget);
          $query3 = $this->db->get_compiled_select();

          $query = $this->db->query($query1 . ' UNION ' . $query2 . ' UNION '. $query3);

      }


      return $query->result();
          
  }

  public function get_kalpataru($city)
  {

          $this->db->select('*');
          $this->db->from('central-mumbai');
          $this->db->where('active',1)
                    ->where('city ', $city)
                    ->where("central-mumbai.name LIKE '%kalpataru%'");
          
                   
          $query1 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('harbour-mumbai');
          $this->db->where('active',1)
                    ->where('city ', $city)
                    ->where("harbour-mumbai.name LIKE '%kalpataru%'");
          
                   
          $query2 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('western-mumbai');
         $this->db->where('active',1)
                    ->where('city ', $city)
                    ->where("western-mumbai.name LIKE '%kalpataru%'");
          
                   
          $query3 = $this->db->get_compiled_select();
          
          $this->db->select('*');
          $this->db->from('others');
         $this->db->where('active',1)
                    ->where('city ', $city)
                    ->where("others.name LIKE '%kalpataru%'");
          
                   
          $query4 = $this->db->get_compiled_select();

          $query = $this->db->query($query1 . ' UNION ' . $query2 . ' UNION '. $query3. ' UNION '. $query4);

      


      return $query->result();
  }
  

  public function get_kalpataru_pro()
  {

          $this->db->select('*');
          $this->db->from('central-mumbai');
          $this->db->where('active',1)
                    
                    ->where("central-mumbai.name LIKE '%kalpataru%'");
          
                   
          $query1 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('harbour-mumbai');
          $this->db->where('active',1)
                    
                    ->where("harbour-mumbai.name LIKE '%kalpataru%'");
          
                   
          $query2 = $this->db->get_compiled_select();

          $this->db->select('*');
          $this->db->from('western-mumbai');
         $this->db->where('active',1)
                    
                    ->where("western-mumbai.name LIKE '%kalpataru%'");
          
                   
          $query3 = $this->db->get_compiled_select();

          $query = $this->db->query($query1 . ' UNION ' . $query2 . ' UNION '. $query3);

      


      return $query->result();
  }

}
?>