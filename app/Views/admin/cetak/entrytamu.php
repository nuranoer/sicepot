<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        &nbsp
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          
         <form class="form-horizontal" action="<?php echo site_url('maincontrol/saveTamu');?>" method="POST" enctype="multipart/form-data">
                   <div class="col-xl-10 col-lg-12" style="background-color: #048bd1; margin: 0 auto;">
             
                    <div class="card  col-md-12" >
                      

            
            <div class="card-footer">

                        <button type="submit" class="btn btn-success btn-sm" id="submit">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                      </div>
                    </th>

                    </table>

                    <div class="card-footer"><div class="copyright text-center my-auto">
            <span>Copyright &copy; awksm 2020</span>
          </div></div>
            
                    </div>
          
          
          
            </div>

                            </form>


      </div>


    <!--  <script>
                              const btnDownload = document.querySelector("#submit");

                                btnDownload.addEventListener("click", function() {
                                const a = document.createElement("a");
                                document.body.appendChild(a);
                                a.href=canvas.toDataURL();
                                a.download="canvas-image.jpg";
                                a.click();
                                document.body.removeChild(a);

                              });


      </script> -->

      <!-- End of Main Content -->


<?php include 'foot.php';?>