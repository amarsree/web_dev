$(function(){ 
	select_box()
	dblselect_box()
});

function select_box(){
	
	$("#table").one("click","#td", function(){
		$(this).addClass("high")
		select_val(this);

	});
}

function dblselect_box(){
	$("#table").one("dblclick","#td", function(){
		$(this).addClass("high")
		dblselect_val(this);

	});
}

function select_val(a){
	$("#but_sel").one("click","#b", function(){
		var v=$(this).val();
		$(a).html(v)
		$(a).removeClass("high")
		select_box()
		dblselect_box()
});
}

