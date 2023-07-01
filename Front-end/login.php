

<?php
   include_once "header.php";

?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt"></div>
                
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name ="email"  placeholder="Enter your Email" required >
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name ="password" placeholder="Enter your Password" required>
                    <i class="fas fa-eye"></i>
                </div>
                

                <div class="field button">
                <button type="submit">Continue to Chat</button>
                </div>
            </form>
            <div class=" form link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>
    <script src="javascript/pass-shadow-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>