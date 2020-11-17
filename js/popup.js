
status="Mr.Đạt"
var a=new Array(),n=""
a[1]='Đ';
a[2]='ú';
a[3]='n';
a[4]='g';
a[5]=' ';
a[6]='v';
a[7]='ậ';
a[8]='y';
a[9]='!';
a[10]=' ';
a[11]='a';
a[12]='n';
a[13]='h';
a[14]=' ';
a[15]='Đ';
a[16]='ạ';
a[17]='t';
a[18]=' ';


a[19]='t';
a[20]='ố';
a[21]='t';
a[22]=' ';
a[23]='n';
a[24]='h';
a[25]='ấ';
a[26]='t';
a[27]=' ';
a[28]='v';
a[29]='ũ';
a[30]=' ';
a[31]='t';
a[32]='r';
a[33]='ụ';
a[34]=' ';
a[35]='♥';
a[36]=' ';
a[37]='Y';
a[38]='ê';
a[39]='u';
a[40]=' ';
a[41]='A';
a[42]='n';
a[43]='h';
a[44]='♥';
a[45]='♥';
function one()
{
t=document.f.txt.value
j=t.length
if(j>0)
{
for(var i=1;i<=j;i++)
{
n=n+a[i]
if(i==46)
{
document.f.txt.value=""
n=""
}
}
}
document.f.txt.value=n
n=""
setTimeout("one()",1)
}
function s()
{
}
function on()
{
one()
}

        $(document).ready(function() {
            $('#k').hide();
            $('h1').click(function() {
                $('.active').removeClass('active');
                $('#k').slideUp('fast');
                if($(this).next('#k').is(':hidden') == true) {
                $(this).addClass('active');
                $(this).next('#k').slideDown('fast');
                }
            });
        });
					function Yeu()
					{
					$("#divResult").fadeOut(0);
					$("#divResult").html("</br><h2>Ủ ÔI! AI CŨNG NÓI VẬY ĐÓ <img src='images/adore.png'</img></h2>");
					$("#divResult").fadeIn(2000,function()
							{
							$("#divResult2").fadeOut(0);
							$("#divResult2").html("<p>Mặc kệ người ta nói, Anh chỉ yêu mình em hoy <img src='images/big_smile.png'/></p></br>");
							$("#divResult2").fadeIn(2000,function()
									{
									$("#divResult3").fadeOut(0);
									$("#divResult3").html("<p>Anh yêu em lắm ♥ <img src='images/sure.png'/></p></br>");
									$("#divResult3").fadeIn(2000);
									}
								);
							}
						);
					}
				