<?php
class ProduitModele extends AccesBd
{
    /**
     * Retourne tous les produits
     * 
     * @return object[] Un tableau d'objets représentants tous les produits
     */
    public function tout() 
    {

    }

    public function un($param) 
    {

    }

    public function categories() 
    {

    }   
    
    public function parCategorie($param)
    {
        return $this->lireTout("SELECT p.*, pimg.fichier
            FROM produit AS p
            JOIN produit_image AS pimg
            ON p.id=pimg.produit_id
            WHERE categorie_id=:catid", ['catid'=>$param]);
    }
}
