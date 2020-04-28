/* 
seleccion de formularios
var formularios=document.getElementById("<idformulario>");
var formularios=document.forms["<idformulario>"];
var formularios=document.getElementsByTagName("form")[0];
var formularios=document.forms[0];

<elemento>.checked;
isNaN =  devulve tru si el DATO no es numerico / falso si lo es.
*/
var sistem = navigator.platform;
const url = location.href;
// console.log(url);
window.onload = function () {
  var elementoArrastrado;
  callConfigFetch();
  console.log("iniciando...");
  document.getElementById("central-form-btn").onclick = crear;
  document.getElementById("btn_form_buscador").onclick = buscar;
  document.getElementById("inlineFormCustomSelect").onchange = seleccion;
  searchById("central-form-inp").onblur = function () {
    if (searchById("central-form-inp").value == "")
      searchById("central-form-inp").setAttribute("class", "form-control");
  }
  searchById("central-form-inp").onfocus = function () {
    searchById("central-form-btn").removeAttribute("disabled");
    searchById("central-form-inp").setAttribute("class", "form-control");
    searchById("central-form-inp").value = "";

  }
  //lisdrag();
};
function seleccion(e) {
  var option = e.target.getElementsByTagName("option");
  document.getElementById("central-form-btn").innerText = e.target.value;
  document.getElementById("jumbotron-title").innerText = e.target.value + " Proyecto";
  searchById("central-form-inp").value = "";
  searchById("central-form-inp").setAttribute("class", "form-control");
  searchById("central-form-btn").setAttribute("disabled", "");

}
function buscar(e) {
  console.log(e.type);
  var inp = document.getElementById("inp_form_buscador");
  console.log(inp.value);
  location.assign("https://www.google.com/search?q=" + inp.value);
  //location.replace("https://www.google.com/search?q=" + inp.value);
  //location.replace("https://www.google.com");
  // location.hash = "no-back-button";
  // location.hash = "Again-No-back-button"; //chrome
  // window.onhashchange = function() {
  //   location.hash = "no-back-button";
  // };
  //e.preventDefault();

  return false;
};
function crear(e) {
  //is-invalid, is-valid
  var inp = searchById("central-form-inp");
  var valor = inp.value;
  var classe = inp.className;
  if (valor == "") {
    inp.setAttribute("class", "form-control is-invalid");
    // inp.focus();
    e.preventDefault();
  } else {
    searchById("central-form-btn").setAttribute("disabled", "");
    inp.setAttribute("class", "form-control is-valid");
    e.preventDefault();
  }
  //addAlert("alert alert-warning", "Alerta", "No creado");
  // var elemento = e.target
  // console.log(e);
  // console.log(e.type);
  // console.log(e.target);
  // //e.target.className="";
  // console.log(e.target.className);
  // setTimeout(function () {
  //   document.getElementById("alerta").innerHTML = "";ç
  // }, 4000);

};

function callConfigFetch() {
  fetch(`${url}src/config/config.json`).then(function (res) {
    if (res.ok) {
      return res.json();
    } else {
      throw "Error";
    }
  }).then(function (json) {
    document.getElementsByTagName("title")[0].text = json.title;
    var a = document.getElementsByClassName("navbar-brand")[0];
    a.text = json.naveTitle;
    a.setAttribute("href", url);
  }).catch(function (error) {
    console.error(error);
    addAlert("alert alert-danger", error, "Verificar fichero coniguración de inicio");
  });
};

function addAlert(classCss, label, mensaje) {
  document.getElementById("alerta").innerHTML += `<div class= "${classCss} alert-dismissible fade show" role = "alert" >
    <strong>${label}!!</strong> ${mensaje}..
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>`;

}

function lisdrag() {
  document.addEventListener("drag", function (event) {
    console.log("drag")

  }, false);

  document.addEventListener("dragstart", function (event) {
    // guarda información acerca del objeto arrastrado
    event.dataTransfer.setData('text/plain', null)
    // guarda una referéncia del elemento arrastrado
    elementoArrastrado = event.target;
    //console.log(elementoArrastrado + "dragstart");
    // cambia la opacidad del elemento a medio transparente
    console.log("dragstart")
    console.log(elementoArrastrado);
  }, false);
  document.addEventListener("dragend", function (event) {
    console.log("dragend");

    // reestablece el valor de la opacidad
  }, false);
  document.addEventListener("dragover", function (event) {
    // previene el comportamiento por defecto del elemento arrastrado
    event.preventDefault();
  }, false);
  document.addEventListener("dragenter", function (event) {
    // comprueba si el event.target es una zona de soltar  
    if (event.target.className == "zona-de-soltar") {
      // y di lo és cambia el color de fondo
      event.target.style.background = "purple";
    }

  }, false);
  document.addEventListener("dragleave", function (event) {

  }, false);
  document.addEventListener("drop", function (event) {
    // Si el elemento arrastrado es un link, este se abre en una nueve página.
    // Para que esto no pase hay que utilizar: 
    event.preventDefault();
    // comprueba si el event.target es una zona de soltar
    //console.log(event.target);
    console.log(event.target.className);
    if (event.target.className == "col-sm") {
      // reestablece el valor inicial para el background
      // elimina el elemento arrastrado del del elemento padre
      // y lo agrega al elemento de destino
      elementoArrastrado.parentNode.removeChild(elementoArrastrado);

      var padre = elementoArrastrado.parentNode;
      console.log(padre + " padre");
      document.getElementsByClassName("list-group")[0].appendChild(elementoArrastrado);
      //event.target.appendChild(elementoArrastrado);
    }

  }, false);

}

function searchById(params) {
  return document.getElementById(params);
}
function searchByClassName(params) {
  return document.getElementsByClassName(params);
}
function searchByName(params) {
  return document.getElementsByName(params);
}