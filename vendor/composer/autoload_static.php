<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc143d0dd13aefa767a797b845a13bbdd
{
    public static $files = array (
        'a9ed0d27b5a698798a89181429f162c5' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/customFunctions.php',
        '6124b4c8570aa390c21fafd04a26c69f' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/deep_copy.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
        'Z' => 
        array (
            'Zxing\\' => 6,
        ),
        'S' => 
        array (
            'Svg\\' => 4,
            'Sabberworm\\CSS\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'O' => 
        array (
            'Org_Heigl\\Ghostscript\\' => 22,
        ),
        'M' => 
        array (
            'Mpdf\\' => 5,
        ),
        'F' => 
        array (
            'FontLib\\' => 8,
        ),
        'D' => 
        array (
            'Dompdf\\' => 7,
            'DeepCopy\\' => 9,
            'Da\\QrCode\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
        'Zxing\\' => 
        array (
            0 => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib',
        ),
        'Svg\\' => 
        array (
            0 => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg',
        ),
        'Sabberworm\\CSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Org_Heigl\\Ghostscript\\' => 
        array (
            0 => __DIR__ . '/..' . '/org_heigl/ghostscript/src',
        ),
        'Mpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/mpdf/src',
        ),
        'FontLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib',
        ),
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
        'DeepCopy\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy',
        ),
        'Da\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/2amigos/qrcode-library/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'Imagick' => 
            array (
                0 => __DIR__ . '/..' . '/calcinai/php-imagick/src',
            ),
        ),
        'B' => 
        array (
            'BaconQrCode' => 
            array (
                0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
            ),
        ),
    );

    public static $classMap = array (
        'Dompdf\\Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
        'HTML5_Data' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Data.php',
        'HTML5_InputStream' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/InputStream.php',
        'HTML5_Parser' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Parser.php',
        'HTML5_Tokenizer' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Tokenizer.php',
        'HTML5_TreeBuilder' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/TreeBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc143d0dd13aefa767a797b845a13bbdd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc143d0dd13aefa767a797b845a13bbdd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc143d0dd13aefa767a797b845a13bbdd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc143d0dd13aefa767a797b845a13bbdd::$classMap;

        }, null, ClassLoader::class);
    }
}
