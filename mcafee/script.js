$( document ).ready(function() {	
  setTimeout(function() {
    $("#win-2").css("display", "block");
  }, 2000);
  setTimeout(function() {
    $("#cnt-1").html("143");
  }, 2600);
  setTimeout(function() {
    $("#path-1").html("C:\\Windows\\System32\\csrss.exe");
  }, 3000);
  setTimeout(function() {
    $("#path-1").html("C:\\Windows\\System32\\sihost.exe");
  }, 3700);
  setTimeout(function() {
    $("#cnt-1").html("218");
  }, 4000);
  setTimeout(function() {
    $("#path-1").html("C:\\Program Files\\Windows Defender\\MSASCuiL.exe");
  }, 4600);
  setTimeout(function() {
    $("#cnt-1").html("398");
    $("#cnt-2").css("color", "#dd0000");
    $("#cnt-2").html("1");
    $("#cnt-4").css("color", "#dd0000");
    $("#cnt-4").html("1");
    $("#win-2-line-red").css("display", "block");
    $('#sound')[0].play();
  }, 5000);
  setTimeout(function() {
    $("#vir-1").css("bottom","220px");
  }, 5100);
  setTimeout(function() {
    $("#path-2").html("C:\\Windows\\System32\\SgrmBroker.exe");
  }, 5200);
  setTimeout(function() {
    $("#path-2").html("SEMgrSvc");
  }, 5800);
  setTimeout(function() {
    $("#cnt-1").html("538"); 
  }, 6000);
  setTimeout(function() {
    $("#path-2").html("NcaSvc");
  }, 6700);
  setTimeout(function() {
    $("#cnt-1").html("791");
    $("#cnt-2").html("2");
    $("#cnt-4").html("2");
  }, 7000);
  setTimeout(function() {
    $("#vir-1").css("bottom", "440px");
    $("#vir-1").css("opacity", "0");
    $("#vir2").css("bottom", "220px");
    $('#sound')[0].play();
  }, 7100);
  setTimeout(function() {
    $("#path-2").html("C:\\Windows\\System32\\DDFs");
  }, 7500);
  setTimeout(function() {
    $("#cnt-1").html("1021");
    $("#cnt-2").html("3");
    $("#cnt-4").html("3");
  }, 8000);
  setTimeout(function() {
    $("#vir2").css("bottom", "440px");
    $("#vir2").css("opacity", "0");
    $("#vir3").css("bottom", "220px");
    $('#sound')[0].play();
  }, 8100);
  setTimeout(function() {
    $("#path-2").html("C:\\Windows\\System32\\Recovery");
  }, 8300);
  setTimeout(function() {
    $("#cnt-1").html("1273");
  }, 9000);
  setTimeout(function() {
    $("#path-2").html("C:\\Windows\\System32\\DriverState");
  }, 9200);
  setTimeout(function() {
    $("#path-2").innerHTML = "tempRoot\\system32\\RIVERS\\bowser.sys";
  }, 9700);
  setTimeout(function() {
    $("#cnt-1").html("1589");
    $("#cnt-2").html("4");
    $("#cnt-4").html("4");
  }, 10000);
  setTimeout(function() {
    $("#vir3").css("bottom", "440px");
    $("#vir3").css("opacity", "0");
    $("#vir4").css("bottom", "220px");
    $('#sound')[0].play();
  }, 10100);
  setTimeout(function() {
    $("#path-2").html("C:\\Windows\\System32\\WinBioDatabase");
  }, 10500);
  setTimeout(function() {
    $("#cnt-1").html("1723");
  }, 11000);
  setTimeout(function() {
    $("#path-2").html("vmickvpexchange");
  }, 11600);
  setTimeout(function() {
    $("#cnt-1").html("1916");
  }, 12000);
  setTimeout(function() {
    $("#path-2").html("HidBtn");
  }, 12300);
  setTimeout(function() {
    $("#cnt-1").html("2038");
    $("#cnt-2").html("5");
    $("#cnt-4").html("5");
  }, 13000);
  setTimeout(function() {
    $("#vir4").css("bottom", "440px");
    $("#vir4").css("opacity", "0");
    $("#vir-5").css("bottom", "220px");
    $("#sound")[0].play();
  }, 13100);
  setTimeout(function() {
    $("#path-2").html("WdNisDrv");
  }, 13200);
  setTimeout(function() {
    $("#path-2").html("rdbss");
  }, 13900);
  setTimeout(function() {
    $("#path-2").html("C:\\Windows\\System32\\dot3svc.dll");
  }, 14700);
  setTimeout(function() {
    $("#path-2").html("UASPStor");
  }, 15500);
  setTimeout(function() {
    $("#cnt-1").html("2038");
    $("#vir-5").css("opacity", "0");
    $("#work").html("Done");
    $("#txt-1").html("");
    $("#path-2").html("");
    $("#win-3").css("display", "block");
  }, 16000);

  function showmess() {
    $("#mess").css("display", "block");
  }

  /*var popit = true;
  window.onbeforeunload = function(index) {
    if(popit == true) {
      popit = false;
      return "Wait! Your antivirus software requires an update. To remove all detected viruses, you must update the antivirus software.";
    }
  }*/
});