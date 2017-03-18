
<script src="<?php echo base_url("assets");?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!--UI-->
<script src="<?php echo base_url("assets");?>/plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url("assets");?>/bootstrap/js/bootstrap.min.js"></script>

<!-- Slimscroll -->
<script src="<?php echo base_url("assets");?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url("assets");?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("assets");?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("assets");?>/dist/js/demo.js"></script>
<!-- Confirm Plugin -->
<script src="<?php echo base_url("assets"); ?>/dist/js/third_party/bootbox.min.js"></script>

<script src="<?php echo base_url("assets");?>/dist/js/custom.js"></script>


<script>

    $(document).ready(function(){

        $(".treeview-menu > li").click(function(event){


            var parent =  $(this).parent().attr("id");
            var self = $(this).attr("id");
            var data_url = "<?php echo base_url()?>Admin/category/isActiveMenu";
            var link = $(this).find("a").attr("href");

                $.post(data_url,{parent:parent,self:self},
                    function(response){

                    }
               )

            event.preventDefault();  //link lere gitmesini engellyor session set ederken sayafa daha hızlı yükleniyor
                                      //  bu yüzden tam set edemiyor bunun içn bu linke gitmemesini 1 sn bekled,kten sonra
                                      // girmesini sağladık ....

            setTimeout(function(){
                window.location.href = link ;
            },100 )
        })
    })

</script>





