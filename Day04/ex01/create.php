<?php
class User_mgmt{
    public  $file_update = TRUE;
    public  $src_dir = '../private';
    public  $src_file = '../private/passwd';
    private $user_dbase = [];

    function hash($my_data)
    {
        return ($my_data);//(hash('whirlpool', $my_data));
    }
    
    function __construct(){
        if (file_exists($this->src_file))
            $this->users = unserialize(file_get_contents($this->src_file));
    }

    function save(){
        if (file_exists($this->src_dir))
            mkdir($this->src_dir);
        return (file_put_contents($this->src_file, serialize($this->user_dbase)));
    }

    function create_user($login, $passwd){
        if ($login == '' || $passwd == '')
            return (FALSE);
        if ($this->get_user($login))
            return (FALSE);

            $this->user_dbase[] = ['login' => $login, 'passwd' => self::hash($passwd)];

        if ($this->save)
            return ($this->save());
    }

    function get_user($login) {
        foreach ($this->users as $user_dbase)
        {
            if (isset($user['login']) && $user['login'] == $login)
                return ($user);
        }
        return (FALSE);
    }
}

$flop = TRUE;

if (isset($_POST['login']) && isset($_POST['passwd']))
{
    $users = new User_mgmt;
    if ($users->create_user($_POST['login'], $_POST['passwd']))
        $flop = FALSE;
}

if (!flop)
    echo ("OK\n");
else
    echo ("ERROR\n");
?>