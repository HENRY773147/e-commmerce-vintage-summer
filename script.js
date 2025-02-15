function showsidebar(){//onclick on the three lines sidebar open
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}
function hidesidebar(){//onclick on the cross reture back
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}


let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};

window.onscroll = () => {
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
};

document.querySelector("#close-edit").onclick = () => {
  window.location.href = "view_products.php";
};



    