/*=============== SEARCH ===============*/
const searchButton = document.getElementById('search-button'),
    searchClose = document.getElementById('search__close'),
    searchContent = document.getElementById('search-content')

if (searchButton) {
    searchButton.addEventListener('click', () => {
        searchContent.classList.add('show-search')
    })
}

if (searchClose) {
    searchClose.addEventListener('click', () => {
        searchContent.classList.remove('show-search')
    })
}

/*=============== LOGIN ===============*/
const loginButton = document.getElementById('login-button'),
    loginClose = document.getElementById('login-close'),
    loginContent = document.getElementById('login-content')

if (loginButton) {
    loginButton.addEventListener('click', () => {
        loginContent.classList.add('show-login')
    })
}

if (loginClose) {
    loginClose.addEventListener('click', () => {
        loginContent.classList.remove('show-login')
    })
}


/*=============== ADD SHADOW HEADER ===============*/
const shadowHeader = () => {
    const header = document.getElementById('header')
    this.scrollY >= 50 ? header.classList.add.add('shadow-header') :
        header.classList.remove('shadow-header')
}
window.addEventListener('scroll', shadowHeader)

/*=============== HOME SWIPER ===============*/

let swiperHome = new Swiper('.home__swiper', {

        loop: true,
        spaceBetween: -24,
        grabCursor: true,
        slidesPerView: 'auto',
        centeredSlides: 'auto',

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            1220: { spaceBetween: -32 },
        }
    })
    /*=============== FEATURED SWIPER ===============*/
let swiperFeatured = new Swiper('.featured__swiper', {

    loop: true,
    spaceBetween: 16,
    grabCursor: true,
    slidesPerView: 'auto',
    centeredSlides: 'auto',

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1150: {

            slidesPerView: 4,
            centeredSlides: false,
        },
    }
})

/*=============== NEW SWIPER ===============*/

let swiperNew = new Swiper('.new__swiper', {

    loop: true,
    spaceBetween: 16,
    slidesPerView: 'auto',

    breakpoints: {
        1150: {
            slidesPerView: 3,

        },
    }
})

/*=============== TESTIMONIAL SWIPER ===============*/
function showSignup() {
    document.getElementById('login-content').classList.remove('show-login');
    document.getElementById('signup').classList.add('show-signup');
}

function showLogin() {
    document.getElementById('signup').classList.remove('show-signup');
    document.getElementById('login-content').classList.add('show-login');
}

function hideLogin() {
    document.getElementById('login-content').classList.remove('show-login');
}

function hideSignup() {
    document.getElementById('signup').classList.remove('show-signup');
}


/*=============== SHOW SCROLL UP ===============*/

function displaySignInForm() {
    loginContent.classList.add('show-login');
    // Set the next display after 15 minutes
    setTimeout(displaySignInForm, 15 * 60 * 1000); // 15 minutes in milliseconds
}

// Display the form for the first time after 3 seconds
setTimeout(displaySignInForm, 3000);

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/


/*=============== DARK LIGHT THEME ===============*/



/*=============== SCROLL REVEAL ANIMATION ===============*/
const menuIcon = document.getElementById('menu-icon');
const navbar = document.querySelector('.navbar');

menuIcon.addEventListener('click', () => {
    navbar.classList.toggle('active');
});

window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    header.classList.toggle('sticky', window.scrollY > 0);
});