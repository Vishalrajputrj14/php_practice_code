document.querySelector('.settings-form').addEventListener('submit', function (e) {
  const name = document.getElementById('username').value.trim();
  const email = document.getElementById('email').value.trim();
  const phone = document.getElementById('phone').value.trim();

  if (name === "" || email === "" || phone === "") {
    alert("Please fill all required fields.");
    e.preventDefault(); // Stop form submission
  }
});
