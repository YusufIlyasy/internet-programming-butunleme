<?php 
    session_start(); 
    if(@$_SESSION["giriskontrol"]==1){
        header("Location: anasayfa.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Giriş Yap</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Kullanıcı Adı" name="kullanıcıAd" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="******" name="sifre" type="password" required>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name = "submit" value = "Giriş" class="btn btn-lg btn-success btn-block">
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    
    if(@$_POST["submit"]){
        $md5sifre = md5($_POST["sifre"]);

        if(@$_POST["kullanıcıAd"]=="admin" && $md5sifre == "202cb962ac59075b964b07152d234b70"){

            $_SESSION["giriskontrol"] = 1;
            $_SESSION["kullanıcıAd"] = $_POST["kullanıcıAd"];
            
            header("Location: anasayfa.php");
            return true;



        }
        else{
            echo "<p style = 'text-align: center'>Kullanıcı adı veya şifre yanlış</p>";
            return false;
        }

    }
    if(@$_GET[i]=="cikis")
    {
        echo "<p style = 'text-align: center' color: green>Başarılıyla çıkış yaptınız</p>";
    }elseif(@$_GET[i]=="hack"){
        echo "<p style = 'text-align: center' color: red>Öncelikle giriş yapmalısınız</p>";
    }
?>
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
