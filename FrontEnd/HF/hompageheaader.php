 <!-- Header of the page  -->

 <?php
session_start();

?>
    <header>
        <nav id="navigation">

            <div id="logo" class="navitem">
                <a href="homepage.php"><h2>EVENTRAA</h2></a>
            </div>

            <div class="navitem-container">
                <div id="navlist" class="navitem">
                    <ul>



                                      <?php
if (!isset($_SESSION['Email'])) {
    echo '

                                        <li ><a href="login.php">Login</a></li>




                                            <li ><a href="signup.php">Signup</a></li>
';} else {
    echo '
                            <li class="max min "><a href="events.php">Events</a></li>




                            <li class="max"><a href="ourservices.php">Our Services</a></li>




                            <li class="max"><a  id="log" href="createEvent.php"> Create event</a></li>

                            <li class="min min-m""><a  id="log" href="createEvent.php"> <svg xmlns="http://www.w3.org/2000/svg"  height= "24" viewBox="0 0 24 24"><defs><style>.cls-1{fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:bevel;stroke-width:1.5px;}</style></defs><g id="ic-actions-add-simple"><line class="cls-1" x1="20" y1="12" x2="4" y2="12"/><line class="cls-1" x1="12" y1="20" x2="12" y2="4"/></g></svg></a></li>


  <li class="max min"><a   id="User-pro" onclick="click" href="#"> <svg xmlns="http://www.w3.org/2000/svg" height="24"viewBox="0 0 24 24"><defs><style>.cls-1,.cls-2{fill:none;stroke:#fff;stroke-linecap:round;stroke-width:1.5px;}.cls-1{stroke-linejoin:round;}.cls-2{stroke-linejoin:bevel;}</style></defs><g id="ic-actions-user"><path class="cls-1" d="M3,22l.79-2.88c2.61-9.5,13.81-9.5,16.42,0L21,22"/><circle class="cls-2" cx="12" cy="6.98" r="5"/></g></svg></a></li>
                                       ';}

?>




                    </ul>
                </div>


            </div>

        </nav>
    </header>

    <div class="userdash"  >
    <div class="dash-display" id="logout">
        <ul>
        <a   href="logout.php"><li>Logout</li></a>
        <a   href="EventManage.php"><li>Manage Events</li></a>

        </ul>
    </div>
    </div>

    <script>
         var userPro = document.getElementById('User-pro');
         var logout = document.getElementById('logout');

         userPro.addEventListener('click',(e)=>{
             if(logout.style.display=="block"){
                 logout.style.display ="none";
             }
             else{
                 logout.style.display="block";
             }
         })
    </script>
