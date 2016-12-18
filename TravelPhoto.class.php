<?php
/*Marshall Taylor
 *CIP 228
 *Chapter 10 P1
 */

//  class declaration
class TravelPhoto {
    public static $photoID = 0;
    private $date;
    private $fileName;
    private $description;
    private $title;
    private $latitude;
    private $longitude;
    private $ID;

    // constructor   
    function __construct($fileName, $title, $description, $latitude, $longitude) {
        $this->setfileName = $fileName;
        $this->settitle = $title;
        $this->setdescription = $description;
        $this->setlatitude = $latitude;
        $this->setlongitude = $longitude;
        self::$ID++;
    }

    public function getfileName() { return $this->fileName;}
    public function gettitle() { return $this->title;}
    public function getdescription() { return $this->description;}
    public function getLatitude() { return $this->latitude;}
    public function getLongitude() { return $this->longitude;}
    
    public function setfileName() {$this->fileName = $fileName;}
    public function settitle() {$this->title = $title;}
    public function setdescription() {$this->description = $description;}
    public function setlatitude() {$this->latitude = $latitude;}
    public function setlongitude() {$this->longitude = $longitude;}
    
    public function __toString () {
        $line = "File name: " . $this->getfileName();
        $line .= "Title: " . $this->gettitle();
        $line .= "Description: " . $this->getdescription();
        $line .= "Latitude: " . $this->getlatitude();
        $line .= "Longitude: " . $this->longitude();
        return $line;
    }

/*  ??
    function __toString(){
        return 'test';

            <div class="col-md-3">
                <a href="travel-image.php?id=<?php echo $img['id']; ?>" class="thumbnail">
                <img src="images/travel/square/<?php echo $img['path']; ?>" alt="...">
                </a>
            </div>
        ';
        
        
        '<img src="$fileName" alt="title" title="$title" ></img>';
                <img src="images/travel/square/6114850721.jpg" alt="...">
    }
*/
}
?>


