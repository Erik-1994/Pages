<?php

include 'partials/header.php'

?>

<img src="assets/img/map.png" alt="">

<div class="from-wrap container group">
        <h1>Kontaktný formulár</h1>

        <form class="float-left" action="">
                <label for="email"> <p>Email</p>
                        <input type="email" name="email" placeholder="@" required>
                </label>
                <label for="text"> <p>Meno</p>
                        <input type="text" name="name" placeholder="Meno" required>
                </label>
                <label for="message"> <p>Správa</p>

                        <textarea name="message"></textarea>
                </label>
                <button>Odoslať</button>
        </form>

        <ul class="contact-list float-right">
                <li>NightFury s.r.o.</li>
                <li>Th Spot</li>
                <li>Námesite SNP</li>
                <li>010 01 London</li>
                <li>United Kingdom</li>
                <li>
                        <a href="tel:++421994994994">+421 994 994 994</a>
                        <a href="mailto:test@gmail.uk">test@gmail.uk</a>
                </li>
        </ul>

</div>


</div>

<?php

include 'partials/footer.php'

?>