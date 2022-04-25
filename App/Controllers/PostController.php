<?php
    class PostController extends Controller
    {
        public function __construct()
        {
            require_once 'LoginController.php';
            $login_controller = new LoginController();
            if (!$login_controller->checkLogin()) {
                $login_controller->getLogin();
                die();
            }
        }

        public function index()
        {
            $user_model = $this->loadModel('User');
            $post_model = $this->loadModel('Post');

            $username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['user_remember_info'];
            $user = $user_model->getUser($username);
            $posts = $post_model->getAllPosts($user->id);

            $data['screen'] = 'layout';
            $data['page'] = 'dashboard';
            $data['user'] = $user;
            $data['posts'] = $posts;

            $this->loadView($data);
        }

        public function create()
        {
            $data['screen'] = 'layout';
            $data['page'] = 'create';
            $this->loadView($data);
        }

        public function insert()
        {
            $title = $_POST['title'];
            $content = $_POST['content'];

            $content = str_replace("'", '', $content);
            preg_replace('/[^A-Za-z0-9\-]/', '', $content);

            $dataDetected = $this->detectContent($title, $content);
            $title = $dataDetected['title'];
            $content = $dataDetected['content'];

            $postValidation = $this->validatePost($title, $content);
            if (!$postValidation['valid']) {
                $data['screen'] = 'layout';
                $data['page'] = 'create';
                $data['error'] = $postValidation['error'];
                $data['title_value'] = $title;
                $data['content_value'] = $content;
                $this->loadView($data);
            } else {
                $user_model = $this->loadModel('User');
                $post_model = $this->loadModel('Post');

                $username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['user_remember_info'];
                $user = $user_model->getUser($username);
                if (!$post_model->createPost($user->id, $title, $content)) {
                    $data['screen'] = 'layout';
                    $data['page'] = 'create';
                    $data['error'] = 'Tạo mới thất bại!';
                    $data['title_value'] = $title;
                    $data['content_value'] = $content;
                    $this->loadView($data);
                } else {
                    header('location: /');
                }
            }
        }

        public function edit()
        {
            $post_id = $_GET['post_id'];
            $model = $this->loadModel('Post');
            $post = $model->getPostById($post_id);
            $data['screen'] = 'layout';
            $data['page'] = 'edit';
            $data['post'] = $post;
            $this->loadView($data);
        }

        public function update()
        {
            $post_id = $_POST['post_id'];
            $title = $_POST['title'];
            $content = $_POST['content'];

            $content = str_replace("'", '', $content);
            preg_replace('/[^A-Za-z0-9\-]/', '', $content);

            $dataDetected = $this->detectContent($title, $content);
            $title = $dataDetected['title'];
            $content = $dataDetected['content'];

            $postValidation = $this->validatePost($title, $content);
            if (!$postValidation['valid']) {
                $data['screen'] = 'layout';
                $data['page'] = 'edit';
                $data['error'] = $postValidation['error'];
                $data['title_value'] = $title;
                $data['content_value'] = $content;
                $this->loadView($data);
            } else {
                $model = $this->loadModel('Post');

                if (!$model->editPost($post_id, $title, $content)) {
                    $data['screen'] = 'layout';
                    $data['page'] = 'edit';
                    $data['error'] = 'Chỉnh sửa thất bại!';
                    $data['title_value'] = $title;
                    $data['content_value'] = $content;
                    $this->loadView($data);
                } else {
                    header('location: /');
                }
            }
        }

        public function delete()
        {
            $post_id = $_GET['post_id'];
            $model = $this->loadModel('Post');
            try {
                $model->deletePost($post_id);
                header('location: /');
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function detectContent($title, $content)
        {
            while ($title[0] === ' ') {
                $title = substr($title, 1, strlen($title) - 1);
            }
            while ($content[0] === ' ') {
                $content = substr($content, 1, strlen($content) - 1);
            }
            $title = ucfirst($title);
            $content = ucfirst($content);
            $title = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $title);
            return ['title' => $title, 'content' => $content];
        }

        public function validatePost($title, $content)
        {
            $test_content = str_replace(" ", '', $content);
            preg_replace('/[^A-Za-z0-9\-]/', '', $test_content);
            if (strlen($title) < 10) {
                $postValidation['error'] = 'Tiêu đề phải chứa ít nhất 10 ký tự!';
                $postValidation['valid'] = false;
                return $postValidation;
            } elseif (strlen($test_content) < 100) {
                $postValidation['error'] = 'Nội dung phải chứa ít nhất 50 ký tự!';
                $postValidation['valid'] = false;
                return $postValidation;
            }
            return ['valid' => true];
        }
    }
