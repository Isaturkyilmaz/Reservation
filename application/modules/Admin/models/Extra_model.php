<?php

/**
 * Created by PhpStorm.
 * User: isa
 * Date: 14.03.2017
 * Time: 12:45
 */
class Extra_model extends  CI_Model
{

    public function get_extra(){
        return $this->db->get("room_extra_services")->result();
    }

    public function tik_guncelle($data,$id){
        $this->db->where('id', $id);
        $this->db->update("room_extra_services",$data);
    }

    public function delete($id){

        $this->db->where("id",$id)->delete("room_extra_services");

    }

    public function update($id,$data){

        $this->db->where("id",$id)->update("room_extra_services",$data);

    }

}