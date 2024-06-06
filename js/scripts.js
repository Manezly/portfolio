const homepage_swiper = () => {
    const project_swiper = new Swiper(".project_swiper", {
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 100,
        pagination: {
            el: ".swiper_fraction",
            type: "fraction",
        },
        navigation: {
            nextEl: ".project_swiper_next",
            prevEl: ".project_swiper_prev",
        },
        on: {
            slideChange: () => {
                const activeSlide = project_swiper.slides[project_swiper.realIndex];
                const activeSlideTitle = activeSlide.getAttribute('data-title');
                document.getElementById('slide_title').textContent = activeSlideTitle;

                const num_denom = document.querySelectorAll("body > main > section.container.projects > div.project_swiper_bottom > div > div.swiper_fraction.swiper-pagination-fraction.swiper-pagination-horizontal > span");
                num_denom.forEach(span => {
                    if (span.textContent.length < 2) {
                        span.textContent = '0' + span.textContent;
                    }
                });
            }
        },
        breakpoints: {
            768: {
                spaceBetween: 150, 
            },
            1024: {
                spaceBetween: 200, 
            },
            1900: {
                spaceBetween: 600,
            },
        },
    });
    const activeSlide = project_swiper.slides[project_swiper.realIndex];
    const activeSlideTitle = activeSlide.getAttribute('data-title');
    document.getElementById('slide_title').textContent = activeSlideTitle;

    const num_denom = document.querySelectorAll("body > main > section.container.projects > div.project_swiper_bottom > div > div.swiper_fraction.swiper-pagination-fraction.swiper-pagination-horizontal > span");
    num_denom.forEach(span => {
        if (span.textContent.length < 2) {
            span.textContent = '0' + span.textContent;
        }
    });
}



const project_hover_button = () => {
    const project = document.querySelector('.projects');
   
    if (!project) {
        return;
    }
    const containers = document.querySelectorAll('.project_swiper > .swiper-wrapper > .swiper-slide');
    containers.forEach((container) => {
        const buttonContainer = container.querySelector('.connected_button');
        const containerWidth = buttonContainer.offsetWidth;
        const containerHeight = buttonContainer.offsetHeight;
        container.addEventListener('mousemove', (e) => {
            const containerRect = container.getBoundingClientRect();
            const X = e.clientX - containerRect.left - containerWidth/2; 
            const Y = e.clientY - containerRect.top - containerHeight/2; 
            buttonContainer.style.left = `${X}px`;
            buttonContainer.style.top = `${Y}px`;
        });
    });
};

const theme_toggle = () => {
    const header = document.querySelector('.header');
    if (!header) {
        return;
    }

    const toggle_buttons = document.querySelectorAll('#theme_toggle');
    const theme = localStorage.getItem('theme');
    theme && document.body.classList.add(theme);

    const handle_theme = () => {
        document.body.classList.toggle('dark_mode');
        if (document.body.classList.contains('dark_mode')) {
            localStorage.setItem('theme', 'dark_mode');
        } else {
            localStorage.removeItem('theme');
        }
    }
    
    toggle_buttons.forEach((button) => 
        button.addEventListener('click', handle_theme)
    );
}

const adjust_slider_speed = () => {
    const slider_container = document.querySelector('.inf_slider_container');
    const slider = document.querySelectorAll('.inf_slider');
    if (!slider_container) {
        return;
    }

    const shape = slider_container.getBoundingClientRect();
    const distanceFromTop = shape.top;
    const view_port_height = window.innerHeight;

    if (distanceFromTop < view_port_height / 2) {
        slider.forEach((e) => {
            e.classList.add('slider_slow');
        });
    } else {
        slider.forEach((e) => {
            e.classList.remove('slider_slow');
        });
    }
}

const slide_turbulence_filter = () => {
    const swiper_wraper = document.querySelector('.project_swiper .swiper-wrapper');
    const swiperSlides = swiper_wraper.getElementsByClassName('swiper-slide');
    if (!swiperSlides) {
        return;
    }
    
    for (let i = 0; i < swiperSlides.length; i++) {
        const slide = swiperSlides[i];
        slide.id = 'card' + i;
    
        const img = slide.querySelector('img');
        if (img) {
            img.style.filter = 'url(#noise' + i + ')';
        }
        const filter = slide.querySelector('filter');
        const animateSeed = filter.querySelector('feTurbulence animate');
        const animateScale = filter.querySelector('feDisplacementMap animate');
    
        animateSeed.setAttribute('begin', 'card' + i + '.mouseenter');
        animateScale.setAttribute('begin', 'card' + i + '.mouseenter');
        filter.id = 'noise' + i;
    }
}

window.addEventListener('DOMContentLoaded', project_hover_button);
window.addEventListener('DOMContentLoaded', theme_toggle);
window.addEventListener('scroll', adjust_slider_speed);
window.addEventListener('DOMContentLoaded', slide_turbulence_filter);
// window.addEventListener('DOMContentLoaded', add_leading_zero_to_fraction);
// window.addEventListener('DOMContentLoaded', load_slide_title);
window.addEventListener('DOMContentLoaded', homepage_swiper);