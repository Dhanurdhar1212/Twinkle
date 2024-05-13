var sho=1;
function funshow(){
    var id1 = document.getElementById('header');
    if(sho==1){
        id1.style.display='block';
        sho=0;
    }
    else{
        id1.style.display='none';
        sho=1;
    }
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});