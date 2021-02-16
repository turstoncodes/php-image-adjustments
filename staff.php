// staff.php
<?php
class Staff{
    private string $staffmember_image;
    public function --construct($staffmember_image)
    {
        $this->staffmember_image = $staffmember_image;
    }
    public function getStaffMember_Image()
    {
        return $this->staffmember_image;
    }
    public function setStaffMember_Image($staffmember_image)
    {
        $this->staffmember_image($staffmember_image);
    }
    
    base64_decode($staffmember_image);
    $staffmember_image = imagecreationstring('path/to/image');
    $size = min(imagesx($staffmember_image, imagesy($staffmember_image)));
    $staffmember_image = imagcrop($staffmember_image, ['x => $size 0.4, 'g' => 0, 'width' => $size, 'heigth' => $size]);
    $staffmember_image = imagescale($staffmember_image, 250);
}
?php>
