
<?php


      
 snmp_set_valueretrieval(SNMP_VALUE_PLAIN);        //Con esta función PHP solicita al agente que el resultado de la petición snmpget("") sea un valor entero.
      
   $Ch14 = snmp2_get('192.168.10.10', 'public', '1.3.6.1.4.1.18137.6.1.2.0');    //Valor snmp adquirido y guardado en la variable $Ch14.
   $Ch11 = snmp2_get('192.168.10.20', 'public', '1.3.6.1.4.1.18137.4.11.32');     //Valor snmp adquirido y guardado en la variable $Ch11.
   $Ch22 = snmp2_get('192.168.10.30', 'public', '1.3.6.1.4.1.18137.4.11.32');    //Valor snmp adquirido y guardado en la variable $Ch22.
   $ChInge = snmp2_get('192.168.10.40', 'public', '1.3.6.1.4.1.18137.4.11.32');   //Valor snmp adquirido y guardado en la variable $CInge.
   $Ch20 = snmp2_get('192.168.10.50', 'public', '1.3.6.1.4.1.18137.6.1.2.0');     //Valor snmp adquirido y guardado en la variable $Ch20.
   $Ch45 = snmp2_get('192.168.10.60', 'public', '1.3.6.1.4.1.18137.6.1.2.0');       //Valor snmp adquirido y guardado en la variable $Ch45. 
  
      
    


echo   "$Ch14,$Ch11,$Ch22,$ChInge,$Ch20,$Ch45";   //Se despliega en pantalla (el navegador lo interpreta como  string o texto) los valores guardados dentro del array separados por una coma(,).

/*$x = snmpget('192.168.10.6', 'public', '1.3.6.1.4.1.17909.2.1.4.7');
 $y = snmpget('192.168.10.6', 'public', '1.3.6.1.4.1.17909.2.1.4.8');
 $a = snmpget('192.168.10.6', 'public', '1.3.6.1.4.1.17909.2.1.4.9');
 $b = snmpget('192.168.10.6', 'public', '1.3.6.1.4.1.17909.2.1.4.10');
 $c = snmpget('192.168.10.6, 'public', '1.3.6.1.4.1.17909.2.1.4.11');
 $d = snmpget('192.168.10.6', 'public', '1.3.6.1.4.1.17909.2.1.4.12');
 $e = snmpget('192.168.10.6', 'public', '1.3.6.1.4.1.17909.2.1.4.13');
 $f = snmpget('192.168.10.6', 'public', '1.3.6.1.4.1.17909.2.1.4.14');
 $g = snmpget('192.168.10.6', 'public', '1.3.6.1.4.1.17909.2.1.4.15');
 $h = snmpget('192.168.10.6', 'public', '1.3.6.1.4.1.17909.2.1.4.16'); */
      
   
 


  
     
 
  
?>

