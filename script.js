//preloader
document.getElementById("loader").style.display = "none";
var myVar;
function myFunction() {
  myVar = setTimeout(showPage, 700);
}
function showPage() {
  document.getElementById("loader").style.display = "block";
  document.getElementById("myDiv").style.display = "block";
}

//navbar
document.getElementById("mySidenav").style.width = "250px";
document.getElementById("main").style.marginLeft = "250px";
document.getElementById("menu").style.opacity = 0;
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("menu").style.opacity = 0;
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("menu").style.opacity = 1;
}

//search 
function searchBooks() {
  var searchTerm = document.getElementById("searchInput").value;
  var titles = document.getElementsByClassName("product-title");
  var matchingTitles = [];

  for (var i = 0; i < titles.length; i++) {
    if (titles[i].textContent.toLowerCase().includes(searchTerm.toLowerCase())) {
      matchingTitles.push(titles[i].textContent);
    }
  }
  displaySearchResults(matchingTitles);
}

function displaySearchResults(results) {
  var resultsDiv = document.getElementById("searchResults");
  resultsDiv.innerHTML = "";

  if (results.length === 0) {
    resultsDiv.textContent = "No matching titles found.";
  } else {
    var ul = document.createElement("ul");

    for (var i = 0; i < results.length; i++) {
      var li = document.createElement("li");
      li.textContent = results[i];
      ul.appendChild(li);
    }

    resultsDiv.appendChild(ul);
  }
}

