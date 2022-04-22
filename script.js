function readMore1() {
	document.getElementById("s1").classList.toggle("show");
	document.getElementById("btn1").classList.toggle("show_btn1");
	var s2 = document.getElementById("s2");
	var s3 = document.getElementById("s3");
	var btn = document.getElementById("btn1");

	if(s2.classList.contains("show"))
	{
		s2.classList.remove("show");
		btn.classList.remove("show_btn1");
	}

	if(s3.classList.contains("show"))
	{
		s3.classList.remove("show");
		btn.classList.remove("show_btn1");
	}
}

function readMore2() {
	document.getElementById("s2").classList.toggle("show");
	var s1 = document.getElementById("s1");
	var s3 = document.getElementById("s3");
	var btn = document.getElementById("btn1");
	if(s1.classList.contains("show"))
	{
		s1.classList.remove("show");
		btn.classList.remove("show_btn1");
	}

	if(s3.classList.contains("show"))
	{
		s3.classList.remove("show");
		btn.classList.remove("show_btn1");
	}
}
 
function readMore3() {
	document.getElementById("s3").classList.toggle("show");
	var s2 = document.getElementById("s2");
	var s1 = document.getElementById("s1");
	var btn = document.getElementById("btn1");
	if(s2.classList.contains("show"))
	{
		s2.classList.remove("show");
		btn.classList.remove("show_btn1");
	}
	if(s1.classList.contains("show"))
	{
		s1.classList.remove("show");
		btn.classList.remove("show_btn1");
	}
}

function AllCategories() {
	document.getElementById("all").classList.toggle("show");
	document.getElementById("btn_ct").classList.toggle("show_btn_ct");
    var c2 = document.getElementById("home");
    var c3 = document.getElementById("electronics");
    var c4 = document.getElementById("apartments");
    var c5 = document.getElementById("transport");
	var btn_ct = document.getElementById("btn_ct");
    if(c2.classList.contains("show"))
	{
		c2.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c3.classList.contains("show"))
	{
		c3.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c4.classList.contains("show"))
	{
		c4.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c5.classList.contains("show"))
	{
		c5.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
}

function Home() {
	document.getElementById("home").classList.toggle("show");
    var c1 = document.getElementById("all");
    var c3 = document.getElementById("electronics");
    var c4 = document.getElementById("apartments");
    var c5 = document.getElementById("transport");
	var btn_ct = document.getElementById("btn_ct");
    if(c1.classList.contains("show"))
	{
		c1.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c3.classList.contains("show"))
	{
		c3.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c4.classList.contains("show"))
	{
		c4.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c5.classList.contains("show"))
	{
		c5.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
}

function Electronics() {
	document.getElementById("electronics").classList.toggle("show");
    var c1 = document.getElementById("all");
    var c2 = document.getElementById("home");
    var c4 = document.getElementById("apartments");
    var c5 = document.getElementById("transport");
	var btn_ct = document.getElementById("btn_ct");
    if(c1.classList.contains("show"))
	{
		c1.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c2.classList.contains("show"))
	{
		c2.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c4.classList.contains("show"))
	{
		c4.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c5.classList.contains("show"))
	{
		c5.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
}

function Apartments() {
	document.getElementById("apartments").classList.toggle("show");
    var c1 = document.getElementById("all");
    var c2 = document.getElementById("home");
    var c3 = document.getElementById("electronics");
    var c5 = document.getElementById("transport");
	var btn_ct = document.getElementById("btn_ct");
    if(c1.classList.contains("show"))
	{
		c1.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c2.classList.contains("show"))
	{
		c2.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c3.classList.contains("show"))
	{
		c3.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c5.classList.contains("show"))
	{
		c5.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
}

function Transport() {
	document.getElementById("transport").classList.toggle("show");
    var c1 = document.getElementById("all");
    var c2 = document.getElementById("home");
    var c3 = document.getElementById("electronics");
    var c4 = document.getElementById("apartments");
	var btn_ct = document.getElementById("btn_ct");
    if(c1.classList.contains("show"))
	{
		c1.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c2.classList.contains("show"))
	{
		c2.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c3.classList.contains("show"))
	{
		c3.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
    if(c4.classList.contains("show"))
	btn_ct.classList.remove("show_btn_ct");
	{
		c4.classList.remove("show");
		btn_ct.classList.remove("show_btn_ct");
	}
}

function RedirectView(id){
    jQuery.ajax({
    type: "GET",
    url: "view.php", 
    data: 'id='+id,
    cache: false,
    success: function(response)
    {
        document.write(response);
    }
    });
 }

 function RedirectDelete(prod_id){
    jQuery.ajax({
    type: "GET",
    url: "delete.php", 
    data: 'id='+prod_id,
    cache: false,
    success: function(response)
    {
        alert("Успешно удалено!");
		window.location.href = 'reg.php';
    }
    });
 }


