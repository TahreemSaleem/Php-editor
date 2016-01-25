<!-- resources/views/auth/login.blade.php -->
<!--http://codepen.io/marcobiedermann/pen/qahmr -->
<html lang="en-US">
  <head>


    <meta charset="utf-8">

    <title>Login</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">


  </head>
<style>


@import url(http://weloveiconfonts.com/api/?family=fontawesome);


@import url(http://meyerweb.com/eric/tools/css/reset/reset.css);



[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}


* {
  box-sizing: border-box;

  &:before,
  &:after {
    box-sizing: border-box;
  }
  
}

body {
    background: #c0c0c0;
    color: #000;
    font: 100%/1.5em "Varela Round", sans-serif;
  margin: 0;
}

input {
  background-image: none;
  border: none;
  font: 100%/1.5em "Varela Round", sans-serif;
  margin: 0;
  padding: 0;
  transition: all .3s;
}

.container {
  left: 50%;
  position: fixed;
  top: 50%;
  transform: translate(-50%, -50%);
}

/* ---------- LOGIN ---------- */

#login {
    width: 400px;
}

#login h2 {
    background: #f95252;
    border-radius: 20px 20px 0 0;
    color: #fff;
    font-size: 28px;
    padding: 20px 26px;
}

#login h2 span[class*="fontawesome-"] {
    margin-right: 14px;
}

#login fieldset {
    background: #fff;
    border-radius: 0 0 20px 20px;
    padding: 20px 26px;
}

#login fieldset p {
    color: #777;
    margin-bottom: 14px;
}

#login fieldset p:last-child {
    margin-bottom: 0;
}

#login fieldset input {
    border-radius: 3px;
}

#login fieldset input[type="email"], #login fieldset input[type="password"] {
    background: #eee;
    color: #777;
    padding: 4px 10px;
    width: 100%;
}

#login fieldset input[type="submit"] {
    background: #33cc77;
    color: #fff;
    display: block;
    margin: 0 auto;
    padding: 4px 0;
    width: 100px;
}

#login fieldset input[type="submit"]:hover {
    background: #28ad63;
}
</style>
  <body>

    <div class="container">
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}
      <div id="login">

        <h2><span class="fontawesome-lock"></span>Sign In</h2>

        <form action="#" method="POST">

          <fieldset>

            <p><label for="email">E-mail address</label></p>
            <p><input type="email" id="email" placeholder="mail@address.com"  name="email" value="{{ old('email') }}"></p>

            <p><label for="password">Password</label></p>
            <p><input type="password" id="password" name = "password" placeholder="password"></p>

            <p><input type="submit" value="Sign In"></p>

          </fieldset>

        </form>

      </div> <!-- end login -->
</form>
    </div>

  </body>   
</html>