// addeventlisteners will break if loaded on incorrect pages

// remembering the user details using local storage
var store = window.localStorage;

// as soon as the page is finished rendering fill the user details form if they exist in local storage
window.onload = function () {
  //store.clear();
  if (store.getItem("name")) {
    document.getElementById("remember-check").checked = true;
    document.getElementById("remember-label").textContent = "Forget Me";
    document.getElementById("name").value = store.getItem("name");
    document.getElementById("email").value = store.getItem("email");
    document.getElementById("mobile").value = store.getItem("mobile");
  } else {
    document.getElementById("remember-label").textContent = "Remember Me";
  }
};

//save the user details from the form to local storage
// acts like a toggle on press remembers next press deletes
document
  .getElementById("remember-check")
  .addEventListener("click", function () {
    if (this.checked) {
      //needs validation of valid inputs
      store.setItem("name", document.getElementById("name").value);
      store.setItem("email", document.getElementById("email").value);
      store.setItem("mobile", document.getElementById("mobile").value);
      document.getElementById("remember-label").textContent = "Forget Me";
      //document.getElementById('remember-errors').textContent = 'created the results';
    } else {
      store.clear();
      document.getElementById("name").value = "";
      document.getElementById("email").value = "";
      document.getElementById("mobile").value = "";
      document.getElementById("remember-label").textContent = "Remember Me";
      //document.getElementById('remember-errors').textContent = 'deleted the results';
    }
  });

//button for testing
// document.getElementById('showme').addEventListener('click', function () {
//   var result;
//   result = store.getItem('name') + ' ' + store.getItem('email') + ' ' + store.getItem('mobile');
//   document.getElementById('remember-errors').textContent = result;
//   //replace(outputElement, result);
// });
