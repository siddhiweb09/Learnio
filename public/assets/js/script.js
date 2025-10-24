// Toggle sidebar collapse/expand
document.getElementById("toggleSidebar").addEventListener("click", function () {
    const sidebar = document.getElementById("sidebar");
    const isCollapsed = sidebar.classList.contains("collapsed");

    if (isCollapsed) {
        sidebar.classList.remove("collapsed");
        this.querySelector("i").classList.remove("fa-chevron-right");
        this.querySelector("i").classList.add("fa-chevron-left");
    } else {
        sidebar.classList.add("collapsed");
        this.querySelector("i").classList.remove("fa-chevron-left");
        this.querySelector("i").classList.add("fa-chevron-right");
    }
});

// Mobile menu toggle
document.getElementById("mobileMenuBtn").addEventListener("click", function () {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("mobile-open");
});

// Close mobile menu when clicking on a menu item
document.querySelectorAll(".menu-item").forEach((item) => {
    item.addEventListener("click", function () {
        if (window.innerWidth < 992) {
            document.getElementById("sidebar").classList.remove("mobile-open");
        }
    });
});

// Close mobile menu when clicking outside
document.addEventListener("click", function (event) {
    const sidebar = document.getElementById("sidebar");
    const mobileMenuBtn = document.getElementById("mobileMenuBtn");

    if (
        window.innerWidth < 992 &&
        !sidebar.contains(event.target) &&
        !mobileMenuBtn.contains(event.target) &&
        sidebar.classList.contains("mobile-open")
    ) {
        sidebar.classList.remove("mobile-open");
    }
});

// Logo upload preview
document
    .querySelector('input[name="logo"]')
    .addEventListener("change", function (e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const logoPreview = document.querySelector(".logo-preview");
                logoPreview.innerHTML = `<img src="${e.target.result}" alt="School Logo">`;
            };
            reader.readAsDataURL(file);
        }
    });

// Auto-generate slug from name
document
    .querySelector('input[name="name"]')
    .addEventListener("blur", function () {
        const name = this.value;
        const slugInput = document.querySelector('input[name="slug"]');

        if (name && !slugInput.value) {
            const slug = name
                .toLowerCase()
                .replace(/[^\w ]+/g, "")
                .replace(/ +/g, "-");
            slugInput.value = slug;
        }
    });
