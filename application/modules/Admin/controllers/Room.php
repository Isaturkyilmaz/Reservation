<?php

/**
 * Created by PhpStorm.
 * User: isa
 * Date: 14.03.2017
 * Time: 10:01
 */
class Room extends  MX_Controller
{

    public function index(){
        $this->data["activeItem"] =="room";
        $this->data["room"]=$this->Room_model->get_room();
        $this->load->view("Admin/Room_list",$this->data);

    }

    public function isActive(){

        $tik = ($this->input->post("tik")=="true")?1:0;
        $id =  $this->input->post("id");

        $data = array(
            'isActive'=>$tik,
        );

        $_id=$id;

        $this->Room_model->tik_guncelle($data,$_id);

    }


    public function delete_room($id){

         $this->Room_model->delete($id);
         redirect("Admin/Room");
    }

    public function update_room(){

        $id =  $this->input->post("exampleModalLabel");


        $data=array(
            'title'=>$this->input->post("recipient-name"),
            'isActive'=>($this->input->post("recipient-n")=="true")?1:0,
        );

        $this->Room_model->update($id,$data);

        redirect("Admin/Room");
    }


}