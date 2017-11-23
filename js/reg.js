function Test(){
	var Name = document.getElementById("Name");
	var Surname = document.getElementById("Surname");
	var Pername = document.getElementById("Pername");
	var Login = document.getElementById("Login");
	var Password1 = document.getElementById("Password1");
	var Password2 = document.getElementById("Password2");
	var Phone = document.getElementById("Phone");
	var Email = document.getElementById("Email");
	var Ask = document.getElementById("Ask");
	var Answer = document.getElementById("Answer");
	var Full = true;

	if(Name.value == ""){
		document.getElementById("Name_img_false").style.display = "inline";
		document.getElementById("Name_img_true").style.display = "none";
		Full = false;
	}
	if(Surname.value == ""){
		document.getElementById("Surname_img_false").style.display = "inline";
		document.getElementById("Surname_img_true").style.display = "none";
		Full = false;
	}
	if(Pername.value == ""){
		document.getElementById("Pername_img_false").style.display = "inline";
		document.getElementById("Pername_img_true").style.display = "none";
		Full = false;
	}
	if(Login.value == ""){
		document.getElementById("Login_img_false").style.display = "inline";
		document.getElementById("Login_img_true").style.display = "none";
		Full = false;
	}
	if(Password1.value == ""){
		document.getElementById("Password1_img_false").style.display = "inline";
		document.getElementById("Password1_img_true").style.display = "none";
		Full = false;
	}
	if(Password2.value == ""){
		document.getElementById("Password2_img_false").style.display = "inline";
		document.getElementById("Password2_img_true").style.display = "none";
		Full = false;
	}
	if(Phone.value == ""){
		document.getElementById("Phone_img_false").style.display = "inline";
		document.getElementById("Phone_img_true").style.display = "none";
		Full = false;
	}
	if(Email.value == ""){
		document.getElementById("Email_img_false").style.display = "inline";
		document.getElementById("Email_img_true").style.display = "none";
		Full = false;
	}
	if(Ask.value == "Выберите вопрос"){
		document.getElementById("Ask_img_false").style.display = "inline";
		document.getElementById("Ask_img_true").style.display = "none";
		Full = false;
	}
	if(Answer.value == ""){
		document.getElementById("Answer_img_false").style.display = "inline";
		document.getElementById("Answer_img_true").style.display = "none";
		Full = false;
	}
	if(Full)
		return true;
	else
		return false;
}
function TestPassword(){
			var password1 = document.getElementById("Password1");
			var password2 = document.getElementById("Password2");

			if(password1.value != password2.value){
				document.getElementById("Password2_img_false").style.display = "inline";
				document.getElementById("Password2_img_true").style.display = "none";
				return false;
			}
			else if(password1.value == password2.value && password2.value != ""){
				document.getElementById("Password2_img_false").style.display = "none";
				document.getElementById("Password2_img_true").style.display = "inline";
				return true;
			}
		}
function TestEmail(){
	var email = document.getElementById("Email");
	var p = /^[a-z0-9_\.\-]+@([a-z0-9\-]+\.)+[a-z]{2,6}$/i;
	var Str = email.value;
	
	if (!p.test(Str)) {
				document.getElementById("Email_img_false").style.display = "inline";
		document.getElementById("Email_img_true").style.display = "none";
				return false;
			}
	else if(p.test(Str) && email.value != ""){
		document.getElementById("Email_img_false").style.display = "none";
		document.getElementById("Email_img_true").style.display = "inline";
		return true;
		}
}
function ValidPhone() {
	var re = /^\+\d{2}\(\d{3}\)\d{3}-\d{2}-\d{2}$/;
    //var re = /^\d[\d\(\)\ -]{4,14}\d$/;
    var myPhone = document.getElementById('Phone').value;
    var valid = re.test(myPhone);
    if (valid) 
	{
		document.getElementById("Phone_img_false").style.display = "none";
		document.getElementById("Phone_img_true").style.display = "inline";
		return true;
	}
    else 
	{
		document.getElementById("Phone_img_false").style.display = "inline";
		document.getElementById("Phone_img_true").style.display = "none";
		return false;
	}
}
function TestFull(){
	var probeg = document.getElementById("probeg");
	var ob_dvigatel = document.getElementById("ob_dvigatel");
	var quantity_door = document.getElementById("quantity_door");
	var col = document.getElementById("col");
	var complect = document.getElementById("complect");
	var dop = document.getElementById("dop");
	var dop = document.getElementById("cost");
	var Full = true;

	if(probeg.value == ""){
		Full = false;
	}
	if(ob_dvigatel.value == ""){
		Full = false;
	}
	if(quantity_door.value == ""){
		Full = false;
	}
	if(col.value == ""){
		Full = false;
	}
	if(complect.value == ""){
		Full = false;
	}
	if(dop.value == ""){
		Full = false;
	}
	if(cost.value == ""){
		Full = false;
	}
	if(Full)
		return true;
	else {
		alert("Заполните пустые поля");
		return false;
	}
}
function TestFullNews(){
	var titnew = document.getElementById("titnew");
	var textnew = document.getElementById("textnew");
	var Full = true;

	if(titnew.value == ""){
		Full = false;
	}
	if(textnew.value == ""){
		Full = false;
	}
	if(Full)
		return true;
	else {
		alert("Заполните пустые поля");
		return false;
	}
}