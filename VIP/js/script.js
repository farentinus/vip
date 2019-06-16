function ajax(){
	if(window.XMLHttpRequest){
		return new XMLHttpRequest();
				}
		return null;
				}
		ajaxku = ajax();
function tampil(){
	var data;
	if(ajaxku.readyState==4){
		data = ajaxku.responseText;
		document.getElementById("tampil").innerHTML = data
				}
	}
function tampilform(){
	var data;
	if(ajaxku.readyState==4){
		data = ajaxku.responseText;
		document.getElementById("tampilform").innerHTML = data;
				}
	}
function tampilitem(){
	var data;
	if(ajaxku.readyState==4){
		data = ajaxku.responseText;
		document.getElementById("tampilitem").innerHTML = data;
				}
	}
function barang(){
	url ="../inputan/barang/";
	ajaxku.onreadystatechange = tampil;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);
}
function transaksi(){
	location.href = "../inputan/transaksi/";
}
function kembali(){
	location.href = "../../admin/";
}
function kembalitrans(){
	location.href = "/vip/admin/";
}
function setting(){
	url ="../inputan/setting/";
	ajaxku.onreadystatechange = tampil;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);
}
function transaksijual(){
	location.href = "jual/";
}
function laporan(){
	url ="../inputan/laporan/";
	ajaxku.onreadystatechange = tampil;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);
}
function startTime() {
	var today = new Date();
	var h = today.getHours();
	var m = today.getMinutes();
	var s = today.getSeconds();
	h = checkTime(h);
	m = checkTime(m);
	s = checkTime(s);
	document.getElementById('h').innerHTML = h;
	document.getElementById('m').innerHTML = m;
	document.getElementById('s').innerHTML = s;
	var t = setTimeout(startTime, 500);
}
	function checkTime(i) {
	if (i < 10) {i = "0" + i};
	return i;
}
function logout(){
	location.href='../login/logout.php'
}
function simpansetting(but){
	var iduser = document.getElementById('iduser').value;
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var status = document.getElementById('status').value;
	var alamat = document.getElementById('alamat').value;
	var telp = document.getElementById('telp').value;
	url = "../inputan/setting/save.php?username="+username+"&password="+password+"&status="+status+"&but="+but+"&iduser="+iduser+"&alamat="+alamat+"&telp="+telp;
	url = url+"&lol="+Math.random();
	ajaxku.onreadystatechange = tampilform;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);

	document.getElementById('iduser').value = "";
	document.getElementById('username').value = "";
	document.getElementById('password').value = "";
	document.getElementById('status').value = "admin";
	document.getElementById('alamat').value = "";
	document.getElementById('telp').value = "";
}
function tampildatasetting(iduser,username,password,status,alamat,telp){
	document.getElementById('iduser').value = iduser;
	document.getElementById('username').value = username;
	document.getElementById('password').value = password;
	document.getElementById('status').value = status;
	document.getElementById('alamat').value = alamat;
	document.getElementById('telp').value = telp;
}
function masukpel(kodepel,term,alamat,telp){
	document.getElementById('kodepel').value = kodepel;
	document.getElementById('term').value = term;
	document.getElementById('alamat').value = alamat;
	document.getElementById('telp').value = telp;
}
function caripel(){
	location.href="#popup1"
}
function caripel1(){
	location.href="#"
}
function simpanbarang(but){
	var idbarang = document.getElementById('idbarang').value;
	var namabarang = document.getElementById('namabarang').value;
	var type = document.getElementById('type').value;
	var satuan = document.getElementById('satuan').value;
	var jumlah = document.getElementById('jumlah').value;
	var hargabeli = document.getElementById('hargabeli').value;
	var hargajual = document.getElementById('hargajual').value;
	var hargaresell = document.getElementById('hargaresell').value;
	var kode = document.getElementById('kode').value;
	url = "../inputan/barang/item/save.php?idbarang="+idbarang+"&type="+type+"&satuan="+satuan+"&kode="+kode+"&namabarang="+namabarang+"&jumlah="+jumlah+"&hargabeli="+hargabeli+"&hargajual="+hargajual+"&but="+but+"&hargaresell="+hargaresell;
	url = url+"&lol="+Math.random();
	ajaxku.onreadystatechange = tampilform;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);

	document.getElementById('idbarang').value = "";
	document.getElementById('namabarang').value = "";
	document.getElementById('type').value = "";
	document.getElementById('satuan').value = "";
	document.getElementById('jumlah').value = "";
	document.getElementById('hargabeli').value = "";
	document.getElementById('hargajual').value = "";
	document.getElementById('kode').value = "";
	document.getElementById('hargaresell').value = "";
	}

function simpanbarang1(but){
	var idbarang = document.getElementById('idbarang').value;
	var namabarang = document.getElementById('namabarang').value;
	var type = document.getElementById('type').value;
	var satuan = document.getElementById('satuan').value;
	var jumlah = document.getElementById('jumlah').value;
	var hargabeli = document.getElementById('hargabeli').value;
	var hargajual = document.getElementById('hargajual').value;
	var hargaresell = document.getElementById('hargaresell').value;
	var kode = document.getElementById('kode').value;
	url = "../inputan/barang/hp/save.php?idbarang="+idbarang+"&type="+type+"&satuan="+satuan+"&kode="+kode+"&namabarang="+namabarang+"&jumlah="+jumlah+"&hargabeli="+hargabeli+"&hargajual="+hargajual+"&but="+but+"&hargaresell="+hargaresell;
	url = url+"&lol="+Math.random();
	ajaxku.onreadystatechange = tampilform;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);

	document.getElementById('idbarang').value = "";
	document.getElementById('namabarang').value = "";
	document.getElementById('type').value = "";
	document.getElementById('satuan').value = "";
	document.getElementById('jumlah').value = "";
	document.getElementById('hargabeli').value = "";
	document.getElementById('hargajual').value = "";
	document.getElementById('kode').value = "";
	document.getElementById('hargaresell').value = "";
	}

