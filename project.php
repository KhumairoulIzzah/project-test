<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <img class="logo" src="suitmedia.png" width="100px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="#">Work</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">Services</a>
            <a class="nav-link" href="#">Ideas</a>
            <a class="nav-link" href="#">Careers</a>
            <a class="nav-link" href="#">Contact</a>            
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="banner">
    <h1>Ideas Page</h1>
  </div>
  <div class="options">
    <select id="sort" onchange="sortPosts()">
      <option value="newest">Newest</option>
      <option value="oldest">Oldest</option>
    </select>
    <select id="show-per-page" onchange="showPosts()">
      <option value="10">10</option>
      <option value="20">20</option>
      <option value="50">50</option>
    </select>
  </div>
  <div class="list-post" id="list-post">
    <div class="post-card">
      <img src="daffodil.jpg" alt="Post 1" class="post-thumbnail">
      <div class="post-title">Bunga daffodil juga kaya akan makna, simbol, dan nilai budaya. Bunga ini dinamai dari tokoh mitologi Yunani, Narcissus, yang terpesona oleh pantulan dirinya sendiri di air dan akhirnya tenggelam. Karena itu, bunga daffodil sering dihubungkan dengan rasa percaya diri atau kesombongan.</div>
      <div class="post-date">12/23/2023</div>
    </div>
    <div class="post-card">
      <img src="lotus.jpg" alt="Post 2" class="post-thumbnail">
      <div class="post-title">Bunga lotus juga melambangkan kelahiran kembali, harapan, dan kekuatan, karena munculnya di awal musim semi dan kemampuannya bertahan hidup selama ribuan tahun.</div>
      <div class="post-date">12/22/2023</div>
    </div>
    <div class="post-card">
      <img src="matahari.jpg" alt="Post 3" class="post-thumbnail">
      <div class="post-title">Bunga matahari memiliki banyak manfaat, baik untuk manusia maupun untuk lingkungan. Biji bunga matahari bisa dimakan mentah, direbus, digoreng, atau diolah menjadi mentega, selai, atau tepung.</div>
      <div class="post-date">12/21/2023</div>
    </div>
    <div class="post-card">
      <img src="peony.jpg" alt="Post 4" class="post-thumbnail">
      <div class="post-title">Bunga peony memiliki makna simbolis, terutama dalam agama-agama seperti Hinduisme, Buddha, Sikhisme, dan Jainisme. Bunga ini melambangkan kesucian, pencerahan, dan ketahanan, karena mampu mekar di atas air kotor tanpa terpengaruh oleh lingkungannya.</div>
      <div class="post-date">12/20/2023</div>
    </div>
    <div class="post-card">
      <img src="daisy.jpeg" alt="Post 5" class="post-thumbnail">
      <div class="post-title">Bunga daisy memiliki banyak makna simbolis, tergantung pada jenis dan warnanya. Secara umum, bunga daisy melambangkan awal yang baru, harapan, dan kebahagiaan. Bunga daisy juga sering dikaitkan dengan cinta, keceriaan, kecantikan, kesucian, dan kesederhanaan.</div>
      <div class="post-date">12/19/2023</div>
    </div>
    <div class="post-card">
      <img src="edelweis.jpg" alt="Post 6" class="post-thumbnail">
      <div class="post-title">Bunga ini juga melambangkan cinta yang setia, pengabdian, dan pengorbanan, karena orang-orang harus berjuang untuk mendapatkan bunga ini di tempat yang sulit dan berbahaya.</div>
      <div class="post-date">12/18/2023</div>
    </div>
  </div>
  <div class="pagination" id="pagination">
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
  </div>
  <script>
    // Get the header element
    var header = document.getElementById("header");

    // Get the offset position of the header
    var sticky = header.offsetTop;

    // Add an event listener for scrolling
    window.addEventListener("scroll", function() {
      // Get the current scroll position
      var currentScrollPos = window.pageYOffset;

      // Compare the current scroll position with the previous one
      if (currentScrollPos > prevScrollPos) {
        // Hide the header when scrolling down
        header.classList.add("hide-header");
      } else {
        // Show the header when scrolling up
        header.classList.remove("hide-header");
      }

      // Update the previous scroll position
      prevScrollPos = currentScrollPos;
    });

    // Initialize the previous scroll position
    var prevScrollPos = window.pageYOffset;

    // Get the list post element
    var listPost = document.getElementById("list-post");

    // Get the pagination element
    var pagination = document.getElementById("pagination");

    // Get the sort element
    var sort = document.getElementById("sort");

    // Get the show-per-page element
    var showPerPage = document.getElementById("show-per-page");

    // Get the post cards
    var postCards = listPost.children;

    // Initialize the current page
    var currentPage = 1;

    // Initialize the number of posts per page
    var postsPerPage = 10;

    // Initialize the number of pages
    var numberOfPages = Math.ceil(postCards.length / postsPerPage);

    // Create a function to sort the posts by date
    function sortPosts() {
      // Get the selected value of the sort element
      var selectedValue = sort.value;

      // Create an array to store the post cards and their dates
      var postArray = [];

      // Loop through the post cards
      for (var i = 0; i < postCards.length; i++) {
        // Get the post card
        var postCard = postCards[i];

        // Get the post date
        var postDate = postCard.querySelector(".post-date").textContent;

        // Convert the post date to a Date object
        var dateObject = new Date(postDate);

        // Push the post card and the date object to the array
        postArray.push({
          postCard: postCard,
          dateObject: dateObject
        });
      }

      // Sort the array by the date object
      postArray.sort(function(a, b) {
        // Compare the date objects
        if (selectedValue == "newest") {
          // Sort by
  </script>
</body>
<style>
    .navbar{
        background-color: orange;
      }
      .nav-link{
        color: white;
      }
      .logo{
        margin-left: 5%;
        margin-right: 50%;
      }
      .banner {
          height: 500px;
          background-image: url("background.jpg");
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          clip-path: polygon(0 0, 100% 0, 100% 80%, 0% 100%);
          position: relative;
        }
        .banner h1 {
        margin-left: 45%;
          color: white;
          font-size: 50px;
        }

      /* Style the list post with a grid layout, a sorting function, and a pagination */
      .list-post {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 20px;
        margin: 20px;
      }

      /* Style the post card with a thumbnail, a title, and a date */
      .post-card {
        border: 1px solid #ccc;
        box-shadow: 2px 2px 5px #ccc;
      }

      /* Style the post thumbnail with a fixed ratio and lazy loading */
      .post-thumbnail {
        width: 100%;
        height: 200px;
        object-fit: cover;
        loading: lazy;
      }

      /* Style the post title with a maximum height and an ellipsis */
      .post-title {
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
      }

      /* Style the post date */
      .post-date {
        padding: 10px;
        color: #999;
        font-size: 16px;
      }

      /* Style the sort and show-per-page options */
      .options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 20px;
      }

      /* Style the select element */
      .options select {
        padding: 5px;
        border: 1px solid #ccc;
      }

      /* Style the pagination */
      .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px;
      }

      /* Style the pagination links */
      .pagination a {
        display: inline-block;
        padding: 10px;
        text-decoration: none;
        color: black;
        border: 1px solid #ccc;
      }

      /* Style the current page link */
      .pagination a.active {
        background-color: black;
        color: white;
      }

      /* Add media queries for responsiveness */
      @media screen and (max-width: 800px) {
        .list-post {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media screen and (max-width: 600px) {
        .list-post {
          grid-template-columns: 1fr;
        }
      }
</style>
</head>
</html>