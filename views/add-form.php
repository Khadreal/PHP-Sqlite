
    <div class="panel panel-default">
        <?php if(isset($error)){ ?>
            <div class="alert alert-warning"><?php echo $error; ?></div>
        <?php } ?>
        <div class="panel-heading">Store your new contact</div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" >
                <fieldset>
                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Name</label>
                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control" name="name" value="<?php echo isset($_POST['name'])  ? $_POST['name'] : ''?>" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control" name="email" value="<?php echo isset($_POST['email'])  ? $_POST['email'] : ''?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
                </fieldset>
            </form>
        </div>
    </div>