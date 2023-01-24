
var base_url = 'https://isimkontrol.online/index.php/AdminPanel/';
var il='';
var ilce='';
var mahalle='';
var cadde='';
var sokak='';
var no='';
$("#il").click(function(){
    il = document.getElementById("il").value;
	$.ajax({
		url:base_url + 'groupIlce',
		type:"post",
		data: {il:il},
		dataType: 'json',
		success: function(response){
			var select = document.getElementById("ilce");
			select.innerHTML = "";
			response.map((item) =>{
				var row = JSON.stringify(item.ilçe);
				var veri = JSON.parse(row);	
				var option = document.createElement("option");
				option.text = veri;
				option.value = veri;
				select.add(option);
			})

			$.ajax({
				url:base_url + 'getIlce',
				type:"post",
				data: {il:il},
				dataType: 'json',
				success: function(response){
					var order = 0;
					var table = document.getElementById('tbb');
					table.innerHTML = "";
					response.map((item) => {
						var column = 0;
						var row = JSON.stringify(item);
						var veri = JSON.parse(row);
						var satir = table.insertRow(order);
						var td1 = satir.insertCell(column++);
						var td2 = satir.insertCell(column++);
						var td3 = satir.insertCell(column++);
						var td4 = satir.insertCell(column++);
						var td5 = satir.insertCell(column++);
						var td6 = satir.insertCell(column++);
						var td7 = satir.insertCell(column++);
						td1.innerHTML = order;
						td2.innerHTML = veri.il;
						td3.innerHTML = veri.ilçe;
						td4.innerHTML = veri.mahalle;
						td5.innerHTML = veri.cadde;
						td6.innerHTML = veri.sokak;
						td7.innerHTML = veri.no;
						order++;
					})	
				}
			});
		}
	});
});

$("#ilce").click(function(){
    ilce = document.getElementById("ilce").value;
	$.ajax({
		url:base_url + 'groupMahalle',
		type:"post",
		data: {il:il,ilce:ilce},
		dataType: 'json',
		success: function(response){
			var select = document.getElementById("mahalle");
			select.innerHTML = "";
			response.map((item) =>{
				var row = JSON.stringify(item.mahalle);
				var veri = JSON.parse(row);	
				var option = document.createElement("option");
				option.text = veri;
				option.value = veri;
				select.add(option);
			})

			$.ajax({
				url:base_url + 'getMahalle',
				type:"post",
				data: {il:il,ilce:ilce},
				dataType: 'json',
				success: function(response){
					var order = 0;
					var table = document.getElementById('tbb');
					table.innerHTML = "";
					response.map((item) => {
						var column = 0;
						var row = JSON.stringify(item);
						var veri = JSON.parse(row);
						var satir = table.insertRow(order);
						var td1 = satir.insertCell(column++);
						var td2 = satir.insertCell(column++);
						var td3 = satir.insertCell(column++);
						var td4 = satir.insertCell(column++);
						var td5 = satir.insertCell(column++);
						var td6 = satir.insertCell(column++);
						var td7 = satir.insertCell(column++);
						td1.innerHTML = order;
						td2.innerHTML = veri.il;
						td3.innerHTML = veri.ilçe;
						td4.innerHTML = veri.mahalle;
						td5.innerHTML = veri.cadde;
						td6.innerHTML = veri.sokak;
						td7.innerHTML = veri.no;
						order++;
					})	
				}
			});
		}
	});
});

$("#mahalle").click(function(){
    mahalle = document.getElementById("mahalle").value;
	$.ajax({
		url:base_url + 'groupCadde',
		type:"post",
		data: {il:il,ilce:ilce,mahalle:mahalle},
		dataType: 'json',
		success: function(response){
			var select = document.getElementById("cadde");
			select.innerHTML = "";
			response.map((item) =>{
				var row = JSON.stringify(item.cadde);
				var veri = JSON.parse(row);	
				var option = document.createElement("option");
				option.text = veri;
				option.value = veri;
				select.add(option);
			})

			$.ajax({
				url:base_url + 'getCadde',
				type:"post",
				data: {il:il,ilce:ilce,mahalle:mahalle},
				dataType: 'json',
				success: function(response){
					var order = 0;
					var table = document.getElementById('tbb');
					table.innerHTML = "";
					response.map((item) => {
						var column = 0;
						var row = JSON.stringify(item);
						var veri = JSON.parse(row);
						var satir = table.insertRow(order);
						var td1 = satir.insertCell(column++);
						var td2 = satir.insertCell(column++);
						var td3 = satir.insertCell(column++);
						var td4 = satir.insertCell(column++);
						var td5 = satir.insertCell(column++);
						var td6 = satir.insertCell(column++);
						var td7 = satir.insertCell(column++);
						td1.innerHTML = order;
						td2.innerHTML = veri.il;
						td3.innerHTML = veri.ilçe;
						td4.innerHTML = veri.mahalle;
						td5.innerHTML = veri.cadde;
						td6.innerHTML = veri.sokak;
						td7.innerHTML = veri.no;
						order++;
					})	
				}
			});
		}
	});
});

