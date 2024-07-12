<?php
require "connection.php";
$userId = $_SESSION["userId"];
$userName = $_SESSION["userName"];

$result = mysqli_query($db, "SELECT * FROM posts WHERE user_id = $userId ORDER BY post_id DESC;");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="component.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body>

    <div class="container">

        <div class="nav-icon-container">
            <div>
                <a href="feed.php"><i class="bi bi-house-door"></i></a>
            </div>
            <a href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
            </a>
        </div>

        <div class="create-post-url">
            <input id="formShowBtn" type="text" placeholder="What's on your mind?">
        </div>
        <div id="postContainer" class="hide box">
            <form class="d-flex user-input" action="create_post.php" method="post" enctype="multipart/form-data">
                Blog Visibility
                <select class="border" name="selected">
                    <option value="1">Public</option>
                    <option value="0">Private</option>
                </select>
                Blog Title
                <input type="text" name="title" placeholder="Enter your blog title...">

                Blog Banner
                <input type="file" name="uploadImage" accept=".png, .jpg, .jpeg">


                Contents
                <textarea class="border" name="content" rows="10" cols="30" required placeholder="What's on your mind, Chimp?"></textarea>
                <button class="login-btn">Post</button>
            </form>
        </div>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="facebook-card">
                <div class="card-header">

                    <div class="user-info">
                        <img src="https://i.pravatar.cc/60?img=12" alt="Profile Picture" class="profile-pic">
                        <div class="info">
                            <span class="user-name"><?= $userName ?></span>
                            <span class="post-time">June 13 at 1:39 PM</span>
                        </div>
                    </div>
                    <div>
                        <?php if ($row["is_public"] == "0") : ?>
                            <p>
                                <i class="bi bi-file-lock"></i>
                                Private
                            </p>
                        <?php endif ?>
                        <?php if ($row["is_public"] == "1") : ?>
                            <p>
                                <i class="bi bi-globe-americas"></i>
                                Public
                            </p>
                        <?php endif ?>
                    </div>
                </div>
                <div class="card-body">
                    <p class="post-title"><?= $row["post_title"] ?></p>
                    <div>
                        <img src="./uploads/<?= $row["file_name"] ?>" alt="" width="100%">
                    </div>
                    <p class="post-text"><?= $row["post_contents"] ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <script src="script.js"></script>
</body>

</html>