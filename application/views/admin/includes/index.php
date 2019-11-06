<?php $this->load->view("admin/includes/header") ?>

<?php $this->load->view("admin/includes/navbar") ?>



    <!--    yenileme ve insert ucun modal -->
<?php echo $create_modal?>
    <!--    yenileme ve insert ucun modal -->

    <!-- Main layout -->
    <main style="margin-left: 0; margin-right: 0">

        <div class="container-fluid">
            <!-- Section: Main panel -->
            <section class="mb-5">
                <!-- Card -->
                <div class="card card-cascade narrower">
                    <!-- Section: Table -->
                    <?php $this->load->view("admin/$view_folder/content") ?>
                    <!--Section: Table-->
                </div>
                <!-- Card -->
            </section>
            <!-- Section: Main panel -->

        </div>

    </main>
    <!-- Main layout -->

<?php $this->load->view("admin/includes/footer") ?>

<?php $this->load->view("admin/includes/scripts") ?>

    <!--melumat alerti-->
<?php if($this->session->flashdata("success")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("success")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>


    <!--melumat alerti-->
<?php if($this->session->flashdata("alert")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>