<?php

/**
 * Created by PhpStorm.
 * User: isa
 * Date: 14.03.2017
 * Time: 10:01
 */
class Category extends  MX_Controller
{
    public function  __construct()
    {
        parent:: __construct();
    }


    public function index(){



        $this->data["kat"]=$this->Category_model->get_category();
        $this->load->view("Admin/Category_list",$this->data);

    }





    public function isActive(){

        $tik = ($this->input->post("tik")=="true")?1:0;
        $id =  $this->input->post("id");

        $data = array(
            'isActive'=>$tik,
        );

            $_id=$id;

           $this->Category_model->tik_guncelle($data,$_id);
    }



    public function isActiveMenu(){

        $parent = $this->input->post("parent");
        $self = $this->input->post("self");



        $this->session->set_userdata(
            array(
                    'parent'=>$parent,
                     'self'=>$self,
                )
        );



    }




    public function delete_category($id){
        $this->Category_model->delete($id);
        redirect("Admin/Category");
    }


    public function update_category(){

      $id =  $this->input->post("exampleModalLabel");


        $data=array(
            'title'=>$this->input->post("recipient-name"),
            'isActive'=>($this->input->post("recipient-n")=="true")?1:0,
        );

        $this->Category_model->update($id,$data);

        redirect("Admin/Category");
    }

}