<?php


class Room_model extends  CI_Model
{

    public function get_room(){
        return $this->db->get("room")->result();
    }

    public function tik_guncelle($data,$id){
        $this->db->where('id', $id);
        $this->db->update("room",$data);
    }

    public function delete($id){

        $this->db->where("id",$id)->delete("room");

    }


    public function update($id,$data){

        $this->db->where("id",$id)->update("room",$data);

    }

}