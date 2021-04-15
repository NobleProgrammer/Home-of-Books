function stringReverse(text) {
  if (!text) {
    return '';
  }
  var reverse = '';
  for (var i = text.length - 1; i >= 0; i--) {
    reverse += text.charAt(i);
  }
  return reverse;
}

function showEmail(username , server){
  username = stringReverse(username);
  server = stringReverse(server);
  fullEmail = username + "@" + server;
  document.write("<a href= 'mailto:" + fullEmail + "'>");
  document.write(fullEmail);
  document.write("</a>");
}

function printSomething(){
  document.write("hello");
}
