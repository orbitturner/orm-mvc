<?php
    use Doctrine\ORM\Annotation as ORM;
    use Doctrine\Common\Collections\ArrayCollection;
    /**
     * @Entity @Table(name="roles")
     **/
    class Roles
    {
        /** @Id @Column(type="integer") @GeneratedValue **/
        private $id;
        /** @Column(type="string") */        
        private $nom;
        /**
         * Many Roles have Many Users.
         * @ManyToMany(targetEntity="User", mappedBy="roles")
         */
        private $users;

        
        //==============[ CONSTRUCTOR ]==============
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->users = new ArrayCollection();
        }
        

        //==============[GETTERS & SETTERS]==============
        public function getId(){
            return $this->id;
        }
        public function setId($id)
        {
                $this->id = $id;
        }
        public function getNom(){
            return $this->nom;
        }
        public function setNom($nom)
        {
                $this->nom = $nom;
        }
        public function getUsers()
        {
                return $this->users;
        }
        public function setUsers($users)
        {
                $this->users = $users;
        }
        //==============!\ END GETTERS & SETTERS \!==============

    }

?>