<? session_start(); ?>
<?php
session_start();
if (!empty($_POST)) {
    $obj = array("number_pages" => (int)$_POST["number_pages"]);

    if ((int)$_POST["number_pages"] > 1) {
        $obj["statement"] = array(
            "dir_angles" => array(
                array(
                    "deg" => (int)$_POST["dir_deg"][0],
                    "min" => (float)$_POST["dir_min"][0]
                ),
                array(
                    "deg" => (int)$_POST["dir_deg"][1],
                    "min" => (float)$_POST["dir_min"][1]
                )
            ),
            "X" => array(
                (float)$_POST["X"][0],
                (float)$_POST["X"][1]
            ),
            "Y" => array(
                (float)$_POST["Y"][0],
                (float)$_POST["Y"][1]
            ),
            "H" => array(
                (float)$_POST["H"][0],
                (float)$_POST["H"][1]
            )
        );
    }

    for ($i = 0; $i < count($_POST["meters"]); $i++) {
        $obj["amendments"][] = array('meter' => (float)$_POST["meters"][$i], 'amendment' => (float)$_POST['amendments'][$i]);
    }

    $obj["stations"] = array();
    for ($i = 0; $i < count($_POST["level"]); $i++) {
        $obj["stations"][] = array(
            "number" => (int)$_POST["number"][$i],
            "level_station" => (float)$_POST["level"][$i],
            "sighting_points_first" => array(
                (int)$_POST["sighting_point1"][$i],
                (int)$_POST["sighting_point2"][$i],
                (int)$_POST["sighting_point3"][$i],
                (int)$_POST["sighting_point4"][$i]
            ),
            "horizontal_angles" => array(
                array(
                    "degrees" => (float)$_POST["horizontal_degree1"][$i],
                    "minutes" => (float)$_POST["horizontal_minute1"][$i]
                ),
                array(
                    "degrees" => (float)$_POST["horizontal_degree2"][$i],
                    "minutes" => (float)$_POST["horizontal_minute2"][$i]
                ),
                array(
                    "degrees" => (float)$_POST["horizontal_degree3"][$i],
                    "minutes" => (float)$_POST["horizontal_minute3"][$i]
                ),
                array(
                    "degrees" => (float)$_POST["horizontal_degree4"][$i],
                    "minutes" => (float)$_POST["horizontal_minute4"][$i]
                ),
            ),
            "sighting_points" => array(
                "first" => ($i == 0) ? null : array(
                    "number" => (int)$_POST["number1"][$i - 1],
                    "level" => (float)$_POST["level1"][$i - 1],
                    "vertical_angles" => array(
                        array(
                            "degrees" => (float)$_POST["vertical_degree1"][$i - 1],
                            "minutes" => (float)$_POST["vertical_minute1"][$i - 1]
                        ),
                        array(
                            "degrees" => (float)$_POST["vertical_degree2"][$i - 1],
                            "minutes" => (float)$_POST["vertical_minute2"][$i - 1]
                        )
                    ),
                    "rail" => array(
                        (float)$_POST["by_rail1"][$i - 1],
                        (float)$_POST["by_rail2"][$i - 1],
                    )
                ),
                "second" => ($i == (count($_POST["level"]) - 1)) ? null : array(
                    "number" => (int)$_POST["number2"][$i],
                    "level" => (float)$_POST["level2"][$i],
                    "vertical_angles" => array(
                        array(
                            "degrees" => (float)$_POST["vertical_degree3"][$i],
                            "minutes" => (float)$_POST["vertical_minute3"][$i]
                        ),
                        array(
                            "degrees" => (float)$_POST["vertical_degree4"][$i],
                            "minutes" => (float)$_POST["vertical_minute4"][$i]
                        )
                    ),
                    "rail" => array(
                        (float)$_POST["by_rail3"][$i],
                        (float)$_POST["by_rail4"][$i],
                    )
                ),
            )
        );
    }
    $_SESSION['inputValues'] = $obj;

    $respon = shell_exec('C:\Users\User\AppData\Local\Programs\Python\Python310\python.exe tah.py ' . base64_encode(json_encode($obj)));
    $respon = json_decode($respon, true);
    $respon['link'] = gettype($respon['link']) == gettype(NULL) ? NULL : $respon['link'];
    $_SESSION['respon'] = $respon;
    // $_SESSION['link'] = gettype($link['link']) == gettype(NULL) ? NULL :  $link['link'];
    // $_SESSION[]
}
header('location: save.php');
?> 