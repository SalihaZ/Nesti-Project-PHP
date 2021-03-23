<?php

class ControllerUsers extends BaseController
{

    public function initialize()
    {

        if (!isset($_GET['action'])) {
            $arrayUsers = UserDAO::readAllUsers();
            $this->_data['arrayUsers'] = $arrayUsers;
        } else {
            if ($_GET['action'] == 'create') {

                if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
                    $city = $this->createCity();
                    $user = $this->createUser($city);
                }

                $this->_data['city'] = $city;
                $this->_data['user'] = $user;
            }

            if ($_GET['action'] == 'edition') {

                $id_user = $_GET['id'];

                // Read data (user/city/roles)
                $user = UserDAO::findOneUser($id_user);
                $id_city = $user->getFk_id_city();
                $city = CityDAO::findOneBy("id_city", $id_city);
                $roles_user = RoleDAO::readUserRoles($user);
                $user->setRoles_user($roles_user);

                // Table Comments
                $arrayComments = CommentsDAO::readCommentsFromOneUser($id_user);
                $this->_data['arrayComments'] = $arrayComments;

                if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

                    var_dump($user);
                    var_dump($city);

                    $city = $this->createCity();
                    $this->editUser($user, $city);
                }

                $this->_data['user'] = $user;
                $this->_data['city'] = $city;
            }
        }
    }

    // Creates a new USER in the DB
    private function createUser($city)
    {
        $user = new User;
        $user->setUsername_user($_POST["username_user"]);
        $user->setPassword_user($_POST["password_user"]);
        $user->setState_user($_POST["state_user"]);
        $user->setLastname_user($_POST["lastname_user"]);
        $user->setFirstname_user($_POST["firstname_user"]);
        $user->setEmail_user($_POST["email_user"]);
        $user->setAddress1_user($_POST["address1_user"]);
        $user->setAddress2_user($_POST["address2_user"]);
        $user->setFk_id_city($city->getId_city());
        $user->setPostcode_user($_POST["postcode_user"]);
        if (!empty($_POST['roles_user'])) {
            $roles = $_POST['roles_user'];
        }
        if (!empty($roles)) {
            $user->setRoles_user($roles);
        }

        // Pushes into DB
        if (($user->getValid_user()) == true) {
            $last_id = UserDAO::createUser($user);
            $user->setId_user($last_id);
            // Links ROLES to USER
            RoleDAO::createRoles($user);
        }
        return $user;
    }

    // Creates or gets an object CITY from/in the DB
    private function createCity()
    {
        // Checks/Creates a new CITY
        $nameCity = $_POST["name_city"];
        if ((CityDAO::findOneBy("name_city", $nameCity)) == null) {
            $city = new City;
            $city->setName_city($_POST["name_city"]);
            if (($city->getValid_city()) == true) {
                CityDAO::createCity($city);
                $city = CityDAO::findOneBy("name_city", $nameCity);
            }
        } else {
            $city = CityDAO::findOneBy("name_city", $nameCity);
        }

        return $city;
    }


    // Edit data for one user
    private function editUser($user, $city)
    {

        // // Creates ROLES to user
        // if (!empty($_POST['roles_user'])) {
        //     foreach ($_POST['roles_user'] as $value) {
        //         $roles = $_POST['roles_user'];
        //     }
        // }

        // Checks/Creates data USER
        $user->setState_user($_POST["state_user"]);
        $user->setLastname_user($_POST["lastname_user"]);
        $user->setFirstname_user($_POST["firstname_user"]);
        $user->setState_user($_POST["state_user"]);
        $user->setAddress1_user($_POST["address1_user"]);
        $user->setAddress2_user($_POST["address2_user"]);
        $user->setFk_id_city($city->getId_city());
        $user->setPostcode_user($_POST["postcode_user"]);
        // if (!empty($roles)) {
        //     $user->setRoles_user($roles);
        // }

        // Push into DB
        if (($user->getValid_user()) == true) {
            UserDAO::updateUser($user);
            // RoleDAO::createRoles($user);
        }

        return $user;
    }
}