$("#cadde").click(function(){
    cadde = document.getElementById("cadde").value;
	$.ajax({
		url:base_url + 'groupSokak',
		type:"post",
		data: {il:il,ilce:ilce,mahalle:mahalle,cadde:cadde},
		dataType: 'json',
		success: function(response){
			var select = document.getElementById("sokak");
			select.innerHTML = "";
			response.map((item) =>{
				var row = JSON.stringify(item.sokak);
				var veri = JSON.parse(row);	
				var option = document.createElement("option");
				option.text = veri;
				option.value = veri;
				select.add(option);
			})

			$.ajax({
				url:base_url + 'getSokak',
				type:"post",
				data: {il:il,ilce:ilce,mahalle:mahalle,cadde:cadde},
				dataType: 'json',
				success: function(response){
					var order = 0;
					var table = document.getElementById('tbb');
					table.innerHTML = "";
					response.map((item) => {
						var column = 0;
						var row = JSON.stringify(item);
						var veri = JSON.parse(row);
						var satir = table.insertRow(order);
						var td1 = satir.insertCell(column++);
						var td2 = satir.insertCell(column++);
						var td3 = satir.insertCell(column++);
						var td4 = satir.insertCell(column++);
						var td5 = satir.insertCell(column++);
						var td6 = satir.insertCell(column++);
						var td7 = satir.insertCell(column++);
						td1.innerHTML = order;
						td2.innerHTML = veri.il;
						td3.innerHTML = veri.ilçe;
						td4.innerHTML = veri.mahalle;
						td5.innerHTML = veri.cadde;
						td6.innerHTML = veri.sokak;
						td7.innerHTML = veri.no;
						order++;
					})	
				}
			});
		}
	});
});


$("#sokak").click(function(){
    sokak = document.getElementById("sokak").value;
	$.ajax({
		url:base_url + 'groupNo',
		type:"post",
		data: {il:il,ilce:ilce,mahalle:mahalle,cadde:cadde,sokak:sokak},
		dataType: 'json',
		success: function(response){
			var select = document.getElementById("no");
			select.innerHTML = "";
			response.map((item) =>{
				var row = JSON.stringify(item.no);
				var veri = JSON.parse(row);	
				var option = document.createElement("option");
				option.text = veri;
				option.value = veri;
				select.add(option);
			})

			$.ajax({
				url:base_url + 'getNo',
				type:"post",
				data: {il:il,ilce:ilce,mahalle:mahalle,cadde:cadde,sokak:sokak},
				dataType: 'json',
				success: function(response){
					var order = 0;
					var table = document.getElementById('tbb');
					table.innerHTML = "";
					response.map((item) => {
						var column = 0;
						var row = JSON.stringify(item);
						var veri = JSON.parse(row);
						var satir = table.insertRow(order);
						var td1 = satir.insertCell(column++);
						var td2 = satir.insertCell(column++);
						var td3 = satir.insertCell(column++);
						var td4 = satir.insertCell(column++);
						var td5 = satir.insertCell(column++);
						var td6 = satir.insertCell(column++);
						var td7 = satir.insertCell(column++);
						td1.innerHTML = order;
						td2.innerHTML = veri.il;
						td3.innerHTML = veri.ilçe;
						td4.innerHTML = veri.mahalle;
						td5.innerHTML = veri.cadde;
						td6.innerHTML = veri.sokak;
						td7.innerHTML = veri.no;
						order++;
					})	
				}
			});
		}
	});
});

$("#no").click(function(){
	no = document.getElementById("no").value;
	$.ajax({
		url:base_url + 'getSon',
		type:"post",
		data: {il:il,ilce:ilce,mahalle:mahalle,cadde:cadde,sokak:sokak,no:no},
		dataType: 'json',
		success: function(response){
			alert(response);
			var order = 0;
			var table = document.getElementById('tbb');
			table.innerHTML = "";
			response.map((item) => {
				var column = 0;
				var row = JSON.stringify(item);
				var veri = JSON.parse(row);
				var satir = table.insertRow(order);
				var td1 = satir.insertCell(column++);
				var td2 = satir.insertCell(column++);
				var td3 = satir.insertCell(column++);
				var td4 = satir.insertCell(column++);
				var td5 = satir.insertCell(column++);
				var td6 = satir.insertCell(column++);
				var td7 = satir.insertCell(column++);
				td1.innerHTML = order;
				td2.innerHTML = veri.il;
				td3.innerHTML = veri.ilçe;
				td4.innerHTML = veri.mahalle;
				td5.innerHTML = veri.cadde;
				td6.innerHTML = veri.sokak;
				td7.innerHTML = veri.no;
				order++;
			})	
		}
	});
});




