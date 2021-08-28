## PHP Functions

#### Table Of Content
* [Print Array to Check](#print-array)
* [Validate String](#validate-string)
* [Validate Email](#validate-email)
* [Validate Reas Escape](#real-escape)


#### #Print array to check the data and exit.
   
```php
function printArrExit($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    exit();
}  
``` 
<a name="real-escape"></a>
#### #Real Escape

```php
function escape_safe($str){
    return mysqli_escape_string($conn, $str);
}
```
<a name="validate-string"></a>
#### #Validate String

```php
function validate($data){
    if($data != ''){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
```
<a name="validate-email"></a>
#### #Validate email

```php
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
```
