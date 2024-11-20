let menu=document.querySelector('#menu-btn');
let navbar=document.querySelector('.header .navbar');
menu.onclick=()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};
window.onscroll=()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

    var swiper = new Swiper(".home-slider", {
        loop:true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
    var swiper = new Swiper(".review-slider", {
      loop:true,
      //slidesPerView: 3,
      spaceBetween: 30,
      autoHeight:true,
      grabCursor:true,
      pagination: {
        el: ".swiper-pagination",
       // clickable: true,
      },
    });
    let loadMoreBtn=document.querySelector('.package .load-more .btn');
    let currentItem=3;
    loadMoreBtn.onclick=()=>{
      let boxes=[...document.querySelectorAll('.package .box-container .box')];
      for(var i=currentItem;i<currentItem+3;i++){
        boxes[i].style.display='inline-block';

      };
      currentItem+=3;
      if(currentItem>=boxes.length){
        loadMoreBtn.style.display='none';
      }
    }
    let loadMoreBtn2=document.querySelector('.package .load-more2 .btn');
    let currentItem2=3;
    loadMoreBtn2.onclick=()=>{
      let boxes2=[...document.querySelectorAll('.package .box-container2 .box')];
      for(var i=currentItem2;i<currentItem2+3;i++){
        boxes2[i].style.display='inline-block';

      };
      currentItem2+=3;
      if(currentItem2>=boxes2.length){
        loadMoreBtn2.style.display='none';
      }
    }
    
    let loadMoreBtn3=document.querySelector('.package .load-more3 .btn');
    let currentItem3=3;
    loadMoreBtn3.onclick=()=>{
      let boxes3=[...document.querySelectorAll('.package .box-container3 .box')];
      for(var i=currentItem3;i<currentItem3+3;i++){
        boxes3[i].style.display='inline-block';

      };
      currentItem3+=3;
      if(currentItem3>=boxes3.length){
        loadMoreBtn3.style.display='none';
      }
    }
    
    let loadMoreBtn4=document.querySelector('.package .load-more4 .btn');
    let currentItem4=3;
    loadMoreBtn4.onclick=()=>{
      let boxes4=[...document.querySelectorAll('.package .box-container4 .box')];
      for(var i=currentItem4;i<currentItem4+3;i++){
        boxes4[i].style.display='inline-block';

      };
      currentItem4+=3;
      if(currentItem4>=boxes4.length){
        loadMoreBtn4.style.display='none';
      }
    }
    
    
    
   
    // function s1() {
    //   document.getElementById('p1').style.display="block";

    // }
    // function s2() {
    //   document.getElementById('p2').style.display="block";

    // }
    // function s3() {
    //   document.getElementById('p3').style.display="block";

    // }


    var swiper = new Swiper('.sliding', {
      pagination: '.swiper-pagination',
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflow: {
   rotate: 20,
   stretch: 0,
   depth: 200,
   modifier: 1,
   slideShadows: true,
      },
      loop: true,
   }) ;

   