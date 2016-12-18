<?php
/*
 * This file is part of FacturaSctipts
 * Copyright (C) 2013-2016  Carlos Garcia Gomez  neorazorx@gmail.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once 'plugins/facturacion_base/model/core/cliente.php';

/**
 * El cliente. Puede tener una o varias direcciones y subcuentas asociadas.
 * 
 * @author Carlos García Gómez <neorazorx@gmail.com>
 */
class cliente extends FacturaScripts\model\cliente
{
    public function get_new_codigo() {
        if ($salvame=='1000')
        {   
            return parent::get_new_codigo();
        }
        else {
            $texto = '0'; /*Codigo empieza por número*/
            /// buscamos un hueco
            if ($_POST['pais']=='ESP' OR $_POST['nuevo_pais']=='ESP')
            {
                if (!$_POST['codpostal']){
                    $rest =  substr($_POST['nuevo_codpostal'], 0, 2);

                }
                else 
                {
                    $rest =  substr($_POST['codpostal'], 0, 2);
                }
            }
            else 
            {
                if ($_POST['pais']=='AND' OR $_POST['nuevo_pais']=='AND')
                {
                    $rest = '54';
                }
                else
                {
                    if ($_POST['pais']=='MAR' OR $_POST['nuevo_pais']=='MAR')
                    {
                        $rest = '55';
                    }
                    else 
                    {
                        if ($_POST['pais']=='CHN' OR $_POST['nuevo_pais']=='CHN')
                        {
                            $rest = '56';
                        }
                        else
                        {
                            if ($_POST['pais']=='ISR' OR $_POST['nuevo_pais']=='ISR')
                            {
                                $rest = '57';
                            }   
                            else 
                            {
                                if ($_POST['pais']=='BRA' OR $_POST['nuevo_pais']=='BRA')        
                                {
                                    $rest = '58';
                                }
                                else
                                {
                                    if ($_POST['pais']=='AUT' OR $_POST['nuevo_pais']=='AUT')
                                    {
                                        $rest = '59';
                                    }
                                else
                                {    
                                    if ($_POST['pais']=='DEU' OR $_POST['nuevo_pais']=='DEU')
                                    {
                                        $rest = '60';
                                    }
                                else 
                                {
                                    if ($_POST['pais']=='SLV' OR $_POST['nuevo_pais']=='SLV')
                                    {
                                        $rest = '61';
                                    }   
                                    else 
                                    {    
                                        if ($_POST['pais']=='IRL' OR $_POST['nuevo_pais']=='IRL')
                                        {
                                            $rest = '62';
                                        }
                                        else 
                                        {
                                            if ($_POST['pais']=='AUS' OR $_POST['nuevo_pais']=='AUS')
                                            {
                                                $rest = '63';
                                            }
                                            else
                                            {    
                                                if ($_POST['pais']=='CHL' OR $_POST['nuevo_pais']=='CHL')
                                                {
                                                    $rest = '64';
                                                }
                                            else 
                                            {    
                                                if ($_POST['pais']=='BEL' OR $_POST['nuevo_pais']=='BEL')
                                                {
                                                    $rest = '65';
                                                }
                                                else 
                                                {  
                                                    if ($_POST['pais']=='VEN' OR $_POST['nuevo_pais']=='VEN')
                                                    {
                                                        $rest = '66';
                                                    }
                                                    else
                                                    {
                                                        if ($_POST['pais']=='EGY' OR $_POST['nuevo_pais']=='EGY')
                                                        {
                                                            $rest = '67';
                                                        }
                                                        else 
                                                        {
                                                            if ($_POST['pais']=='ZAF' OR $_POST['nuevo_pais']=='ZAF')
                                                            {
                                                                $rest = '68';
                                                            }
                                                            else 
                                                            {   
                                                                if ($_POST['pais']=='ARG' OR $_POST['nuevo_pais']=='ARG')
                                                                {
                                                                    $rest = '69';
                                                                }
                                                                else
                                                                {    
                                                                    if ($_POST['pais']=='DNK' OR $_POST['nuevo_pais']=='DNK')
                                                                    {
                                                                        $rest = '70';
                                                                    }
                                                                    else 
                                                                    {
                                                                        if ($_POST['pais']=='COL' OR $_POST['nuevo_pais']=='COL')
                                                                        {
                                                                            $rest = '71';
                                                                        }
                                                                        else
                                                                        {    
                                                                            if ($_POST['pais']=='SGP' OR $_POST['nuevo_pais']=='SGP')
                                                                            {
                                                                                $rest = '72';
                                                                            }
                                                                            else 
                                                                            {    
                                                                                if ($_POST['pais']=='NOR' OR $_POST['nuevo_pais']=='NOR')
                                                                                {
                                                                                    $rest = '73';
                                                                                }
                                                                                else 
                                                                                {    
                                                                                    if ($_POST['pais']=='ROU' OR $_POST['nuevo_pais']=='ROU')
                                                                                    {
                                                                                        $rest = '74';
                                                                                    }
                                                                                    else
                                                                                    {    
                                                                                        if ($_POST['pais']=='USA' OR $_POST['nuevo_pais']=='USA')
                                                                                        {
                                                                                            $rest = '75';
                                                                                        }
                                                                                        else 
                                                                                        {    
                                                                                            if ($_POST['pais']=='LBN' OR $_POST['nuevo_pais']=='LBN')
                                                                                            {
                                                                                                $rest = '76';
                                                                                            }
                                                                                            else 
                                                                                            {    
                                                                                                if ($_POST['pais']=='IDN' OR $_POST['nuevo_pais']=='IDN')
                                                                                                {
                                                                                                    $rest = '77';
                                                                                                }
                                                                                                else 
                                                                                                {    
                                                                                                    if ($_POST['pais']=='LKA' OR $_POST['nuevo_pais']=='LKA')
                                                                                                    {
                                                                                                        $rest = '78';
                                                                                                    }
                                                                                                else 
                                                                                                {    
                                                                                                    if ($_POST['pais']=='SRB' OR $_POST['nuevo_pais']=='SBA')
                                                                                                    {
                                                                                                        $rest = '79';
                                                                                                    }
                                                                                                    else 
                                                                                                    {    
                                                                                                        if ($_POST['pais']=='FRA' OR $_POST['nuevo_pais']=='FRA')
                                                                                                        {
                                                                                                            $rest = '80';
                                                                                                        }
                                                                                                        else 
                                                                                                        {    
                                                                                                            if ($_POST['pais']=='FIN' OR $_POST['nuevo_pais']=='FIN')
                                                                                                            {
                                                                                                                $rest = '81';
                                                                                                            }
                                                                                                            else 
                                                                                                            {    
                                                                                                                if ($_POST['pais']=='TTO' OR $_POST['nuevo_pais']=='TTO')
                                                                                                                {
                                                                                                                    $rest = '82';
                                                                                                                }
                                                                                                                else 
                                                                                                                {    
                                                                                                                    if ($_POST['pais']=='GRC' OR $_POST['nuevo_pais']=='GRC')
                                                                                                                    {
                                                                                                                        $rest = '83';
                                                                                                                    }
                                                                                                                    else 
                                                                                                                    {    
                                                                                                                        if ($_POST['pais']=='IND' OR $_POST['nuevo_pais']=='IND')
                                                                                                                        {
                                                                                                                            $rest = '84';
                                                                                                                        }
                                                                                                                        else 
                                                                                                                        {    
                                                                                                                            if ($_POST['pais']=='GBR' OR $_POST['nuevo_pais']=='GBR')
                                                                                                                            {
                                                                                                                                $rest = '85';
                                                                                                                            }
                                                                                                                            else 
                                                                                                                            {    
                                                                                                                                if ($_POST['pais']=='IRN' OR $_POST['nuevo_pais']=='IRN')
                                                                                                                                {
                                                                                                                                    $rest = '86';
                                                                                                                                }
                                                                                                                                else 
                                                                                                                                {    
                                                                                                                                    if ($_POST['pais']=='LTU' OR $_POST['nuevo_pais']=='LTU')
                                                                                                                                    {
                                                                                                                                        $rest = '87';
                                                                                                                                    }
                                                                                                                                    else 
                                                                                                                                    {    
                                                                                                                                        if ($_POST['pais']=='TWN' OR $_POST['nuevo_pais']=='TWN')
                                                                                                                                        {
                                                                                                                                            $rest = '88';
                                                                                                                                        }
                                                                                                                                        else 
                                                                                                                                        {    
                                                                                                                                            if ($_POST['pais']=='EST' OR $_POST['nuevo_pais']=='EST')
                                                                                                                                            {
                                                                                                                                                $rest = '89';
                                                                                                                                            }
                                                                                                                                            else 
                                                                                                                                            {    
                                                                                                                                                if ($_POST['pais']=='NLD' OR $_POST['nuevo_pais']=='NLD')
                                                                                                                                                {
                                                                                                                                                    $rest = '90';
                                                                                                                                                }
                                                                                                                                                else 
                                                                                                                                                {
                                                                                                                                                    if ($_POST['pais']=='HUN' OR $_POST['nuevo_pais']=='HUN')
                                                                                                                                                    {
                                                                                                                                                        $rest = '91';
                                                                                                                                                    }
                                                                                                                                                    else 
                                                                                                                                                    {
                                                                                                                                                        if ($_POST['pais']=='ITA' OR $_POST['nuevo_pais']=='ITA')
                                                                                                                                                        {
                                                                                                                                                            $rest = '92';
                                                                                                                                                        }
                                                                                                                                                        else 
                                                                                                                                                        {    
                                                                                                                                                            if ($_POST['pais']=='POL' OR $_POST['nuevo_pais']=='POL')
                                                                                                                                                            {
                                                                                                                                                                $rest = '93';
                                                                                                                                                            }
                                                                                                                                                            else 
                                                                                                                                                            {    
                                                                                                                                                                if ($_POST['pais']=='MEX' OR $_POST['nuevo_pais']=='MEX')
                                                                                                                                                                {
                                                                                                                                                                    $rest = '94';
                                                                                                                                                                }
                                                                                                                                                                else 
                                                                                                                                                                {    
                                                                                                                                                                    if ($_POST['pais']=='PRT' OR $_POST['nuevo_pais']=='PRT')
                                                                                                                                                                    {
                                                                                                                                                                        $rest = '95';
                                                                                                                                                                    }
                                                                                                                                                                    else 
                                                                                                                                                                    {    
                                                                                                                                                                        if ($_POST['pais']=='VGB' OR $_POST['nuevo_pais']=='VGB')
                                                                                                                                                                        {
                                                                                                                                                                            $rest = '96';
                                                                                                                                                                        }
                                                                                                                                                                        else 
                                                                                                                                                                        {    
                                                                                                                                                                            if ($_POST['pais']=='SWE' OR $_POST['nuevo_pais']=='SWE')
                                                                                                                                                                            {
                                                                                                                                                                                $rest = '97';
                                                                                                                                                                            }
                                                                                                                                                                            else 
                                                                                                                                                                            {    
                                                                                                                                                                                if ($_POST['pais']=='CHE' OR $_POST['nuevo_pais']=='CHE')
                                                                                                                                                                                {
                                                                                                                                                                                    $rest = '98';
                                                                                                                                                                                }
                                                                                                                                                                                else
                                                                                                                                                                                {
                                                                                                                                                                                    if ($_POST['pais']=='MYS' OR $_POST['nuevo_pais']=='MYS')
                                                                                                                                                                                    {
                                                                                                                                                                                        $rest = "MY";
                                                                                                                                                                                        $texto = '1';
                                                                                                                                                                                    }
                                                                                                                                                                                    else
                                                                                                                                                                                    {
                                                                                                                                                                                        if ($_POST['pais']=='ETH' OR $_POST['nuevo_pais']=='ETH')
                                                                                                                                                                                        {
                                                                                                                                                                                            $rest = 'ET';
                                                                                                                                                                                            $texto = '1';
                                                                                                                                                                                        }
                                                                                                                                                                                        else
                                                                                                                                                                                        {
                                                                                                                                                                                            $rest = '00';
                                                                                                                                                                                        }
                                                                                                                                                                                    }
                                                                                                                                                                                }
                                                                                                                                                                            }
                                                                                                                                                                        }
                                                                                                                                                                    }
                                                                                                                                                                }
                                                                                                                                                            }
                                                                                                                                                        }
                                                                                                                                                    }
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }  
                                                                                                                    }
                                                                                                                }
                                                                                                            }   
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                            }
                                        }
                                    }
                                }
                                }
                                }
                            }
                        }
                    }
                }
            }
            if ($texto == '1'){   
                $num = 0;
                $numo = 0;
                $max = 9999;
                $encontrado = FALSE;  
            }              
            else {
                $encontrado = FALSE;            
                $num = intval($rest)*10000;
                $numo = intval($rest)*10000;
                $max = ((intval($rest)+1)*10000)-1;
                
            }
            $codclientes = $this->db->select("SELECT codcliente AS cod FROM ".$this->table_name." WHERE codcliente LIKE '$rest%' ORDER BY cod ASC;");
            if ($texto == '1'){
                if($codclientes)
                {
                    foreach($codclientes as $n)
                    {
                        if( intval(substr($n['cod'],-4)) > $num)
                        {
                            $encontrado = TRUE;
                            break;
                        }
                        else
                            $num++;
                    }
                }
                else 
                {                    
                        $formato = '%s%04s';
                        $numero = intval($num);
                        return sprintf($formato,$rest,$numero);
                }
            } else {
                if($codclientes)
                {
                    foreach($codclientes as $n)
                    {
                        if( intval($n['cod']) > $num)
                        {
                            $encontrado = TRUE;
                            break;
                        }
                        else
                            $num++;
                    }
                }
                else 
                {
                    return sprintf('%06s',  intval($num));
                }
            }
                if($encontrado)
                {
                    if ($texto == '0'){
                        return sprintf('%06s', intval($num));
                    }
                    else {
                        $formato = '%s%04s';
                        $numero = intval($num);
                        return sprintf($formato,$rest,$numero);
                    }
                }
                else
                {
                    if ($num<$max)
                    {    
                        if ($texto == '0'){
                        return sprintf('%06s', intval($num));
                        }
                        else {
                            $formato = '%s%04s';
                            $numero = intval($num);
                            return sprintf($formato,$rest,$numero);
                        }
                    }
                    else 
                    {
                        return sprintf('%06s','NO_HAY');
                    }
                }
        }
    }
}
