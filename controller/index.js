var view = document.getElementById("view");
view.addEventListener("click", () => {
  window.location.href = "view.php";
});

var update = document.getElementById("update");
update.addEventListener("click", () => {
  window.location.href = "update.php";
});

var del = document.getElementById("deleteBtn");
del.addEventListener("click", () => {
  window.location.href = "delete.php";
});

var home = document.getElementById("home");
home.addEventListener("click", () => {
  window.location.href = "index.php";
});
