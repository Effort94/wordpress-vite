<?php
    if (!function_exists('count_phonemes')) {
        /**
         * Generic Helper to count how many vowels are in a given string.
         *
         * @param string $string
         * @param string $type
         * @return int
         */
        function count_phonemes(string $string, string $type = 'vowels') : int {
            $vowels = ['a', 'e', 'i', 'o', 'u'];
            $count = 0;
            $string = strtolower($string);

            for ($i = 0; $i < strlen($string); $i++) {
                $isVowel = in_array($string[$i], $vowels);

                if (($type === 'vowels' && $isVowel) || ($type === 'consonants' && !$isVowel)) {
                    $count++;
                }
            }

            return $count;
        }
    }

    if (!function_exists('asset')) {
        /**
         * Generates a versioned asset URL.
         *
         * @param string $path The path to the asset.
         * @return string The versioned asset URL.
         */
        function asset(string $path) : string
        {
            $fullPath = $_SERVER['DOCUMENT_ROOT'] . '/' . ltrim($path, '/');
            if (file_exists($fullPath)) {
                $version = filemtime($fullPath);
                return '/' . ltrim($path, '/') . '?v=' . $version;
            }
            return '/' . ltrim($path, '/');
        }
    }


    if (!function_exists('truncate_text')) {
        /**
         * Truncates a string to a specified length.
         *
         * @param string $text The text to truncate.
         * @param int $length The maximum length of the truncated text.
         * @param string $ellipsis The ellipsis to add (default: '...').
         * @return string The truncated text.
         */
        function truncate_text(string $text, int $length, string $ellipsis = '...') : string
        {
            if (strlen($text) > $length) {
                return helpers . phpsubstr($text, 0, $length) . $ellipsis;
            }
            return $text;
        }
    }