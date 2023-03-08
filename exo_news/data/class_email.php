<?php
require_once 'classe_email_parametre.php';

class Email
{
  private string $email;

  /**
   * Creates a new Email instance
   *
   * @param string $email The value to be stored in instance
   * @throws InvalidArgumentException if email format is not valid
   */
  public function __construct(string $email)
  {
    $this->email = $email;

    if (!$this->isValid()) {
      throw new InvalidArgumentException("Le format de l'adresse email est invalide");
    }
  }

  public function isValid(): bool
  {
    return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    return emailParametre::emailValid($this->email);
  }
  
  public function getEmail() {
    return $this->email;
  }
  public function setEmail($email) {
    $this->email = $email;
    return $this;
  }

  public function exist(){
    return emailParametre::emailExist($this->email);
  }

  public function save(){
    return emailParametre::saveEmail($this->email);
  }
  
}