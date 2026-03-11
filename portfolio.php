<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
     <link rel="stylesheet" href="style.css">
</head>
        <header>
        <nav>
            <div class="logo">Portfolio</div>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                  <li><a href="#about">Bootstrap</a></li>
                    <li><a href="#about 1">JavaScript</a></li>
            </ul>
        </nav>
    </header>

<body>

     <section id="about">
        <div class="section-title">
            <h2>My Bootstrap Activities</h2>

        </div>
        <div class="about-content">

            
            <div class="about-grid">
                <div class="about-item">

    <ul>
    <li><a href="portfolio/bootstrap/activity1.html" target="_blank" rel= "noopener noreffere">Activity 1</a></li>

    <li><a href="portfolio/bootstrap/activity2.html" target="_blank" rel= "noopener noreffere">Activity 2</a></li>
    
     <li><a href="portfolio/bootstrap/activity3.html" target="_blank" rel= "noopener noreffere">Activity 3</a></li>

    <li><a href="portfolio/bootstrap/activity4.html" target="_blank" rel= "noopener noreffere">Activity 4</a></li>

    <li><a href="portfolio/bootstrap/activity5.html" target="_blank" rel= "noopener noreffere">Activity 5</a></li>

 </ul>
</section>

    <link rel="stylesheet" href="css/style.css">

      <section id="about 1">
        <div class="section-title">
            <h2>My JavaScript Activities</h2>

        </div>
        <div class="about-content">

            
            <div class="about-grid">
                <div class="about-item">

    <ul>
    <li><a href="portfolio/activities/activity1.html" target="_blank" rel= "noopener noreffere">Activity 1</a></li>

    <li><a href="portfolio/activities/activity2.html" target="_blank" rel= "noopener noreffere">Activity 2</a></li>
    
     <li><a href="portfolio/activities/activity3.html" target="_blank" rel= "noopener noreffere">Activity 3</a></li>

    <li><a href="portfolio/activities/activity4.html" target="_blank" rel= "noopener noreffere">Activity 4</a></li>

    <li><a href="portfolio/activities/activity5.html" target="_blank" rel= "noopener noreffere">Activity 5</a></li>

     <li><a href="portfolio/activities/activity6.html" target="_blank" rel= "noopener noreffere">Activity 6</a></li>

     <li><a href="portfolio/activities/activity7.html" target="_blank" rel= "noopener noreffere">Activity 7</a></li>

     <li><a href="portfolio/activities/activity8.html" target="_blank" rel= "noopener noreffere">Activity 8</a></li>
 
    </ul>
</section>
    <button id="backToTop" onclick="scrollToTop()">Back to top</button>

<script>
const btn = document.getElementById("backToTop");

window.onscroll = function () {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    btn.style.display = "block";
  } else {
    btn.style.display = "none";
  }
};

function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}
</script>


    <!-- FOOTER -->
    <footer>
        <p>&copy; 2025 Marco Daniel Tabanao - All Rights Reserved</p>
        <p>Computer & Information Technology Student</p>
    </footer>



 
</body>
</html>
