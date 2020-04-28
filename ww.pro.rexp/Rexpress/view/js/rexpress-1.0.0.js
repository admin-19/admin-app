//actions.botton.homeView//

    $("button[name='delete']").click(function(){
    var pet="http://localhost:8080/Rexpress/controladores/pr_home_controller.php?acction=delete";
    var met="post";
    var valor=$(this).val();
    $.ajax({
         url:pet,
         type:met,
         data:{
            idusuario:valor
         },
         success:function(resp){
           console.log(resp);
          // location.reload();
          refrescar();
        },
        error: function (jqxhr,estado,error) {
            console.log(estado);
            console.log(error);
        },
        complete: function (jqxhr,estado) {
            console.log(estado);
        }
    }) 
    $("#messeg_delete_ok").addClass("alert alert-success");
    })
    //cerrarPopup.formView
    $("#cerrar-popup").click(function(e){
        e.preventDefault();
        var contpopup = $("#cont-popup-form");
        var popup = $("#popup-form");
        contpopup.removeClass( "active" )
        popup.removeClass("active");
    })
    //agregarPopup.formView
    $("#agregar-popup").click(function(e){
        e.preventDefault();
        var contpopup = $("#cont-popup-form");
        var popup = $("#popup-form");
        contpopup.addClass( "active" )
        popup.addClass("active");
    })

    
//Actualiza la página
function refrescar(){location.reload();}
//formView.addInput.
function addinput(){
    document.getElementById("inpt-surname").innerHTML="<input type='text'  name='apellido' id='' required='' placeholder='Surname User'><br>";
}
function addinputreppass(){
    document.getElementById("inpt-reppass").innerHTML="<input type='password'  name='' id='' required='' placeholder='Repeat'><br>";
}
function createbr(){
    return  document.createElement("br");
}

function alert_check(){
   
    document.getElementById("alert_check").innerHTML = "<div class='alert' id='alert'>Se guardaran Datos en las cookis del navegador </div><div class='remove' id='remove' onclick='remove_alert_check()'>x</div>";
    var valor=document.getElementById("check-login").getAttribute("value");
    console.log(valor);
}
function remove_alert_check(){
var alert=document.getElementById("alert");
var remove=document.getElementById("remove");
var padre_nodo=alert.parentNode;
padre_nodo.removeChild(remove);
padre_nodo.removeChild(alert);
}

function getFecha(){
var f=new Date();
var ano = f.getFullYear();
var mes = f.getMonth();
var dia = f.getDate();
var div= document.getElementsByClassName("foot-fecha");
var x=0
for (x ; x  < div.length ; x++){
    div[x].innerText= dia+"/"+mes+"/"+ano;
}   
}



function $rxp(selector){
    var elemento = document.querySelector(selector);
    return{
        getValorAtributo: function(name){
       return elemento.getAttribute(name);
       },
       createForm: function(url,metodo){
       var form= document.createElement("form");
       form.setAttribute("id","rex_form");
       form.setAttribute("action",url);
       form.setAttribute("method",metodo);
       var inemail=document.createElement("input");
       inemail.setAttribute("type","emil");
       var inpass=document.createElement("input");
       inpass.setAttribute("type","password");
       var inpsubm=document.createElement("input");
       inpsubm.setAttribute("type","submit");
       elemento.appendChild(form);
       form.appendChild(inemail);
       form.appendChild(createbr());
       form.appendChild(inpass);
       form.appendChild(createbr());
       form.appendChild(inpsubm);
      
       },
       getId(){
        return elemento.id;
       },
       setId(newId){
        return elemento.id=newId;
       }
    }
}
//AjAX FUNCTION//
function buttonActionAjax(value) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        console.log("status: "+this.status);
        console.log("readyState: "+this.readyState);
        if (this.readyState == 4 && this.status == 200) {
            var obj = JSON.parse(this.responseText);
            // document.getElementById("txtHint").innerHTML = obj.main;
            $rxp("form-login").createForm(obj.url,obj.metodo);
        }
        if (this.readyState == 4 && this.status == 404) {
            document.getElementById("txtHint").innerHTML = this.responseText;
       return ;
        }
    };
    xhttp.open("GET", "resources.jso", true);
    xhttp.send();
    
}
/**
 * boostrap error
 * muesta un box de error por pantalla
 */
function $rxpError(selector,error,tipo){
    $(selector).wrapInner( 
    "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>"+tipo+"! </strong>"+error+"<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>"
    );
}



