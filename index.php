<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bí mật dành cho em</title>
	<link rel="stylesheet" href="css/popup.css">
	<link rel="stylesheet" href="css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.popup.js"></script>
	<script src="js/popup.js" type="text/javascript"></script>
	<script src="js/jquery-1.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="http://cdn.vietdesigner.net/data/codes/snow1.js"></script>
	<script type="text/javascript">
	$(document).ready(function () {

	// if user clicked on button, the overlay layer or the dialogbox, close the dialog	
	$('a.btn-ok, #msb-nt').click(function () {		
		$('#dialog-overlay, #dialog-box').hide();		
		return false;
	});
	
	// if user resize the window, call the same function again
	// to make sure the overlay fills the screen and dialogbox aligned to center	
	$(window).resize(function () {
		

		if (!$('#dialog-box').is(':hidden')) popup();		
	});	
	
	
	});

	function popup(message) {
			
		var maskHeight = $(document).height();  
		var maskWidth = $(window).width();

		var dialogTop =  (maskHeight/3) - ($('#dialog-box').height());  
		var dialogLeft = (maskWidth/2) - ($('#dialog-box').width()/2); 
		$('#dialog-overlay').css({height:maskHeight, width:maskWidth}).show();
		$('#dialog-box').css({top:dialogTop, left:dialogLeft}).show();
		

		$('#dialog-message').html(message);
				
	}

	window.onbeforeunload = function (event) {
	  var message = 'EM MÀ TẮT CÁI NÀY ĐI, KHÔNG TRẢ LỜI THÌ SẼ PHẢI THEO ANH ĐẠT SUỐT ĐỜI ♥ =)) CÓ CHẮC TẮT KHÔNG? :3';
	  if (typeof event == 'undefined') {
	    event = window.event;
	  }
	  if (event) {
	    event.returnValue = message;
	  }
	  return message;
	}
	</script>
			
	<script language="javascript"> 
		var kt=false
		function move()
		{
		var x = Math.random()*500
		var y = Math.random()*500
		var left=x+'px'
		var top=y+'px'
		document.getElementById('lbNo').style.left=left
		document.getElementById('lbNo').style.top=top
		}
		function dongy()
		{
		if(kt==false)
		{

		kt=true 
		} 
		else
		{
		}
		}
	</script>
	<script src="js/pace.min.js"></script>
  	<link href="css/dataurl.css" rel="stylesheet" />
</head>
<body onload="popup('<p>Hãy trả lời câu hỏi này nhé.. Trả lời cho thật lòng đó nghe chưa :-*</p></br>'); on()" onunload="s()">
<div id="bg"></div>
<div id="myModal" class="reveal-modal large">
    <div id="traloi">
      <h1><center>NÓI VỚI ANH <img src="http://vozforums.com/images/smilies/Off/angry.gif"/></center></h1></br>
	  <p>Có phải em yêu anh vì anh quá tốt không? <img src="http://vozforums.com/images/smilies/Off/nosebleed.gif"/>  Nhập câu trả lời xuống bên dưới và bấm GỬI ĐI</br></br></p>
      <form id="f" name="f">
        <input id="form" name="txt" type="text" />

        <div>
          <input id="gui" onclick="Yeu();" type="button" value="Gửi đi" />
        </div>
      </form>
    </div>

    <div style="clear: both;"></div>

    <div id="divResult" style="text-align: center"></div>

    <div id="divResult2"></div>

    <div id="divResult3"></div>
<a class="close-reveal-modal">&#215;</a>
</div>
<script language="javascript"> 
    $(document).ready(function() {
        $('#msb-nt').click(function() {
                $('.music').slideToggle("fast");
                $('#bg').css('display','none');
        });
    });
</script>
<div id="dialog-overlay"></div>
<div id="dialog-box">
	<div class="dialog-content">
		<div id="dialog-message"></div>
		<div id="msb-nt">
		<a href="#">Ô tê :3</a>
		</div>
	</div>
</div>
		
<div class="msg">
			
<h1>EM CÓ YÊU ANH KHÔNG ?</h1>
			
<h2>EM MÀ TẮT CÁI NÀY ĐI, KHÔNG TRẢ LỜI</br>
THÌ SẼ PHẢI THEO ANH ĐẠT SUỐT ĐỜI ĐẤY NHÉ ♥ =))</h2>

		
</div>
		
<center>
<div id="co"> 
<a href="#" data-reveal-id="myModal">CÓ ! EM YÊU ANH NHIỀU LẮM.... hihi</a>
</div> 

<div id="lbNo" style="position:absolute; left: 700px; top: 300px;"> 
<input type="button" value="KHÔNG BAO GIỜ" style="cursor:pointer;" onMouseMove="move()" > 
</div>
</center> 


<audio src="IDO911.mp3" autoplay loop  ></audio>	

<script type="text/javascript">
   $(document).ready(function(){
      $(document).bind("contextmenu",function(e){
        return false;
      });
    });
 </script>

</body>
</html>