<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link rel="stylesheet" href="css/category.css">
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
            <li><a href="/">Home</a></li>
            <li><a href="/category" class="active">Category</a></li>
            <li><a href="/aboutUs">About Us</a></li>
            <li><a href="/login">Login</a></li>
          </ul>
        </nav>
      </header>

      <div class="calendar-container">
        <section class="calendar">
            <section class="calendar-item" data-event="Details for Event 1">
                <div class="date">1</div>
                <div class="event">Event 1</div>
            </section>
            <section class="calendar-item" data-event="Details for Event 2">
                <div class="date">2</div>
                <div class="event">Event 2</div>
            </section>
            <section class="calendar-item" data-event="Details for Event 3">
                <div class="date">3</div>
                <div class="event">Event 3</div>
            </section>
        </section>
    </div>

    <script> 
// Select all calendar items
const calendarItems = document.querySelectorAll('.calendar-item');

// Add click event to each calendar item
calendarItems.forEach(item => {
    item.addEventListener('click', () => {
        const eventDetail = item.getAttribute('data-event');
        alert(eventDetail); // Show event details in an alert
    });
});
      </script>

</body>
</html>