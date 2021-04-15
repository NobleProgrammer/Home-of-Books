
var previous = 0;
function slideMove(current){
if(previous != current && previous != 0) {
document.getElementById("big"+previous).style.display = "none";
document.getElementById("n"+previous).style.display = "none";
document.getElementById("d"+previous).style.display = "none";
} 
document.getElementById("big"+current).style.display = "block";
document.getElementById("n"+current).style.display = "block";
document.getElementById("d"+current).style.display = "block";

previous = current;


scene();
};
/*function scene(){
  var x = document.getElementById("wb");
  console.log(x);
  var link = document.createElement('link');  
           link.rel = 'stylesheet';  
           link.type = 'text/css'; 
           link.href = 'includes/scene.css';  
           document.getElementsByTagName( "head" )[0].appendChild(link);
}*/

function next() {


document.getElementById("big"+previous).style.display = "none";
document.getElementById("n"+previous).style.display = "none";
document.getElementById("d"+previous).style.display = "none";

var next = previous + 1;

if (next == 0) next++;
if(next == 11) next = 1;

document.getElementById("big"+next).style.display = "block";
document.getElementById("n"+next).style.display = "block";
document.getElementById("d"+next).style.display = "block";
previous = next;

}

function back() {

document.getElementById("big"+previous).style.display = "none";
document.getElementById("n"+previous).style.display = "none";
document.getElementById("d"+previous).style.display = "none";
var next = previous - 1;
if (next == 0) next = 10;

document.getElementById("big"+next).style.display = "block";
document.getElementById("n"+next).style.display = "block";
document.getElementById("d"+next).style.display = "block";

previous = next;
}
