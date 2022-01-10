function init() {
    document.getElementById("rpgBtn").className = "active";
    document.getElementById("bookBtn").className = "";
    document.getElementById("albumBtn").className = "";
    document.getElementById("contactBtn").className = "";
}

function rpgNav() {
    // Set state of the buttons
    document.getElementById("rpgBtn").className = "active";
    document.getElementById("bookBtn").className = "";
    document.getElementById("albumBtn").className = "";
    document.getElementById("contactBtn").className = "";
    // Set display of sections
    document.getElementById("rpg").style.display = 'block';
    document.getElementById("book").style.display = 'none';
    document.getElementById("album").style.display = 'none';
    document.getElementById("contact").style.display = 'none';
}

function bookNav() {
    // Set state of the buttons
    document.getElementById("rpgBtn").className = "";
    document.getElementById("bookBtn").className = "active";
    document.getElementById("albumBtn").className = "";
    document.getElementById("contactBtn").className = "";
    // Set display of sections
    document.getElementById("rpg").style.display = 'none';
    document.getElementById("book").style.display = 'block';
    document.getElementById("album").style.display = 'none';
    document.getElementById("contact").style.display = 'none';
}

function albumNav() {
    // Set state of the buttons
    document.getElementById("rpgBtn").className = "";
    document.getElementById("bookBtn").className = "";
    document.getElementById("albumBtn").className = "active";
    document.getElementById("contactBtn").className = "";
    // Set display of sections
    document.getElementById("rpg").style.display = 'none';
    document.getElementById("book").style.display = 'none';
    document.getElementById("album").style.display = 'block';
    document.getElementById("contact").style.display = 'none';
}

function contactNav() {
    // Set state of the buttons
    document.getElementById("rpgBtn").className = "";
    document.getElementById("bookBtn").className = "";
    document.getElementById("albumBtn").className = "";
    document.getElementById("contactBtn").className = "active";
    // Set display of sections
    document.getElementById("rpg").style.display = 'none';
    document.getElementById("book").style.display = 'none';
    document.getElementById("album").style.display = 'none';
    document.getElementById("contact").style.display = 'block';
}
