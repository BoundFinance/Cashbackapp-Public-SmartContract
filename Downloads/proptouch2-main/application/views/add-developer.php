

<!-- Wrapper Start -->
<div class="wrapper">
    <?php include "layouts/left-panel.php"; ?>
    <div class="content-page">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card box-bold-border">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Add User</h4>
                            </div>
                        </div>
                        <div class="card-body">

                        <input type="hidden" value="<?php echo base_url('User/CheckUserNameValidation'); ?>" id="CheckUserNameValidationURL" />


                            <form id="AddDeveloperFormSubmit"  action="<?php echo base_url('Developer/setAddDeveloperFormData'); ?>" data-toggle="validator" novalidate="true">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Full Name *</label>
                                        <input type="text" class="form-control" id="developer_name" name="developer_name" placeholder="Enter Full Name" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Username *</label>
                                        <input type="text" class="form-control" id="user_login_username" name="user_login_username" placeholder="Enter Userame" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>User Password *</label>
                                        <input type="text" class="form-control" id="developer_password" name="developer_password" placeholder="Enter User Password" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>User Access Role *</label>
                                            <select id="user_access_role" name="user_access_role" class="form-control" data-style="py-0" required="">
                                            <option id="user_access_role_option" selected style="display:none" value="0">Select User Access Role</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status *</label>
                                            <select id="user_status" name="user_status" class="form-control" data-style="py-0" required="">
                                            <option id="user_status_option" selected style="display:none" value="0">Select Developer Status</option>
                                                <option value="1" selected>Active</option>
                                                <option value="2">Deactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Permissions *</label>
                                            <select id="list_permissions" name="list_permissions" class="form-control" data-style="py-0">
                                            <option id="list_permissions_option" selected style="display:none" value="0">Select Permission</option>

                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group col-md-6">
                                        <label>Developer Permissions *</label>
                                        <input type="text" class="form-control" id="developer_allowed_permissions" name="developer_allowed_permissions"  readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary mr-2 enabled">Add User</button>
                                <button type="reset" name="resetAddDeveloperFormSubmit" id="resetAddDeveloperFormSubmit" class="btn btn-danger">Reset</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
</div>


<!-- Backend Bundle JavaScript -->
<script src="<?php echo base_url(); ?>/assets/ajax/developer.js"></script>