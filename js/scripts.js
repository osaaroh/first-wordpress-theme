//simple welcome alert
alert("Welcome to my Wordpress Theme");
// Add a click event to menu items
document.querySelectorAll('.main-menu  a').forEach(link =>{
    link.addEventListener ('click', (e) => {
        e.preventDefault();
        console. log("You clicked a menu item!");
    });
});