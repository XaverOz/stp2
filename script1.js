function click_submit() {
	var article2 = document.getElementById('article2');
	var article2_childs = article2.childNodes;
	article2.removeChild(article2_childs[1]);
	var form = article2_childs[0];
	var form_child = form.childNodes;
	form.removeChild(form_child[0]);
	var input = document.createElement("input");
	input.type = "text";
	input.name = "text_article";
	form.appendChild(input); 
	var input = document.createElement("input");
	input.type = "submit";
	form.appendChild(input); 
}