<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Perfil de Intereses </title>
</head>
<body>
    <section class="intro-perfil">
        <h1>Responda que tanto le gustaría realizar cada actividad </h1>
        <br><h2>Marca tu respuesta según tus gustos y tendencias personales, 
            recuerda que no hay respuestas correctas o respuestas incorrectas. 
            Simplemente en tu respuesta se refleja el grado de gusto o disgusto 
            por determinadas actividades, tu opinión y tus intereses individuales. 
            Procura contestar siendo sincero y espontáneo, sin reflexionar 
            demasiado en lo que se espera de ti, sino en lo que realmente te atrae.</h2></br>
 
    </section>
    <section class="table-interests" >
        <form action="php/registrar_alumnos.php" method="POST"> 
        <h4>I. ¿TE GUSTARÍA TRABAJAR EN ESTOS AMBIENTES LABORALES?</h4>
        <table border="2">
            <thead>
                <th></th>
                <th>No me agrada</th>
                <th>Me agrada poco</th>
                <th>Me agrada mucho o totalmente</th>
            </thead>
            <tr>
                <td>1. TALLER DE MECÁNICA AUTOMOTRIZ:</td>
                <td class="td_radio"><input type="radio" name="peso_1_1" value="1" required></td>
                <td class="td_radio"><input type="radio" name="peso_1_1" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_1" value="5"></td>
            </tr> 
            <tr>
                <td>2. FÁBRICA DE MUEBLES:</td>
                <td class="td_radio"><input type="radio" name="peso_1_2" value="1" required></td>
                <td class="td_radio"><input type="radio" name="peso_1_2" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_2" value="5"></td>
            </tr> 
            <tr>
                <td>3. EMPRESA MINERA:</td>
                <td class="td_radio"><input type="radio" name="peso_1_3" value="1" required></td>
                <td class="td_radio"><input type="radio" name="peso_1_3" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_3" value="5"></td>
            </tr> 
            <tr>
                <td>4. HACIENDA GANADERA:</td>
                <td class="td_radio"><input type="radio" name="peso_1_4" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_4" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_4" value="5"></td>
            </tr>
            <tr>    
                <td>5. HACIENDA AGRÍCOLA:</td>
                <td class="td_radio"><input type="radio" name="peso_1_5" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_5" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_5" value="5"></td>
            </tr>
            <tr>
                <td>6. PANIFICADORA O PANADERÍA:</td>
                <td class="td_radio"><input type="radio" name="peso_1_6" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_6" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_6" value="5"></td>
            </tr>
            <tr>
                <td>7. CENTRAL HIDROELÉCTRICA:</td>
                <td class="td_radio"><input type="radio" name="peso_1_7" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_7" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_7" value="5"></td>
            </tr>
            <tr>
                <td>8. LABORATORIO DE ANÁLISIS QUÌMICO:</td>
                <td class="td_radio"><input type="radio" name="peso_1_8" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_8" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_8" value="5"></td>
            </tr>
            <tr>
                <td>9. HOSPITAL O CLÍNICA:</td>
                <td class="td_radio"><input type="radio" name="peso_1_9" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_9" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_9" value="5"></td>
            </tr>
            <tr>
                <td>10. TALLER DE REPARACIÓN DE COMPUTADORAS:</td>
                <td class="td_radio"><input type="radio" name="peso_1_10" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_10" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_10" value="5"></td>
            </tr>
            <tr>
                <td>11. FARMACIA O BOTICA:</td>
                <td class="td_radio"><input type="radio" name="peso_1_11" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_11" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_11" value="5"></td>
            </tr>
            <tr>
                <td>12. INSTITUTO GEOFÍSICO:</td>
                <td class="td_radio"><input type="radio" name="peso_1_12" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_12" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_12" value="5"></td>
            </tr>
            <tr>
                <td>13. COMPAÑÍA DE TEATRO:</td>
                <td class="td_radio"><input type="radio" name="peso_1_13" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_13" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_13" value="5"></td>
            </tr>
            <tr>
                <td>14. BANDA U ORQUESTA MUSICAL:</td>
                <td class="td_radio"><input type="radio" name="peso_1_14" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_14" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_14" value="5"></td>
            </tr>
            <tr>
                <td>15. CASA DE  MODAS Y MODELOS:</td>
                <td class="td_radio"><input type="radio" name="peso_1_15" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_15" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_15" value="5"></td>
            </tr>          
            <tr>
                <td>16. ESTUDIO DE ARQUITECTOS:</td>
                <td class="td_radio"><input type="radio" name="peso_1_16" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_16" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_16" value="5"></td>
            </tr>
            <tr>
                <td>17. GALERIA DE ARTE:</td>
                <td class="td_radio"><input type="radio" name="peso_1_17" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_17" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_17" value="5"></td>
            </tr>
            <tr>
                <td>18. ESTUDIO DE GRABACIONES MUSICALES:</td>
                <td class="td_radio"><input type="radio" name="peso_1_18" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_18" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_18" value="5"></td>
            </tr>
            <tr>
                <td>19. ESTUDIO DE ABOGADOS:</td>
                <td class="td_radio"><input type="radio" name="peso_1_19" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_19" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_19" value="5"></td>
            </tr>
            <tr>
                <td>20. ESTACIÓN DE BOMBEROS Y AMBULANCIAS:</td>
                <td class="td_radio"><input type="radio" name="peso_1_20" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_20" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_20" value="5"></td>
            </tr>
            <tr>
                <td>21. CORTE SUPREMA DE JUSTICIA:</td>
                <td class="td_radio"><input type="radio" name="peso_1_21" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_21" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_21" value="5"></td>
            </tr>
            <tr>
                <td>22. ASILO U ORFANATO:</td>
                <td class="td_radio"><input type="radio" name="peso_1_22" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_22" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_22" value="5"></td>
            </tr>
            <tr>
                <td>23. MOVIMIENTO MISIONERO RELIGIOSO:</td>
                <td class="td_radio"><input type="radio" name="peso_1_23" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_23" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_23" value="5"></td>
            </tr>
            <tr>
                <tr>
                <td>24. ALCALDIA DE UN DISTRITO:</td>
                <td class="td_radio"><input type="radio" name="peso_1_24" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_24" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_24" value="5"></td>
            </tr>
            <tr>
                <td>25. CADENA DE EMPRESAS HOTELERAS:</td>
                <td class="td_radio"><input type="radio" name="peso_1_25" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_25" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_25" value="5"></td>
            </tr>
            <tr>
                <td>26. AGENCIA DE NOTICIAS (TV/RADIO):</td>
                <td class="td_radio"><input type="radio" name="peso_1_26" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_26" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_26" value="5"></td>
            </tr>
            <tr>
                <td>27. CADENA DE SUPERMERCADOS:</td>
                <td class="td_radio"><input type="radio" name="peso_1_27" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_27" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_27" value="5"></td>
            </tr>
            <tr>
                <td>28. PERIÓDICO/ SEMANARIO/ REVISTA:</td>
                <td class="td_radio"><input type="radio" name="peso_1_28" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_28" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_28" value="5"></td>
            </tr>
            <tr>
                <td>29. ESTACIÓN DE RADIO Y TV:</td>
                <td class="td_radio"><input type="radio" name="peso_1_29" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_29" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_29" value="5"></td>
            </tr>
            <tr>
                <td>30. PROMOTORA DE VENTAS DE AUTOMOVILES Y CASAS:</td>
                <td class="td_radio"><input type="radio" name="peso_1_30" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_30" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_30" value="5"></td>
            </tr>
            <tr>
                <td>31. BANCO DE AHORROS Y CRÉDITOS:</td>
                <td class="td_radio"><input type="radio" name="peso_1_31" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_31" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_31" value="5"></td>
            </tr>
            <tr>
                <td>32. INFOCORP (OFICINA INFORMES ANTECEDENTES BANCARIOS):</td>
                <td class="td_radio"><input type="radio" name="peso_1_32" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_32" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_32" value="5"></td>
            </tr>
            <tr>
                <td>33. ESTUDIO DE CONTADORES:</td>
                <td class="td_radio"><input type="radio" name="peso_1_33" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_33" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_33" value="5"></td>
            </tr>
            <tr>
                <td>34. SUNAT (SUPERINTENDENCIA DE TRIBUTOS):</td>
                <td class="td_radio"><input type="radio" name="peso_1_34" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_34" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_34" value="5"></td>
            </tr>
            <tr>
                <td>35. NOTARIA PÚBLICA:</td>
                <td class="td_radio"><input type="radio" name="peso_1_35" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_35" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_35" value="5"></td>
            </tr>
            <tr>
                <td>36  . CASA DE CAMBIO DE MONEDA EXTRANJERA:</td>
                <td class="td_radio"><input type="radio" name="peso_1_36" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_1_36" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_1_36" value="5"></td>
            </tr>
        </table>
    </section>
    <section class="table-interests" >
        <h4>II. ¿TE GUSTARÍA SEGUIR ESTOS CURSOS?</h4>
        <table border="2">
            <thead>
                <th></th>
                <th>No me agrada</th>
                <th>Me agrada poco</th>
                <th>Me agrada mucho o totalmente</th>
            </thead>
            <tr>
                <td>1. INDUSTRIAS ALIMENTARIAS:</td>
                <td class="td_radio"><input type="radio" name="peso_2_1" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_1" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_1" value="5"></td>
            </tr> 
            <tr>
                <td>2. ELECTRICIDAD INDUSTRIAL:</td>
                <td class="td_radio"><input type="radio" name="peso_2_2" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_2" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_2" value="5"></td>
            </tr> 
            <tr>
                <td>3. INGENIERÍA AGROINDUSTRIAL:</td>
                <td class="td_radio"><input type="radio" name="peso_2_3" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_3" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_3" value="5"></td>
            </tr> 
            <tr>
                <td>4. INGENIERÍA INDUSTRIAL:</td>
                <td class="td_radio"><input type="radio" name="peso_2_4" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_4" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_4" value="5"></td>
            </tr>
            <tr>
                <td>5. PILOTO DE AERONAVES:</td>
                <td class="td_radio"><input type="radio" name="peso_2_5" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_5" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_5" value="5"></td>
            </tr>
            <tr>
                <td>6. MEDICINA HUMANA:</td>
                <td class="td_radio"><input type="radio" name="peso_2_6" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_6" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_6" value="5"></td>
            </tr>
            <tr>
                <td>7. FÍSICA:</td>
                <td class="td_radio"><input type="radio" name="peso_2_7" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_7" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_7" value="5"></td>
            </tr>
            <tr>
                <td>8. INGENIERÍA INFORMÁTICA:</td>
                <td class="td_radio"><input type="radio" name="peso_2_8" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_8" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_8" value="5"></td>
            </tr>
            <tr>
                <td>9. ODONTOLOGÍA:</td>
                <td class="td_radio"><input type="radio" name="peso_2_9" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_9" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_9" value="5"></td>
            </tr>
            <tr>
                <td>10. BIOLOGÍA:</td>
                <td class="td_radio"><input type="radio" name="peso_2_10" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_10" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_10" value="5"></td>
            </tr>
            <tr>
                <td>11. ARQUITECTURA:</td>
                <td class="td_radio"><input type="radio" name="peso_2_11" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_11" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_11" value="5"></td>
            </tr>
            <tr>
                <td>12. DISEÑO GRÁFICO:</td>
                <td class="td_radio"><input type="radio" name="peso_2_12" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_12" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_12" value="5"></td>
            </tr>
            <tr>
                <td>13. BELLAS ARTES:</td>
                <td class="td_radio"><input type="radio" name="peso_2_13" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_13" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_13" value="5"></td>
            </tr>
            <tr>
                <td>14. LITERATURA:</td>
                <td class="td_radio"><input type="radio" name="peso_2_14" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_14" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_14" value="5"></td>
            </tr>
            <tr>
                <td>15. ARTE CINEMATOGRÁFICO:</td>
                <td class="td_radio"><input type="radio" name="peso_2_15" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_15" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_15" value="5"></td>
            </tr>          
            <tr>
                <td>16. PSICOLOGIA:</td>
                <td class="td_radio"><input type="radio" name="peso_2_16" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_16" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_16" value="5"></td>
            </tr>
            <tr>
                <td>17. DERECHO:</td>
                <td class="td_radio"><input type="radio" name="peso_2_17" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_17" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_17" value="5"></td>
            </tr>
            <tr>
                <td>18. TRABAJO SOCIAL:</td>
                <td class="td_radio"><input type="radio" name="peso_2_18" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_18" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_18" value="5"></td>
            </tr>
            <tr>
                <td>19. EDUCACION:</td>
                <td class="td_radio"><input type="radio" name="peso_2_19" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_19" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_19" value="5"></td>
            </tr>
            <tr>
                <td>20. SOCIOLOGIA:</td>
                <td class="td_radio"><input type="radio" name="peso_2_20" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_20" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_20" value="5"></td>
            </tr>
            <tr>
                <td>21. NEGOCIOS INTERNACIONALES:</td>
                <td class="td_radio"><input type="radio" name="peso_2_21" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_21" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_21" value="5"></td>
            </tr>
            <tr>
                <td>22. GUIA OFICIAL DE TURISMO:</td>
                <td class="td_radio"><input type="radio" name="peso_2_22" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_22" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_22" value="5"></td>
            </tr>
            <tr>
                <td>23. CIENCIAS DE LA COMUNICACION:</td>
                <td class="td_radio"><input type="radio" name="peso_2_23" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_23" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_23" value="5"></td>
            </tr>
            <tr>
                <tr>
                <td>24. ADMINISTRACION DE EMPRESAS:</td>
                <td class="td_radio"><input type="radio" name="peso_2_24" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_24" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_24" value="5"></td>
            </tr>
            <tr>
                <td>25. MARKETING EMPRESARIAL:</td>
                <td class="td_radio"><input type="radio" name="peso_2_25" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_25" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_25" value="5"></td>
            </tr>
            <tr>
                <td>26. CONTABILIDAD:</td>
                <td class="td_radio"><input type="radio" name="peso_2_26" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_26" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_26" value="5"></td>
            </tr>
            <tr>
                <td>27. CAJERO DE BANCO:</td>
                <td class="td_radio"><input type="radio" name="peso_2_27" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_27" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_27" value="5"></td>
            </tr>
            <tr>
                <td>28. ESTADÍSTICA:</td>
                <td class="td_radio"><input type="radio" name="peso_2_28" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_28" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_28" value="5"></td>
            </tr>
            <tr>
                <td>29. ASISTENTE LOGÍSTICO:</td>
                <td class="td_radio"><input type="radio" name="peso_2_29" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_29" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_29" value="5"></td>
            </tr>
            <tr>
                <td>30. OPERACIONES BANCARIAS Y FINANCIERAS:</td>
                <td class="td_radio"><input type="radio" name="peso_2_30" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_2_30" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_2_30" value="5"></td>
            </tr>
        </table>
    </section>
    <section class="table-interests" style="align-items: center;" >
        <h4>III. ¿TE GUSTARÍA TRABAJAR EN ESTOS EMPLEOS?</h4>
        <table border="2">
            <thead>
                <th></th>
                <th>No me agrada</th>
                <th>Me agrada poco</th>
                <th>Me agrada mucho o totalmente</th>
            </thead>
            <tr>
                <td>1. CONSTRUIR EDIFICIOS:</td>
                <td class="td_radio"><input type="radio" name="peso_3_1" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_1" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_1" value="5"></td>
            </tr> 
            <tr>
                <td>2. SEMBRAR Y COSECHAR:</td>
                <td class="td_radio"><input type="radio" name="peso_3_2" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_2" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_2" value="5"></td>
            </tr> 
            <tr>
                <td>3. REPARAR MAQUINAS INDUSTRIALES:</td>
                <td class="td_radio"><input type="radio" name="peso_3_3" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_3" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_3" value="5"></td>
            </tr> 
            <tr>
                <td>4. ENSAMBLAR AUTOMOVILES:</td>
                <td class="td_radio"><input type="radio" name="peso_3_4" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_4" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_4" value="5"></td>
            </tr>
            <tr>
                <td>5. INVESTIGAR NUEVAS VACUNAS:</td>
                <td class="td_radio"><input type="radio" name="peso_3_5" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_5" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_5" value="5"></td>
            </tr>
            <tr>
                <td>6. DIAGNOSTICAR ENFERMEDADES:</td>
                <td class="td_radio"><input type="radio" name="peso_3_6" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_6" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_6" value="5"></td>
            </tr>
            <tr>
                <td>7. HACER EXPERIMENTOS QUIMICOS:</td>
                <td class="td_radio"><input type="radio" name="peso_3_7" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_7" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_7" value="5"></td>
            </tr>
            <tr>
                <td>8. RESOLVER OPERACIONES MATEMATICAS:</td>
                <td class="td_radio"><input type="radio" name="peso_3_8" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_8" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_8" value="5"></td>
            </tr>
            <tr>
                <td>9. ACTUAR EN TEATRO:</td>
                <td class="td_radio"><input type="radio" name="peso_3_9" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_9" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_9" value="5"></td>
            </tr>
            <tr>
                <td>10. REDACTAR NOVELAS PARA LA TV:</td>
                <td class="td_radio"><input type="radio" name="peso_3_10" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_10" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_10" value="5"></td>
            </tr>
            <tr>
                <td>11. DISEÑAR PLANOS (ARQUITETCURA):</td>
                <td class="td_radio"><input type="radio" name="peso_3_11" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_11" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_11" value="5"></td>
            </tr>
            <tr>
                <td>12. CONSTRUIR MONUMENTOS Y ESTATUAS:</td>
                <td class="td_radio"><input type="radio" name="peso_3_12" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_12" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_12" value="5"></td>
            </tr>
            <tr>
                <td>13. DEFENDER LOS DERECHOS DE LOS CIUDADANOS INDEFENSOS:</td>
                <td class="td_radio"><input type="radio" name="peso_3_13" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_13" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_13" value="5"></td>
            </tr>
            <tr>
                <td>14. EDUCAR JOVENES ESCOLARES:</td>
                <td class="td_radio"><input type="radio" name="peso_3_14" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_14" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_14" value="5"></td>
            </tr>
            <tr>
                <td>15. CUIDAR PACIENTES ENFERMOS:</td>
                <td class="td_radio"><input type="radio" name="peso_3_15" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_15" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_15" value="5"></td>
            </tr>          
            <tr>
                <td>16. COORDINAR AYUDA EN SU DISTRITO:</td>
                <td class="td_radio"><input type="radio" name="peso_3_16" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_16" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_16" value="5"></td>
            </tr>
            <tr>
                <td>17. LIDERAR OBREROS Y EMPLEADOS:</td>
                <td class="td_radio"><input type="radio" name="peso_3_17" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_17" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_17" value="5"></td>
            </tr>
            <tr>
                <td>18. ORGANIZAR LA SELECCION DE PERSONAL:</td>
                <td class="td_radio"><input type="radio" name="peso_3_18" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_18" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_18" value="5"></td>
            </tr>
            <tr>
                <td>19. VENDER Y PROMOCIONAR PRODUCTOS:</td>
                <td class="td_radio"><input type="radio" name="peso_3_19" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_19" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_19" value="5"></td>
            </tr>
            <tr>
                <td>20. ENTRENAR Y CAPACITAR A EMPRESARIOS:</td>
                <td class="td_radio"><input type="radio" name="peso_3_20" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_20" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_20" value="5"></td>
            </tr>
            <tr>
                <td>21. PAGAR SUELDOS Y SALARIOS:</td>
                <td class="td_radio"><input type="radio" name="peso_3_21" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_21" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_21" value="5"></td>
            </tr>
            <tr>
                <td>22. MANEJAR UNA CAJA REGISTRADORA:</td>
                <td class="td_radio"><input type="radio" name="peso_3_22" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_22" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_22" value="5"></td>
            </tr>
            <tr>
                <td>23. ARCHIVAR Y DIGITAR DOCUMENTOS:</td>
                <td class="td_radio"><input type="radio" name="peso_3_23" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_23" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_23" value="5"></td>
            </tr>
            <tr>
                <tr>
                <td>24. REVISAR LAS OPERACIONES CONTABLES:</td>
                <td class="td_radio"><input type="radio" name="peso_3_24" value="1"></td>
                <td class="td_radio"><input type="radio" name="peso_3_24" value="3"></td>
                <td class="td_radio"><input type="radio" name="peso_3_24" value="5"></td>
            </tr>
        </table>

        <button class="botons">Ver resultados</button>
     
        </form>
    </section>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script>
        $(document).ready(() => {
            $('tbody tr').hover(function() {
                $(this).find('td').addClass('resaltar');
            }, function() {
                $(this).find('td').removeClass('resaltar');
            });
        });
    </script>
</body>
</html>