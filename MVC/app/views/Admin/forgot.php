<?php require APPROOT . '/views/includes/header.php'; ?>
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/templatemo-styleigor.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/adminLogin.css">
<body>

<?php require APPROOT . '/views/includes/nav.php'; ?>

    <div class="page-heading">
        <div class="container">
            <div class="heading-content">
                <h1>Admin <em>Password Reset</em></h1>
            </div>
        </div>
    </div>
<body>    
    <form>  
        <div class="container">
            <p>Please enter a valid username that is in need of a password change!</p>
            <label>Username : </label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br> </br>
            <label>Old Password : </label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <label>New Password : </label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <label>Confirm New Password : </label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit">Reset</button>
            <div style="text-align: center;">
            </div>
</form>     
</body>     
</html> 
<?php require APPROOT . '/views/includes/footer.php'; ?>