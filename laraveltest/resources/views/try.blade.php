
<!DOCTYPE html>
<html lang="en-US">


<head>
<title>My Php editor</title>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
   * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
body {
    color:#000000;
    margin:0px;
    font-size:100%;
}
#ads {
    background-color: #ffffff;
    height: 104px;
    width:100%;
    margin-top:0px;
    min-width:903px;
}
.container {
    background-color:#f1f1f1;
    width:100%;
    overflow:auto;
    position:absolute;
    top:0px;
    bottom:0;
    height:auto;
    min-height:250px;
    min-width:550px;
}
.textareacontainer, .iframecontainer {
    float:left;
    height:100%;
    width:50%;
}
.textarea, .iframe {
    height:100%;
    width:100%;
    padding:15px;
}
.textarea {
    padding-right:7px;
}
.iframe {
    padding-left:7px;
}
.headerText {
    width:auto;
    float:left;
    font-family:verdana;
    font-size:1em;
    line-height:2;
}
.seeResult {
    float:right;
    font-size:15px;
    background-color:#555555;
    color:#ffffff;
    border:1px solid #555555;
    padding:0 15px;
    line-height:1.45;
    width:auto;
  cursor:pointer;  
    box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);  
}
.seeResult:hover {
    background-color:#ffffff;
    color:#000000;
}
.seeResult:active {
    background-color:#f1f1f1;
}
.textareawrapper {
    width:100%;
    height:92%;
    background-color: #ffffff;
    box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.iframewrapper {
    width:100%;
    height:92%;
    -webkit-overflow-scrolling: touch;
    background-color: #ffffff;
    box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
#textareaCode {
    background-color: #ffffff;
    font-family: consolas,"courier new",monospace;
    font-size:15px;
    height:100%;
    width:100%;
    padding:8px;
    resize: none;
    border:none;
}
#iframeResult, #iframeSource {
    background-color: #ffffff;
    height:100%;
    width:100%;  
}
.footerText {
  position:absolute;
  bottom:0;
  font-family:verdana;
  font-size:0.8em;
  width:100%;
  padding-right:15px;
  text-align:right;
    height:20px;
    overflow:hidden;
}
.footerText a {
  color:#000000;
}
.footerText a:hover {
  text-decoration:none;
}
#tryitLeaderboard {
    overflow:hidden;
    text-align:center;
    margin-top:5px;
}

</style>
</head>
<body>
<?php 
$mydata = 'ww';
?>

<div class="container">
  <div class="textareacontainer">
    <div class="textarea">
      <div style="overflow:auto;">
        {!! Form::open() !!}
        <div class="headerText">Edit This Code:</div>
        <button class="seeResult" type="submit" >See Result &raquo;</button>
      </div>

      <div class="textareawrapper">
        <textarea autocomplete="off" class="code_input" id="textareaCode" name = 'textareaCode' wrap="logical" spellcheck="false"><?php
          $str2 = "<?php\necho 'Welcome'\n?>";
            echo ($str2);
          ?>
</textarea>

 {!! Form::close() !!}
          <form autocomplete="off" style="margin:0px;display:none;">
            <input type="hidden" name="code" id="code" />
            <input type="hidden" id="bt" name="bt" />
          </form>
       </div>
    </div>
  </div>
  <div class="iframecontainer">
    <div class="iframe">
      <div style="overflow:auto;">
        <div class="headerText">Result:</div>
        <button onclick="window.location='{{ route('logout') }}'" class="seeResult" type="button" >logout &raquo;</button>
<h1></h1>
      </div>

      <div id="iframewrapper" class="iframewrapper">
       
       <?php
       echo eval("?> $data <?php ");
       ?>
      </div>
    </div>
  </div>
 
</div>

</body>
</html>