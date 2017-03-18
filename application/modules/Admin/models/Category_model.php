<?php


class Category_model extends  CI_Model
{

    public function get_category(){
        return $this->db->get("room_category")->result();
    }

    public function tik_guncelle($data,$id){
        $this->db->where('id', $id);
        $this->db->update("room_category",$data);
    }

    public function delete($id){

        $this->db->where("id",$id)->delete("room_category");

    }

    public function update($id,$data){

        $this->db->where("id",$id)->update("room_category",$data);

    }

}