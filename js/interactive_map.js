const homes = document.querySelectorAll(".home");
const popup = document.querySelector(".popup_house");
const close = popup.querySelector(".close_block");
homes.forEach(home => {
    home.addEventListener("click", function(){
    //    alert(this.dataset.title);
    popup.querySelector(".title").innerText = this.dataset.title;
    popup.classList.add("open");

    });
});

close.addEventListener("click", function(){
    popup.classList.remove("open");
});