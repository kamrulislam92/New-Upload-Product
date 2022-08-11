<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    
                    <div class="col-sm-12 col-xl-12">
                      
                        <div class="bg-light rounded h-100 p-4 mt-3 ">
                            <h6 class="mb-4">Student Manage Table</h6>
                            <table class="table table-bordered table-striped">

                            <p id="successMessage">
                                    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
                                    <script type="text/javascript"> 
                                        $(function(){
                                        $('#successMessage').delay(5000).fadeOut();
                                        });
                                    </script>

                                    <?php 
                                        $message = $this->session->userdata('message');
                                        if($message){
                                            echo " <span class='alert alert-danger mb-2'>$message</span> ";
                                            $this->session->unset_userdata('message');
                                        }
                                    ?>
                                </p>

                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center text-white">Student_Id</th>
                                        <th scope="col" class="text-center text-white">Student_Name</th>
                                        <th scope="col" class="text-center text-white">Student_Phone</th>
                                        <th scope="col" class="text-center text-white">Student_Roll</th>
                                        <th scope="col" class="text-center text-white">Student_Photo</th>
                                        <th scope="col" class="text-center text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach($all_stedent_info as $student_info) { ?>
                                    <tr>
                                        <th scope="row" class="text-center text-white-50"><?php echo $student_info->student_id; ?></th>
                                        <td class="text-center text-white-50"><?php echo $student_info->student_name; ?></td>
                                        <td class="text-center text-white-50"><?php echo $student_info->student_phone; ?></td>
                                        <td class="text-center text-white-50"><?php echo $student_info->student_roll; ?></td>
                                        <td class="text-center text-white-50"><img src="<?php echo base_url('../image'.$student_info->student_image);?>" alt="Student photo Here" style="width:100px; height:100px;" ></td>
                                        <td class="text-center text-white-50">
                                            <a href="<?php base_url();?>edit-student/<?php echo $student_info->student_id;?>"><i class="fa fa-edit bg-info text-white p-2 rounded"></i></a>
                                            <a onclick="return confirm('Are you sure you want to Delete This Student?');" href="<?php base_url();?>delete-student/<?php echo $student_info->student_id;?>"><i class="fa fa-trash bg-danger p-2 rounded text-white"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Table End -->