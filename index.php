<?php
$price_list=array('Light_matov'=>6,
                  'Light_lakov'=>8,
                  'Ample_matov'=>8,
                  'Ample_lakov'=>10,
                  'Ample_lakov_matov'=>13,
                  'Aks_mat'=>14,
                  'Aks_lak'=>15,
                  'Veyron_lak'=>14,
                  'Veyron_lak_premium'=>18,
                  'Veyron_poluprozr'=>18,
                  'Veyron_metallik'=>25,
                  'Descor_standart'=>25,
                  'AksArt_mat'=>50,
                  'AksArt_lak'=>70,        //массив с ценами для расчета
                  'profil_pristen'=>3,
                  'profile_universal'=>3,
                  'profile_razdelitel'=>5,
                  'vstavka_belaya'=>1,
                  'vstavka_cvetnaja_razdelitel'=>2,
                  'obrabotka_uglov'=>2,
                  'ustanovka_potoloch_karniz'=>10,
                  'ustanovka_skrit_karn_bez'=>20,
                  'ustanovka_skrit_karn_s'=>40,
                  'sverlen_po_plitke'=>4,
                  'sverlen_po_plit_GRES'=>15,
                  'sborka_lustri'=>15,
                  'utoplenie_lustri'=>30,
                  'obhod_trub'=>7,
                  'montazh_potolka_nisha'=>7,
                  'montazh_svet_tochek'=>7,
                  'razvodka_provod_svetiln'=>7,
                  'krivolin_uchastok'=>10,
                  'mnogourov_potolki_pram'=>30,
                  'mnogourov_potolki_kriv'=>40,
                  'baget_poliuretan'=>2,
                  'viezd_za_gorod'=>0.25,
                  'podiem_na_etazh'=>2,
                  'montazh_potol_visota_4m'=>0.15,
                  'centrovka_shvov'=>0.15);
                  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel=stylesheet type="text/css" href="media/style.css"/>
<title>Калькулятор стоимости</title>
</head>
	<body>
<FORM ACTION="" METHOD="POST" >   

<table cellspacing="0" cellpadding="0" class="price-tab-main" border="0">
  <tr align="center">