function tampildatabarang(idbarang,namabarang,type,satuan,jumlah,hargabeli,hargajual,hargaresell,kode){
	document.getElementById('idbarang').value = idbarang;
	document.getElementById('namabarang').value = namabarang;
	document.getElementById('type').value = type;
	document.getElementById('satuan').value = satuan;
	document.getElementById('jumlah').value = jumlah;
	document.getElementById('hargabeli').value = hargabeli;
	document.getElementById('hargajual').value = hargajual;
	document.getElementById('kode').value = kode;
	document.getElementById('hargaresell').value = hargaresell;
}
function caribarang() {
	var but = "search";
	var namabarang = document.getElementById('namabarang').value;
	url = "../inputan/barang/item/save.php?but="+but+"&namabarang="+namabarang;
	url = url+"&lol="+Math.random();
	ajaxku.onreadystatechange = tampilform;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);	
}
function caribarangtrans() {
	var but = "search";
	var namabarang = document.getElementById('namabar').value;
	url = "cari.php?but="+but+"&namabarang="+namabarang;
	url = url+"&lol="+Math.random();
	ajaxku.onreadystatechange = tampilform;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);	
}

function caribarang1() {
	var but = "search";
	var namabarang = document.getElementById('namabarang').value;
	url = "../inputan/barang/hp/save.php?but="+but+"&namabarang="+namabarang;
	url = url+"&lol="+Math.random();
	ajaxku.onreadystatechange = tampilform;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);	
}

function limit(currentpage){
	if (currentpage != 0) {
		url = "../inputan/barang/item/tampil.php?currentpage="+currentpage;
		url	= url+"&lol="+Math.random();
		ajaxku.onreadystatechange = tampilform;
		ajaxku.open("GET",url,true);
		ajaxku.send(null);
	}
}

function limit2(currentpage){
	if (currentpage != 0) {
		url = "../inputan/barang/hp/tampil.php?currentpage="+currentpage;
		url	= url+"&lol="+Math.random();
		ajaxku.onreadystatechange = tampilform;
		ajaxku.open("GET",url,true);
		ajaxku.send(null);
	}
}

function limit1(currentpage){
	if (currentpage != 0) {
		url = "../inputan/setting/tampil.php?currentpage="+currentpage;
		url	= url+"&lol="+Math.random();
		ajaxku.onreadystatechange = tampilform;
		ajaxku.open("GET",url,true);
		ajaxku.send(null);
	}
}
function tampiltrans(idbar,jumlah,hargajual){
	document.getElementById('idbar').value = idbar;
	document.getElementById('jumlah').value = "1";
	document.getElementById('hargajual').value = hargajual;	
}
function simpantrans(but){
	var idbarang = document.getElementById('idbarang').value;
	var namabarang = document.getElementById('namabarang').value;
	var jumlah = document.getElementById('jumlah').value;
	var hargabeli = document.getElementById('hargabeli').value;
	var hargajual = document.getElementById('hargajual').value;
}
function preitem(kodebarang,namabar,jumlah,harga,kode,total){
	document.getElementById('kodebarang').value = kodebarang;
	document.getElementById('namabar').value = namabar;
	document.getElementById('jumlah').value = "1";
	document.getElementById('harga').value = harga;
	document.getElementById('kode').value = kode;
	document.getElementById('total').value = total;
}
function radi(){
	if(document.getElementById('item').checked){
		url ="../inputan/barang/item/";
	}else{
		url ="../inputan/barang/hp/";
	}
	ajaxku.onreadystatechange = tampilitem;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);
}
function inputitem(but){
	var kodebarang = document.getElementById('kodebarang').value;
	var namabar = document.getElementById('namabar').value;
	var jumlah = document.getElementById('jumlah').value;
	var harga = document.getElementById('harga').value;
	var kode = document.getElementById('kode').value;
	url = "save.php?kodebarang="+kodebarang+"&namabar="+namabar+"&jumlah="+jumlah+"&harga="+harga+"&kode="+kode+"&but="+but;
	url	= url+"&lol="+Math.random();
	ajaxku.onreadystatechange = tampilform;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);

	document.getElementById('kodebarang').value = "";
	document.getElementById('namabar').value = "";
	document.getElementById('jumlah').value = "";
	document.getElementById('harga').value = "";
	document.getElementById('kode').value = "";
	document.getElementById('total').value = "";

	location.href="#"
}
function total(){
	var jumlah = document.getElementById('jumlah').value;
	var harga = document.getElementById('harga').value;
	var hit = jumlah * harga;
	document.getElementById('total').value = hit;
}
function hps(notemp){
	document.getElementById('notemp').value;
	var but = "Hapus";
	url = "save.php?notemp="+notemp+"&but="+but;
	url	= url+"&lol="+Math.random();
	ajaxku.onreadystatechange = tampilform;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);
}
function htng(){
	var disc = document.getElementById('disc').value;
	var subtotal = document.getElementById('subtotal').value;
	if(document.getElementById('rp').checked){
		var hasil = subtotal-disc;
	}else{
		var hasil = subtotal - (subtotal*disc/100);
	}
	document.getElementById('grandtotal').value = hasil;
}