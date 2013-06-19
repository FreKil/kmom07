<?php 

class CTextFilter{
	
	public static function Filter($text, $filterArr){
		if(!is_array($filterArr)){
			$filterArr = array($filterArr);
		}
	
		foreach($filterArr as $filter){
			switch($filter){
				case 'purify': $text = self::Purify($text);
					break;
				case 'markdown': $text = self::MarkDown($text);
					break;
				case 'typograph': $text = self::SmartyPantsTypographer($text);
					break;
				case 'bbcode': $text = self::bbcode2html($text);
					break;
				default: $text = self::MakeClickAble($text);
					break;
			}
		}
		
		return($text);
	}
	
	public static function Purify($text){
		include('CHTMLPurifier.php');
		return(CHTMLPurifier::Purify($text));
	}
	
	public static function MakeClickAble($text){
		return preg_replace_callback('#\b(?<![href|src]=[\'"])https?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#',
			create_function('$matches', 'return "<a href=\'{$matches[0]}\'>{$matches[0]}</a>";'), $text);
	}
	
	public static function MarkDown($text){
		require_once(__DIR__ . '/php-markdown/Markdown.php');
		require_once(__DIR__ . '/php-markdown/MarkdownExtra.php');
		return MarkdownExtra::defaultTransform($text);
	}
	
	public static function SmartyPantsTypographer($text) {
		require_once(__DIR__ . '/PHP-SmartyPants-Typographer/smartypants.php');
		return SmartyPants($text);
	}
	
	public static function bbcode2html($text) {
		$search = array(
			'/\[b\](.*?)\[\/b\]/is',
			'/\[i\](.*?)\[\/i\]/is',
			'/\[u\](.*?)\[\/u\]/is',
			'/\[img\](https?.*?)\[\/img\]/is',
			'/\[url\](https?.*?)\[\/url\]/is',
			'/\[url=(https?.*?)\](.*?)\[\/url\]/is'
		);
	
		$replace = array(
			'<strong>$1</strong>',
			'<em>$1</em>',
			'<u>$1</u>',
			'<img src="$1" />',
			'<a href="$1">$1</a>',
			'<a href="$1">$2</a>'
		);
		
		return preg_replace($search, $replace, $text);
	}

}