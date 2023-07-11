const openbtn = document.getElementById("openEdit");
const closebtn = document.getElementById("closeEdit");
const updatePage = document.getElementById("updatePage");
const profile = document.getElementById("profile");
function openEditpage() {
    updatePage.style.display = "block";
    profile.style.display = "none";
    openbtn.style.display = "none";
    closebtn.style.display = "block";
}

function closeEditpage() {
    updatePage.style.display = "none";
    profile.style.display = "block";
    openbtn.style.display = "block";
    closebtn.style.display = "none";
}