<td colspan="2" class="price-calc"> Калькулятор стоимости</td>
  </tr>
  <tr>
								<td valign="top">
								<table class="tab1" border="0">
								<tr class="header-1">
								<td class="header-1-1-lined"></td>
								<td class="tab1-2-lined">Ширина (см)</td>
								<td class="tab1-3-lined">Цена ($/м )</td>
								<td class="tab1-4-lined"></td>
								<td class="tab1-5-lined"></td>
								</tr>
								<!---------------------------Light------------------>
								<tr>
								<td class="tab1-1-lefted"><strong>Light&trade; </strong></td>
								<td class="tab1-2"></td>
								<td class="tab1-3"></td>
								<td class="tab1-4"></td>
								<td class="tab1-5"></td>
								</tr>
								<tr>
								<td class="tab1-1-lefted-lined">Матовый, белый	 /Китай/</td>
								<td class="tab1-2-lined">200</td>
								<td class="tab1-3-lined">6</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="Light_matov" size="3" /></td>
								<td class="tab1-5-lined"></td>  
								</tr>
								<tr>
								<td class="tab1-1-lefted-lined">Лаковый, белый	 /Китай/</td>
								<td class="tab1-2-lined">150</td>
								<td class="tab1-3-lined">8</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="Light_lakov" size="3" /></td>
								<td class="tab1-5-lined"></td>   
								</tr>
								<!---------------------------Ample------------------>
								  <tr>
								<td class="tab1-1-lefted"><strong>Ample&trade; </strong></td>
								<td class="tab1-2"></td>
								<td class="tab1-3"></td>
								<td class="tab1-4"></td>
								<td class="tab1-5"></td>
								  </tr>
								<tr>
								<td class="tab1-1-lefted-lined">Матовый /Бельгия/</td>
								<td class="tab1-2-lined">320</td>
								<td class="tab1-3-lined">8</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="Ample_matov" size="3" /></td>
								<td class="tab1-5-lined"></td>  
								</tr>
								<tr>
								<td class="tab1-1-lefted-lined">Лаковый /Бельгия/</td>
								<td class="tab1-2-lined">320</td>
								<td class="tab1-3-lined">10</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="Ample_lakov" size="3" /></td>
								<td class="tab1-5-lined"></td>   
								</tr>
								<tr>
								<td class="tab1-1-lefted-lined">Лаковый, матовый /Бельгия/</td>
								<td class="tab1-2-lined">400,500</td>
								<td class="tab1-3-lined">13</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="Ample_lakov_matov" size="3" /></td>
								<td class="tab1-5-lined"></td>   
								</tr>
								<!----------------------------Aks----------------->
								<tr>
								<td class="tab1-1-lefted"><strong>Aks&trade; </strong></td>
								<td class="tab1-2"></td>
								<td class="tab1-3"></td>
								<td class="tab1-4"></td>
								<td class="tab1-5"></td>
								</tr>
								<tr>
								<td class="tab1-1-lefted-lined">Мат /Германия/</td>
								<td class="tab1-2-lined">200,270</td>
								<td class="tab1-3-lined">14</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="Aks_mat" size="3" /></td>
								<td class="tab1-5-lined"></td>  
								</tr>
								<tr>
								<td class="tab1-1-lefted-lined">Лаковый /Германия/</td>
								<td class="tab1-2-lined">130</td>
								<td class="tab1-3-lined">15</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="Aks_lak" size="3" /></td>
								<td class="tab1-5-lined"></td>   
								</tr>
								<!----------------------------Veyron----------------->
								  <tr>
								<td class="tab1-1-lefted"><strong>Veyron&trade; </strong></td>
								<td class="tab1-2"></td>
								<td class="tab1-3"></td>
								<td class="tab1-4"></td>
								<td class="tab1-5"></td>
								  </tr>
								<tr>
								<td class="tab1-1-lefted-lined">Лаковый /Франция/</td>
								<td class="tab1-2-lined">180</td>
								<td class="tab1-3-lined">14</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="Veyron_lak" size="3" /></td>
								<td class="tab1-5-lined"></td>  
								</tr>
								<tr>
								<td class="tab1-1-lefted-lined">Лаковый премиум /Франция/</td>
								<td class="tab1-2-lined">135,150</td>
								<td class="tab1-3-lined">18</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="Veyron_lak_premium" size="3" /></td>
								<td class="tab1-5-lined"></td>   
								</tr>
								<tr>
								<td class="tab1-1-lefted-lined">Полупрозрачный /Франция/</td>
								<td class="tab1-2-lined">200</td>
								<td class="tab1-3-lined">18</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="Veyron_poluprozr" size="3" /></td>
								<td class="tab1-5-lined"></td>   
								</tr>
								<tr>
								<td class="tab1-1-lefted-lined">Металлик, кварц, перламутр,<br /> замша, мрамор, капли росы  <br /> /Франция/</td>
								<td class="tab1-2-lined">130</td>
								<td class="tab1-3-lined">25</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="Veyron_metallik" size="3" /></td>
								<td class="tab1-5-lined"></td>   
								</tr>
								<!----------------------------Descor----------------->
								<tr>
								<td class="tab1-1-lefted"><strong>Descor&trade; </strong></td>
								<td class="tab1-2"></td>
								<td class="tab1-3"></td>
								<td class="tab1-4"></td>
								<td class="tab1-5"></td>
								</tr>
								<tr>
								<td class="tab1-1-lefted">Стандарт, белый	 /Германия/</td>
								<td class="tab1-2">310,410</td>
								<td class="tab1-3">25</td>
								<td class="tab1-4"><input type="text" class="myclass" name="Descor_standart" size="3" /></td>
								<td class="tab1-5"></td>  
								</tr>
								<tr>
								<td class="tab1-1-lefted-lined"></td>
								<td class="tab1-2-lined">510</td>
								<td class="tab1-3-lined"></td>
								<td class="tab1-4-lined"></td>
								<td class="tab1-5-lined"></td>   
								</tr>
								<!----------------------------Фотопечать----------------->
								<tr>
								<td class="tab1-1-lefted"><strong>AksArt&trade; </strong></td>
								<td class="tab1-2"></td>
								<td class="tab1-3"></td>
								<td class="tab1-4"></td>
								<td class="tab1-5"></td>
								</tr>
								<tr>
								<td class="tab1-1-lefted-lined">Фотопечать: мат, сатин</td>
								<td class="tab1-2-lined">270,320</td>
								<td class="tab1-3-lined">50</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="AksArt_mat" size="3" /></td>
								<td class="tab1-5-lined"></td>  
								</tr>
								<tr>
								<td class="tab1-1-lefted-lined">Фотопечать: лаковый</td>
								<td class="tab1-2-lined">270,320</td>
								<td class="tab1-3-lined">70</td>
								<td class="tab1-4-lined"><input type="text" class="myclass" name="AksArt_lak" size="3" /></td>
								<td class="tab1-5-lined"></td>   
								</tr>
								<tr>
								<td colspan="2" class="subb1-lefted">
								
								<!----------------->
								
