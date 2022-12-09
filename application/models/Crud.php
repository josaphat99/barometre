<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model
{
    public function get_data($table, $clause=[],$ordre=null,$limit=null)
	{
        $this->db->order_by($ordre);
		$this->db->limit($limit);
        $this->db->where($clause);
        return $this->db->get($table)->result();
	}
	
	public function get_data_desc($table,$clause=[],$limit=null)
	{
		$this->db->order_by('id','DESC');
        $this->db->limit($limit);
        $this->db->where($clause);
        return $this->db->get($table)->result();
	}

	public function get_data_desc_by_field($table,$clause=[],$field)
	{
		$this->db->order_by($field,'DESC');
        $this->db->where($clause);
        return $this->db->get($table)->result();
	}

	public function add_data($table, $data){
		$this->db->insert($table, $data);
	}

	public function delete_data($table, $clause)
	{
		$this->db->where($clause);
		$this->db->delete($table);
	}

	public function update_data($table, $clause, $data)
	{
		$this->db->where($clause);
		$this->db->update($table, $data);
	}

    public function join_data($table,$table2,$join,$order,$sens,$clause=[],$limit=null)
    {
        $this->db->select("*,".$table.'.id as id')
                 ->from($table)
                 ->join($table2,$join)
                 ->order_by($order,$sens)
                 ->limit($limit)
                 ->where($clause);

        return $this->db->get()->result();
    }
}  
