
function mouseOver(e,num){
	var word=document.getElementById("word")
	word.style.display="block";
	word.style.left=e.clientX+document.documentElement.scrollLeft-50+"px";
	word.style.top=e.clientY+document.documentElement.scrollTop+50+"px";
	word.style.opacity = 0.7;
	switch(num){
		case 1:
			word.innerHTML="���꺮������ADOBE AIR���򡪡�ACCOUNT����ۡ�";
			break;
		case 2:
			word.innerHTML="���꺮��ѧУ����ʦ���������������Է��վ��";
			break;
		case 3:
			word.innerHTML="�߶����ĵ�����־��";
			break;
		case 4:
			word.innerHTML="�߶�ΪӰ�ӵ۹���̳������־��ۡ�";
			break;
		case 5:
			word.innerHTML="�߶�ΪӰ�ӵ۹����Ķ����ؿ���־��";
			break;
		case 6:
			word.innerHTML="��һ��ѧ��ѧ������ѵ�����ҵ��";
			break;
		case 7:
			word.innerHTML="��һ��ѧ�ڰ����Ƶļ��� �����ֻ�ͼ����������Լ���ɫ��";
			break;
	}
}
function mouseOut(){
	var word=document.getElementById("word");
	word.style.display="none";
}
function mouseMove(e){
	var word=document.getElementById("word")
	word.style.left=e.clientX+document.documentElement.scrollLeft-50+"px";
	word.style.top=e.clientY+document.documentElement.scrollTop+50+"px";
}