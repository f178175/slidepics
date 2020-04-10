<title>SlideShare Pics Downloader</title>
<?php
    echo "<a href='index'>Go Home!</a>";
    include 'function.php';
    delete_directory('images');
    /**/
    $the_site = $_POST['link'];
    $slides=$_POST['slide'];
    $the_tag = "section"; 
    $the_class = "slide show";
    @$html = file_get_contents($the_site);
    if ($html) 
    {
        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTML($html);
        $xpath = new DOMXPath($dom);
        foreach ($xpath->query('//'.$the_tag.'[contains(@class,"'.$the_class.'")]/img') as $item) {
            $img_src =  $item->getAttribute('data-full');
        }
        $t2=explode('?', $img_src);
        $img_src=$t2[0];
        $t2=explode('-1024.jpg', $img_src);
        $error="";
        for ($i=1; $i <= $slides; $i++) { 
            if($i>1 && $i<=9)
                $t2[0][strripos($t2[0],"-")+1]=$i;
            else if($i>9 && $i<99)
                $t2[0] = substr($t2[0], 0, strripos($t2[0],"-")+1)."$i";
            $finalPath=$t2[0]."-1024.jpg<br>";
            copy($finalPath, "./images/$i.jpg");
        }
        echo "<script>window.location='zip'</script>";
    }
    else
    {
        echo "* Internet or Other Error!";
        echo "<a href='index'>Go Home!</a>";
        exit();
    }
?>