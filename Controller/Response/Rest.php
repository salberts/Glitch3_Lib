<?php
/**
 * Glitch
 *
 * Copyright (c) 2011, Enrise BV (www.enrise.com).
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of 4worx nor the names of his contributors
 *     may be used to endorse or promote products derived from this
 *     software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category    Glitch
 * @package     Glitch_Controller
 * @subpackage  Response
 * @author      Dolf Schimmel (Freeaqingme) <dolf@enrise.com>
 * @copyright   2011, Enrise
 * @license     http://www.opensource.org/licenses/bsd-license.php
 */

/**
 * Action Controller that acts as a base class for
 * all Action Controllers implementing REST
 *
 * @category    Glitch
 * @package     Glitch_Controller
 * @subpackage  Response
 */
class Glitch_Controller_Response_Rest extends Zend_Controller_Response_Abstract
{
    protected $_outputFormat = 'xml';

    protected $_subResponseRenderer = '';

    public function setOutputFormat($format = 'xml')
    {
        $this->_outputFormat = $format;
    }

    public function getOutputFormat()
    {
        return $this->_outputFormat;
    }

    public function setSubResponseRenderer($name = '')
    {
        $this->_subResponseRenderer = $name;
    }

    public function getSubResponseRenderer()
    {
        return $this->_subResponseRenderer;
    }

    public function hasSubResponseRenderer()
    {
        return $this->_subResponseRenderer != '';
    }
}
