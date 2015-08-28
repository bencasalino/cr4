<?php
    //Class
    Class Brand
    // class properites
    {
        private $id;
        private $Brand_name;
    }

    //contructor
    function __construct($name, $id = null)
        {
            $this->name = $name;
            $this->id = $id;
        }

        //Getters and Setters
        function getName()
        {
            return $this->name;
        }
        function setName($new_name)
        {
            $this->name = $new_name;
        }
        function getId()
        {
            return $this->id;
        }
        ///////////////End Getters and Setters//////////////


        will need!!!
        save
        get stores
        add a store


        static functions
        get all
        del all 
        find ?




?>
