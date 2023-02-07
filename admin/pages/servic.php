<?php 
include ('header.php');
$servicsor=$db->prepare("SELECT * FROM servic");
$servicsor->execute(); 
 ?>

        <div id="page-wrapper">
            <div class="container-fluid ">
                <div class="row">

                    <div class="col-lg-12">
                        <a class="btn btn-primary btn-block btn-social btn-dropbox"
                            data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus"></i> Add new line
                        </a>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Servic
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">
                                        <thead>
                                            <tr>
                                               
                                                <th class="text-center">Sira</th>
                                                <th>Basliq</th>
                                                <th>Movzu</th>
                                                <th class="text-center">Sil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $say=0;
           
                                             while($serviccek=$servicsor->fetch(PDO::FETCH_ASSOC)) {$say++?>


                                            <tr>
                                                <td><?php echo $say ?></td>                                               
                                                <td><?php echo $serviccek['servic_basliq'] ?></td>
                                                <td><?php echo $serviccek['servic_movzu'] ?></td>
                                                <td><center><a href="../netting/islem.php?servic_id=<?php echo $serviccek['servic_id']; ?>&servicsil=ok"><button  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></center></td>
                                            </tr>
                                         <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#MOdal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Create</h4>
                </div>
                <div class="modal-body">
                    <form action="../netting/islem.php"  method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="col-lg-12">

                           <div class="form-group">
                            <label>Basliq</label>
                           <input type="text" id="first-name" name="servic_basliq"  class="form-control col-md-7 col-xs-12">
                           </div>
                            <div class="form-group">
                            <label>Movzu</label>
                           <input type="text" id="first-name" name="servic_movzu"   class="form-control col-md-7 col-xs-12">
                        </div>

                          <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                        <<button name="serviccreat" type="submit" class="btn btn-primary">Create</button>
                            </div>

                        </div>
                        </form>
                </div>
                <div class="modal-footer">
                    
                    
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../js/dataTables/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/startmin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>


</body>

</html>