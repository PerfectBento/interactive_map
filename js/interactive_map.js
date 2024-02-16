const homes_green = document.querySelectorAll(".home_green");
const homes_yelow = document.querySelectorAll(".home_yelow");
const homes_red = document.querySelectorAll(".home_red");
const popup = document.querySelector(".popup_house");
const number = document.querySelector(".number");
const close = popup.querySelector(".close_block");
homes_green.forEach(home => {
    home.addEventListener("click", function(){
    //    alert(this.dataset.title);
    popup.querySelector(".title").innerText = this.dataset.title;
    number.innerText = this.dataset.number;
    popup.classList.add("open");
    number.classList.add("green");

    });
});

homes_yelow.forEach(home => {
    home.addEventListener("click", function(){
    //    alert(this.dataset.title);
    popup.querySelector(".title").innerText = this.dataset.title;
    number.innerText = this.dataset.number;
    popup.classList.add("open");
    number.classList.add("yellow");

    });
});
homes_red.forEach(home => {
    home.addEventListener("click", function(){
    //    alert(this.dataset.title);
    popup.querySelector(".title").innerText = this.dataset.title;
    number.innerText = this.dataset.number;
    popup.classList.add("open");
    number.classList.add("red");

    });
});

close.addEventListener("click", function(){
    popup.classList.remove("open");
    number.classList.remove("red");
    number.classList.remove("yellow");
    number.classList.remove("green");
});