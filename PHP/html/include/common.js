
function Add_Site() 
{
	window.external.AddFavorite("http://www.induk.ac.kr", "�δ�����");
}

function img_change(mode)
{
	var reg = /(menu.+)_(on|off)/;
	var find = event.srcElement.src.match(reg)[0];
	var name = event.srcElement.src.match(reg)[1];
  
	event.srcElement.src = event.srcElement.src.replace(find,name+'_'+mode);
}

function Search()
{
	if (!form1.findtext.value) {
		alert("�˻��� �ܾ �Է����ּ���");
		return;
	}
	form1.submit();
}
