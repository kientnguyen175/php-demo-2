<?php
    class LoginController extends Controller
    {
        public function checkLogin()
        {
            if (isset($_SESSION['username'])) {
                $model = $this->loadModel('User');
                return $model->checkUsername($_SESSION['username']);
            } elseif (isset($_COOKIE['user_remember_info'])) {
                $username = $_COOKIE['user_remember_info'];
                $model = $this->loadModel('User');
                return $model->checkUsername($username);
            }
            return false;
        }

        public function getLogin()
        {
            $data['screen'] = 'login';
            $this->loadView($data);
        }

        public function postLogin()
        {
            $model = $this->loadModel('User');
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            if (
                strpos($username, ';') !== false ||
                strpos($username, '"') !== false ||
                strpos($username, "'") !== false ||
                strpos($password, ';') !== false ||
                strpos($password, '"') !== false ||
                strpos($password, "'") !== false
            ) {
                $data['screen'] = 'login';
                $data['error'] = 'Ký tự không hợp lệ!';
                $this->loadView($data);
                return;
            }

            if (!$model->checkUser($username, md5($password))) {
                if (!$model->checkUsername($username)) {
                    $data['screen'] = 'login';
                    $data['error'] = 'Tên tài khoản chưa tồn tại!';
                    $this->loadView($data);
                } else {
                    $user = $model->getUser($username);
                    if (md5($password) != $user->password) {
                        $data['screen'] = 'login';
                        $data['error'] = 'Sai mật khẩu!';
                        $this->loadView($data);
                    } else {
                        die('Lỗi không xác định!');
                    }
                }
            } else {
                if ($_POST['remember'] != null) {
                    setcookie('user_remember_info', $username, time() + COOKIE_TIME);
                }
                $_SESSION['username'] = $username;
                header('location: /');
            }
        }

        public function getRegister()
        {
            $data['screen'] = 'register';
            $this->loadView($data);
        }

        public function postRegister()
        {
            $model = $this->loadModel('User');
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

            if (
                strpos($username, ';') !== false ||
                strpos($username, '"') !== false ||
                strpos($username, "'") !== false ||
                strpos($password, ';') !== false ||
                strpos($password, '"') !== false ||
                strpos($password, "'") !== false
            ) {
                $data['screen'] = 'register';
                $data['error'] = 'Ký tự không hợp lệ!';
                $this->loadView($data);
                return;
            }

            $data['username'] = $username;
            $data['password'] = md5($password);

            if (strlen($username) < 6 || strlen($password) < 6) {
                $data['screen'] = 'register';
                $data['error'] = 'Tên đăng nhập và mật khẩu phải chứa ít nhất 6 ký tự!';
                $this->loadView($data);
            } elseif ($confirm_password != $password) {
                $data['screen'] = 'register';
                $data['error'] = 'Mật khẩu không trùng nhau!';
                $this->loadView($data);
            } elseif ($model->checkUsername($username)) {
                $data['screen'] = 'register';
                $data['error'] = 'Tên tài khoản đã tồn tại!';
                $this->loadView($data);
            } elseif (!$model->register($data)) {
                $data['screen'] = 'register';
                $data['error'] = 'Đăng ký thất bại!';
                $this->loadView($data);
            } else {
                $_SESSION['username'] = $username;
                header('location: /');
            }
        }

        public function logout()
        {
            setcookie('user_remember_info', '', time() - 60);
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            header('location: /');
        }
    }
