/*ANIMATIONS*/
gsap.registerPlugin(ScrollTrigger);

const imgs = document.querySelectorAll('#works a');
const studio = document.querySelectorAll('#studio .animation');
const artist = document.querySelectorAll('#artist .animation');
const artist_img = document.querySelectorAll('#artist .animation_no_move');
const price = document.querySelectorAll('#price .animation');
const voucher = document.querySelectorAll('#voucher .animation');
const heal = document.querySelectorAll('#heal .animation');
const contact = document.querySelectorAll('#contact .animation');
const rules = document.querySelectorAll('#rules .animation');

/*WORKS*/
imgs.forEach(img=>{
    gsap.fromTo(img.children,{opacity: 0, y:100, scale:0.8}, {opacity:1, y:0, scale:1, duration:1, ease:'easeInOut', scrollTrigger:{
        trigger: img,
        start: '-990% 80%',
    }});
});
/*STUDIO*/
studio.forEach(element=>{
    gsap.fromTo(element.children,{opacity: 0, y:200}, {opacity:1, y:0, duration:1, ease:'easeInOut', scrollTrigger:{
        trigger: element,
        start: 'top 80%',
    }});
});
/*ARTIST*/
artist_img.forEach(element=>{
    gsap.fromTo(element.children,{opacity: 0}, {opacity:1, duration:1, ease:'easeInOut', scrollTrigger:{
        trigger: element,
        start: 'top 80%',
    }});
});
artist.forEach(element=>{
    gsap.fromTo(element.children,{opacity: 0, y:50}, {opacity:1, y:0, duration:1, ease:'easeInOut', scrollTrigger:{
        trigger: element,
        start: 'top 80%',
    }});
});
/*PRICE*/
price.forEach(element=>{
    gsap.fromTo(element.children,{opacity: 0, y:100}, {opacity:1, y:0, duration:1, ease:'easeInOut', scrollTrigger:{
        trigger: element,
        start: 'top 80%',
    }});
});
/*VOUCHER*/
voucher.forEach(element=>{
    gsap.fromTo(element.children,{opacity: 0, y:100}, {opacity:1, y:0, duration:1, ease:'easeInOut', scrollTrigger:{
        trigger: element,
        start: 'top 80%',
    }});
});
/*HEAL*/
heal.forEach(element=>{
    gsap.fromTo(element.children,{opacity: 0, y:100}, {opacity:1, y:0, duration:1, ease:'easeInOut', scrollTrigger:{
        trigger: element,
        start: 'top 80%',
    }});
});
/*CONTACT*/
contact.forEach(element=>{
    gsap.fromTo(element.children,{opacity: 0, y:100}, {opacity:1, y:0, duration:1, ease:'easeInOut', scrollTrigger:{
        trigger: element,
        start: 'top 80%',
    }});
});
/*RULES*/
rules.forEach(element=>{
    gsap.fromTo(element.children,{opacity: 0, y:100}, {opacity:1, y:0, duration:1, ease:'easeInOut', scrollTrigger:{
        trigger: element,
        start: 'top 80%',
    }});
});

/*GO TO*/
function go_to(where) {
    const yOffset = -80; 
    const element = document.getElementById(where);
    const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
    window.scrollTo({top: y, behavior: 'smooth'});

    //close navbar
    $('button[aria-expanded="true"]').click();
}

/*ON SCREEN CLICK - CLOSE NAVBAR*/
$(window).on('click', function(event) {
    var clickOver = $(event.target)
    if ($('.navbar .navbar-toggler').attr('aria-expanded') == 'true' && clickOver.closest('.navbar').length === 0) {
        $('button[aria-expanded="true"]').click();
    }
});