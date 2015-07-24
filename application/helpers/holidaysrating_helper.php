<?php

function btn_edit($uri)
{
    return anchor($uri, '<i class = "icon-edit"></i>');
}

function btn_delete($uri, $attr = array())
{
    $attr['onclick'] = "return confirm('You are about to delete a record. This cannot be undone. Are you sure?')";
    return anchor($uri, '<i class = "icon-remove"></i>', $attr);    
}

function btn_submit($text)
{
    return form_submit('submit', $text, 'class = "btn btn-primary"');
}

function css($url)
{
    $CI =& get_instance();
    $str = "<link rel = \"stylesheet\" type = \"text/css\" href = \"";
    $str .= $CI->config->base_url($url);
    $str .= "\" />";
    return $str; 
}

function js($url)
{
    $CI =& get_instance();
    $str = "<script type = \"text/javascript\" src = \"";
    $str .= $CI->config->base_url($url);
    $str .= "\"></script>";
    return $str;
}

function hspace($amount = 1)
{
    $str = '';
    
    for($i = 0; $i < $amount; $i++)
    {
        $str .= '&nbsp;';
    }
    
    return $str;
}

function vspace($amount = 1)
{
    $str = '';
    
    for($i = 0; $i < $amount; $i++)
    {
        $str .= '<br/>';
    }
    
    return $str;   
}

function urlsafe_b64encode($string) 
{
    $data = base64_encode($string);
    $data = str_replace(array('+','/','='),array('-','_',''),$data);
    return $data;
}

function urlsafe_b64decode($string)
{
    $data = str_replace(array('-','_'),array('+','/'),$string);
    $mod4 = strlen($data) % 4;
    if ($mod4) {
        $data .= substr('====', $mod4);
    }
    return base64_decode($data);
}

function dd($value = array())
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function textile_sanitize($string)
{
    $whitelist = '/[^a-zA-Z0-9?-??-?ιό???????????????? \.\*\+\\n|#;:!"%@{} _-]/';
    return preg_replace($whitelist, '', $string);
}

function escape($string)
{
    return textile_sanitize($string);
}

function generateRandomString($length)
{ 
	$randstr = ""; 
	
	for($i=0; $i<$length; $i++)
	{ 
		$randnum = mt_rand(0,61); 
		
		if($randnum < 10)
		{ 
			$randstr .= chr($randnum+48); 
		}

		else if($randnum < 36)
		{ 
			$randstr .= chr($randnum+55); 
		}

		else
		{ 
			$randstr .= chr($randnum+61); 
		} 
	} 

	return $randstr; 
}

function generateArray($a, $b)
{
    $array = array();
    
    for($i = $a; $i <= $b; $i++)
    {
        $array[$i] = strval($i);
    }
    
    return $array;
}