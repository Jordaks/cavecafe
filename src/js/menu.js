const categoryButtons = document.querySelectorAll(".category-btn");
const tabButtons = document.querySelectorAll(".tab-btn");
const products = document.querySelectorAll(".grid > a");

let activeCategory = "coffee"; // default
let activeTab = "hot"; // default

// Category button click
categoryButtons.forEach((button) => {
	button.addEventListener("click", () => {
		activeCategory = button.dataset.category;

		categoryButtons.forEach((btn) => {
			btn.classList.toggle("active", btn.dataset.category === activeCategory);
			btn.classList.toggle("inactive", btn.dataset.category !== activeCategory);
		});

		filterProducts();
	});
});

// Hot/Iced tab click
tabButtons.forEach((button) => {
	button.addEventListener("click", () => {
		activeTab = button.dataset.tab;

		tabButtons.forEach((btn) => {
			btn.classList.toggle("active", btn.dataset.tab === activeTab);
			btn.classList.toggle("inactive", btn.dataset.tab !== activeTab);
		});

		filterProducts();
	});
});

function filterProducts() {
	products.forEach((product) => {
		const category = product.dataset.category;
		const priceOptions = product.querySelectorAll(".price-option");

		// Show/hide product by category
		product.style.display = category === activeCategory ? "flex" : "none";

		// Show/hide price options by tab
		priceOptions.forEach((option) => {
			if (
				(activeTab === "hot" && option.classList.contains("hot-only")) ||
				(activeTab === "iced" && option.classList.contains("iced-only")) ||
				(!option.classList.contains("hot-only") &&
					!option.classList.contains("iced-only"))
			) {
				option.classList.remove("hidden");
			} else {
				option.classList.add("hidden");
			}
		});
	});
}

// Initialize
filterProducts();
