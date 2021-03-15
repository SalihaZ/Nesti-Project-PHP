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
                $user = $this->createUser();
                $this->_data['user'] = $user;
            }

            if ($_GET['action'] == 'edition') {
                $id = $_GET['id'];
                $user = UserDAO::findOneUser($id);
                $roles_user = RoleDAO::readUserRoles($user);
                $user->setRoles_user($roles_user);
                $this->_data['user'] = $user;
                $this->editUser($user);
            }
        }
    }

    // Creates a new USER in the DB
    private function createUser()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
            $city = null;
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

            // Creates ROLES to user
            if (!empty($_POST['roles_user'])) {
                foreach ($_POST['roles_user'] as $value) {
                    $roles = $_POST['roles_user'];
                }
            }

            // Checks/Creates data USER
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
            if (!empty($roles)) {
                $user->setRoles_user($roles);
            }

            // Push into DB
            if (($user->getValid_user()) == true) {
                $last_id = UserDAO::createUser($user);
                $user->setId_user($last_id);
                RoleDAO::createRoles($user);
            }

            return $user;
        }
    }

    // Edit data for one user
    private function editUser($user)
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
           
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

            // // Creates ROLES to user
            // if (!empty($_POST['roles_user'])) {
            //     foreach ($_POST['roles_user'] as $value) {
            //         $roles = $_POST['roles_user'];
            //     }
            // }

            var_dump($city->getId_city());

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
                $last_id = UserDAO::updateUser($user);
                // $user->setId_user($last_id);
                // RoleDAO::createRoles($user);
            }
        }
    }
}
