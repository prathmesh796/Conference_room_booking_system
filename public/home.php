<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conference Room Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" integrity="sha512-liDnOrsa/NzR+4VyWQ3fBzsDBzal338A1VfUpQvAcdt+eL88ePCOd3n9VQpdA0Yxi4yglmLy/AmH+Lrzmn0eMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.11/index.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.11/index.global.js"></script>
  <link rel="stylesheet" href="../CSS/home.css">
</head>

<body>
  <nav>
    <div class="logo">
      <img src="../Images/logo1.png">
    </div>
    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">Rooms</a></li>
      <li><a href="#">Bookings</a></li>
      <li><a href="user_login.php">Login</a></li>
      <li><a href="register.php">SignUp</a></li>
    </ul>
  </nav>
  <div class="advertise">
    <div class="blurry-image">
      <img src="../Images/signup.png">
      <div class="text-overlay">
        <h2>Book Conference Room Now!</h2>
        <p>Get access to conference room in
        <h3>One Click</h3>
        </p>
        <button class="btn" onclick="redirectToSignup()">Sign Up</button>
      </div>
    </div>
  </div>
  <div class="container">
    <div id="calendar"></div>
  </div>



  <script>
    function redirectToSignup() {
      // Redirect to the signup page
      window.location.href = "register.php";
    }

    function calender() {
      //calender code
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          // Set your desired options here
          selectable: true,
          select: function(info) {
            var selectedDate = info.startStr;
            //alert('You have selected date: ' + selectedDate);


            // Call the slotselection function after the date selection alert
            slotselection();
          }
        });

        calendar.render();
      });

    }


    function slotselection() {
      var container = document.querySelector('.container');
      if (!container) {
        console.error("Container element not found.");
        return;
      }

      container.innerHTML = `<h2>Select Slot for Meeting</h2>
    <div id="slotContainer"></div>
    <button id="confirmSlot">Confirm Slot</button>`;

      var slotContainer = document.getElementById('slotContainer');
      var confirmSlotButton = document.getElementById('confirmSlot');

      var availableSlots = [{
          time: '09:00 AM',
          available: true
        },
        {
          time: '10:00 AM',
          available: true
        },
        {
          time: '11:00 AM',
          available: true
        },
        {
          time: '02:00 PM',
          available: false
        }, // Example of a booked slot
        {
          time: '03:00 PM',
          available: true
        },
        {
          time: '04:00 PM',
          available: true
        },
      ];

      availableSlots.forEach(function(slot) {
        var slotElement = document.createElement('div');
        slotElement.classList.add('slot');
        var input = document.createElement('input');
        input.type = 'radio';
        input.name = 'slot';
        input.value = slot.time;
        input.disabled = !slot.available;

        var label = document.createElement('label');
        label.textContent = slot.time;
        slotElement.appendChild(input);
        slotElement.appendChild(label);
        slotContainer.appendChild(slotElement);
      });

      confirmSlotButton.addEventListener('click', function() {
        var selectedSlot = document.querySelector('input[name="slot"]:checked');

        if (selectedSlot) {
          alert('You have selected slot: ' + selectedSlot.value);
        } else {
          alert('Please select a slot before confirming.');
        }
      });


    }
    calender();

  </script>

</body>

</html>