const open = document.getElementById("changeProfile");
const close = document.getElementById("close");
const div = document.getElementById("Requirmentscontainer");
var check ="";
open.onclick = function ()
{
  div.style.display="block";
}

close.onclick = function ()
{
  div.style.display="none";
}