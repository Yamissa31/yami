<?php

$matieresSIO = array('Mathématiques', 'Bloc 1',
'Bloc 2', 'Bloc 3', 'Anglais', 'Culture générale',
'Algorithmique', 'Culture Economique Juridique & managériale',
'PIX', 'Parcours professionnel');

print_r($matieresSIO) ;
echo "<BR>" ;
echo $matieresSIO[0] ;
echo $matieresSIO[2] ;
echo "<BR>" ;

$matieresSIO[] = 'Relaxation' ;
print_r($matieresSIO) ;
