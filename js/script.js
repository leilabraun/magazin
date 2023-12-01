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




});
