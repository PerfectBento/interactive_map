const homes_sell = document.querySelectorAll(".home_sell");
const homes_reservation = document.querySelectorAll(".home_reservation");
const homes_sold = document.querySelectorAll(".home_sold");
const popup = document.querySelector(".popup_house");
const number = document.querySelector(".number");
const close = popup.querySelector(".close_block");
homes_sell.forEach(home => {
    home.addEventListener("click", function(){
    //    alert(this.dataset.title);
    popup.querySelector(".title").innerText = this.dataset.title;
    number.innerText = this.dataset.number;
    popup.classList.add("open");
    number.classList.add("sell");

    });
});

homes_reservation.forEach(home => {
    home.addEventListener("click", function(){
    //    alert(this.dataset.title);
    popup.querySelector(".title").innerText = this.dataset.title;
    number.innerText = this.dataset.number;
    popup.classList.add("open");
    number.classList.add("yellow");

    });
});
homes_sold.forEach(home => {
    home.addEventListener("click", function(){
    //    alert(this.dataset.title);
    popup.querySelector(".title").innerText = this.dataset.title;
    number.innerText = this.dataset.number;
    popup.classList.add("open");
    number.classList.add("sold");

    });
});

close.addEventListener("click", function(){
    popup.classList.remove("open");
    number.classList.remove("sold");
    number.classList.remove("yellow");
    number.classList.remove("sell");
});