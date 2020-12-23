var backdrop = document.querySelector(".backdrop");
var modal = document.querySelector(".modal");
var modalNoButton = document.querySelector(".modal__action--negative");
var selectPlanButtons = document.querySelectorAll(".card button");


// console.dir(backdrop.style['background-image']);

// console.dir(backdrop);
for (var i = 0; i < selectPlanButtons.length; i++) {
  selectPlanButtons[i].addEventListener("click", function() {
    // modal.style.display = "block";
    // backdrop.style.display = "block";
    modal.classList.add("open");
    backdrop.classList.add("open");
  });
}



  if (modalNoButton) {
    modalNoButton.addEventListener("click", closeModal);
  }
  
  function closeModal() {
    //   backdrop.style.display = "none";
    //   modal.style.display = "none";
    if (modal) {
      modal.classList.remove("open");
    }
    backdrop.classList.remove("open");
  }

  $('#main-header a, #contact a, #showcase a').on('click', function(event) {
    if (this.hash !== '') {
      event.preventDefault();
  
      const hash = this.hash;
  
      $('html, body').animate(
        {
          scrollTop: $(hash).offset().top - 50
        },
        1200
      );
    }
  });