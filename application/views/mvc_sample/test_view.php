<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- <script src="js/bootstrap.min.js"></script> -->

<script type="text/javascript">
$(function(){
    $("#popbutton").click(function(){
        $('div.modal').modal({remote : 'mvc_sample/layer.html'});
    })
})
</script>

    <h1>Hello, world!</h1>

    <button class="btn btn-default">DEFAULT</button>
<button class="btn btn-primary">BLUE</button>
<button class="btn btn-success">GREEN</button>
<button class="btn btn-info">SKY</button>
<button class="btn btn-warning">YELLO</button>
<button class="btn btn-danger">RED</button>
<br/>
<button class="btn btn-default btn-lg">LARGE DEFAULT</button>
<button class="btn btn-default btn-sm">SMALL DEFAULT</button>
<button class="btn btn-default btn-xs">VERY SMALL DEFAULT</button>
<br/>
<br/> 

<!-- 기존 default 색상별 버튼 -->
<button class="btn btn-default">DEFAULT</button>
<button class="btn btn-primary">BLUE</button>
<button class="btn btn-success">GREEN</button>
<button class="btn btn-info">SKY</button>
<button class="btn btn-warning">YELLO</button>
<button class="btn btn-danger">RED</button>
<br/><br/>
<!-- 가로형 그룹버튼 -->
<div class="btn-group">
<button class="btn btn-default">DEFAULT</button>
<button class="btn btn-primary">BLUE</button>
<button class="btn btn-success">GREEN</button>
<button class="btn btn-info">SKY</button>
<button class="btn btn-warning">YELLO</button>
<button class="btn btn-danger">RED</button>
</div>
<br/><br/>
<!-- 세로형 그룹버튼 -->
<div class="btn-group-vertical">
<button class="btn btn-default">DEFAULT</button>
<button class="btn btn-primary">BLUE</button>
<button class="btn btn-success">GREEN</button>
<button class="btn btn-info">SKY</button>
<button class="btn btn-warning">YELLO</button>
<button class="btn btn-danger">RED</button>
</div>

<br/>
<div class="btn-group">
    <!-- 추가 버튼태그 -->
    <button class="btn btn-default" type="button">
        메뉴버튼
    </button>
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
    <!-- 버튼태그 우측 메뉴출력을 위한 화살표표시
        (없어도 무관하나 메뉴버튼이라는것을 알려주기 위함) -->
    <span class="caret"></span>
    </button>
    <!--메뉴버튼 클릭시 하단 표출된 리스트 영역  -->
    <ul class="dropdown-menu" >
        <!-- 메뉴1 -->
        <li><a href="#">메뉴1</a></li>
        <!-- 메뉴2 -->
        <li><a href="#">메뉴2</a></li>
    </ul>
</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
  </body>
</html>