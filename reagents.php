<?php 
    $link = $_SERVER['REQUEST_URI'];
    $query = (int)explode("=", $link)[1];

    $namesJP = ["ベンゼン","メタノール","フェノール","","酢酸"];
    $namesEn = ["Benzen","Methanol","Phenol","","Acetic acid"];
    $alterNames = ["ベンゼン(Benzen)","メチルアルコール(Methylac)","ヒドロキシベンゼン(Hydroxybenzen)","","メタン酸(Methanoic acid)"];
    $formulae = ["C<sub>6</sub>H<sub>6</sub>","CH<sub>3</sub>OH","C<sub>6</sub>H<sub>5</sub>OH","","CH<sub>3</sub>COOH"];
    $structures = ["benzen.PNG","methanol.PNG","phenol.PNG","","aceticacid.PNG"];

    $nameJP = $namesJP[$query];
    $nameEn = $namesEn[$query];
    $alterName = $alterNames[$query];
    $formula = $formulae[$query];
    $structure = $structures[$query];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="commonStyle.css">
    <title><?php echo $nameJP; ?>：構造式に基づく試薬管理システム</title>
</head>
<body>
    <div id = "header">
        <h1>試薬の使用登録｜</h1>
        <h2><?php echo $nameJP; ?>:<?php echo $nameEn; ?></h2>
    </div>

    <div class = "container">
        <div class = "leftside"></div>

        <div class = "main">
            <div id = "menu">
                <a id = "MSDS" href="http://www.st.rim.or.jp/~shw/MSDS/13405350.pdf">MSDS</a>
                <a id = "suppliers" href="">Suppliers</a>
                <a id = "reagents" href="">試薬一覧</a>
                <a id = "return" href="">構造認識に戻る</a>
            </div>

            <div id = "structureAndRegistration">
                <div id = "structure">
                    <div class = "image">
                        <div class = "marginLeft"></div>
                        <img src= <?php echo $structure; ?> alt="NoImage">
                        <div class = "marginRight"></div>
                    </div>

                    <h2 class = "titles"><?php echo $nameJP; ?>:<?php echo $nameEn; ?></h2>
                    <p><b>別名</b> : <?php echo $alterName; ?></p>
                    <p><b>示性式</b> : <?php echo $formula; ?></p>
                </div>
        
                <div id = "registration">
                    <h2 class = "titles">使用登録</h2>
                    <p><b>日付</b></p>
                    <p><b>使用者名</b></p>
                    <p><b>使用前重量</b></p>
                    <p><b>使用後重量</b></p>
                </div>

                <div id = "place">
                    <h2 class = "titles">保管場所</h2>
                    <p><b>2203室A13-1"有機溶媒"</b></p>
                </div>
            </div>
        
            <div id = "GHSandProperties">
                <div id = "GHS">
                    <h2 class = "titles">GHS分類</h2>
                    <h3>物理化学的危険性</h3>
                    <h3>健康に対する有害性</h3>
                    <h3>環境に対する有害性</h3>
                </div>
                
                <div id = "properties">
                    <h2 class = "titles">物理・化学的性質</h2>
                </div>
            </div>
        </div>

        <div class = "rightside"></div>
    </div>
</body>
</html>