<input type="submit" name="send" value="Итого за объект" />
								<!----------------->
								</td>
								
								<td class="tab1-3">
							
<?php
//расчет стоимости!!!!!!!!!

    //основные услуги, полотно
    @$Light_matov=$_POST['Light_matov'];
    @$Light_lakov=$_POST['Light_lakov'];
    @$Ample_matov=$_POST['Ample_matov'];
    @$Ample_lakov=$_POST['Ample_lakov'];
    @$Ample_lakov_matov=$_POST['Ample_lakov_matov'];
    @$Aks_mat=$_POST['Aks_mat'];
    @$Aks_lak=$_POST['Aks_lak'];
    @$Veyron_lak=$_POST['Veyron_lak'];
    @$Veyron_lak_premium=$_POST['Veyron_lak_premium'];
    @$Veyron_poluprozr=$_POST['Veyron_poluprozr'];
    @$Veyron_metallik=$_POST['Veyron_metallik'];
    @$Descor_standart=$_POST['Descor_standart'];
    @$AksArt_mat=$_POST['AksArt_mat'];
    @$AksArt_lak=$_POST['AksArt_lak'];
    
    //дополнительные услуги
    @$profil_pristen=$_POST['profil_pristen'];
    @$profile_universal=$_POST['profile_universal'];
    @$profile_razdelitel=$_POST['profile_razdelitel'];
    @$vstavka_belaya=$_POST['vstavka_belaya'];                                //вставка белая
    @$vstavka_cvetnaja_razdelitel=$_POST['vstavka_cvetnaja_razdelitel'];
    @$obrabotka_uglov=$_POST['obrabotka_uglov'];
    @$ustanovka_potoloch_karniz=$_POST['ustanovka_potoloch_karniz'];
    @$ustanovka_skrit_karn_bez=$_POST['ustanovka_skrit_karn_bez'];
    @$ustanovka_skrit_karn_s=$_POST['ustanovka_skrit_karn_s'];
    @$sverlen_po_plitke=$_POST['sverlen_po_plitke'];                        //сверление по плитке
    @$sverlen_po_plit_GRES=$_POST['sverlen_po_plit_GRES'];
    @$sborka_lustri=$_POST['sborka_lustri'];
    @$utoplenie_lustri=$_POST['utoplenie_lustri'];
    @$obhod_trub=$_POST['obhod_trub'];                            //обход труб
    @$montazh_potolka_nisha=$_POST['montazh_potolka_nisha'];
    @$montazh_svet_tochek=$_POST['montazh_svet_tochek'];
    @$razvodka_provod_svetiln=$_POST['razvodka_provod_svetiln'];
    @$krivolin_uchastok=$_POST['krivolin_uchastok'];
    @$mnogourov_potolki_pram=$_POST['mnogourov_potolki_pram'];
    @$mnogourov_potolki_kriv=$_POST['mnogourov_potolki_kriv'];
    @$baget_poliuretan=$_POST['baget_poliuretan'];                    //багет полиуретан
    @$viezd_za_gorod=$_POST['viezd_za_gorod'];
    @$podiem_na_etazh=$_POST['podiem_na_etazh'];
    @$montazh_potol_visota_4m=$_POST['montazh_potol_visota_4m'];
    @$centrovka_shvov=$_POST['centrovka_shvov'];
 //формирование цены основные услуги, полотно
 $price_1=$Light_matov*$price_list['Light_matov']+
          $Light_lakov*$price_list['Light_lakov']+
          $Ample_matov*$price_list['Ample_matov']+
          $Ample_lakov*$price_list['Ample_lakov']+
          $Ample_lakov_matov*$price_list['Ample_lakov_matov']+
          $Aks_mat*$price_list['Aks_mat']+
          $Aks_lak*$price_list['Aks_lak']+
          $Veyron_lak*$price_list['Veyron_lak']+
          $Veyron_lak_premium*$price_list['Veyron_lak_premium']+
          $Veyron_poluprozr*$price_list['Veyron_poluprozr']+
          $Veyron_metallik*$price_list['Veyron_metallik']+
          $Descor_standart*$price_list['Descor_standart']+
          $AksArt_mat*$price_list['AksArt_mat']+
          $AksArt_lak*$price_list['AksArt_lak'];
