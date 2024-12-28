let menuBar = document.querySelector("#menu-bar");
let navbar = document.querySelector(".menu");
let header = document.querySelector(".header-2");

menuBar.addEventListener("click", () => {
  menuBar.classList.toggle("fa-times");
  navbar.classList.toggle("active");
});

document.querySelectorAll(".nav-item").forEach((n) =>
  n.addEventListener("click", () => {
    menuBar.classList.remove("fa-times");
    navbar.classList.remove("active");
    n.classList.remove("active-1");
  })
);

window.onscroll = () => {
  menuBar.classList.remove("fa-times");
  navbar.classList.remove("active");

  if (Window.onscroll > 150) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
};

// deal start

let countDate = new Date("september 23, 2025 00:00:00").getTime();

function CountDown() {
  let now = new Date().getTime();
  gap = countDate - now;

  let second = 1000;
  let minute = second * 60;
  let hour = minute * 60;
  let day = hour * 24;

  let d = Math.floor(gap / day);
  let h = Math.floor((gap % day) / hour);
  let m = Math.floor((gap % hour) / minute);
  let s = Math.floor((gap % minute) / second);

  document.getElementById("days").innerText = d;
  document.getElementById("hour").innerText = h;
  document.getElementById("minute").innerText = m;
  document.getElementById("second").innerText = s;
}

setInterval(function () {
  CountDown();
}, 1000);


// deal end



// product start
const latestProducts = [
  {
    category: "packaged food",
    name: "Maggi 2-Minute Masala, Easy to Make Instant Noodles Vegetarian  (70 g)",
    price: "Rs.14",
    imageUrl: "/project/images/latestProduct-1.webp",
  },
  {
    category: "packaged food",
    name: "Del Monte Tomato Classic Blend Ketchup  (750 g)",
    price: "Rs.45",
    imageUrl: "/project/images/latestProduct-2.webp",
  },
  {
    category: "snaks & bevarages",
    name: "B Natural Mango Juice, Goodness of fiber, Vit C & E  (2 x 1 L)",
    price: "Rs.150",
    imageUrl: "/project/images/latestProduct-3.webp",
  },
  {
    category: "staples",
    name: "FORTUNE Suji (Rawa)  (0.5 kg)",
    price: "Rs.27",
    imageUrl: "/project/images/latestProduct-4.webp",
  },
  {
    category: "dairy products",
    name: "Amul Moti Toned Milk",
    price: "Rs.30",
    imageUrl: "/project/images/latestProduct-5.webp",
  },
  {
    category: "personal & baby care",
    name: "Parachute Pure Coconut Hair Oil (Naralache Tel)  (200 ml)",
    price: "Rs.83",
    imageUrl: "/project/images/latestProduct-6.webp",
  },
  {
    category: "snaks & bevarages",
    name: "Bingo Chilli Sprinkled Chips  (90 g)",
    price: "Rs.26",
    imageUrl: "/project/images/latestProduct-7.webp",
  },
  {
    category: "snaks & bevarages",
    name: "Nescafe Classic Coffee Powder, 100% Pure Instant Coffee  (90 g)",
    price: "Rs.326",
    imageUrl: "/project/images/latestProduct-8.webp",
  },
];

const itemsContainer = document.querySelector(".products-container");

latestProducts.forEach((product) => {
  // Select the template element
  const productTemplate = document.querySelector(".item");

  // Clone the template
  const newProduct = productTemplate.cloneNode(true);

  // Assign product details
  newProduct.querySelector(".categoryName").textContent = product.category;
  newProduct.querySelector(".image img").src = product.imageUrl;
  newProduct.querySelector(".image img").alt = product.name;
  newProduct.querySelector(".productPrice").textContent = product.price;
  newProduct.querySelector(".productName").textContent = product.name;

  // Append the new product to the container
  itemsContainer.appendChild(newProduct);
});

// Remove the original template
const productTemplate = document.querySelector(".item");
productTemplate.remove();

// product end

// sign up popUp open and close
document.getElementById("signUp").addEventListener("click", function () {
  document.querySelector(".signUpForm").style.display = "flex";
  document.body.style.overflow = "hidden"; // Disable background scrolling
});

document.getElementById("go-to-login").addEventListener("click", function () {
  document.querySelector(".signUpForm").style.display = "none";
  document.querySelector(".logInForm").style.display = "flex";
});

document.getElementById("go-to-signUp").addEventListener("click", function () {
  document.querySelector(".signUpForm").style.display = "flex";
  document.querySelector(".logInForm").style.display = "none";
});

document
  .querySelector(".signUp-close-btn")
  .addEventListener("click", function () {
    document.querySelector(".signUpForm").style.display = "none";
    document.body.style.overflow = "auto"; // Re-enable background scrolling
  });

document
  .querySelector(".logIn-close-btn")
  .addEventListener("click", function () {
    document.querySelector(".logInForm").style.display = "none";
    document.body.style.overflow = "auto"; // Re-enable background scrolling
  });


  // signUp form validation
  function validateForm() {
    // var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("password").value;
    // var confirmPassword = document.getElementById("confirmPassword").value;

    // Email validation
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Phone number validation (10 digits, no special characters)
    var phonePattern = /^\d{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }

    // Password validation
    if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
    }

    // Confirm password validation
    // if (password !== confirmPassword) {
    //     alert("Passwords do not match.");
    //     return false;
    // }

    // Success - Submit form
    alert("Sign Up Successful!");
    return true;
}

