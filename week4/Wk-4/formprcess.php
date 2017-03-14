<?php

    $action = filter_input(INPUT_GET, 'action');
    $column = filter_input(INPUT_GET, 'column');
    $search = filter_input(INPUT_GET, 'search');
    $order = filter_input(INPUT_GET, 'order');

    include './includes/form1.php';
    include './includes/form2.php';

    if ( $action === 'Submit1' ) {
        echo 'Submitted Form 1' . ' ';
        echo $column . ' ' . $order;
        $results = sortCorps($column, $order);
        include './includes/show-corps-results.php';
    }
    if ( $action === 'Submit2' ) {
        echo 'Submitted Form 2' . ' ';
        echo $column . ' ' . $search;
        $results = searchCorps($column, $search);
        include './includes/show-corps-results.php';

    }
