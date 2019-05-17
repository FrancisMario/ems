/*
* 
* 
*/

document.addEventListener('click', function (event) {
  if ( event.target.classList.contains( 'a' ) ) {
    
    // console.log("something clicked..!");
    var id = event.target.getAttribute("id");
    
    switch (id) {
      case "client-list":
         getPage("cl");
       break;

       case "add_client":
         getPage("ac");
       break;

       case "estates_list":
         getPage("el");
       break;

       case "rent_records":
         getPage("rr");
       break;
       
       case "manage_admin_activities":
         getPage("maa");
       break;

       case "personnel_list":
       console.log("Personel list clicked");
       break;

   
     default:
       break;
   }
  }
  else if (event.target.classList.contains( 'btn' )){

    var id = event.target.getAttribute("id");
  
    switch (id) {
      // case "add_dimension":
      //   add_to_db('estate');
      //   append_element(' <div class="form-group col-md-6"> <label>Dimension</label><input type="number" class="form-control" placeholder="Enter text"></div><div class="form-group col-md-4"><label>Number of plots</label><input type="number" class="form-control" placeholder="Enter Number of plots"></div>','dimension_holder');
      //   break;
        
        case "add_estate":
       var estate_name = document.getElementById("estate_name").value;
       var estate_location = document.getElementById("estate_location").value;
       var dimension_X = document.getElementById("dimension-X").value;
       var dimension_Y = document.getElementById("dimension-Y").value;
       var number_of_plots = document.getElementById("number_of_plots").value;
        console.error("Adding");
        if (estate_name == "" || estate_location == "" || dimension_X == "" || dimension_Y == "" || number_of_plots == "") {
          var node = document.getElementById("modal-error"); 
          var element = '<div id="report" class="report"><div class="alert alert-danger"><strong>Oh snap!</strong> Fill things up and try submitting again.</div></div>';
          
          var div = document.createElement("div");
          div.setAttribute("id", "div");                 // Create a <li> node
          node.appendChild(div);
          document.getElementById("div").innerHTML = element;        // Create a text node
          
          setTimeout(function(){
            $("#report").remove();
            console.log("removing");
        },5000);
          console.log("null error");
       } else {
         var data = "?estate_name="+estate_name+"&estate_location="+estate_location+"&dimension_X="+dimension_X+"&dimension_Y="+dimension_Y+"&number_of_plots="+number_of_plots;
         var file = "add_estate"
         makeRequest(file,data);
        }

        break;
    
      default:
      console.log("Button Clicked dd");
        break;
    }
  }
}, false);


// This code makes sure that all browsers are accounted for with the httprequest
var XMLHttpFactories = [
  function () {return new XMLHttpRequest()},
  function () {return new ActiveXObject("Msxml3.XMLHTTP")},
  function () {return new ActiveXObject("Msxml2.XMLHTTP.6.0")},
  function () {return new ActiveXObject("Msxml2.XMLHTTP.3.0")},
  function () {return new ActiveXObject("Msxml2.XMLHTTP")},
  function () {return new ActiveXObject("Microsoft.XMLHTTP")}
];

function createXMLHTTPObject() {
  var xmlhttp = false;
  for (var i=0;i<XMLHttpFactories.length;i++) {
      try {
          xmlhttp = XMLHttpFactories[i]();
      }
      catch (e) {
          continue;
      }
      break;
  }
  return xmlhttp;
}






// Page Getter
function getPage(name) {

  httpRequest = httpRequest = createXMLHTTPObject();
  console.log("getting page");
if (!httpRequest) {
  alert('Giving up :( Cannot create an XMLHTTP instance, Contact Admin for help');
}

httpRequest.open('GET', 'backend/getPage.php?req='+name);
httpRequest.send();
httpRequest.addEventListener("load", function (){
  if (httpRequest.readyState === XMLHttpRequest.DONE) {
    if (httpRequest.status === 200) {
      if(httpRequest.responseText){
        document.getElementById("stage").innerHTML = httpRequest.responseText;
      }
    } else {
      alert('There was a problem with the request.');
      alert(httpRequest.responseText);
    }
  } else{
    console.log(httpRequest.readyState+" = "+XMLHttpRequest.DONE);
    var node = document.getElementById("stage").childNodes[0];
    node.replaceChild(httpRequest.responseText, node.childNodes[0]);
  }
});
console.log("done 1");
}



// Element Appender
function append_element(name) {
  httpRequest = httpRequest = createXMLHTTPObject();
  console.log("appending elements");
if (!httpRequest) {
  alert('Giving up :( Cannot create an XMLHTTP instance, Contact Admin for help');
}

httpRequest.open('GET', 'backend/getPage.php?req='+name);
httpRequest.send();
httpRequest.addEventListener("load", function (){
  if (httpRequest.readyState === XMLHttpRequest.DONE) {
    if (httpRequest.status === 200) {
      if(httpRequest.responseText){
        document.getElementById("stage").innerHTML = httpRequest.responseText;
      }
    } else {
      alert('There was a problem with the request.');
      alert(httpRequest.responseText);
    }
  } else{
    console.log(httpRequest.readyState+" = "+XMLHttpRequest.DONE);
    var node = document.getElementById("stage").childNodes[0];
    node.replaceChild(httpRequest.responseText, node.childNodes[0]);
  }
});
}










/*
*This code makes request to the server, it adds data to the database asynchronically
*
*/
function makeRequest(file,data) {

  httpRequest = httpRequest = createXMLHTTPObject();
  console.log("making request....");


if (!httpRequest) {
  alert('Giving up :( Cannot create an XMLHTTP instance, Contact Admin for help. Error message: XMlHtppreqERROR');
}

httpRequest.open('GET', 'backend/'+file+'.php'+data);
httpRequest.send();
httpRequest.addEventListener("load", function (){
  if (httpRequest.readyState === XMLHttpRequest.DONE) {
    if (httpRequest.status === 200) {
      if(httpRequest.responseText){
        console.log(httpRequest.responseText);
          
          eventFire(document.getElementById('close'), 'click');
          
        if (httpRequest.responseText == "200") {
        console.log(httpRequest.responseText);
        eventFire(document.getElementById('close'), 'click');
        }
        
      }
    } else {
      alert('There was a problem with the request.');
      alert(httpRequest.responseText);
    }
  } else{
    document.location.reload();
    document.getElementById("estates_list").click();
  }
});
}

// Click Stimulator
function eventFire(el, etype){
  if (el.fireEvent) {
    el.fireEvent('on' + etype);
  } else {
    var evObj = document.createEvent('Events');
    evObj.initEvent(etype, true, false);
    el.dispatchEvent(evObj);
  }
}