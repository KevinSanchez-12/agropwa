function calculo(){
    var num1=Number(document.getElementById('n1').value);
    var num2=Number(document.getElementById('n2').value);
    var num3=Number(document.getElementById('n3').value);
    var num4=Number(document.getElementById('n4').value);
	var num5=Number(document.getElementById('n5').value);
    var calculo= (num1*1.20)+(num2*1.50)+(num3*1.20)+(num4*1.30)+(num5*1.40);
	document.getElementById('subtotal').value=calculo.toFixed(2);
	var convert= calculo*0.10;
	var sumatotal=calculo+convert;
	document.getElementById('igv').value=convert.toFixed(2);
	document.getElementById('total').value=calcular;
}
function limpiar(){
	document.getElementById("n1").value = "";
	document.getElementById("n2").value = "";
	document.getElementById("n3").value = "";
	document.getElementById("n4").value = "";
	document.getElementById("n5").value = "";
	document.getElementById("n6").value = "";
	document.getElementById("subtotal").value = "";
	document.getElementById("igv").value = "";
	document.getElementById("total").value = "";
}