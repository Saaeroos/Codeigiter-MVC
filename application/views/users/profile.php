<!DOCTYPE HTML>
<html lang=en>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>profile</title>
    <meta content="" name="description">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"/>

</head>
<body>


    <div class="container">
      <div class="row">
          <a href="http://localhost:8888/logout/">Logout</a>
      </div>



        <span>Welcome <?= $cUser['name'] ?></span>
        <section>
                  <form action="<?= base_url()?>Posts/post" method="POST">
                    <textarea rows="4" cols="50">
                    </textarea>
                  <input type="submit" value="Post">
                  </form>
        </section>

        <br><br><br>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
