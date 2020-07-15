const loader = document.querySelector(".loader-bg");
function loadLoader (){
    console.log(loader);
    loader.classList.toggle("loader-bg-rm")
}

setTimeout(loadLoader, 2000);