
window.onload=function(){
    
    console.log(navigator.appCodeName);
    console.log(navigator.userAgent);
    console.log(navigator.languages);
    console.log(navigator.appName);
    console.log(navigator.appVersion);
    console.log(navigator.cookieEnabled);
    getFecha();
    
}
window.onerror=function (msg, url, lineNo, columnNo, error) {
const rexperror=".rexp-error";
$rxpError(rexperror,error,"window.onerror");
}





