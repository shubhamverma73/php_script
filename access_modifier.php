| Access Modifier     | Classes           | Functions          | Variables          |
|---------------------|-------------------|--------------------|--------------------|
| `public`            | Not Applicable    | Applicable         | Applicable         |
| `private`           | Not Applicable    | Applicable         | Applicable         |
| `protected`         | Not Applicable    | Applicable         | Applicable         |
| `abstract`          | Applicable        | Applicable         | Not Applicable     |
| `final`             | Applicable        | Applicable         | Not Applicable     |



| Access Modifier | Into the Class Access| In Subclass Access | Outside Class Access  |
|-----------------|--------------------- |--------------------|-----------------------|
| `public`        | ✔️ Accessible       | ✔️ Accessible      | ✔️ Accessible        |
| `protected`     | ✔️ Accessible       | ✔️ Accessible      | ❌ Not Accessible    |
| `private`       | ✔️ Accessible       | ❌ Not Accessible  | ❌ Not Accessible    |


<?
class Myclass {

    private $amont = 10; // Variable / Property
    
    public function subscribe () { // Function / Method
        echo "Please subscribe my youtube channel";
    }
}

$obj = new Myclass();
$obj->subscribe();
?>