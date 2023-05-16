const bars = document.querySelector('#bars');
const navbarLink = document.querySelector('.link');

// case bars clicked it will open sidebar
document.addEventListener('click', () => {
    navbarLink.classList.toggle('active');
})

// case non sidebar click it will close
document.addEventListener('click', function(e) {
    if(!bars.contains(e.target) && !navbarLink.contains(e.target)) {
        navbarLink.classList.remove('active');
    }
})