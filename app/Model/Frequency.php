<?php
/**
 * Model for frequencies.
 *
 * Developed against CakePHP 2.3.0 and PHP 5.4.x.
 *
 * Copyright 2013, Inveneo, Inc. (http://www.inveneo.org)
 *
 * Licensed under GNU General Public License.
 * 
 * This file is part of Poundcake.
 * 
 * Poundcake is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Poundcake is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2013, Inveneo, Inc. (http://www.inveneo.org)
 * @author        Inveneo Dev Team <info@inveneo.org>
 * @link          http://www.inveneo.org
 * @package       app.Model
 * @since         Frequency was introduced in Poundcake v2.7
 * @license       GNU General Public License
 */


App::uses('AppModel', 'Model');

class Frequency extends AppModel {

    /*
     * Display field for select lists
     */
    public $displayField = 'name';
    
    /*
     * Default sort order
     */
    var $order = "Frequency.frequency asc";

    /*
     * Relations
     */
    var $belongsTo = array(
       'RadioBand'
    );
    
    // var $actsAs = array('Containable');
    
    /*
     * Field-level validation rules
     */
    public $validate = array(
        'frequency' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'This field cannot be blank.',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'This field must be an integer.',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        )
    );
}
