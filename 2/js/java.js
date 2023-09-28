document.getElementById("readmoreButton").addEventListener("click", function () {
    this.style.display = 'none';
});
document.getElementById("readmoreButton1").addEventListener("click", function () {
    this.style.display = 'none';
});
document.getElementById("readmoreButton2").addEventListener("click", function () {
    this.style.display = 'none';
});
document.getElementById("readmoreButton3").addEventListener("click", function () {
    this.style.display = 'none';
});
// Check if the URL parameter 'registrationSuccess' is present
const urlParams = new URLSearchParams(window.location.search);
const registrationSuccess = urlParams.get('registrationSuccess');
const existinguser = urlParams.get('existinguser');

console.log('Existing user:', existinguser); // Debug line
console.log('Registration success:', registrationSuccess); // Debug line
if (registrationSuccess === '1') {
    alert("Registeration succesful!");
    const modal = document.getElementById('exampleModal6');
    if (modal) {
        modal.classList.add('show'); // Add the 'show' class to display the modal
        modal.style.display = 'block'; // Set the modal's display style to 'block'
    }
} else if (existinguser === '1') {
    alert("User already Exist");
    const modal = document.getElementById('exampleModal4');
    if (modal) {
        modal.classList.add('show');
        modal.style.display = 'block';
    }
}
document.getElementById("closemodalbtn4").addEventListener("click", function () {
    modal.style.display = 'none';
});
