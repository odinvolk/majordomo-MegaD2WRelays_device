<?php
 $currentStatus=$this->getProperty('chA');
if ($currentStatus) {
 $this->callMethodSafe('turnOffA');
} else {
 $this->callMethodSafe('turnOnA');
}
