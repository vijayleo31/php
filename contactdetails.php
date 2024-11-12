<?php include('includes/header.php'); ?>

<div class="container my-5">
    <h2>Contact Me</h2>
    <form action="contact.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['Vijay Yadav']);
        $email = htmlspecialchars($_POST['vijayyadavvj31@gmail.com']);
        $message = htmlspecialchars($_POST['Learn Tech Explore World']);
        
        echo "<p>Thank you, $name. Your message has been sent.</p>";
    }
    ?>
</div>

<?php include('includes/footer.php'); ?>