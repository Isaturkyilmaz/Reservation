<?php

/**
 * Created by PhpStorm.
 * User: isa
 * Date: 14.03.2017
 * Time: 10:01
 */
class Properties extends  MX_Controller
{

    public function index(){
        $this->data["activeItem"] =="room_properties";
        $this->data["kat"]=$this->Properties_model->get_properties();
        $this->load->view("Admin/Properties_list",$this->data);

    }


    public function isActive(){

        $tik = ($this->input->post("tik")=="true")?1:0;
        $id =  $this->input->post("id");

        $data = array(
            'isActive'=>$tik,
        );

        $_id=$id;

        $this->Properties_model->tik_guncelle($data,$_id);
    }



    public function delete_properties($id){

        $this->Properties_model->delete($id);
        redirect("Admin/Properties");
    }

    public function update_properties(){

        $id =  $this->input->post("exampleModalLabel");


        $data=array(
            'title'=>$this->input->post("recipient-name"),
            'isActive'=>($this->input->post("recipient-n")=="true")?1:0,
        );

        $this->Properties_model->update($id,$data);

        redirect("Admin/Properties");
    }

}