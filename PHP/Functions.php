// Print array to check the data and exit.

function printArrExit($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    exit();
}

// Escape safe
function escape_safe($str){
    return mysqli_escape_string($conn, $str);
}


// Validate String

function validate($data){
    if($data != ''){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}


// Validate email
function email($data)
{
    if ($data != '') {
        $data = filter_var($data, FILTER_SANITIZE_EMAIL);
        if(filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return $data;
        }else{
            return "Invalid Email";
        }
    }
}
