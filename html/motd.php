<?php
/*
Ceres Control Panel

This is a control pannel program for Athena and Freya
Copyright (C) 2005 by Beowulf and Nightroad

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

To contact any of the authors about special permissions send
an e-mail to cerescp@gmail.com
*/

session_start();
include_once 'config.php'; // loads config variables
include_once 'query.php'; // imports queries
include_once 'functions.php';

opentable($lang['NEWS_MESSAGE']);
?>
<table width="504">
<p ALIGN=center>Bienvenidos a XpeedRo.<br><br> Aqui podeis descargar el cliente para entrar al servidor y comenzar la aventura.
<br/><br/>


<a href="https://mega.nz/#!Z5kAEJiI!gd8EsLJJB2cfouoEi7ODEsjo7cQ_i5Da4sR814jhH8c" 
target="_blank"><img src="images/fullclientbn.png" width="60%" align="center" border="0" onMouseOver="src='images/fullclient.png'" onMouseOut="src='images/fullclientbn.png'"></a> 

<a href="https://mega.nz/#!Vx9hUY6J!PNFgJx_TUd8Uwfi9TemURTqZheC63snoKLGIv_9e3tk" 
target="_blank"><img src="images/tinyclientbn.png" width="60%" align="center" border="0" onMouseOver="src='images/tinyclient.png'" onMouseOut="src='images/tinyclientbn.png'"></a> 

<br/>
</p>

</table>
<?php
closetable();
fim();
?>
