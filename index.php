<?php

if($_POST["submit"]) {
    $recipient="TheWMDog@gmail.com";
    $subject="New Subscriber";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender $senderEmail");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!doctype html>
<html>
    <head>
        <title>The Well Mannered Dog</title>
        <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@100;400&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <header class="full-width">
            <div class="half-width">
                <h1>The Well Mannered Dog</h1>
            </div>
        </header>
        <main>
            <section class="full-width">
                <div class="half-width">
                    <h2><a href="https://www.facebook.com/groups/598288981036859/" target="_BLANK">Join our Facebook community!</a></h2>
                    <p>This is a group for dog owners looking to learn and share science based tips, tricks, and health facts about dogs!
                        <br><br>We advocate for the health of the dog above all else and will provide education on proper nutrition, body condition, and grooming habits.
                        <br><br><strong>In our group, you'll find:</strong></p>
                     <ul>
                        <li>grooming tips</li>
                        <li>science-based nutrition tips</li>
                        <li>weekly training tips</li>
                        <li>monthly training challenges</li>
                        <li>first access to online training workshops</li>
                    </ul><br>
                    <a href="https://www.facebook.com/groups/598288981036859/" target="_blank" class="button">Click here to join</a>
                    <p class="warning"><br><em>This is meant to be a fun, educational environment advocating for the dog. We will not tolerate shaming other members.</em></p>
                </div>
                <div class="half-width">
                    <img src="img/facebook-community.png" alt="Screen shot of The Well Mannered Dog Facebook Community"/>
                </div>
                </section>
                <section class="full-width">
                    <div class="half-width">
                        <img src="img/sharon.png" alt="Portrait of Sharon and Achilles"/>
                    </div>
                    <div class="half-width">
                        <h2>The community is run by Sharon Staff</h2>
                        <p>Sharon has 5 years experience training foster dogs to be more adoptable through both basic and advanced obedience training. 
                            <br><br>She has rehabbed an aggression case that was scheduled to be euthanized (Achilles, pictured to the left), who has become the smiling face of her brand. 
                            <br><br>She also has 8 years experience with pet sitting and 2 years experience working in a veterinarian's practice.
                            <br><br>Sharon hopes to build a community of dog owners and teach them about the basics of dog care - grooming, nutrition, training, and more.
                        </p>
                        <h3>Not every dog owner can afford obedience courses.</h3>
                        <p>Sharon wants to bring the training class experience to dog owners who otherwise wouldn't be able to afford it (or don't have the hours to commit). In this group, you'll have first access to her online obedience workshops when they're available.</p>
                    </div>
                </section>
                <section class="full-width">
                    <h1>Would you like to join the mailing list?</h1>
                    <div class="container">
                        <form method="post" action="index.php">
                          <label for="fname">First Name</label>
                          <input type="text" id="fname" name="sender" placeholder="Your name..">
                      
                          <label for="email">Email</label>
                          <input type="text" id="email" name="senderemail" placeholder="Email address...">
                      
                          <input type="submit" value="Submit">
                        </form>
                      </div>
                </section>
                <footer class="full-width">
                    <div class="half-width">
                        <h1>The Well Mannered Dog</h1>
                    </div>
                    <div id="nav">
                        <ul>
                            <li>Find <em>The Well Mannered Dog</em> on the web:</li>
                            <li><a href="https://www.facebook.com/thewellmannereddog" target="_blank"><img src="img/facebook.png"/></a>
                            <li><a href="https://www.facebook.com/thewellmannereddog" target="_blank"><img src="img/pinterest.png"/></a>
                        </ul>
                    </div>
                </footer>
         </main>
    </body>
</html>
