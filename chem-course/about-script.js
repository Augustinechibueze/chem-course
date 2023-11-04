const nav_responsive = document.querySelector('.responsive-nav')
const nav_unresponsive = document.querySelector('unresponsive-nav')
const close_icon = document.querySelector('.close-icon')
const open_icon = document.querySelector('.open-icon')
const aTags = document.querySelectorAll('nav ul li a')
const buttons_filter = document.querySelectorAll('.filter-buttons button')
const item_category = document.querySelectorAll('.item')
const containerPop = document.querySelector('.containerPop')
const cancelContainerPop = document.querySelector('.cancel-btn')
const footer_disclaimer = document.querySelector('.footer-disclaimer')
const disclaimer_anchor = document.querySelector('.disclaimer-anchor')
const pItems = document.querySelectorAll('.pItem')
const btnP_toggle = document.querySelectorAll('.pToggleBtns-wrapper button')



const close_func = ()=>{
  nav_responsive.style.cssText = `width:0;overflow:hidden;`
}
const open_func = ()=>{
  nav_responsive.style.cssText = `width:100%;overflow:unset;`
}

close_icon.addEventListener('click',close_func)
open_icon.addEventListener('click',open_func)


// course filtering effect with js onclick 
buttons_filter.forEach((each_button)=>{
  each_button.addEventListener('click',()=>{

    // removing the active class from all buttons 
    buttons_filter.forEach(each_btn=>{
      each_btn.classList.remove('btn-active-course')
    })

    // adding active class to the clicked button 
    each_button.classList.add('btn-active-course')

    const category = each_button.getAttribute('data-filter')

    // show/hide portfolio items based on the selected category
    item_category.forEach(each_item=>{
      const itemCategory = each_item.getAttribute('data-category')
      if(category === 'all' || category === itemCategory){
        each_item.classList.remove('item-filter-display')
      }else{
        each_item.classList.add('item-filter-display')
      }
    })
  })
})




// Function to start the counting animation
function startCountAnimation() {
  const counters = document.querySelectorAll('.count');
  
  counters.forEach(counter => {
      const target = +counter.getAttribute('data-target'); // Get the target number from a data attribute
      const duration = 2000; // Animation duration in milliseconds
      const step = target / (duration / 20); // Calculate the step increment
      
      let count = 0;
      const updateCounter = () => {
          if (count < target) {
              count += step;
              counter.textContent = Math.round(count);
              requestAnimationFrame(updateCounter);
          } else {
              counter.textContent = target;
          }
      };
      
      updateCounter();
  });
}

// Set up the Intersection Observer
const about_iteration = document.querySelector('.about-iteration');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
      if (entry.isIntersecting) {
          startCountAnimation();
          observer.disconnect(); // Disconnect the observer after starting the animation
      }
  });
});

observer.observe(about_iteration);
