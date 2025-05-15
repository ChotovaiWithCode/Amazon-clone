
const slidesContainer = document.querySelector('.slides');
const slides = document.querySelectorAll('.slide');
let currentIndex = 0;

function showNextSlide() {
  currentIndex++;
  if (currentIndex === slides.length ) {
    // Reset to first slide without delay for smooth looping
    setTimeout(() => {
      slidesContainer.style.transition = 'none';
      currentIndex = 0;
      slidesContainer.style.transform = `translateX(0)`;
    }, 2000); // Match this timeout with the transition duration
  } else {
    slidesContainer.style.transition = 'transform 2s ease'; // Smooth transition
    const offset = -currentIndex * 125  ;
    slidesContainer.style.transform = `translateX(${offset}%)`;
  }
}

setInterval(showNextSlide, 3000);



// search filter


document.addEventListener("DOMContentLoaded", function() {
  const filterButton = document.getElementById("filter-button");
  const searchInput = document.getElementById("search-input");
  const items = document.querySelectorAll(".box1");

  // Event listener for the filter button
  filterButton.addEventListener("click", ()=> {
    const searchTerm = searchInput.value.toLowerCase(); 

    items.forEach(item => {
      const itemText = item.textContent.toLowerCase(); 

  
      if (itemText.includes(searchTerm)) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });
  });
});


//for link to signup

document.getElementById('nv-sign').addEventListener('click', ()=> {
  
  const url = "http://localhost/project1/register/index%20(1).php";
  window.location.href = url ;
});

//bottom link to login

function redirectToLink() {
  // Redirect to the desired link
  window.location.href = "http://localhost/project1/register/index%20(1).php"; // Replace with your desired URL
}




//go to top

// document.getElementById("go-up ").addEventListener("click", function() {
//   console.log('click')
//   window.scrollTo({
//     top: 0,
//     left: 0,
//     behavior: 'smooth'
//   });
// });


//go-up
const goup=()=>{
  window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
};


