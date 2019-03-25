<link href="views/bootstrap-3.3.7/css/style.css" rel="stylesheet" type="text/css" media="all">

<div class="container mt-4">
    <form method="post" action="index.php ?action=loginValidation">
        <div id="div_login" class="text-center float-right">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" required />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password" required/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit"/>
            </div>
             
        </div>

    </form>
    <br>
    <div>
    <br> <br>
    </div>
</div>
<a href="index.php ?action=register" class="btn btn-primary text-center mt-4">Register Account</a>


