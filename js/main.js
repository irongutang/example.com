 // Create event listener
document.getElementById('button').addEventListener('click', loadText);  

// Typical XHR fractal
function loadText() {
    // Create XHR object
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'res/sample.txt', true);

    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('display').innerHTML = this.responseText;
        }
    }

    // sends request
    xhr.send();
}