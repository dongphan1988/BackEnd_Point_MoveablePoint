<?php


class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;
 public function __construct($_x, $_y,$xSpeed,$ySpeed)
 {
     parent::__construct($_x, $_y);
     $this->xSpeed = $xSpeed;
     $this->ySpeed = $ySpeed;
 }
 public function getXspeed(){
     return $this->xSpeed;
 }
 public function getYspeed(){
     return $this->ySpeed;
 }
 public function setYspeed($ySpeed){
     $this->ySpeed = $ySpeed;
 }
 public function setXspeed($xSpeed){
     $this->xSpeed = $xSpeed;
 }
 public function setSpeed($newXspeed,$newYspeed){
     $this->xSpeed = $newXspeed;
     $this->ySpeed = $newYspeed;
 }
 public function getSpeed(){
     $array =array($this->xSpeed,$this->ySpeed);
     return $array;
 }
 public function toString()
 {
     echo "($this->y,$this->y),speed = ($this->xSpeed,$this->ySpeed)";
 }
 public function move(){
     $this->x += $this->xSpeed;
     $this->y += $this->ySpeed;
     return [$this->x,$this->y];
 }
}