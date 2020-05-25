<?php
 $currentStatus=$this->getProperty('chB');
if ($currentStatus) {
 $this->callMethodSafe('turnOffB');
} else {
 $this->callMethodSafe('turnOnB');
}
