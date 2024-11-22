

function my_gsap(){

  gsap.set(".section01", {scrollTrigger:{
    trigger: '.section01',
    start: 'top bottom-=40%',
    toggleClass: 'active',
    once:true
  }})

  gsap.set(".section02", {scrollTrigger:{
    trigger: '.section02',
    start: 'top bottom-=40%',
    toggleClass: 'active',
    once:true
  }})

  gsap.set(".section03", {scrollTrigger:{
    trigger: '.section03',
    start: 'top bottom-=40%',
    toggleClass: 'active',
    once:true
  }})

  gsap.set(".section04", {scrollTrigger:{
    trigger: '.section04',
    start: 'top bottom-=40%',
    toggleClass: 'active',
    once:true
  }})
}

window.addEventListener('load', function(){
    my_gsap();
});
