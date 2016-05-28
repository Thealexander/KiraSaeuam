<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Estudiantes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estudiantes form large-9 medium-8 columns content">
    <?= $this->Form->create($estudiante) ?>
    <fieldset>
        <legend><?= __('Add Estudiante') ?></legend>
        <?php
            echo $this->Form->input('Estudiantes_Nombres');
            echo $this->Form->input('Estudiantes_Apellidos');
            echo $this ->Form->input('Fecha_nacimiento', array('dateFormat' => 'YDM')); 
			echo $this ->Form->input('nacionalidad', array(
					'options' => array('Afganistán', 'Akrotiri', 'Albania', 'Alemania', 'Andorra', 'Angola', 'Anguila', 'Antártida', 'Antigua y Barbuda', 'Antillas Neerlandesas', 'Arabia Saudí', 'Argelia', 'Argentina', 'Armenia', 'Aruba ', 'Ashmore andCartier Islands', 'Australia', 'Austria', 'Azerbaiyán',' Bahamas',' Bahráin' , 'Barbados', 'Bélgica', 'Belice', 'Benín', 'Bermudas', 'Bielorrusia', 'Birmania Myanmar', 'Bolivia', 'Bosnia y Hercegovina',' Botsuana' ,' Brasil', 'Brunéi',' Bulgaria',' Burkina Faso',' Burundi', 'Bután',' Cabo Verde',' Camboya', 'Camerú', 'Canadá', 'Chad', 'Chile', 'China', 'Chipre', 'Clipperton Island', 'Colombia', 'Comoras', 'Congo', 'Coral Sea Islands', 'Corea del Norte', 'Corea del Sur', 'Costa de Marfil', 'Costa Rica', 'Croacia', 'Cuba', 'Dhekelia', 'Dinamarca',' Dominica' , 'Ecuador' , 'Egipto' , 'El Salvador' , 'El Vaticano' , 'Emiratos Árabes Unidos ', 'Eritrea' , 'Eslovaquia' ,' Eslovenia' , 'España' , 'Estados Unidos ', 'Estonia' , 'Etiopía' ,' Filipinas' , 'Finlandia ', 'Fiyi ', 'Francia ', 'Gabón' , 'Gambia' ,' Gaza Strip ' , ' Georgia ' , 'Ghana ', 'Gibraltar' , 'Granada ', 'Grecia' , 'Groenlandia' ,' Guam ', 'Guatemala ', 'Guernsey' , 'Guinea' , 'Guinea Ecuatorial ', 'Guinea-Bissau ', 'Guyana' , 'Haití ', 'Honduras' , 'Hong Kong' , 'Hungría' , 'India ' ,' Indonesia' , 'Irán' , 'Iraq ', 'Irlanda' , 'Isla Bouvet ', 'Isla Christmas' , 'Isla Norfolk ', 'Islandia' , 'Islas Caimán' , 'Islas Cocos' , 'Islas Cook' , 'Islas Feroe' , 'Islas Georgia del Sur y Sandwich del Sur ','Islas Heard y McDonald ',' Islas Malvinas' ,'Islas Marianas del Norte' , 'IslasMarshall' , 'Islas Pitcairn ', 'Islas Salomón' , 'Islas Turcas y Caicos ', 'Islas Vírgenes Americanas' , 'Islas Vírgenes Británicas' , 'Israel' , 'Italia' , 'Jamaica' , 'Jan Mayen' , 'Japón' , 'Jersey' , 'Jordania' ,' Kazajistán' ,' Kenia' ,' Kirguizistán' , 'Kiribati' , 'Kuwait' , 'Laos ', 'Lesoto' , 'Letonia' , 'Líbano ', 'Liberia' ,' Libia' , 'Liechtenstein' , 'Lituania' , 'Luxemburgo' , 'Macao' ,' Macedonia ', 'Madagascar ', 'Malasia' , 'Malaui' , 'Maldivas' , 'Malí' , 'Malta' , 'Isle of  Man',' Marruecos ',' Mauricio , Mauritania' , 'Mayotte' ,'México ', 'Micronesia' , 'Moldavia' , 'Mónaco' , 'Mongolia' ,' Montserrat' , 'Mozambique' ,' Namibia ', 'Nauru' ,' Navassa Island ', 'Nepal' , 'Nicaragua' ,' Níger ', 'Nigeria' ,' Niue ', 'Noruega' , 'Nueva Caledonia' , 'Nueva Zelanda' , 'Omán' , 'Países Bajos' , 'Pakistán ', 'Palaos ', 'Panamá ',' Papúa-Nueva Guinea' , 'Paracel Islands' , 'Paraguay ',' Perú' , 'Polinesia Francesa ',' Polonia' , 'Portugal' , 'Puerto Rico' , 'Qatar ', 'Reino Unido' ,' República Centroafricana' , 'República Checa' ,' República Democrática del Congo' , 'República Dominicana ', 'Ruanda ', 'Rumania' , 'Rusia' , 'Sáhara Occidental' , 'Samoa' , 'Samoa Americana' , 'San Cristóbal y Nevis' , 'San Marino' , 'San Pedro y Miquelón ', 'San Vicente y las Granadinas' , 'Santa Helena ', 'Santa Lucía' , 'Santo Tomé y Príncipe ',' Senegal' , 'Seychelles ',' Sierra Leona ',' Singapur' , 'Siria' , 'Somalia' , 'Southern Ocean' , 'Spratly Islands ',' Sri Lanka ', 'Suazilandia ', 'Sudáfrica' , 'Sudán ',' Suecia ',' Suiza ', 'Surinam' , 'Svalbard y Jan Mayen ', 'Tailandia ', 'Taiwán ', 'Tanzania' , 'Tayikistán' ,' Territorios Australes Franceses ', 'Timor Oriental ', 'Togo ', 'Tokelau' , 'Tonga' , 'Trinidad y Tobago' ,' Túnez' ,' Turkmenistán' ,' Turquía' ,' Tuvalu' , 'Ucrania' ,' Uganda' , 'Uruguay ', 'Uzbekistán ', 'Vanuatu' , 'Venezuela' , 'Vietnam' , 'Wake Island' , 'Wallis y Futuna' ,' West Bank' , 'Yemen' , 'Yibuti ', 'Zambia' , 'Zimbabue'),
					'empty' => '(Escoger un Pais)'
					));	
            echo $this ->Form->input('Nivel-anio', array(
					'options' => array('1', '2','3','4','5','6','7'),
					'empty' => '(Que Nivel)'
					));	
            echo $this->Form->input('email');
            echo $this->Form->input('Direccion');
            echo $this->Form->input('Telefono');
            echo $this->Form->input('Celular');
            echo $this ->Form->input('sexo', array(
					'options' => array('Mujer	', 'Varon'),
					'empty' => '(Escoja)'));	
			echo $this ->Form->input('genero', array(
					'options' => array('Masculino', 'Femenino', 'Intersex','Androginos', 'Ageneros'),
					'empty' => '(Escoja)'));
            echo $this->Form->input('Cedula');
            echo $this->Form->input('Ciudad');
            echo $this->Form->input('Departamento');
            echo $this->Form->input('decuento');
            echo $this->Form->input('Tutores_Id_Tutores');
            echo $this->Form->input('Monto_a_pagar');
 
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
