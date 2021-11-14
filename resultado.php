<?php

session_start();

$pfl_rea=$_SESSION["pfl_rea"];
$pfl_inv=$_SESSION["pfl_inv"];
$pfl_art=$_SESSION["pfl_art"];
$pfl_soc=$_SESSION["pfl_soc"];
$pfl_emp=$_SESSION["pfl_emp"];
$pfl_con=$_SESSION["pfl_con"];
$maximo=$_SESSION["maximo"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resultado.css">
    <title>Perfil de Intereses</title>
</head>
<body>
    <section class="results" >
        <h1>Resultado del Test Vocacional</h1>
        <table border="2" class="table-results">
            <thead style="color: #c56f1f;">
                <th>Realista</th>
                <th>Investigación</th>
                <th>Artístico</th>
                <th>Social</th>
                <th>Emprendedor</th>
                <th>Convencional</th>
            </thead>
            <tr>
                <td class="td_results"><?php echo round($pfl_rea),"%"?></td>
                <td class="td_results"><?php echo round($pfl_inv),"%" ?></td>
                <td class="td_results"><?php echo round($pfl_art),"%" ?></td>
                <td class="td_results"><?php echo round($pfl_soc),"%" ?></td>
                <td class="td_results"><?php echo round($pfl_emp),"%" ?></td>
                <td class="td_results"><?php echo round($pfl_con),"%" ?></td>
            </tr>
            <thead style="color: #c56f1f;">
                <th colspan="6">Resultado</th>
            </thead>
            <tr>
                <td class="td_results" colspan="6" style="text-align:justify;">
                    <?php if ($maximo==$pfl_rea){
                            echo "Tienes un interés por trabajar con objetos reales como herramientas 
                            máquinas, vehículos, equipos, y seres vivos (animales, peces, vegetales).";
                        }elseif ($maximo==$pfl_inv){
                            echo "Tienes un interés por trabajar  investigando científicamente 
                            los fenómenos físicos, biológicos y/o culturales para comprenderlos. ";
                        }elseif ($maximo==$pfl_art){
                            echo "Tienes un interés por trabajar con materiales físicos, verbales 
                            y/o humanos para crear productos armoniosos, atractivos y  artísticos.";
                        }elseif ($maximo==$pfl_soc){
                            echo "Tienes un interés por trabajar con personas a las cuales 
                            puedas informar, educar, proteger, ayudar o  servir a tu prójimo.";
                        }elseif ($maximo==$pfl_emp){
                            echo "Tienes un interés por trabajar con personas las cuales pueda organizar
                            y posteriormente obtener un beneficio empresarial, económico u otras ganancias.";
                        }elseif ($maximo==$pfl_con) {
                            echo "Tienes un interés por trabajar con datos escritos o numéricos de 
                            acuerdo a un orden contable, jurídico, estadístico o cualquier otro.";
                        }
                    ?>            
                </td>
            </tr> 
        </table>
        <p style="margin-top: 20px; text-align: left;">Para mayor informacion visite la pagina web del CEPREVI, haciendo click
            <a href="http://www.unfv.edu.pe/ceprevi/" style="color: #c56f1f;"> aqui.
            </a>
        </p>
    </section>
    <section class="table-buttons" >
            <a href="index.html" class="botons" type="button" value="Salir" style="position: static;">
                Salir
            </a>
    </section>
    <section class="section-areas" >
        <table border="2" class="table_areas">
            <h1 style="margin-bottom: 20px; text-align: center;">Profesiones afines a cada área</h1>
            <tr>
                <td class="td_vertical" rowspan="2">REALISTA</td>
                <td class="td_tittle">AGRICULTURA Y NATURALEZA</td>
                <td class="td_tittle">MECANICAS Y CONSTRUCCIÒN</td>
                <td class="td_tittle">MILITARES Y TRABAJOS MANUALES</td>
            </tr>
            <tr>
                <td>
                    <br>-ING. AGROINDUSTRIAL
                    <br>-ING. ACUICOLA
                    <br>-ING. AMBIENTAL
                    <br>-ING. PESQUERA
                    <br>-ING. AGRICOLA
                    <br>-ING. GEOLOGICA
                    <br>-ING. AGRONOMA
                    <br>-ING. FORESTAL
                    <br>-ING. GEOGRAFICA
                    <br>-ING. DE MINAS
                    <br>-ING. DE PETROLEO
                    <br>-ZOOTECNIA
                </td>
                <td>
                    <br>-ING. CIVIL
                    <br>-ING. INDUSTRIAL
                    <br>-ING. METALURGICO
                    <br>-ING. NAVAL
                    <br>-ING. ALIMENTARIA
                    <br>-ING. TEXTIL
                </td>
                <td>
                    <br>-ING. DE TRANSPORTES
                    <br>-CHOFER PROFESIONAL
                    <br>-EDUCACION FISICA
                    <br>-SUBOFICIALES FAP-EP-MGP
                    <br>-POLICIA NACIONAL
                </td>
            </tr>
            <tr>
                <td class="td_vertical" rowspan="2">INVESTIGACIÓN</td>
                <td class="td_tittle">CIENCIAS DE BIO-SALUD</td>
                <td class="td_tittle">CIENCIAS EXACTAS</td>
                <td class="td_tittle">INFORMATICA</td>
            </tr>
            <tr>
                <td>
                    <br>-MEDICINA HUMANA
                    <br>-MEDICINA VETERINARIA
                    <br>-OBSTETRICIA
                    <br>-ODONTOLOGIA
                    <br>-PSICOLOGIA CLINICA
                    <br>-BIOLOGIA 
                    <br>-NUTRICION
                </td>
                <td>
                    <br>-MATEMATICA PURA
                    <br>-QUIMICA
                    <br>-FISICA
                    <br>-QUIMICO FARMACEUTICO
                    <br>-ING. QUIMICA
                    <br>-ING. PETROQUIMICA
                </td>
                <td>
                    <br>-ING. INFORMATICA
                    <br>-ING. ELECTRONICA
                    <br>-ING. DE SISTEMAS
                    <br>-ING. MECATRONICA
                    <br>-ING. TELECOMUNICACIONES
                </td>
            </tr>
            <tr>
                <td class="td_vertical" rowspan="2">ARTÍSTICO</td>
                <td class="td_tittle">ARTES ESCENICAS</td>
                <td class="td_tittle">ARTES PLASTICAS</td>
                <td class="td_tittle">ARTES LITERARIAS Y MUSICALES</td>
            </tr>
            <tr>
                <td>
                    <br>-DANZA FOLCLORICAS
                    <br>-DANZA MODERNAS
                    <br>-BALLET
                    <br>-COREOGRAFIA
                    <br>-ARTE DRAMATICO
                    <br>-ACTOR-ACTRIZ
                    <br>-CANTANTE O SOLISTA
                    <br>-TOCAR UN ISNTRUMENTO
                    <br>-PRODUCCION DE CINE
                    <br>-RADIO y TV
                    <br>-EDUCACION
                    <br>-ARTISTICO-MUSICAL
                </td>
                <td>
                    <br>-ARTE: ESCULTURA
                    <br>-DIBUJO, PINTURA,GRABADO
                    <br>-ARQUITECTURA
                    <br>-DISEÑO GRÀFICO
                    <br>-DISEÑO PUBLICITARIO
                    <br>-DISEÑO DE INTERIORES
                    <br>-DISEÑO DE JOYAS
                </td>
                <td>
                    <br>-NOVELISTA, LITERATURA
                    <br>-GUIONISTA DE TV
                    <br>-GUIONISTA TEATRAL
                    <br>-COMPOSITOR MUSICAL
                </td>
            </tr>
            <tr>
                <td class="td_vertical" rowspan="2">SOCIAL</td>
                <td class="td_tittle">LETRAS Y CIENCIAS SOCIALES</td>
                <td class="td_tittle">EDUCATIVAS Y CUIDADO DE SALUD</td>
                <td class="td_tittle">SERVICIOS A PERSONAS</td>
            </tr>
            <tr>
                <td>
                    <br>-FILOSOFIA
                    <br>-LINGÜÍSTICA
                    <br>-HISTORIA
                    <br>-SOCIOLOGIA
                    <br>-TRADUCCION
                    <br>-INTERPRETACION
                </td>
                <td>
                    <br>-EDUCACION
                    <br>-INICIAL-PRIMARIA
                    <br>-EDUCACION SECUNDARIA
                    <br>-EDUCACION FISICA
                    <br>-PSICOLOGIA EDUCATIVA
                    <br>-ENFERMERIA
                    <br>-TECNOLOGIA MEDICA
                </td>
                <td>
                    <br>-DERECHO
                    <br>-CIENCIAS POLITICAS
                    <br>-DIPLOMACIA
                    <br>-TRABAJO SOCIAL
                    <br>-TEOLOGOS
                    <br>-SACERDOTES
                    <br>-RELIGIOSAS
                    <br>-PASTORES
                </td>
            </tr>
            <tr>
                <td class="td_vertical" rowspan="2">EMPRENDEDOR</td>
                <td class="td_tittle">ADMINISTRACION RECURSOS HUMANOS</td>
                <td class="td_tittle">GERENCIA Y SUPERVISION</td>
                <td class="td_tittle">COMUNICACIONES Y MARKETING</td>
            </tr>
            <tr>
                <td>
                    <br>-ADMINISTRACION DE EMPRESAS
                    <br>-ADMINISTRACION PUBLICA
                    <br>-ADMINISTRACION HOTELERA
                    <br>-ADMINISTRACION RESTAURANTE
                    <br>-ADMINISTRACION DE TURISMO
                    <br>-PSICOLOGIA ORGANIZACIONAL
                </td>
                <td>
                    <br>-ADMINISTRACION DE EMPRESAS
                    <br>-NEGOCIOS INTERNACIONALES
                    <br>-OFICIALES EN LA FAP-EMCH
                    <br>-MGP o PNP
                    <br>-ING. INDUSTRIAL
                    <br>-ING. DE SISTEMAS
                    <br>-RELACIONES INDUSTRIALES
                </td>
                <td>
                    <br>-CIENCIAS DE LA COMUNICACIÓN
                    <br>-TV, RADIO, PRENSA
                    <br>-PUBLICIDAD
                    <br>-LOCUTORES DE RADIO
                    <br>-LOCUTORES DE TV
                    <br>-MARKETING
                </td>
            </tr>
            <tr>
                <td class="td_vertical" rowspan="2">CONVENCIONAL</td>
                <td class="td_tittle">CALCULO Y TRANSACCIONES FINANCIERAS</td>
                <td class="td_tittle">EMPLEOS ADMINISTRATIVOS</td>
                <td class="td_tittle">DISTRIBUCION Y DESPACHO</td>
            </tr>
            <tr>
                <td>
                    <br>-ECONOMIA
                    <br>-CONTABILIDAD GENERAL
                    <br>-ESTADISTICA
                    <br>-ADMINISTRACION BANCARIA
                    <br>-CAJERO DE BANCO
                    <br>-AGENTE DE SEGURIDAD
                    <br>-AGENTE DE ADUANAA
                </td>
                <td>
                    <br>-AUXILIAR CONTABLE
                    <br>-AUXILIAR ADMINISTRATIVO
                    <br>-ASISTENTE DE GERENCIA
                    <br>-SECRETARIADO EJECUTIVO
                    <br>-SECRETARIADO BILINGÜE
                    <br>-OPERADORA TELEFONICA
                    <br>-TRADUCTOR OFICIAL
                </td>
                <td>
                    <br>-ALAMACEN Y KARDEX
                    <br>-MENSAJERIA Y CORREO
                    <br>-ASISTENTE LOGISTICO
                    <br>-BIBLIOTECOLOGIA
                </td>
            </tr>
        </table>
    </section>
</body>
</html>