<?php
include 'partials/header.php';
?>
<h1>SEND US AN EMIAL</h1>
<h3>We want read it.</h3>

<form action="">
        <label for="text">Meno:
        <input type="text" name="name" placeholder="Meno" required>
        </label>
        <label for="email">Email:
        <input type="email" name="email" placeholder="@" required>
        </label>
        <label for="message">Poznámky:
        <textarea name="message" ></textarea>
        </label>
        <button >Send formular button</button>
</form>

<?php
include 'partials/footer.php';
?>