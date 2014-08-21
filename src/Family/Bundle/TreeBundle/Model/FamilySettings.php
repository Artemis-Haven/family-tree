<?php

namespace Family\Bundle\TreeBundle\Model;
 
class FamilySettings
{

    // Public : Tout le monde a accès à la liste des membres, à l'arbre, aux fiches des personnes
    // Arbre visible : Tout le monde a accès à la liste des membres et à l'arbre, pas au détail
    // Personnes visibles : Tout le monde voit les membres lors de recherches par nom, pas le détail
    // Privé : Personne ne voit les membres, même via la recherche

    public static $privacyList = array(
        0 => 'Tout public',
        2 => 'Arbre et membres publics',
        4 => 'Seulement les membres publics',
        6 => 'Privé'
    );
     
    public static function getPrivacyById($id) {
    	return self::$privacyList[$id];
    }
}

?>