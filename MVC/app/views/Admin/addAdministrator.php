<?php require APPROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/templatemo-styleigor.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/adminLogin.css">
<body>

<?php require APPROOT . '/views/includes/nav.php'; ?>

    <div class="page-heading">
        <div class="container">
            <div class="heading-content">
                <h1>Add <em>Administrator</em></h1>
            </div>
        </div>
    </div>

</style>   
</head>    
<body>    
    <form>  
        <div class="container">   
            <label>Name : </label>   
            <input type="text" placeholder="Name" name="name" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Password" name="passwd" required>  
            <label>Retype Password : </label>   
            <input type="password" placeholder="Confirm password" name="retypePasswd" required> 
            <label>Admin Email : </label>   
            <input type="password" placeholder="Admin email" name="adminEmail" required>  
            <button type="submit" id="addAdmin" name="addAdmin">Add</button> 
        </div>   
    </form>     
</body>     
</html> 
<?php require APPROOT . '/views/includes/footer.php'; ?>