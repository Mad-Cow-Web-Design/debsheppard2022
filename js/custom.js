// Get the button
// mybutton = document.getElementById("myBtn");

// // Get the header nav bar
// dsNav = document.getElementById("masthead");

// // Get the nav menu items
// dsNavMenu = document.getElementById("primary-menu").querySelectorAll("li.menu-item");

// // Get the logo
// dsLogo = dsNav.querySelector("img");

// When the user scrolls down 20px from the top of the document, show the button
//window.onscroll = function() { scrollFunction(); }

// function scrollFunction() {
//     if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
//         mybutton.style.bottom = "20px";
//         dsNav.style.backgroundColor = "#392745";
//         dsNav.classList.add("scrolled");

//         // Swap to dark logo
//         dsLogo.setAttribute("src", "https://www.debsheppard.com/wp-content/uploads/2018/11/Deb-Sheppard-Logo-Gold.png");
//         dsLogo.setAttribute("srcset", "https://www.debsheppard.com/wp-content/uploads/2018/11/Deb-Sheppard-Logo-Gold.png");

//         // Turn nav items pink
//         // dsNavMenu.forEach(item => {
//         //     item.querySelector("a").style.color = "#d5b2ac";
//         // });

//         // // Reset sub-menu items to purple
//         // document.querySelectorAll('.sub-menu').forEach(menu => {
//         //     menu.querySelectorAll("a").forEach(item => {
//         //         item.style.color = "#392745";
//         //     })
//         // });


//     } else {
//         mybutton.style.bottom = "-80px";
//         dsNav.style.backgroundColor = "#FFF";
//         dsNav.classList.remove("scrolled");

//         // Swap to dark logo
//         dsLogo.setAttribute("src", "https://www.debsheppard.com/wp-content/uploads/2018/11/Deb-Sheppard-Logo-Royal-Purple.png");
//         dsLogo.setAttribute("srcset", "https://www.debsheppard.com/wp-content/uploads/2018/11/Deb-Sheppard-Logo-Royal-Purple.png");

//         // Turn nav items purple
//         // dsNavMenu.forEach(item => {
//         //     item.querySelector("a").style.color = "#392745";
//         // });

//         // // Reset sub-menu items to purple
//         // document.querySelectorAll('.sub-menu').forEach(menu => {
//         //     menu.querySelectorAll("a").forEach(item => {
//         //         item.style.color = "#392745";
//         //     })
//         // });
//     }
// }

// When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//     document.body.scrollTop = 0; // For Safari
//     document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
// }