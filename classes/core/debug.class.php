<?php
class debug{
    
    static private $_data;
    static private $_title;
    static private $_res;
    static private $_type;
    
    public function Dtest($data){
        
        self::$_data=$data;
        if($data==$GLOBALS){self::$_res="Определить имя переменной не удалось.";}
        else{self::$_res="$".array_search($data,$GLOBALS);}
        self::$_type=gettype($data);
        if(is_array($data)){self::Darray();}
        elseif(is_string($data)){self::Dstring();}
        elseif(is_integer($data)){self::Dinteger();}
        elseif(is_float($data)){self::Dfloat();}
        elseif(is_bool($data)){self::Dbool();}
        else{echo "Немогу определить тип переменной, возможно она пуста";}
        
    }
    
    private function Darray(){
        
        echo"<fieldset style='direction:ltr;;'><legend> Имя переменной:&nbsp;<b style='color:blue;'>".self::$_res."</b>&nbsp;|&nbsp;Тип:&nbsp; <b style='color:blue;'>МАССИВ</b> &nbsp;(".self::$_type.")</legend>";
        echo "<!-- Code PHP --><pre>";
        print_r(self::$_data);
        echo "</pre></fieldset>";   
        
    }
    
    private function Dstring(){
        
        echo"<fieldset style='direction:ltr;'><legend>Имя переменной:&nbsp;<b style='color:blue;'>".self::$_res."</b>&nbsp;|&nbsp;Тип:&nbsp; <b style='color:blue;'>СТРОКА</b> &nbsp;(".self::$_type.") </legend>";
        if(self::$_data=='')
        {echo("<code>Значения переменной нет( пустая - '' )</code>");}
        else
        {echo"<!-- Code PHP -->".self::$_data;}
        echo "</fieldset>";
        
    }
    
    private function Dinteger(){
        
        if(is_numeric(self::$_data)){
            echo"<fieldset style='direction:ltr;'><legend>Имя переменной:&nbsp;<b style='color:blue;'>".self::$_res."</b>&nbsp;|&nbsp;Тип:&nbsp; <b style='color:blue;'>ЧИСЛО</b> &nbsp;(".self::$_type.") | Значение переменной является числом</legend>";
        }
        else{
            echo"<fieldset><legend>Имя переменной:&nbsp;<b style='color:blue;'>".self::$_res."</b>&nbsp;|&nbsp;Тип:&nbsp;<b style='color:blue;'>ЧИСЛО</b> &nbsp;(".self::$_type.") | Значение переменной является строкой</legend>";
        }
        
        echo "<!-- Code PHP -->".self::$_data;
        echo "</fieldset>";
        
    }
    
    private function Dfloat(){
        
        echo"<fieldset style='direction:ltr;'><legend>Имя переменной:&nbsp;<b style='color:blue;'>".self::$_res."</b>&nbsp;|&nbsp;Тип:&nbsp;<b style='color:blue;'>Число с плавающей точкой</b> &nbsp;(".self::$_type.") </legend>";
        echo "<!-- Code PHP -->".self::$_data;
        echo "</fieldset>";
        
    }
    
    private function Dbool(){
        
        echo"<fieldset style='direction:ltr;'><legend>Имя переменной:&nbsp;<b style='color:blue;'>".self::$_res."</b>&nbsp;|&nbsp;Тип:&nbsp; <b style='color:blue;'>является булевой переменной</b> &nbsp;(".self::$_type.") </legend>";
        if(self::$_data==true){echo "<code>TRUE</code>";}
        else{echo("<code>FALSE</code>");}
        echo "</fieldset>";
        
    }
    
    
}