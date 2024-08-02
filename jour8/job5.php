<?php
session_start();

if (!isset($_SESSION['board'])) {
    reset_game();
}

if (isset($_POST['reset'])) {
    reset_game();
} else if (isset($_POST['cell'])) {
    $cell = $_POST['cell'];
    if ($_SESSION['board'][$cell] == '-') {
        $_SESSION['board'][$cell] = $_SESSION['current_player'];
        $_SESSION['current_player'] = ($_SESSION['current_player'] == 'X') ? 'O' : 'X';
    }
    $winner = check_winner($_SESSION['board']);
    if ($winner || !in_array('-', $_SESSION['board'])) {
        if ($winner) {
            $_SESSION['message'] = "$winner a gagné!";
        } else {
            $_SESSION['message'] = "Match nul";
        }
        reset_game();
    }
}

function reset_game() {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['current_player'] = 'X';
    $_SESSION['message'] = '';
}

function check_winner($board) {
    $winning_combinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Rows
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Columns
        [0, 4, 8], [2, 4, 6]             // Diagonals
    ];
    foreach ($winning_combinations as $combo) {
        if ($board[$combo[0]] == $board[$combo[1]] && $board[$combo[1]] == $board[$combo[2]] && $board[$combo[0]] != '-') {
            return $board[$combo[0]];
        }
    }
    return null;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du morpion</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 60px;
            height: 60px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #000;
        }
        button {
            width: 100%;
            height: 100%;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1>Jeu du morpion</h1>
    <?php if ($_SESSION['message']): ?>
        <p><?php echo $_SESSION['message']; ?></p>
    <?php endif; ?>
    <form method="post">
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <?php $cell = $i * 3 + $j; ?>
                        <td>
                            <button type="submit" name="cell" value="<?php echo $cell; ?>"><?php echo $_SESSION['board'][$cell]; ?></button>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>
</body>
</html>
