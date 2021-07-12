
## Important CRUD Classes

#### Table Of Content

* [Database Connection](#connection)
* [Fetch All Data Method](#fetch-all)


<a name="connection"></a>

<details> 
    <summary> <b>Connection Class</b> </summary>
    
```php
class Database
{
    private string $hostname = 'localhost';
    private string $user = 'root';
    private string $pass = '';
    private string $dbname = 'cms_ecommerce';
    public $conn = null;

    // Create Connection
    public function __construct()
    {
        if ($this->conn == null) {
            $this->conn = mysqli_connect($this->hostname, $this->user, $this->password, $this->dbname);
        }
        if ($this->conn->connect_error) {
            echo "Error : " . $this->conn->connect_error;
        }
    }

    // Connection Close
    public function __destruct()
    {
        if ($this->conn != null) {
            $this->conn->close();
            $this->conn = null;
        }
    }
```
    
</details>

<a name="fetch-all"></a>
<details>
    <summary><b>Fetch All Data From A Table</b></summary>
    
```php 
    // Fetch All Data From A Table
    public function()
    {
    }
```
</details>
