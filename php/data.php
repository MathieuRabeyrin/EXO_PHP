<?php
    $ranks = array(
        array(1, "Python", "Web &amp; application"),
        array(2, "C++", "Application"),
        array(3, "Node js", "Web &amp; application"),
        array(4, "Php", "Web &amp; application"),
    );
    
    function display($table, $i, $j) {
        if ($i < sizeof($table)) {
            if ($j < sizeof($table[$i])) {
                if ($j == 0)
                    echo ("<tr>");
                echo ("<td>".$table[$i][$j]."</td>");
                return display($table, $i, $j + 1);
            }
            echo ("</tr>");
            return display($table, $i + 1, $j = 0);
        }
    }
?>