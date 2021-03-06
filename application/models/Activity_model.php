<?php
class Activity_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
	public function get_activity()
        {
                //$query = $this->db->get('activity');
                 $this->db->select("*")->from("activity")->join("categories", "activity.activity_category = categories.idCategory")->join("subcategories","activity.activity_subcategory=subcategories.idSubcategory")->order_by('activity_date');
                $query = $this->db->get();
                return $query->result_array();
        }

    public function get_activity_WhereLike($field, $search)
        {
            $this->db->select("*")->from("activity")->join("categories", "activity.activity_category = categories.idCategory")->join("subcategories","activity.activity_subcategory=subcategories.idSubcategory")->like('activity_description', $search)->order_by('activity_date');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function get_categories()
        {
                
                 $result = $this -> db -> select('*') -> get('categories') -> result_array(); 
 
                $categories=array();
                $categories[''] = 'Elija categoría...'; 
                foreach($result as $r){
                        $categories[$r['idCategory']] = $r['category_name']; 
                
                }
                
                return $categories;
        }

        public function get_subcategories()
        {
                
                 $result = $this -> db -> select('*') -> get('subcategories') -> result_array(); 
 
                $groups=array();
                $groups[''] = 'Elija grupo...'; 
                foreach($result as $r){
                        $groups[$r['idSubcategory']] = $r['subcategory']; 
                
                }
                
                return $groups;
        }
        
    public function set_activity()
        {
                              
                $data = array(
                        'activity_date' => $this->input->post('activity_date'),
                        'activity_description' => $this->input->post('activity_description'),
                        'activity_category' => $this->input->post('activity_category'),
                        'activity_subcategory' => $this->input->post('activity_subcategory'),
                        'activity_amount' => $this->input->post('activity_amount'),
                );

                return $this->db->insert('activity', $data);

        }

    public function del_activity($id)
        {
                $this->db->delete('activity', array('idActivity' => $id));  // Produces: // DELETE FROM mytable  // WHERE id = $id
        }

    public function get_activityById($idActivity)
        {                              
            $this->db->select("*")->from("activity")->join("categories", "activity.activity_category = categories.idCategory")->join("subcategories","activity.activity_subcategory=subcategories.idSubcategory")->like('IdActivity', $idActivity);
            $query = $this->db->get();
            return $query->result_array();
        }

    public function update_activity($idActivity,$data)
        {
                              
                $data = array(
                        'activity_date' => $this->input->post('activity_date'),
                        'activity_description' => $this->input->post('activity_description'),
                        'activity_category' => $this->input->post('activity_category'),
                        'activity_subcategory' => $this->input->post('activity_subcategory'),
                        'activity_amount' => $this->input->post('activity_amount'),
                );
                $this->db->where('idActivity', $idActivity);
                return $this->db->update('activity', $data);

        }
}
