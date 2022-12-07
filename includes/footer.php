<br><br><hr>
<div class="text-center footer mb-3">
    <a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile" target="_blank"><img style="height: 15vh; object-fit:cover;" src="images/LI-In-Bug.png" alt="LinkedIn profile"></a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>
    window.addEventListener('scroll', reveal);

function reveal() {
    var reveals = document.querySelectorAll('.reveal');

    for (var i = 0; i < reveals.length; ++i) {
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 100;

        if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add('active');
        }
        else {
            reveals[i].classList.remove('active');
        }
    }
}
//reference youtube video for explanation of reveal function
// https://www.youtube.com/watch?v=VplDlwLTR50

//moving throughout page using anchors
let navLinks = document.querySelectorAll('.anchor');
navLinks.forEach((item) =>{
    item.addEventListener("click",()=>{
        let section = document.getElementById(item.getAttribute("data-link"));
        let head = section.getElementsByClassName("sectionHead");
        head[0].scrollIntoView({
            behavior:"smooth",block:"end"});
    });
});

//highlighting anchor based on where on page you are
const sections = document.querySelectorAll('section');
const navlist = document.querySelectorAll('.anchorLinks ul li');
window.addEventListener('scroll', ()=>{
    let current = '';
    sections.forEach(section =>{
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= (sectionTop - sectionHeight/2)){
            current = section.getAttribute('id');

        }
    })
    navlist.forEach (li=>{
        li.classList.remove('active');
        if (li.classList.contains(current)){
             li.classList.add('active');
        }
    })
})
//https://www.youtube.com/watch?v=RsPWEmfOQdU
</script>
</body>
</html>