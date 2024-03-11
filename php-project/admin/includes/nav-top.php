<?php 
                $count_que="SELECT COUNT(*) AS total FROM enquiries WHERE STATUS=1";
                $count=$conn->query( $count_que);
                $unread=mysqli_fetch_assoc($count) ;       
                        ?>
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/php-notes/php-project/index.php" target="_blank">COMPANY NAME</a>
            </div>

            <div class="header-right">
               
                <a href="message-task.html" class="btn btn-info" title="New Message"><b><?= $unread['total'] ?> </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>