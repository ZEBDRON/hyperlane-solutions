document.addEventListener("DOMContentLoaded", () => {
    const banner = document.getElementById("topBanner");
    const closeBtn = document.getElementById("closeBannerBtn");

    if (!banner || !closeBtn) return;

    // Hide if previously dismissed
    if (localStorage.getItem("announcementClosed") === "true") {
        banner.style.display = "none";
        return;
    }

    closeBtn.addEventListener("click", () => {
        banner.style.display = "none";
        localStorage.setItem("announcementClosed", "true");
    });
});
