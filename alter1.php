<!DOCTYPE html>
<html>
<head>
    <script>
      function test(){
        var right=1;
        var a=document.getElementById("select1");
        var b=document.getElementById("select2");
        var c=document.getElementById("select3");
        var d=document.getElementById("new");
        var right=1;
        if(a.checked)done();
        if(b.checked){
              var pswd2=document.getElementById("new").value;
             // alert(pswd2);
                if(pswd2.length<8){
                alert("less length.Retry");
                right=0;
               d.value="";
                }   
                if(right==1){
                    var i=0;
                    var num=0;
                    var alpha=0;
                    var spe=0;
                    while(i<pswd2.length){
                        var n=pswd2.charCodeAt(i);
                        if(n>48&&n<57){
                            num++;
                        }
                        if(n>33&&n<47){
                            spe++;
                        }
                        i++;
                    }
                    if(num<3){
                        alert("digits less than 3.retry");
                        right=0;
                        d.value="";
                        return;
                    }
                    if(spe<1){
                        alert("atleast one special character.retry");
                        right=0;
                       d.value="";
                        return;
                    }
                    else{alert("Password okay");right=1;}
                    
                }
            if(right==1){done();}
                
        }
        
        if(c.checked){
            var email2=document.getElementById("new").value;
            if(email2.indexOf('.com')==-1){
            alert("invalid email");
            right2=0;
            //usr.value="";
            //pswd.value="";
           d.value="";
            return;
        }
        if(email2.indexOf('@')==-1){
            alert("invalid email");
            right2=0;
           // usr.value="";
            //pswd.value="";
            d.value="";
            return;
        }
         else{alert("email okay");right2=1;}
     
       
        if(right==1){
          done();
        }

      }
    }
       function done(){
        var add=document.createElement("button");
        alert(add);
        add.innerHTML="submit";
        var div1=document.getElementById("div1");
        div1.appendChild(add);
        add.onclick=function(){
            alert("sure to submit?");
        }
        /*add.setAttribute("type","button");
        add.setAttribute("value","submit");
        alert(add);*/
    }

        </script>
        <style> 
            form
            {
                
            }
        </style>
</head>
<body>
    <br><br><br><br>

 <form method="post" action="alter.php" > 
  username <input type="radio" name="change" value="1" id="select1" /><br />
  password <input type="radio" name="change" value="2" id="select2" /><br />
  email <input type="radio" name="change" value="3" id="select3"/><br />
  Enter new:
  <input type="text" name="new" id="new" />
  <input type="button" value="check" onclick="test()" />
  <div id="div1"></div>
 </form>

    </body>
</html>
