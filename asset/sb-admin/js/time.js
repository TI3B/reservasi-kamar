// JavaScript Document
function waktu(){
		hariA=Array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
		bulanA=Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		date=new Date();
		jam=date.getHours();
		menit=date.getMinutes();
		detik=date.getSeconds();
		hari=date.getDay();
		tgl=date.getDate();
		bulan=date.getMonth();
		tahun=date.getYear()+1900;
		isi=hariA[hari]+" "+tgl+" "+bulanA[bulan]+" "+tahun+"&nbsp;&nbsp;&nbsp;Jam "+jam+":"+menit+":"+detik;
		document.getElementById("waktu").innerHTML=isi;
		setTimeout("waktu()",500);
}function show_t(id){
	document.getElementById("hide_t_"+id).style.visibility='visible';
}function hide_t(id){
	document.getElementById("hide_t_"+id).style.visibility='hidden';
}function show_b(id){
	document.getElementById("hide_b_"+id).style.visibility='visible';
}function hide_b(id){
	document.getElementById("hide_b_"+id).style.visibility='hidden';
}function getField(){
	tabel=document.getElementById("tabel").value;
	xml=create();
	url="../conf/getField.php?tabel="+tabel;
	xml.onreadystatechange=function(){
		if(xml.readyState==4){
			text=xml.responseText;
			document.getElementById("field").innerHTML=text;
		}
	}
	xml.open("GET",url,true);
	xml.send(null);
}