<?php
namespace Backend\Core\Interfaces;
/**
 * File defining Core\Interfaces\Decorable
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
 * @package InterfaceFiles
 */
/**
 * Interface for all classes that are decorable
 *
 * @package Interfaces
 */
interface Decorable
{
    /**
     * Get an array of decorators for the class
     *
     * @return array The decorators to apply to the class
     */
    public function getDecorators();

    /**
     * Add a decorator to the class
     *
     * @param string The name of the decorator class to add
     */
    public function addDecorator($decorator);

    /**
     * Remove a decorator from the class
     *
     * @param string The name of the decorator class to remove
     */
    public function removeDecorator($decorator);
}
