<?php

class BlogManager
{
    private static $posts = [];

    public static function getAll($count=3) : array
    {
        self::$posts  = [
            [
                'id' => 1,
                'title' => 'Ma must explore, and this is exploration at its greatest',
                'subTitle' => 'Problems look mighty small from 150 miles up',
                'author' => 'Jon Doe',
                'publishedDate' => '24-09-2023',
                'content' => ''
            ],
            [
                'id' => 2,
                'title' => 'I believe every human has a finite number of heartbeats. I don\'t intend to waste any of mine.',
                'subTitle' => '',
                'author' => 'Jon Doe',
                'publishedDate' => '18-09-2023',
                'content' => '<h2>Reaching for the Stars</h2>
                <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>'
            ],
            [
                'id' => 3,
                'title' => 'I believe every human has a finite number of heartbeats. I don\'t intend to waste any of mine.',
                'subTitle' => '',
                'author' => 'Jon Doe',
                'publishedDate' => '18-09-2023',
                'content' => '<h2>Reaching for the Stars</h2>
                <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>'
            ],
            [
                'id' => 4,
                'title' => 'I believe every human has a finite number of heartbeats. I don\'t intend to waste any of mine.',
                'subTitle' => '',
                'author' => 'Jon Doe',
                'publishedDate' => '18-09-2023',
                'content' => '<h2>Reaching for the Stars</h2>
                <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>'
            ],
            [
                'id' => 5,
                'title' => 'I believe every human has a finite number of heartbeats. I don\'t intend to waste any of mine.',
                'subTitle' => '',
                'author' => 'Jon Doe',
                'publishedDate' => '18-09-2023',
                'content' => '<h2>Reaching for the Stars</h2>
                <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>'
            ],
            [
                'id' => 6,
                'title' => 'I believe every human has a finite number of heartbeats. I don\'t intend to waste any of mine.',
                'subTitle' => '',
                'author' => 'Jon Doe',
                'publishedDate' => '18-09-2023',
                'content' => '<h2>Reaching for the Stars</h2>
                <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>'
            ],
            
            
            
        ];


        // solution
        $result=[];
        for( $i = 0; $i < $count; $i++ )
        {
            $result[] = $posts[$i];

        }


         // If $count is 0, return all posts
         if ($count === 0) {
            return self::$posts;
        }

        // Get the latest $count posts
        $latestPosts = array_slice(self::$posts, 0, $count);

        return $result;

        // return self::$posts;
    }

    // function 
    
    public static function getOlderPosts($currentCount, $count = 3): array {
        self::$posts = self::getAll();

        // Calculate the index of the next set of posts
        $startIndex = $currentCount;
        $endIndex = $startIndex + $count;

        // Get the older posts based on the start and end indexes
        $olderPosts = array_slice(self::$posts, $startIndex, $endIndex);

        return $olderPosts;
    }

    public static function get($id)
    {
        self::$posts = self::getAll();

        foreach (self::$posts as $post)
        {
            if ($post['id'] == $id)
            {
                return $post;
            }
        }

        return null;
    }
}