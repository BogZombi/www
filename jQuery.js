/*<script type="text/javascript" src="jquery-3.2.1.min.js"></script> 
<script type="text/javascript" src="jQuery.js"></script>*/

jQuery('document').ready(function(){ 
jQuery('button').on('click',function(){ 
var p1,p2=0,p3=0; 
p1=jQuery('#name1').val(); 
p2=parseInt(p1,10); 
if(p2>0||p2<0||p2==0){ 
alert('������ ��� ��� ���� �� ������� '); 
p3=1; } 
if(p1==''){ 
alert('�� ���� ����� ���� ��������'); 
p3=1; } 

p1=jQuery('#surname1').val(); 
p2=parseInt(p1,10); 
if(p2>0||p2<0||p2==0){ 
alert('������ ������� ��� ���� �� ������� '); 
p3=1; } 
if(p1==''){ 
alert('�� ���� ����� ���� ��������'); 
p3=1; } 

p1=jQuery('#email1').val(); 
if(p1==''){ 
alert('�� ���� ����� ���� ��������'); 
p3=1; } 
else if( !!(~p1.indexOf('@') )!=true){ 
alert('�� �� ���������� �����'); 
p3=1; } 


p1=jQuery('#pas1').val(); 
p2=jQuery('#repas1').val(); 
if(p1!=p2){ 
alert('������ � ��������� ������ �� ����������'); 
p3=1; } 
if(p1==''){ 
alert('�� ���� ����� ���� ��������'); 
p3=1; } 
if(p3==0){ 
p1=jQuery('#name1').val(); 
alert('³���� � ������� ����������');} 
}); 

});

function morepicture(){
	$("#logo").css("width", "160px");
	$("#logo").css("height","160px");
	
}
function smallpicture(){
	$("#logo").css("width", "120px");
	$("#logo").css("height","120px");
	
}

function TextColor(){
	$("#logo-text").css("	text-shadow", "0 0 40px #fff"); 
}
