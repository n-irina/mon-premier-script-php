<?php
   $movies['L\'île au trésor']['actor1'] = 'Robert Newton';
   $movies['L\'île au trésor']['actor2'] = 'Bobby Driscoll';
   $movies['L\'île au trésor']['actor3'] = 'Basil Sydney';
   $movies['Dr. Jekyll et Mr. Hyde']['actor1'] = 'Michael Caine';
   $movies['Dr. Jekyll et Mr. Hyde']['actor2'] = 'Cheryl Ladd';
   $movies['Dr. Jekyll et Mr. Hyde']['actor3'] = 'Joss Ackland';
   $movies['L\'enlèvement de David Balfour']['actor1'] = 'Peter Finch';
   $movies['L\'enlèvement de David Balfour']['actor2'] = 'James MacArthur';
   $movies['L\'enlèvement de David Balfour']['actor3'] = 'Peter O\'Toole';

   foreach($movies as $title=>$movie){
      echo 'Dans le film '.$title.', les principaux acteurs sont: ';
      foreach($movie as $actor){
         echo $actor.', ';
      }
      echo '.<br>';
    }
?>