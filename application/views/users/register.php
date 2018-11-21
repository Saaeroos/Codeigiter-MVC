<!DOCTYPE HTML>
<html lang=en>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login/Register</title>
    <meta content="" name="description">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"/>

</head>
<body>


    <div class="container">
      <div class="row">
          <a href="http://localhost:8888/">Login</a> ||
          <a href="http://localhost:8888/register/">Register</a> ||
          <a href="http://localhost:8888/profile/">Home</a> ||
          <a href="http://localhost:8888/logout/">Logout</a>
      </div>



        <div class="row">
            <div class="col col-md-12">
                <h1>Register</h1>




                <?php if( isset($suc_msg) ){ ?>
                <div class="alert alert-success"><?= $suc_msg; ?></div>
                <?php } ?>

                <?php
                    $err = validation_errors('<li>', '</li>');
                    if( $err ) {
                ?>
                    <ul class="list-unstyled alert alert-danger">
                    <?php echo $err; ?>
                    </ul>
                <?php } ?>



                <form method="post" action="<?= base_url(); ?>do/register">
                    <div class="form-group">
                        <input type="text" class="form-control" name="form_name" placeholder="Your Name" value="<?= set_value('frm_fullname'); ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="form_email" placeholder="Your Email" value="<?= set_value('frm_email'); ?>">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="form_password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="form_con_password" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="register">
                    </div>
                </form>
            </div>
        </div>

    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
