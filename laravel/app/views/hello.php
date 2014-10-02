<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <style>
     @import url(//fonts.googleapis.com/css?family=Lato:700);

     body {
       margin:0;
       font-family:'Lato', sans-serif;
       text-align:center;
       color: #999;
     }

     .welcome {
       width: 300px;
       height: 200px;
       position: absolute;
       left: 50%;
       top: 50%;
       margin-left: -150px;
       margin-top: -100px;
     }

     a, a:visited {
       text-decoration:none;
     }

     h1 {
       font-size: 32px;
       margin: 16px 0 0 0;
     }
    </style>
  </head>
  <body>
    <div class="welcome">
      <?php 
      echo Form::open(['route' => 'update', 'method' => 'post', 'files' => true]) ;
      echo Form::file('photo', ['required' => 'required', 'id'=>'photo']) ;
      echo Form::textarea('message', '', ['id'=>'message']) ;
      echo Form::hidden('key', 'lkjgqe*@E&HSX(91r2cisO');
      echo Form::submit();
      echo Form::close() ;
      ?>
    </div>
  </body>
</html>
