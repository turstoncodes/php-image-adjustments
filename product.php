// product.php
<?php
class Product{
    private string $product_image;
    public function --construct($product_image)
    {
        $this->product_image = $product_image;
    }
    public function getProduct_Image()
    {
        return $this->product_image;
    }
    public function setProduct_Image($product_image)
    {
        $this->product_image($product_image);
    }
    
    base64_decode($product_image);
    $product_image = imagecreationstring('path/to/image');
    $size = min(imagesx($product_image, imagesy($product_image)));
    $product_image = imagcrop($product_image, ['x => $size 0.4, 'g' => 0, 'width' => $size, 'heigth' => $size]);
    $product_image = imagescale($product_image, 250);
}
?php>
