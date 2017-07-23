<?php include "includes/header.php" ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcome to POSTS
                            <small>Author</small>
                        </h1>

                        <?php 
                        if(isset($_GET['source'])) {
                            $source = ($_GET['source']);
                        } else {
                            $source = '';
                        }

                        switch($source) {
                            case 'add_post';
                            include "includes/add_post.php";
                            break;

                            case '1';
                            echo "one";
                            break;

                            case '2';
                            echo "two";
                            break;

                            default:
                            include "includes/view_all_posts.php";
                            break;
                        }

                         ?>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "includes/footer.php" ?>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
