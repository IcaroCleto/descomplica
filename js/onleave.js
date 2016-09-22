
$('html').mouseleave(function() {
a();
$( "html" ).unbind();
});

function a()
{
    var lightbox = document.getElementById("lightbox"),
        sombra = document.createElement("div");

    sombra.style.width =  window.innerWidth + 'px';
    sombra.style.height = window.innerHeight + 'px';
    sombra.className = 'sombra';

    sombra.onclick = function(){
        document.body.removeChild(this);   
        lightbox.style.visibility = 'hidden';
    }

    document.body.appendChild(sombra);

    lightbox.style.visibility = 'visible';
    lightbox.style.top = window.innerHeight/2 - 50 + 'px';
    lightbox.style.left = window.innerWidth/2 - 100 + 'px';
    return false;

=======
$('html').mouseleave(function() {
a();
$( "html" ).unbind();
});

function a()
{
    var lightbox = document.getElementById("lightbox"),
        dimmer = document.createElement("div");

    dimmer.style.width =  window.innerWidth + 'px';
    dimmer.style.height = window.innerHeight + 'px';
    dimmer.className = 'dimmer';

    dimmer.onclick = function(){
        document.body.removeChild(this);   
        lightbox.style.visibility = 'hidden';
    }

    document.body.appendChild(dimmer);

    lightbox.style.visibility = 'visible';
    lightbox.style.top = window.innerHeight/2 - 50 + 'px';
    lightbox.style.left = window.innerWidth/2 - 100 + 'px';
    return false;

>>>>>>> f9d91c725b0d8094ba69f330c039ed722739e047
}