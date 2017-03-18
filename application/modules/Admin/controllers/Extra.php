<?php

/**
 * Created by PhpStorm.
 * User: isa
 * Date: 14.03.2017
 * Time: 10:01
 */
class Extra extends  MX_Controller
{

    public function index(){
        $this->data["activeItem"] =="room_extra";
        $this->data["kat"]=$this->Extra_model->get_extra();
        $this->load->view("Admin/Extra_list",$this->data);

    }


    public function isActive(){

        $tik = ($this->input->post("tik")=="true")?1:0;
        $id =  $this->input->post("id");

        $data = array(
            'isActive'=>$tik,
        );

        $_id=$id;

        $this->Extra_model->tik_guncelle($data,$_id);
    }



    public function delete_extra($id){

        $this->Extra_model->delete($id);
        redirect("Admin/Properties");
    }

    public function update_extra(){

        $id =  $this->input->post("exampleModalLabel");


        $data=array(
            'title'=>$this->input->post("recipient-name"),
            'isActive'=>($this->input->post("recipient-n")=="true")?1:0,
        );

        $this->Extra_model->update($id,$data);

        redirect("Admin/Extra");
    }


}