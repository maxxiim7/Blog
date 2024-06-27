<div class="navbarleft"> 
            <ul>
                    <li><a class="home" href="/"><?= urlIs("/") ? "<style>.home {text-shadow: 0 0 32px turquoise;}</style>" : null; ?><img class="leftimg" src="/img/homew.svg" alt="home-icon">Home</a></li>
                    <li><a class="games" href="/game"><?= urlIs("/game") ? "<style>.games {text-shadow: 0 0 32px turquoise;}</style>" : null; ?><img class="leftimg" src="/img/gamesw.png" alt="games-icon">Games</a></li>
                    <li><a class="messages" href="/messages"><?= urlIs("/messages") ? "<style>.messages {text-shadow: 0 0 32px turquoise;}</style>" : null; ?><img class="leftimg" src="/img/messagesw.svg" alt="messages-icon">Messages</a></li>
                    <li><a class="profile" href="/profile"><?= urlIs("/profile") ? "<style>.profile {text-shadow: 0 0 32px turquoise;}</style>" : null; ?><img class="leftimg" src="/img/profilew.png" alt="profile-icon">Profile</a></li>
                    <li><a class="contact" href="/contact"><?= urlIs("/contact") ? "<style>.contact {text-shadow: 0 0 32px turquoise;}</style>" : null; ?><img class="leftimg" src="/img/profilew.png" alt="contact-icon">Contact Us</a></li>
                    </ul>       
</div>