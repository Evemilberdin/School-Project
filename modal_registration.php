<!-- Add admin -->
<div class="modal fade" data-keyboard="false" data-backdrop="static"id="registration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add New Account</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="inc/registration_form.php" enctype="multipart/form-data">
                        <div class="container">
                            <div class="form-group">
                                <span>Username:</span>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group ">
                                <span>Password:</span>
                                <input type="password" class="form-control" name="password" required>
                            </div>  
                            <div class="form-group ">
                                <span>C-Password:</span>
                                <input type="password" class="form-control" name="password2" required>
                            </div>	
                            <div class="form-group">
                                <span>Name:</span>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <span>Address:</span>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                            <div class="form-group">
                                <span>Contact #:</span>
                                <input type="text" class="form-control" name="contact" required>
                            </div>					
                        </div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
</div>
<!-- /.modal -->
