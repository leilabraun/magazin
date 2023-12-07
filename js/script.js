document.addEventListener('DOMContentLoaded', function() {




    const burgerIcon = document.querySelector('.burger-icon');

    const menu = document.querySelector('.menu-div');

    burgerIcon.addEventListener('click', function() {
        menu.classList.toggle('active');
        console.log("clicked");
    });

    // Close the menu when a menu item is clicked
    const menuLinks = document.querySelectorAll('.menu a');
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            menu.classList.remove('active');
        });
    });

// Pop Up

// Get the modal
var modal = document.getElementById("myModal");

// Get all elements with class "myImg"
var images = document.getElementsByClassName("myImg");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

// Attach the click event to all elements with class "myImg"
for (var i = 0; i < images.length; i++) {
  images[i].onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  };
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

});
