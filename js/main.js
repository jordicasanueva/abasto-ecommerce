/* Logo color animado */
var d = new Date();
var time = d.getHours();
var div=document.getElementById('header');
if (time < 12) 
{
   div.style.backgroundImage  ="url('morning image')";
}
if (time >= 12 && time < 3) 
{
    div.style.backgroundImage  ="url('afternoon image')";
}
if (time > 3) 
{
   div.style.backgroundImage  ="url('http://localhost:8888/abasto/wp-content/themes/abasto/img/logo-abasto-seri.png')";
}