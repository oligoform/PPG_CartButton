<?php

/**
 * (C) 2015  Pasquale Pari, Galgenen
 * Preisanzeige, Smarty-Erweiterung fuer Oxid
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 */


$sMetadataVersion = '1.1';
$aModule          = array(
    'id'          => 'ppg_cartbutton',
    'title'       => '<strong>Cart Button</strong> by Pasquale Pari',
    'description' => 'Modul auf Basis von Paul Lamp pl_showprice aus dem Oxid Forum<br \><a href="https://github.com/spoilie/pl-showprice">und auf Github zu finden (Klick)</a>',
    'thumbnail'   => '',
    'version'     => '1.0',
    'author'      => 'Pasquale Pari',
    'email'       => 'pasquale.pari@getraenkekiste.ch',
    'url'         => 'http://www.getraenkekiste.ch',
    'extend'      => array(
        'oxutilsview' => 'ppg/cartbutton/extend/ppg_oxutilsview',
    ),
    'settings'     => array
    (
        array( 'group'  => 'ppg_showcart_main',
               'name'   => 'showcartid',
               'type'   => 'str',
               'value'  => ''
             ),
    ),    
    'blocks'      => array(
        array(
            'template' => 'article_extend.tpl',
            'block'    => 'admin_article_extend_form',
            'file'     => '/views/blocks/admin_ppgcb_article_form.tpl'
             ),
        array(
            'template'    => 'usergroup_main.tpl', 
            'block'       => 'admin_usergroup_main_form', 
            'file'        => '/views/blocks/vtec_admin_benutzerID.tpl'
             ),
        array('template'  => 'page/details/inc/productmain.tpl',
              'block'     => 'details_productmain_zoom',
              'file'      => 'views/blocks/ppg_lieferinfo.tpl'
              ),
        array('template'  => 'widget/product/listitem_infogrid.tpl',
              'block'     => 'widget_product_listitem_infogrid_gridpicture',
              'file'      => 'views/blocks/ppg_lieferinfo_infogrid.tpl'
              ),
        array('template'  => 'widget/product/listitem_grid.tpl',
              'block'     => 'widget_product_listitem_grid_price_value',
              'file'      => 'views/blocks/ppg_lieferinfo_grid.tpl'
              ),
    ),
);
