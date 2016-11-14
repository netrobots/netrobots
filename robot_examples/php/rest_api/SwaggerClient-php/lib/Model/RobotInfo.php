<?php
/**
 * RobotInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * RobotInfo Class Doc Comment
 *
 * @category    Class
 * @description Info about the robot.
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RobotInfo implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'robot_id' => 'Number',
        'pos_x' => 'float',
        'pos_y' => 'float',
        'direction' => 'float',
        'current_speed' => 'float',
        'required_speed' => 'float',
        'acceleration' => 'float',
        'reloading_time' => 'float',
        'health' => 'float',
        'points' => 'float'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'robot_id' => 'robotId',
        'pos_x' => 'posX',
        'pos_y' => 'posY',
        'direction' => 'direction',
        'current_speed' => 'currentSpeed',
        'required_speed' => 'requiredSpeed',
        'acceleration' => 'acceleration',
        'reloading_time' => 'reloadingTime',
        'health' => 'health',
        'points' => 'points'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'robot_id' => 'setRobotId',
        'pos_x' => 'setPosX',
        'pos_y' => 'setPosY',
        'direction' => 'setDirection',
        'current_speed' => 'setCurrentSpeed',
        'required_speed' => 'setRequiredSpeed',
        'acceleration' => 'setAcceleration',
        'reloading_time' => 'setReloadingTime',
        'health' => 'setHealth',
        'points' => 'setPoints'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'robot_id' => 'getRobotId',
        'pos_x' => 'getPosX',
        'pos_y' => 'getPosY',
        'direction' => 'getDirection',
        'current_speed' => 'getCurrentSpeed',
        'required_speed' => 'getRequiredSpeed',
        'acceleration' => 'getAcceleration',
        'reloading_time' => 'getReloadingTime',
        'health' => 'getHealth',
        'points' => 'getPoints'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $robot_id 
      * @var Number
      */
    protected $robot_id;
    
    /**
      * $pos_x 
      * @var float
      */
    protected $pos_x;
    
    /**
      * $pos_y 
      * @var float
      */
    protected $pos_y;
    
    /**
      * $direction Direction expressed in degrees. 0 degree is EAST, 90 degree is NORTH, 180 degree is WEST, 270 degree is SOUTH
      * @var float
      */
    protected $direction;
    
    /**
      * $current_speed 
      * @var float
      */
    protected $current_speed;
    
    /**
      * $required_speed 
      * @var float
      */
    protected $required_speed;
    
    /**
      * $acceleration 
      * @var float
      */
    protected $acceleration;
    
    /**
      * $reloading_time 0 if the robot can fire immediately.
      * @var float
      */
    protected $reloading_time;
    
    /**
      * $health 0 if the robot is dead.
      * @var float
      */
    protected $health;
    
    /**
      * $points the earned points.
      * @var float
      */
    protected $points;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->robot_id = $data["robot_id"];
            $this->pos_x = $data["pos_x"];
            $this->pos_y = $data["pos_y"];
            $this->direction = $data["direction"];
            $this->current_speed = $data["current_speed"];
            $this->required_speed = $data["required_speed"];
            $this->acceleration = $data["acceleration"];
            $this->reloading_time = $data["reloading_time"];
            $this->health = $data["health"];
            $this->points = $data["points"];
        }
    }
    
    /**
     * Gets robot_id
     * @return Number
     */
    public function getRobotId()
    {
        return $this->robot_id;
    }
  
    /**
     * Sets robot_id
     * @param Number $robot_id 
     * @return $this
     */
    public function setRobotId($robot_id)
    {
        
        $this->robot_id = $robot_id;
        return $this;
    }
    
    /**
     * Gets pos_x
     * @return float
     */
    public function getPosX()
    {
        return $this->pos_x;
    }
  
    /**
     * Sets pos_x
     * @param float $pos_x 
     * @return $this
     */
    public function setPosX($pos_x)
    {
        
        $this->pos_x = $pos_x;
        return $this;
    }
    
    /**
     * Gets pos_y
     * @return float
     */
    public function getPosY()
    {
        return $this->pos_y;
    }
  
    /**
     * Sets pos_y
     * @param float $pos_y 
     * @return $this
     */
    public function setPosY($pos_y)
    {
        
        $this->pos_y = $pos_y;
        return $this;
    }
    
    /**
     * Gets direction
     * @return float
     */
    public function getDirection()
    {
        return $this->direction;
    }
  
    /**
     * Sets direction
     * @param float $direction Direction expressed in degrees. 0 degree is EAST, 90 degree is NORTH, 180 degree is WEST, 270 degree is SOUTH
     * @return $this
     */
    public function setDirection($direction)
    {
        
        $this->direction = $direction;
        return $this;
    }
    
    /**
     * Gets current_speed
     * @return float
     */
    public function getCurrentSpeed()
    {
        return $this->current_speed;
    }
  
    /**
     * Sets current_speed
     * @param float $current_speed 
     * @return $this
     */
    public function setCurrentSpeed($current_speed)
    {
        
        $this->current_speed = $current_speed;
        return $this;
    }
    
    /**
     * Gets required_speed
     * @return float
     */
    public function getRequiredSpeed()
    {
        return $this->required_speed;
    }
  
    /**
     * Sets required_speed
     * @param float $required_speed 
     * @return $this
     */
    public function setRequiredSpeed($required_speed)
    {
        
        $this->required_speed = $required_speed;
        return $this;
    }
    
    /**
     * Gets acceleration
     * @return float
     */
    public function getAcceleration()
    {
        return $this->acceleration;
    }
  
    /**
     * Sets acceleration
     * @param float $acceleration 
     * @return $this
     */
    public function setAcceleration($acceleration)
    {
        
        $this->acceleration = $acceleration;
        return $this;
    }
    
    /**
     * Gets reloading_time
     * @return float
     */
    public function getReloadingTime()
    {
        return $this->reloading_time;
    }
  
    /**
     * Sets reloading_time
     * @param float $reloading_time 0 if the robot can fire immediately.
     * @return $this
     */
    public function setReloadingTime($reloading_time)
    {
        
        $this->reloading_time = $reloading_time;
        return $this;
    }
    
    /**
     * Gets health
     * @return float
     */
    public function getHealth()
    {
        return $this->health;
    }
  
    /**
     * Sets health
     * @param float $health 0 if the robot is dead.
     * @return $this
     */
    public function setHealth($health)
    {
        
        $this->health = $health;
        return $this;
    }
    
    /**
     * Gets points
     * @return float
     */
    public function getPoints()
    {
        return $this->points;
    }
  
    /**
     * Sets points
     * @param float $points the earned points.
     * @return $this
     */
    public function setPoints($points)
    {
        
        $this->points = $points;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}