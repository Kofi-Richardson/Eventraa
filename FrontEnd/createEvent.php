

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="3"> -->
    <title>Eventraa-Create Event</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="createEvent.css">

</head>
<body>
    <!-- Header of the page  -->

   <?php
require "../FrontEnd/HF/hompageheaader.php"
?>

    <section class="create-event-content">

        <div class="create-event-aside">
            <h1>CREATE YOUR</h1>
            <h1>EVENT</h1>
        </div>

        <form action="../EventHandler/eventFormReg.php" method="POST" class="create-event-form">


            <div class="event-name">
                <label for="event-title"><h3>Event title</h3></label>
                <input type="text" id="event-title" class="create-input" name="event-title">

                <label for="event-speaker"><h3>Event Speaker</h3></label>
                <input type="text" id="event-speaker" class="create-input" name="event-speaker">

                <label for="event-description"><h3>Description</h3></label>
                <p id="event-description-header">Describe your event so those viewing will have a fair idea of what your events is about</p>
                <textarea name="event-description" id="event-description"class="create-input" cols="30" rows="5"></textarea>

                 <label for="event-image-link"><h4>Event Cover image link</h4></label>
                <input type="text" id="event-image-link" class="create-input"name="event-image-link">
            </div>

            <div class="location-container">

            <div class="event-location">
                <h3>Location</h3>
              <div class="location-buttom">


                <label class="radio" onclick="click">
                 <input value="online" type="radio" id="Online" name="online">
                        <div class="content" >
                            Online
                        </div>
                 </label>

                <label class="radio " onclick="click">
                    <input value="venue" type="radio" id="Venue" name="online" >
                    <div class="content " >
                        Venue
                    </div>
                </label>



              </div>

            <div class="venue-search" id="Vsearch">
                 <div class="venue-location" >
                    <input type="text" name="venue" id="location-add" class="location" placeholder="    Enter  venue or address...">

                </div>

            </div>

            <div class="online-link" id="Olink">
                 <div class="via-online" >
                    <input type="text" name="online-address" id="online-add" class="online" placeholder="    Link for online Event.....">

                </div>

            </div>


            </div>
            </div>


            <div class="date-time-container">
                <div class="date-time-container2">
                      <h3>Date</h3>
                <div class="start-date-time">
                    <label for="start-date">Start date</label>
                    <div class="start-date">
                        <input type="date" class="date-time" name="start-date">
                    </div>

                    <label for="start-time">Start time</label>

                    <div class="start-time">
                        <input type="time" name="time-start" id="start-time" class="date-time">
                    </div>



                </div>

                <div class="end-date-time">
                    <label for="end-date">End date</label>
                    <div class="end-date">
                        <input type="date" class="date-time" name="end-date">
                    </div>

                    <label for="end-time">Start time</label>

                    <div class="end-time">
                        <input type="time" name="time-end" id="end-time" class="date-time">
                    </div>



                </div>

            </div>


                </div>

            <div class="submitEvent">
            <input type="submit" value="Create Event" id="Eventsubmit" name="Eventsubmit">
            </div>


    </form>


    </section>




    <?php
require './HF/footer.php';
?>







    <script >

        //Script for Location
         var venue =document.getElementById('Venue');
         var Vsearch =document.getElementById('Vsearch');
         var online =document.getElementById('Online');
         var Olink = document.getElementById('Olink');

          online.addEventListener('click',(e)=>
          {
            Vsearch.style.display='none';
            Olink.style.display = 'block';

         })

         venue.addEventListener('click',(e)=>{

             Olink.style.display='none';
             Vsearch.style.display = 'block';

         })









    </script>



</body>
</html>