//формирование цены дополнительные услуги
$price_2=$profil_pristen*$price_list['profil_pristen']+        //расчет дополнительных услуг
            $profile_universal*$price_list['profile_universal']+
            $profile_razdelitel*$price_list['profile_razdelitel']+
            $vstavka_belaya*$price_list['vstavka_belaya']+        //вставка белая
            $vstavka_cvetnaja_razdelitel*$price_list['vstavka_cvetnaja_razdelitel']+
            $obrabotka_uglov*$price_list['obrabotka_uglov']+
            $ustanovka_potoloch_karniz*$price_list['ustanovka_potoloch_karniz']+
            $ustanovka_skrit_karn_bez*$price_list['ustanovka_skrit_karn_bez']+
            $ustanovka_skrit_karn_s*$price_list['ustanovka_skrit_karn_s']+
            $sverlen_po_plitke*$price_list['sverlen_po_plitke']+    //сверление по плитке
            $sverlen_po_plit_GRES*$price_list['sverlen_po_plit_GRES']+
            $sborka_lustri*$price_list['sborka_lustri']+
            $utoplenie_lustri*$price_list['utoplenie_lustri']+
            $obhod_trub*$price_list['obhod_trub']+                    //обход труб
            $montazh_potolka_nisha*$price_list['montazh_potolka_nisha']+
            $montazh_svet_tochek*$price_list['montazh_svet_tochek']+
            $razvodka_provod_svetiln*$price_list['razvodka_provod_svetiln']+
            $krivolin_uchastok*$price_list['krivolin_uchastok']+
            $mnogourov_potolki_pram*$price_list['mnogourov_potolki_pram']+
            $mnogourov_potolki_kriv*$price_list['mnogourov_potolki_kriv']+
            $baget_poliuretan*$price_list['baget_poliuretan']+        //багет полиуретан
            $viezd_za_gorod*$price_list['viezd_za_gorod']+
            $podiem_na_etazh*$price_list['podiem_na_etazh'];
            if(!$centrovka_shvov){$centrovka_shvov=0;}
            if(!$montazh_potol_visota_4m){$montazh_potol_visota_4m=0;}
            $k=$centrovka_shvov*$price_list['centrovka_shvov']+$montazh_potol_visota_4m*$price_list['montazh_potol_visota_4m']+1;
            //$k - коэффициент за центровку швов и монтаж потолка выше 4м
            $price_3=$k*$price_2; // цена дополнительных услуг с учетом коэффициента
    	if ($price_1 >0) {
    
    
 echo round($price_1+$price_3,2),"&nbsp","у.е.";} ?>
								
								
								
								
	
								</td>
								<td class="tab1-4-lined"></td>
								<td class="tab1-5-lined"></td>   
								</tr>
								</table>
								</td>							
		<td valign="top">
				<table class="tab2" border="0">
				<tr class="header-2">
				<td colspan="4" class="header-2-1-lined">Дополнительные услуги/работы</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Профиль пристенный</td>
				<td class="tab2-2-lined">3</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="profil_pristen" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Профиль универсальный</td>
				<td class="tab2-2-lined">3</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="profile_universal" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Профиль разделительный</td>
				<td class="tab2-2-lined">5</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="profile_razdelitel" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Вставка белая</td>
				<td class="tab2-2-lined">1</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="vstavka_belaya" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Вставка цветная, разделительная</td>
				<td class="tab2-2-lined">2</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="vstavka_cvetnaja_razdelitel" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Обработка углов</td>
				<td class="tab2-2-lined">2</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="obrabotka_uglov" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Установка потолочного карниза</td>
				<td class="tab2-2-lined">10</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="ustanovka_potoloch_karniz" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Установка скрытого карниза /без перегиба/</td>
				<td class="tab2-2-lined">20</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="ustanovka_skrit_karn_bez" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Установка скрытого карниза /с перегибом/</td>
				<td class="tab2-2-lined">40</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="ustanovka_skrit_karn_s" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Сверление по плитке</td>
				<td class="tab2-2-lined">4</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="sverlen_po_plitke" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Сверление по плитке ГРЭС</td>
				<td class="tab2-2-lined">15</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="sverlen_po_plit_GRES" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Сборка люстры Заказчика</td>
				<td class="tab2-2-lined">15</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="sborka_lustri" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Утопление люстры</td>
				<td class="tab2-2-lined">30</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="utoplenie_lustri" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Обход труб, вытяжек, гофр</td>
				<td class="tab2-2-lined">7</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="obhod_trub" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Монтаж потолка в нишу/ высота не менее 8 см</td>
				<td class="tab2-2-lined">7</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="montazh_potolka_nisha" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Монтаж световых точек, датчиков</td>
				<td class="tab2-2-lined">7</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="montazh_svet_tochek" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Разводка проводов под светильники</td>
				<td class="tab2-2-lined">7</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="razvodka_provod_svetiln" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Криволинейный участок, внутренний вырез</td>
				<td class="tab2-2-lined">10</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="krivolin_uchastok" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Многоуровневые потолки /прямые, высота бортика-8 см/</td>
				<td class="tab2-2-lined">30</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="mnogourov_potolki_pram" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Многоуровневые потолки /криволин., высота бортика-8 см/</td>
				<td class="tab2-2-lined">40</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="mnogourov_potolki_kriv" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Багет полиуретановый</td>
				<td class="tab2-2-lined">2</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="baget_poliuretan" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Выезд за город</td>
				<td class="tab2-2-lined">0.25</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="viezd_za_gorod" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Подъем на этаж (выше 3 этажа)</td>
				<td class="tab2-2-lined">2</td>
				<td class="tab2-3-lined"><input type="text" class="myclass" name="podiem_na_etazh" size="3" /></td>
				<td class="tab2-4-lined">м п.</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Монтаж потолка на высоте более 4-х метров</td>
				<td class="tab2-2-lined">15</td>
				<td class="tab2-3-lined"><input type="checkbox" name="montazh_potol_visota_4m" value="1"/></td>
				<td class="tab2-4-lined">%</td>
				</tr>
				<tr>
				<td class="tab2-1-lefted-lined">Центровка швов, комбинация цветов</td>
				<td class="tab2-2-lined">15</td>
				<td class="tab2-3-lined"><input type="checkbox" name="centrovka_shvov" value="1"/></td>
				<td class="tab2-4-lined">%</td>
				</tr>
				
				
				</table>
		</td>
	</tr>
	
	</table>

 </table>

</FORM>
</body>
</html>
<?php 
?>