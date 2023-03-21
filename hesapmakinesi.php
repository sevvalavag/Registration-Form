<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hesap Makinesi</title>

</head>

<body>

    <form action="" method="post">

        <input type="text" name="sayi1" value="<?php // 1.textboxı oluşturur.                                      
        if (isset($_POST["sayi1"])) { // Eğer ilk textbox in içine bir değer girilmmişse if in içine girer                                                  
            echo $_POST["sayi1"]; // içine yazılan değeri al ve ilk texboxın içine yaz 
        } 
        ?>" />

        <input type="text" name="sayi2" value="<?php // 2.textboxı oluşturur.                                      
        
        if (isset($_POST["sayi2"])) { // Eğer ilk textbox in içine bir değer girilmmişse if in içine girer                                              
            echo $_POST["sayi2"]; // içine yazılan değeri al ve ilk texboxın içine yaz 
        }
        ?>" />

        <input type="submit" name="islem" value="+" style="<?php // üstünde + yazan bir buton oluşturur.
        if (isset($_POST["islem"]) && $_POST["islem"] == "+") { // islem isminde ve islemin değeri + olan buton tıklanmışsa if in içine girer
            echo 'background-color: gray;'; // butonun rengini gri yapar
        }
        ?>" />

        <input type="submit" name="islem" value="-" style="<?php // üstünde - yazan bir buton oluşturur.
        if (isset($_POST["islem"]) && $_POST["islem"] == "-") { // islem isminde ve islemin değeri - olan buton tıklanmışsa if in içine girer
            echo 'background-color: gray;'; // butonun rengini gri yapar
        }
        ?>" />
        <input type="submit" name="islem" value="x" style="<?php // üstünde x yazan bir buton oluşturur.
        if (isset($_POST["islem"]) && $_POST["islem"] == "x") { // islem isminde ve islemin değeri x olan buton tıklanmışsa if in içine girer
            echo 'background-color: gray;'; // butonun rengini gri yapar
        }
        ?>" />
        <input type="submit" name="islem" value="/" style="<?php // üstünde / yazan bir buton oluşturur.
        if (isset($_POST["islem"]) && $_POST["islem"] == "/") { // islem isminde ve islemin değeri / olan buton tıklanmışsa if in içine girer
            echo 'background-color: gray;'; // butonun rengini gri yapar
        }
        ?>" />

    </form>

    <?php

    // print_r($_POST);
    
    function hesapla($sayi1, $sayi2, $islem) // 3 parametreli bir fonksiyon tanımlar
    
    {

        if (str_contains($sayi1, ',') || str_contains($sayi2, ',')) { // eğer sayi1 veya sayi2 virgül içeriyorsa 
            $sayi1 = str_replace(",", ".", $sayi1); // sayi1 in virgülünü nokta ile değiştirir.
            $sayi2 = str_replace(",", ".", $sayi2); // sayi2 in virgülünü nokta ile değiştirir.
        }

        if ($islem == "+") { // islemin değeri eğer + ise buradaki if in içine girer
    
            echo "Sonuç : " . ($sayi1 + $sayi2); // sayıları toplar ve Sonuç: un karşısına yazdırır.
    
        } else if ($islem == "-") { // islemin değeri eğer - ise buradaki if in içine girer
    
            $sonuc = $sayi1 - $sayi2; // sayıları çıkarır 
    
            echo "Sonuç:" . $sonuc; // Sonucu yazdırır
    
        } else if ($islem == "/" ) { // islemin değeri eğer / ise buradaki if in içine girer
    
            if($sayi2 == "0"):
                echo "Bir sayi sifira bölünemez.Lütfen başka bir sayi giriniz."; 
            else:
                $sonuc = $sayi1 / $sayi2; // sayıları böler
                echo "Sonuç:" . $sonuc; // sonucu yazdırır
            endif;
    
        } else { // yukarıdaki işlemlerden hiçbiri değilse sayıları çarpar ve yazdırır.
    
            $sonuc = $sayi1 * $sayi2;
            echo "Sonuç:" . $sonuc;

        }

    }

    if (isset($_POST["islem"])) { // sayfa yuklendikten sonra name i islem olan bir hareket olduysa 
        hesapla($_POST["sayi1"], $_POST["sayi2"], $_POST["islem"]); //hesapla fonksiyonunu çağırır/çalıştırır.
    
    }

    ?>

</body>

</html>