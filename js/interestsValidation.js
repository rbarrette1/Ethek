var count = 0;	
var falseCount = 0;

					
function validateForm() {			
		//document.getElementById('label1div').style.display = 'block';	
					
					
				
	var p = document.getElementsByName("platform[]");
	var prev = document.getElementsByName("previous[]");
	var pref = document.getElementsByName("prefrence[]");
	var feat = document.getElementsByName("features[]");
	var stor = document.getElementsByName("storage[]");
	var amo = document.getElementsByName("amount[]");
	var use = document.getElementsByName("use");
	var where = document.getElementsByName("where");

	var age = document.getElementById("age").value;
	var battery = document.getElementById("battery").value;
	var budget = document.getElementById("budget").value;


	//for(i=0;i<6;i++){
	//	var div = 'label'+i+'div';
//	}

	var div1 = 'label1div';
	var div2 = 'label2div';
	var div3 = 'label3div';
	var div4 = 'label4div';
	var div5 = 'label5div';
	var div6 = 'label6div';
	var div8 = 'radio1';
	var div9 = 'radio2';
	var div10 = 'drop1';
	var div11 = 'drop2';
	var div12 = 'drop3';



	alert('ITWORKS!');

	check(p, div1);
	check(prev,div2);
	check(pref,div3);
	check(feat,div4);
	check(stor,div5);
	check(amo,div6);
 
	checkRadio(use,div8);
	checkRadio(where,div9);
 
	checkDrop(age,div10);
	checkDrop(battery,div11);
	checkDrop(where,div12);
 
	alert(age);
 
}
			
		function checkRadio(checkR, radioLabel){
			var chosen = null;
			
			for (var r = 0; r <checkR.length; r++) {
				if (checkR[r].checked) {
					document.getElementById(radioLabel).style.display = 'block';
					break;
				}
			}
			if(chosen == null){
				//alert(radioLabel);
			document.getElementById(radioLabel).style.display = 'block';
			}
			else{document.getElementById(radioLabel).style.display = 'none';}
		}	
			
			
			
		function check(toCheck, divLabel){
			var okay = false;
					count++;
				
			
				for(var i = 0;i<toCheck.length;i++) {
					if (toCheck[i].checked) {
					okay=true;
					document.getElementById(divLabel).style.display = 'none';	
						break;
						}		
			}
				if(!okay){
					//var item = document.getElementsByName(toCheck);
					document.getElementById(divLabel).style.display = 'block';	
					falseCount++;
				}
				
				if(falseCount>0){
				//setError(toCheck);
				return;
				}
					
			}
			
		function checkDrop(dcheck, divLabel){
			var dchosen= null;
			
					if(!dcheck){
						document.getElementById(divLabel).style.display = 'block';
						
					}

						//dchosen = dcheck[d].value;
						
					else	document.getElementById(divLabel).style.display = 'none';
			}
				
				
		
		
		
		
		
		
		
		
		
		
		
		
		