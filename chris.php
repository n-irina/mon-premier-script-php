<?php 
$movies = [
'Doctor Jekyll' => ['Eddie Izzard', 'Scott Chambers', 'Lindsay Duncan'],
'La Planète au trésor : Un nouvel univers' => ['Martin Short', 'Joseph Gorden-Levitt', 'Brian Murray'],
'Lenlèvement de David Balfour' => ['Peter Finch', 'James MacArthur', 'John Laurie']
];
foreach ($movies as $title => $actors) {
    $actors_list = implode(", ", $actors);
    echo "Dans le film \"$title\", les principaux acteurs sont : $actors_list.\n";
}
?>