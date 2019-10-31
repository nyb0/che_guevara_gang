<?php
    
    if ( isset($data['join']))
    {
        //echo "<meta http-equiv='refresh' content='0'>";
        $errors = [];
        if ( trim($data['username']) == '')
        {
            $errors[] = 'Enter your name';
        }
        if ( trim($data['email']) == '')
        {
            $errors[] = 'Enter your email';
        }
        if ( ($data['id_country']) == '')
        {
            $errors[] = 'Select your country';
        }

        foreach ($users as $user){
            if ( trim($data['email']) == $user['email'])
            {
                $errors[] = 'You are already joined to the opposition';
            }
        }

        if (empty($errors))
        {
            $reward = random_int(1, 10000);
            $sq = $db->execute("INSERT INTO `users` (username, email, id_country, reward)                          
                              VALUES('{$data['username']}', '{$data['email']}', '{$data['id_country']}', '$reward')");
            
            //header('Location:http://' . $_SERVER['HTTP_HOST'] . '/');
        }
        else
        {
            echo '<div class="text-center" style="color:red;">' . array_shift($errors) . '</div><hr>';
        }
        
    }
    