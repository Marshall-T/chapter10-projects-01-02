<?php
/*Marshall Taylor
 *CIP 228
 *Chapter 10 P1
 */

class TravelPhoto {
    public static $photoID = 0;
    private $date;
    private $fileName;
    private $description;
    private $title;
    private $latitude;
    private $longitude;
    private $ID;
    
    function __construct($fileName, $title, $description, $latitude, $longitude) {
        $this->fileName = $fileName;
        $this->title = $title;
        $this->description = $description;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        self::$ID++;
    }
    
    function __toString(){
        return 'test';
/*
            <div class="col-md-3">
                <a href="travel-image.php?id=<?php echo $img['id']; ?>" class="thumbnail">
                <img src="images/travel/square/<?php echo $img['path']; ?>" alt="...">
                </a>
            </div>
        ';
        
        
        '<img src="$fileName" alt="title" title="$title" ></img>';
                <img src="images/travel/square/6114850721.jpg" alt="...">
*/    }
}
?>


