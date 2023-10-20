Users - <a href="/">Home</a><br/><br/>
<h1>Welcome</h1>
<?php foreach($users as $user): ?>
    <p>User ID: <?php echo $user->getId(); ?>, Name: <?php echo $user->getUsername(); ?></p>
    <?php if ($user->getImage() == "data:image/jpeg;base64,") { ?>
        <p>No Uploaded Image!</p>
        <br>
    <?php } else { ?>
        <p>Image Uploaded: 
            <a href=<?php echo $user->getImage(); ?> target="_blank">Click to view image</a>
        </p>
        <img src=<?php echo $user->getImage(); ?> alt="Embedded Image" width="200" height="150">
    <?php } ?>
<?php endforeach; ?>