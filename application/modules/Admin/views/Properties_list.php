<html>

<head>
    <?php  $this->load->view("Partial/head"); ?>
    <?php  $this->load->view("Partial/style"); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/");?>dist/css/third_party/bootstrap-toggle.min.css"/>

</head>


<body class="hold-transition skin-blue sidebar-mini">



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form  action="<?php echo base_url()?>Admin/properties/update_properties" method="post">
                <div class="modal-header">
                    <input type="text"  hidden="true" id="exampleModalLabel" name="exampleModalLabel"  ></>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>

        <div class="modal-body">

            <div class="form-group">

                <label>Kategori_ad :</label><input type="text" class="form-control" name="recipient-name" id="recipient-name">
                <br>
                <label>Active :</label><input type="text" class="form-control"  name="recipient-n" id="recipient-n">
                <br>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guncelle</button>
        </div>

        </form>
    </div>
</div>
</div>

<div class="wrapper">


    <?php  $this->load->view("Partial/header"); ?>

    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Özellikler
                <small>Ozellikler Listesi</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Oda İşlemleri</li>
                <li class="active">Ozellikler</li>
            </ol>
        </section>



        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <a href="" class="btn btn-sm btn-primary mb10"><i class="fa fa-plus"></i> Ekle</a>
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                <th>id</th>
                                <th>Başlık</th>
                                <th>isActive</th>
                                <th class="col-md-2">İşlemler</th>
                                </thead>
                                <tbody class="sortableList" >
                                <?php foreach($kat as $veri) { ?>
                                    <tr id="">
                                        <td> <?php echo  $veri->id  ?> </td>
                                        <td><?php  echo $veri->title  ?></td>
                                        <td>
                                            <input dataid="<?php echo $veri->id ?>"
                                                   class="toggle_check"
                                                   data-onstyle="success"
                                                   data-size = "small"
                                                   data-on="Aktif"
                                                   data-off="Pasif"
                                                   data-offstyle="danger"
                                                   type="checkbox"
                                                   data-toggle="toggle"
                                                   data-url="<?php echo base_url()?>Admin/properties/isActive"

                                                <?php  echo ($veri->isActive=="1")?"checked":""; ?>
                                            >


                                        </td>
                                        <td>

                                            <button type="button" class="fa fa-edit tikla" id="<?php echo $veri->id ?>"   data-toggle="modal"  data-target="#exampleModal" data-title="<?php echo $veri->title ?>" data-active="<?php echo $veri->isActive ?>" " ></button>
                                            <a href="<?php echo base_url()?>Admin/properties/delete_properties/<?php echo $veri->id ?> ">
                                                <i class="fa fa-trash" style="font-size:16px;"></i>
                                            </a>
                                        </td>
                                    </tr>

                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
    </div>


    <?php  $this->load->view("Partial/sidebar"); ?>


    <?php  $this->load->view("Partial/right_sidebar"); ?>


</div>
<?php  $this->load->view("Partial/script"); ?>
<script src="<?php echo base_url("assets/"); ?>dist/js/third_party/bootstrap-toggle.min.js"></script>

<script>
    $(document).ready(function () {


        $('.toggle_check').bootstrapToggle();
// isActive Change
        $('.toggle_check').change(function () {

            var tik =  $(this).prop("checked");
            var data_url = $(this).attr("data-url");
            var id = $(this).attr("dataid");

            $.post(data_url,{id:id,tik:tik},
                function(response)
                {
                    alert(response);
                }
            )

        })
        $(".tikla").click(function(){


            var title = $(this).attr("data-title");
            var active = ($(this).attr("data-active")==1)?"true":"false";
            var id = $(this).attr("id");


            $('#exampleModal').on('show.bs.modal', function (event) {

                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                var modal = $(this)
                modal.find('.modal-title').text("KATEGORİ GÜNCELLE/"+id)
                modal.find('.modal-body #recipient-name').val(title)
                modal.find('.modal-body #recipient-n').val(active)
                modal.find('.modal-header #exampleModalLabel').val(id)

            })
        })
    })
</script>
</body>
</html>