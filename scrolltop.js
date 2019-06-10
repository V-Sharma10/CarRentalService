const scrollToTop = () => {
  const c = document.documentElement.scrollTop || document.body.scrollTop;
  if (c > 0) {
    window.requestAnimationFrame(scrollToTop);
    window.scrollTo(0, c - c / 15);
  }
};
scrollToTop();


// $(document).ready(function(){
//   $(window).scroll(function(){

// var scrollTop=$(window).scrollTop();

//   // console.log(scrollTop);
//   if(scrollTop< 250){
//     $("#topbtn").fadeOut();
//   }
//   else{
//     $("#topbtn").fadeIn();
//   }
  
//   }).triggerHandler("scroll");
// });
