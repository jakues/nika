var bars = document.querySelector("#bars");
var navbarLink = document.querySelector(".link");

// case bars clicked it will open sidebar
document.addEventListener("click", () => {
  navbarLink.classList.toggle("active");
});

// case non sidebar click it will close
document.addEventListener("click", function (e) {
  if (!bars.contains(e.target) && !navbarLink.contains(e.target)) {
    navbarLink.classList.remove("active");
  }
});


// calculate input total automatic
var priceInput = document.getElementById("harga");
var quantityInput = document.getElementById("quantity");
var totalInput = document.getElementById("total");

function calculateTotal() {
  var productPrice = parseFloat(priceInput.value);
  var quantity = parseFloat(quantityInput.value);

  var total = productPrice * quantity;
  totalInput.value = total.toFixed(2);
}

var priceInputUp = document.getElementById("harga-update");
var quantityInputUp = document.getElementById("quantity-update");
var totalInputUp = document.getElementById("total-update");

function calculateTotalUp() {
  var productPrice = parseFloat(priceInputUp.value);
  var quantity = parseFloat(quantityInputUp.value);

  var total = productPrice * quantity;
  totalInputUp.value = total.toFixed(2);
}

// case product button clicked
document.addEventListener("DOMContentLoaded", function () {
  var qtyInput = document.querySelector(".menu-qty");
  var btnUp = document.querySelector(".btn-up");
  var btnDown = document.querySelector(".btn-down");

  btnUp.addEventListener("click", function () {
    increaseQty();
  });

  btnDown.addEventListener("click", function () {
    decreaseQty();
  });

  function increaseQty() {
    var currentQty = parseInt(qtyInput.value);
    qtyInput.value = currentQty + 1;
  }

  function decreaseQty() {
    var currentQty = parseInt(qtyInput.value);
    if (currentQty > 1) {
      qtyInput.value = currentQty - 1;
    }
  }
});


// modal
const closeAdd = document.getElementById("close-add");
const closeUpdate = document.getElementById("close-update");
const modalAdd = document.getElementById("add-modal");
const btnAdd = document.getElementById("add-btn");
const modalUpdate = document.getElementById("update-modal");
const btnUpdate = document.getElementById("update-btn");

// modal update
btnUpdate.onclick = function () {
  modalUpdate.style.display = "block";
};

closeUpdate.onclick = function () {
  modalUpdate.style.display = "none";
};

// modal add product
btnAdd.onclick = function () {
  modalAdd.style.display = "block";
};

closeAdd.onclick = function () {
  modalAdd.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modalAdd) {
    modalAdd.style.display = "none";
  } else if (event.target == modalUpdate) {
    modalUpdate.style.display = "none";
  }
};
