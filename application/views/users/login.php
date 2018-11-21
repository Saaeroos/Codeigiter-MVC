<!DOCTYPE HTML>
<html lang=en>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <meta content="" name="description">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"/>

    <link rel="stylesheet" href="<?= base_url(); ?>/public/main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                <h1>Login</h1>
                <?php
                    $err = validation_errors('<li>', '</li>');
                    if( $err ) {
                ?>
                    <ul class="list-unstyled alert alert-danger">
                    <?php echo $err; ?>
                    </ul>
                <?php } ?>

                <?php if( isset($error_msg) ){ ?>
                <div class="alert alert-danger"><?= $error_msg; ?></div>
                <?php } ?>


                <form method="post" action="<?= base_url(); ?>do/loginprocess">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email" value="<?= set_value('email'); ?>">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" >
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="login">
                    </div>
                </form>
            </div>
        </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
