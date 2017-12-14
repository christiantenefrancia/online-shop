<div class="modal fade" id="joke" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                            <form  method="post" enctype="multipart/form-data">
                               <h2 class="ui block header">
                                <i class="blue user icon"></i>
                                <div class="content">
                                        Add User
                                </div>
                            </h2>
                                <hr>
								
								<div class="control-group">
                                   <div class="ui blue medium pointing below label">
                                        Firstname
                                    </div>
                                    <div class="controls">
                                        <input type="text" class = "form-control"name="fn" id="inputEmail" placeholder="Firstname . . .">
                                    </div>
                                </div>
                               <br>
                                <div class="control-group">
                                    <div class="ui blue medium pointing below label">
                                       Lastname
                                    </div>
                                    <div class="controls">
                                        <input type="text"  name="ln" class = "form-control" placeholder="Lastname . . .">
                                    </div>
                                </div>
                                <br>
                                <div class="control-group">
                                    <div class="ui blue medium pointing below label">
                                        Username
                                    </div>
                                    <div class="controls">
                                        <input type="text" name="un"  class = "form-control" placeholder="Username . . .">
                                    </div>
                                </div>
                                <br>
                                <div class="control-group">
                                    <div class="ui blue medium pointing below label">
                                        Password
                                    </div>
                                    <div class="controls">
                                        <input type="text" name="p" class = "form-control"  placeholder="Password . . .">
                                    </div>
                                </div>

								<div class = "modal-footer">
											 <button name = "go" class="ui primary button">
                                                 <i class="check icon"></i>
                                                 Save
                                            </button>
											<button type="button" class="ui negative button" data-dismiss="modal">
                                                <i class="remove icon"></i>
                                                Close
                                            </button>
                                           

								</div>
							
									   </div>
                                     
                                          
                                      
                                    </div>
									
									  </form>  

                            <?php
                            if (isset($_POST['go'])) {

                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                                $un = $_POST['un'];
                                $p = $_POST['p'];

                          
								
										$query = mysql_query("select * from tb_user where username= '$un'") or die (mysql_error());
										$count = mysql_num_rows($query);

									if ($count  > 0){ 
									?>
										<script>
											alert("Username Already Taken");
										</script>
									<?php
										}
										else{
									 mysql_query("insert into tb_user (firstname,lastname,username,password) values('$fn','$ln','$un','$p')") or die(mysql_error());
									?>
									<script>
										alert('User Successfully Save');
										header('location:user.php');
									
									</script>
									<?php }} ?>	
									  
									  
									  
									  
                                </div>
                            </div>