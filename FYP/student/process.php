<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Check if all fields are filled
  if (!empty($_POST["gender"]) && !empty($_POST["type"]) && !empty($_POST["game"])) {

    // Get selected options
    $gender = $_POST["gender"];
    $type = $_POST["type"];
    $game = $_POST["game"];

    // Redirect to appropriate page
    if ($type == "solo") {
      if ($gender == "male") {
        if ($game == "table-tennis") {
          header("Location: ./games/male_table_tennis_solo.php");
          exit();
        } elseif ($game == "badminton") {
          header("Location: ./games/male_badminton_solo.php");
          exit();
        } elseif ($game == "chess") {
          header("Location: ./games/male_chess_solo.php");
          exit();
        } elseif ($game == "carrom") {
          header("Location: ./games/male_carrom_solo.php");
          exit();
        }
      } elseif ($gender == "female") {
        if ($game == "table-tennis") {
          header("Location: ./games/female_table_tennis_solo.php");
          exit();
        } elseif ($game == "badminton") {
          header("Location: ./games/female_badminton_solo.php");
          exit();
        } elseif ($game == "chess") {
          header("Location: ./games/female_chess_solo.php");
          exit();
        } elseif ($game == "carrom") {
          header("Location: ./games/female_carrom_solo.php");
          exit();
        }
      }
    } elseif ($type == "team") {
      if ($gender == "male") {
        if ($game == "cricket") {
          header("Location: ./games/male_cricket_team.php");
          exit();
        } elseif ($game == "football") {
          header("Location: ./games/male_football_team.php");
          exit();
        } elseif ($game == "volleyball") {
          header("Location: ./games/male_volleyball_team.php");
          exit();
        }elseif ($game == "basketball") {
          header("Location: ./games/male_basetball_team.php");
          exit();
        }elseif ($game == "boxcricket") {
          header("Location: ./games/male_boxcricket_team.php");
          exit();
        }elseif ($game == "kabaddi") {
          header("Location: ./games/male_kabaddi_team.php");
          exit();
        }
      } elseif ($gender == "female") {
        if ($game == "cricket") {
          header("Location: ./games/female_cricket_team.php");
          exit();
        }elseif ($game == "football") {
          header("Location: ./games/female_football_team.php");
          exit();
        } elseif ($game == "volleyball") {
          header("Location: ./games/female_volleyball_team.php");
          exit();
        }elseif ($game == "basketball") {
          header("Location: ./games/female_basetball_team.php");
          exit();
        }elseif ($game == "boxcricket") {
          header("Location: ./games/female_boxcricket_team.php");
          exit();
        }elseif ($game == "kabaddi") {
          header("Location: ./games/female_kabaddi_team.php");
          exit();
        }
      }
    }
  }
}
?>