
<?php require APPROOT . '/views/includes/header.php'; ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/templatemo-style-devrin.css">
<body>

    <nav>
        <div class="logo">
            <a href="index.html">ShortLight <em>Productions</em></a>
        </div>
      <div class="menu-icon">
        <span></span>
      </div>
    </nav>

    <div class="page-heading">
        <div class="container">
            <div class="heading-content">
                <h1>Webmaster <em>Controls</em></h1>
            </div>
        </div>
    </div>


    <div class="tool-box">
        <div class="container">
            <div class="blog-post">
                <div class="admin-management">
                    <h1>
                        Manage Administrators
                    </h1>  
                    <a href="#">Add Administrator</a>
                    <!-- table listing all admins -->
                    <table class="table table-bordered table table-striped table-hover">
                        <thead>
                            <tr class="bg-info bg-gradient">
                                <td colspan="1">
                                    ID
                                </td>
                                <td colspan="2">
                                    Actions
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- list all your guys -->
                            <tr>
                                <td>
                                    John Doe
                                </td>
                                <td>
                                    <a href="#">Rename</a>
                                </td>
                                <td>
                                    <a href="#">Revoke</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Amelia Flame
                                </td>
                                <td>
                                    <a href="#">Rename</a>
                                </td>
                                <td>
                                    <a href="#">Revoke</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    AWWWWWWW BWWWWWWW
                                </td>
                                <td>
                                    <a href="#">Rename</a>
                                </td>
                                <td>
                                    <a href="#">Revoke</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="post-management">
                    <h1>
                        Manage Posts
                    </h1>  
                    <a href="#">Add Post</a>
                    <!-- table listing all posts -->
                    <table class="table table-bordered table table-striped table-hover">
                        <thead>
                            <tr class="bg-info bg-gradient">
                                <td colspan="1">
                                    Post Title
                                </td>
                                <td colspan="1">
                                    Post Page
                                </td>
                                <td colspan="1">
                                    Author
                                </td>
                                <td colspan="2">
                                    Actions
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- list of posts -->
                            <tr>
                                <td>
                                    Work Ethic
                                </td>
                                <td>
                                    <a href="#">About Us</a>
                                </td>
                                <td>
                                    Amelia Flame
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                                <td>
                                    <a href="#">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Journeys in Photography
                                </td>
                                <td>
                                    <a href="#">Personal Projects</a>
                                </td>
                                <td>
                                    AWWWWWWW BWWWWWWW
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                                <td>
                                    <a href="#">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="telemetry-management">
                    <h1>
                        Site Activity
                    </h1>  
                    <!-- everything that happened on the site -->
                    <table class="table table-bordered table table-striped table-hover">
                        <thead>
                            <tr class="bg-info bg-gradient">
                                <td colspan="1">
                                    Action
                                </td>
                                <td colspan="1">
                                    Timestamp
                                </td>
                                <td colspan="1">
                                    IP Address
                                </td>
                                <td colspan="1">
                                    User
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- list of actions logged -->
                            <tr>
                                <td>
                                    ADMIN_MAKE
                                </td>
                                <td>
                                    1648832439
                                </td>
                                <td>
                                    46.8.8.12
                                </td>
                                <td>
                                    WEBMASTER
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    POST_CREATE
                                </td>
                                <td>
                                    1643752839
                                </td>
                                <td>
                                    70.52.4.108
                                </td>
                                <td>
                                    Amelia Flame
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    POST_EDIT
                                </td>
                                <td>
                                    1643774739
                                </td>
                                <td>
                                    40.158.8.1
                                </td>
                                <td>
                                    AWWWWWWW BWWWWWWW
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
<footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2022 Shortlight Productions</p>
            </div>
        </div>
</footer>


  
    

    <section class="overlay-menu">
      <div class="container">
        <div class="row">
          <div class="main-menu">
              <ul>
                  <li>
                      <a href="index.html">Home - Full-width</a>
                  </li>
                  <li>
                      <a href="masonry.html">Home - Masonry</a>
                  </li>
                  <li>
                      <a href="grid.html">Home - Small-width</a>
                  </li>
                  <li>
                      <a href="about.html">About Us</a>
                  </li>
                  <li>
                      <a href="blog.html">Blog Entries</a>
                  </li>
                  <li>
                      <a href="single-post.html">Single Post</a>
                  </li>
              </ul>
              <p>We create awesome templates for you</p>
          </div>
        </div>
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo URLROOT; ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="<?php echo URLROOT; ?>/js/vendor/bootstrap.min.js"></script>
    
    <script src="<?php echo URLROOT; ?>/js/plugins.js"></script>
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>
