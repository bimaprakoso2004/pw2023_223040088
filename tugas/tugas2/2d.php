<style>
    .box {
        width: 30px;
        height: 30px;
        display: inline-block;
        border: 1px solid black;
    }

    .black {
        background-color: black;
    }

    .white {
        background-color: white;
    }
</style>

<?php
for ($i = 1; $i <= 5; $i++) {
    echo "<div style='display: flex;'>";
    for ($j = 1; $j <= 5; $j++) {
        $total = $i + $j;
        if ($total % 2 == 0) {
            echo "<div class= 'box white'></div>";
        }   else {
            echo "<div class='box black'></div>";
        }
    }
    echo "</div>";
}
?>