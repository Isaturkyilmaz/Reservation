<?php

/**
 * Created by PhpStorm.
 * User: isa
 * Date: 14.03.2017
 * Time: 12:45
 */
class Properties_model extends  CI_Model
{

    public function get_properties(){
        return $this->db->get("room_properties")->result();
    }

    public function tik_guncelle($data,$id){
        $this->db->where('id', $id);
        $this->db->update("room_properties",$data);
    }

    public function delete($id){

        $this->db->where("id",$id)->delete("room_properties");

    }

    public function update($id,$data){

        $this->db->where("id",$id)->update("room_properties",$data);

    }

}