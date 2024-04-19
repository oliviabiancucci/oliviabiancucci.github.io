WebFont.load({
    google: {
        families: ["Inter:100,200,300,regular,500,600,700,800,900", "Fira Code:300,regular,500,600,700"]
    }
});

function loadNavbar() {
    fetch('navbar.html')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response not valid');
            }
            return response.text();
        })
        .then(data => {
            document.getElementById('navbar-container').innerHTML = data;
        })
        .catch(error => {
            console.error('Problem fetching the navbar: ', error);
        });
}

window.onload = loadNavbar;
