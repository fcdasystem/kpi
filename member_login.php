<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>OnlineLibrary</title>
    <!-- Preloader -->
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="assets/libs/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="assets/css/quick-website.css" id="stylesheet">
</head>

<body>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-cookies" data-backdrop="false" aria-labelledby="modal-cookies" aria-hidden="true">
        <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
            <div class="modal-content bg-dark-dark">
                <div class="modal-body">
                    <!-- Text -->
                    <p class="text-sm text-white mb-3">
                        We use cookies so that our themes work for you. By using our website, you agree to our use of cookies.
                    </p>
                    <!-- Buttons -->
                    <a href="pages/utility/terms.html" class="btn btn-sm btn-white" target="_blank">Learn more</a>
                    <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section>
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center min-vh-100">
                <div class="col-md-6 col-lg-5 col-xl-5 py-6 py-md-0">
                    <div class="card shadow zindex-100 mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h6 class="h3">Вхід</h6>
                                <p class="text-muted mb-0">Введіть логін та пароль</p>
                            </div>
                            <span class="clearfix"></span>

                            <form name="form1" method="post" action="">
							<form name="form1" method="post" action="">
<td>
<table width="100%" border="0" cellpadding="8" cellspacing="3" bgcolor="#FFFFFF" >

<tr>
<td width="78"><B>Квиток</B></td>
<td width="6">:</td>
<td width="294"><input name="memusername" type="text"></td>
</tr>
<tr>
<td><b>Пароль</b></td>
<td>:</td>
<td><input name="mempassword" type="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Вхід"></td>

</tr>
</table>
</td>
</form>


<?php
if(isset($_POST["submit"])){

if(!empty($_POST['memusername']) && !empty($_POST['mempassword'])) {
	$user=$_POST['memusername'];
	$pass=$_POST['mempassword'];

	include 'conn.php';

	$sql = sprintf("SELECT * FROM member WHERE Mid='%s' AND Password='%s'",
		$mysqli->real_escape_string($user),
		$mysqli->real_escape_string($pass));

	$result=$mysqli->query($sql);
	
	if(!$result){
		$message = 'Invalid query:'.$mysqli->error."<br>";
		$message .= 'Whole query:'.$sql;
		die($message);
	}

	$numrows = $result->num_rows;
	
	if($numrows!=0)
	{
	while($row=$result->fetch_assoc())
	{
	$dbuser=$row['Name'];
	$dbusername=$row['Mid'];
	$dbpassword=$row['Password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$dbuser;
	$_SESSION['mid']=$dbusername;
	$_SESSION['level']="member";

	/* Redirect browser */
	header("Location: member.php");
	}
	} else {
	echo "Некоректний логін або пароль";
	}

} else {
	
}
}
?>





</tr>
</table><br><br><br><br><br><br><br>
				
				
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
				


				
				<!-- Column 2 end -->
			</div>
			<div class="col3">
				<!-- Column 3 start -->
					<div id="ads">
					
						
					
					</div>
				<!-- Column 3 end -->
			</div>
		</div>
	</div>
</div>
<div id="footer">
	
	
	
</div>

</body>
</html>
