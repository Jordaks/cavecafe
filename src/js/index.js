// Mobile Drawer Functionality
(function () {
	const openBtn = document.getElementById("mobile-open");
	const closeBtn = document.getElementById("mobile-close");
	const drawer = document.getElementById("mobile-drawer");
	const backdrop = document.getElementById("drawer-backdrop");

	function openDrawer() {
		drawer.classList.remove("translate-x-full");
		drawer.classList.add("translate-x-0");
		drawer.setAttribute("aria-hidden", "false");
		openBtn.setAttribute("aria-expanded", "true");
		backdrop.classList.remove("hidden");
		setTimeout(() => backdrop.classList.add("opacity-100"), 10);
		closeBtn.focus();
		document.documentElement.style.overflow = "hidden";
	}

	function closeDrawer() {
		drawer.classList.remove("translate-x-0");
		drawer.classList.add("translate-x-full");
		drawer.setAttribute("aria-hidden", "true");
		openBtn.setAttribute("aria-expanded", "false");
		backdrop.classList.remove("opacity-100");
		setTimeout(() => backdrop.classList.add("hidden"), 200);
		openBtn.focus();
		document.documentElement.style.overflow = "";
	}

	openBtn.addEventListener("click", openDrawer);
	closeBtn.addEventListener("click", closeDrawer);
	backdrop.addEventListener("click", closeDrawer);

	document.addEventListener("keydown", (ev) => {
		if (ev.key === "Escape" && drawer.getAttribute("aria-hidden") === "false") {
			closeDrawer();
		}
	});

	drawer.classList.add("translate-x-full");
	backdrop.classList.add("opacity-0", "hidden");
	backdrop.classList.add("backdrop-blur-fallback");
})();

// Button Hover Effects
const bgColorOrder = document.querySelector(".order-btn");
bgColorOrder.addEventListener("mouseover", function () {
	bgColorOrder.style.backgroundColor = "#6B4F33";
	bgColorOrder.style.color = "white";
	bgColorOrder.style.transition = "0.5s";
	bgColorOrder.style.borderColor = "white";
	bgColorOrder.style.boxShadow = "0 0 10px black";
});
bgColorOrder.addEventListener("mouseout", function () {
	bgColorOrder.style.backgroundColor = "";
	bgColorOrder.style.color = "#4B2E19";
	bgColorOrder.style.transition = "0.5s";
	bgColorOrder.style.borderColor = "";
	bgColorOrder.style.boxShadow = "0 0 0px";
});

const bgColorMenu = document.querySelector(".menu-btn");
bgColorMenu.addEventListener("mouseover", function () {
	bgColorMenu.style.transition = "0.5s";
	bgColorMenu.style.borderColor = "white";
	bgColorMenu.style.boxShadow = "0 0 10px black";
});
bgColorMenu.addEventListener("mouseout", function () {
	bgColorMenu.style.transition = "0.5s";
	bgColorMenu.style.borderColor = "black";
	bgColorMenu.style.boxShadow = "0 0 0px";
});

const bgColorCart = document.querySelector(".cart-btn");
bgColorCart.addEventListener("mouseover", function () {
	bgColorCart.style.backgroundColor = "#6B4F33";
	bgColorCart.style.color = "white";
	bgColorCart.style.transition = "0.5s";
	bgColorCart.style.boxShadow = "0 0 10px black";
});
bgColorCart.addEventListener("mouseout", function () {
	bgColorCart.style.backgroundColor = "";
	bgColorCart.style.color = "#4B2E19";
	bgColorCart.style.transition = "0.5s";
	bgColorCart.style.borderColor = "";
	bgColorCart.style.boxShadow = "0 0 0px";
});

// Dark Mode Functionality
const darkModeBtn = document.getElementById("darkModeBtn");
const darkModeBtnMobile = document.getElementById("darkModeBtnMobile");
const body = document.body;

// Check for saved dark mode preference
const darkModeEnabled = localStorage.getItem("darkMode") === "true";
if (darkModeEnabled) {
	body.classList.add("dark-mode");
	updateDarkModeIcon(true);
}

function toggleDarkMode() {
	body.classList.toggle("dark-mode");
	const isDark = body.classList.contains("dark-mode");
	localStorage.setItem("darkMode", isDark);
	updateDarkModeIcon(isDark);
}

function updateDarkModeIcon(isDark) {
	const icon = darkModeBtn.querySelector("i");
	const iconMobile = darkModeBtnMobile.querySelector("i");
	if (isDark) {
		icon.classList.remove("fa-moon");
		icon.classList.add("fa-sun");
		iconMobile.classList.remove("fa-moon");
		iconMobile.classList.add("fa-sun");
	} else {
		icon.classList.remove("fa-sun");
		icon.classList.add("fa-moon");
		iconMobile.classList.remove("fa-sun");
		iconMobile.classList.add("fa-moon");
	}
}

darkModeBtn.addEventListener("click", toggleDarkMode);
darkModeBtnMobile.addEventListener("click", toggleDarkMode);
