<?php
/**
 * File defining HtmlView
 *
 * Copyright (c) 2011 JadeIT cc
 * @license http://www.opensource.org/licenses/mit-license.php
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in the
 * Software without restriction, including without limitation the rights to use, copy,
 * modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
 * and to permit persons to whom the Software is furnished to do so, subject to the
 * following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR
 * A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @package UtilityFiles
 */
/**
 * Basic Logging class
 *
 * @package Utility
 */
class Logger implements iLogger
{
    /**
     * Function to do logging.
     */
    public function log($message, $level = 3)
    {
        static $stash = array();

        switch ($level) {
        case 1:
            $message = ' (CRITICAL) ' . $message;
            break;
        case 2:
            $message = ' (WARNING) ' . $message;
            break;
        case 3:
            $message = ' (IMPORTANT) ' . $message;
            break;
        case 4:
            $message = ' (INFORMATION) ' . $message;
            break;
        case 5:
            $message = ' (DEBUG) ' . $message;
            break;
        default:
            $message = ' (OTHER - ' . $level . ') ' . $message;
            break;
        }
        $message = date('Y-m-d H:i:s') . $message;

        echo $message . '<br>';
    }
}
