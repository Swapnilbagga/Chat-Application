



<?php
   include_once "header.php";

?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter the Email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter the Password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image"  required>
                </div>
                <div class="field button">
                <button type="submit">Continue to Chat</button>
                </div>
            </form>
            <div class=" form link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="javascript/pass-shadow-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>