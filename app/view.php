<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div id="content">

        <div class="signup auth w-50 mx-auto bg-light p-3">
            <div class="title mx-auto">
                <h4 class="text-center">JOIN TO THE OPPOSITION!!!</h4>
                <img src="https://images.saatchiart.com/saatchi/984876/art/6308127/5377897-XYYTSSDW-6.jpg" alt="">
            </div>
            <form action="/" method="POST">
                <div class="form-group">
                    <label for="username">Your name</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email">Your email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="country">Your country</label>
                    <select name="id_country" class="form-control" id="country">
                    <?php
                        foreach ($countries as $country)
                        {   
                            ?>
                                <option value = '<?php echo $country['id'];?>'> <?php echo $country['country'];?> </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" name="join" class="btn btn-primary mb-2">Join!</button>
            </form>
        </div>

        <div class="opposition-list">
            <h4 class="text-center">There are already <span style="color:red;"><?php echo(count($users));?></span> of us!</h4>
            <h2 class="text-center">OPPOSITION LIST:</h2>
            <table class="table table-sm w-75 mx-auto">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Country</th>
                    <th scope="col">Head CASH ($)</th>
                    </tr>
                </thead>
                <tbody>                
                    <?php
                    foreach ($users as $user)
                        {
                            ?>
                            <tr>
                            <th scope="row"><?php echo($user['username']); ?></th>
                            <td><?php echo($user['email']); ?></td>
                            <td><?php echo($user['country']); ?></td>
                            <td><?php echo($user['reward']); ?></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
	</div>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.bundle.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
