<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"></head>
<body>
</head>
<body>
    <!-- Header with Centered Navigation -->
    <header class="header">
        <nav class="navbar">
          <ul class="nav-links">
            <li><a href="/" class="active">Home</a></li>
            <li><a href="/category">Category</a></li>
            <li><a href="/aboutUs">About Us</a></li>
            <li><a href="/login">Login</a></li>
          </ul>
        </nav>
      </header>

    <!-- Hero Section -->
    <section class="hero">
    <div class="hero-content">
      <h1>Home Event</h1>
      <p>The home for every event in Indonesia</p>
      <div class="search-bar">
        <input type="text" placeholder="Search for events..." aria-label="Search">
        <button type="submit"><img src="img/searchicn.png" alt="Search Icon"></button>
      </div>
    </div>
  </section>

  <!-- Our Event Section -->
<section class="our-event">
  <h2>Our Event</h2>
  <div class="event-gallery">

    <a href="{{  route('k-pop') }}" class="event-card">
      <img src="{{ asset('img/k-pop.jpeg') }}" alt="K-Pop Event">
      <p>K-Pop</p>
      <div class="event-card"></div>
    </a>
   
    <a href="{{ route('rock') }}" class="event-card">
      <img src="{{ asset('img/k-pop.jpeg') }}" alt="Rock Event">
      <p>Rock</p>
      <div class="event-card"> </div>
    </a>


    <a href="{{ route('pop') }}" class="event-card">
      <img src="{{ asset('img/pop.jpeg') }}" alt="Pop Event">
      <p>Pop</p>
      <div class="event-card"></div>
    </a>

    <a href="{{ route('cosplay') }}" class="event-card">
      <img src="{{ asset('img/pop.jpeg') }}" alt="Cosplay Event">
      <p>Cosplay</p>
      <div class="event-card"></div>
    </a>

    <a href="{{ route('koplo') }}" class="event-card">
      <img src="{{ asset('img/pop.jpeg') }}" alt="Koplo Event">
      <p>Koplo</p>
      <div class="event-card"></div>
    </a>
    
  </div>
</section>

<!-- Latest Event Section -->
<section class="latest-event">
  <h2>Latest Event</h2>
  <div class="event-list">
    <div class="event-item">
      <img src="img/pop.jpeg" alt="Cosplay Event">
      <div class="event-content">
        <h3>Cosplay</h3>
        <p class="event-meta">Jakarta, 20 August 2024</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        <a href="#">More...</a>
      </div>
    </div>

    <div class="event-item">
      <img src="img/j-pop.jpg" alt="Jpop Event">
      <div class="event-content">
        <h3>Jpop</h3>
        <p class="event-meta">Jakarta, 15 August 2024</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        <a href="#">More...</a>
      </div>
    </div>

    <div class="event-item">
      <img src="img/k-pop.jpeg" alt="Kpop Event">
      <div class="event-content">
        <h3>Kpop</h3>
        <p class="event-meta">Jakarta, 09 August 2024</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        <a href="#">More...</a>
      </div>
    </div>
  </div>
</section>

<!-- Temukan Kami Section -->
<section class="temukan-kami">
  <h2>Testimonial</h2>
  <div class="testimonial-container">
    <!-- Left Arrow -->
    <div class="arrow left-arrow" onclick="showPreviousTestimonial()">
      <span>&#10094;</span>
    </div>

    <!-- Testimonial Box -->
    <div class="testimonial-box">
      <div class="quote testimonial-content active">
        <span class="quote-mark">“</span>
        <p id="testimonial-quote">
          Pengalaman yang tak terlupakan sih, mulai dari band sampe event beragam banget.
        </p>
        <span class="quote-mark">”</span>
      </div>
      <div class="profile testimonial-content active">
        <div class="profile-image">
          <img id="testimonial-image" src="img/profpic.png" alt="Profile Picture">
        </div>
        <p id="testimonial-name">Fadri</p>
        <p id="testimonial-location">Jakarta</p>
      </div>
    </div>

    <!-- Right Arrow -->
    <div class="arrow right-arrow" onclick="showNextTestimonial()">
      <span>&#10095;</span>
    </div>
  </div>
</section>



<!-- Inline JavaScript -->
  <script>
    const testimonials = [
  {
    quote: "Pengalaman yang tak terlupakan sih, mulai dari band sampe event beragam banget.",
    image: "img/profpic.png",
    name: "Fadri",
    location: "Jakarta",
  },
  {
    quote: "Event yang seru banget! Tidak sabar untuk datang lagi tahun depan.",
    image: "img/profpic.png",
    name: "Rina",
    location: "Bandung",
  },
  {
    quote: "Musiknya luar biasa dan suasananya sangat menyenangkan.",
    image: "img/profpic.png",
    name: "Bayu",
    location: "Surabaya",
  },
];

let currentTestimonialIndex = 0;

function updateTestimonial(index) {
  // Get elements
  const quoteElement = document.getElementById("testimonial-quote");
  const imageElement = document.getElementById("testimonial-image");
  const nameElement = document.getElementById("testimonial-name");
  const locationElement = document.getElementById("testimonial-location");

  // Start fade-out by removing the 'active' class
  const elements = [quoteElement, imageElement, nameElement, locationElement];
  elements.forEach((el) => el.classList.remove("active"));

  // Wait for fade-out to complete, then update content and start fade-in
  setTimeout(() => {
    // Update content
    quoteElement.innerText = testimonials[index].quote;
    imageElement.src = testimonials[index].image;
    nameElement.innerText = testimonials[index].name;
    locationElement.innerText = testimonials[index].location;

    // Start fade-in by adding the 'active' class
    elements.forEach((el) => el.classList.add("active"));
  }, 500); // Match CSS transition duration
}

function showNextTestimonial() {
  currentTestimonialIndex = (currentTestimonialIndex + 1) % testimonials.length;
  updateTestimonial(currentTestimonialIndex);
}

function showPreviousTestimonial() {
  currentTestimonialIndex =
    (currentTestimonialIndex - 1 + testimonials.length) % testimonials.length;
  updateTestimonial(currentTestimonialIndex);
}

// Initialize the first testimonial
updateTestimonial(currentTestimonialIndex);

  
  </script>
</body>
</html>