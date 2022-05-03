<?php

class SendMail
{
    private $nom;
    private $prenom;
    private $societe;
    private $phone;
    private $email;
    private $message;

    function __construct()
    {
        if (isset($_POST['nom'])) 
        {
            $this->nom = filter_var($_POST['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        if (isset($_POST['prenom'])) 
        {
            $this->prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        if (isset($_POST['societe'])) 
        {
            if ($_POST['societe']=='') 
            {
                $this->societe = ' qui n\a pas indiqué de société';
            }
            else
            {
                $this->societe = ' de la société '.filter_var($_POST['societe'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
        }
        if (isset($_POST['phone'])) 
        {
            if ($_POST['phone']=='') 
            {
                $this->phone = '';
            }
            else
            {
                $this->phone = ' Son numéro de téléphone est le '.filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
            }        
        
        }
        if (isset($_POST['email'])) 
        {
            $this->email = ' Son adresse email est :'.filter_var($_POST['email'], FILTER_SANITIZE_EMAIL).' .';
        }
        if (isset($_POST['message'])) 
        {
            $this->message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
    
        
    }
    function envoieMail()
    {
        if (mail('judy0647287142@gmail.com','Prise de contact',$this->prenom.' '.$this->nom.$this->societe.', voudrais vous contactez.'.'\n'.$this->email.'\n'.$this->phone.'\n'.$this->message ,'From: '.$this->email))
        {
            echo '<p>Votre message est bien envoyer</p>';
        }
        else
        {
            echo '<p>Il y a eu un soucis dans l\'envoie de votre message</p>';
        }
    }
    
}

?>