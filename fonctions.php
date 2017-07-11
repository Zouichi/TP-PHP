<!-- Projet réalisé par Sarah Henry, Marie-Sophie Mayor, Daniel Girard et Rémi Boiteux -->
<?php
function verification($type,$champ) // function de verification de champ
{
    switch ($type)
    {
        case "texte":
        {
            $regex="/^[a-zA-Z-]+$/";
            if(preg_match($regex,$champ)) return true;
            break;
        }
        
        case "nombre":
        {
            if(is_numeric($champ))return true;
            break;
        }
        
        case "date":
        {
            $regex="/^([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";
            if(preg_match($regex,$champ)) return true;
            break;
        }
        case "mail":
        {
            $regex="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-z]+$/";
            if(preg_match($regex,$champ)) return true;
            break;
        }
        default:
        {
            echo 'type inconnu';
        }
    }
    
}

?>