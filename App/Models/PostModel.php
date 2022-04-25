<?php
    class PostModel extends Database
    {
        public function getAllPosts($user_id)
        {
            return $this->fetchAllRecords("
                SELECT * FROM posts
                WHERE user_id = '$user_id'
                ORDER BY id DESC
            ");
        }

        public function createPost($user_id, $title, $content)
        {
            return $this->execute("
                INSERT INTO posts(user_id, title, content)
                VALUES ($user_id, '$title', '$content')
            ");
        }

        public function getPostById($post_id)
        {
            return $this->fetchARecord("
                SELECT * FROM posts WHERE id = $post_id
            ");
        }

        public function editPost($post_id, $title, $content)
        {
            $time = date('Y-m-d H:i:s', time());
            return $this->execute("
                UPDATE posts
                SET title = '$title', content = '$content', updated_at = '$time'
                WHERE id = $post_id
            ");
        }

        public function deletePost($post_id)
        {
            return $this->execute("
                DELETE FROM posts WHERE id = $post_id
            ");
        }
    }
