<!doctype html>
<?php
$languageCodes = array(
  "ab" => "Abkhazian",
  "aa" => "Afar",
  "af" => "Afrikaans",
  "ak" => "Akan",
  "sq" => "Albanian",
  "am" => "Amharic",
  "ar" => "Arabic",
  "an" => "Aragonese",
  "hy" => "Armenian",
  "as" => "Assamese",
  "av" => "Avaric",
  "ae" => "Avestan",
  "ay" => "Aymara",
  "az" => "Azerbaijani",
  "bm" => "Bambara",
  "ba" => "Bashkir",
  "eu" => "Basque",
  "be" => "Belarusian",
  "bn" => "Bengali",
  "bh" => "Bihari",
  "bi" => "Bislama",
  "bs" => "Bosnian",
  "br" => "Breton",
  "bg" => "Bulgarian",
  "my" => "Burmese",
  "ca" => "Catalan",
  "ch" => "Chamorro",
  "ce" => "Chechen",
  "ny" => "Chichewa",
  "zh" => "Chinese",
  "cu" => "Church Slavic",
  "cv" => "Chuvash",
  "kw" => "Cornish",
  "co" => "Corsican",
  "cr" => "Cree",
  "hr" => "Croatian",
  "cs" => "Czech",
  "da" => "Danish",
  "dv" => "Divehi",
  "nl" => "Dutch",
  "dz" => "Dzongkha",
  "en" => "English",
  "eo" => "Esperanto",
  "et" => "Estonian",
  "ee" => "Ewe",
  "fo" => "Faroese",
  "fj" => "Fijian",
  "fi" => "Finnish",
  "fr" => "French",
  "ff" => "Fulah",
  "gl" => "Galician",
  "lg" => "Ganda",
  "ka" => "Georgian",
  "de" => "German",
  "el" => "Greek",
  "gn" => "Guarani",
  "gu" => "Gujarati",
  "ht" => "Haitian",
  "ha" => "Hausa",
  "he" => "Hebrew",
  "hz" => "Herero",
  "hi" => "Hindi",
  "ho" => "Hiri Motu",
  "hu" => "Hungarian",
  "is" => "Icelandic",
  "io" => "Ido",
  "ig" => "Igbo",
  "id" => "Indonesian",
  "ia" => "Interlingua",
  "ie" => "Interlingue",
  "iu" => "Inuktitut",
  "ik" => "Inupiaq",
  "ga" => "Irish",
  "it" => "Italian",
  "ja" => "Japanese",
  "jv" => "Javanese",
  "kl" => "Kalaallisut",
  "kn" => "Kannada",
  "kr" => "Kanuri",
  "ks" => "Kashmiri",
  "kk" => "Kazakh",
  "km" => "Khmer",
  "ki" => "Kikuyu",
  "rw" => "Kinyarwanda",
  "ky" => "Kirghiz",
  "rn" => "Kirundi",
  "kv" => "Komi",
  "kg" => "Kongo",
  "ko" => "Korean",
  "ku" => "Kurdish",
  "kj" => "Kwanyama",
  "lo" => "Lao",
  "la" => "Latin",
  "lv" => "Latvian",
  "li" => "Limburgish",
  "ln" => "Lingala",
  "lt" => "Lithuanian",
  "lu" => "Luba-Katanga",
  "lb" => "Luxembourgish",
  "mk" => "Macedonian",
  "mg" => "Malagasy",
  "ms" => "Malay",
  "ml" => "Malayalam",
  "mt" => "Maltese",
  "gv" => "Manx",
  "mi" => "Maori",
  "mr" => "Marathi",
  "mh" => "Marshallese",
  "mn" => "Mongolian",
  "na" => "Nauru",
  "nv" => "Navajo",
  "ng" => "Ndonga",
  "ne" => "Nepali",
  "nd" => "North Ndebele",
  "se" => "Northern Sami",
  "no" => "Norwegian",
  "nb" => "Norwegian Bokmal",
  "nn" => "Norwegian Nynorsk",
  "oc" => "Occitan",
  "oj" => "Ojibwa",
  "or" => "Oriya",
  "om" => "Oromo",
  "os" => "Ossetian",
  "pi" => "Pali",
  "pa" => "Panjabi",
  "ps" => "Pashto",
  "fa" => "Persian",
  "pl" => "Polish",
  "pt" => "Portuguese",
  "qu" => "Quechua",
  "rm" => "Raeto-Romance",
  "ro" => "Romanian",
  "ru" => "Russian",
  "sm" => "Samoan",
  "sg" => "Sango",
  "sa" => "Sanskrit",
  "sc" => "Sardinian",
  "gd" => "Scottish Gaelic",
  "sr" => "Serbian",
  "sn" => "Shona",
  "ii" => "Sichuan Yi",
  "sd" => "Sindhi",
  "si" => "Sinhala",
  "sk" => "Slovak",
  "sl" => "Slovenian",
  "so" => "Somali",
  "nr" => "South Ndebele",
  "st" => "Southern Sotho",
  "es" => "Spanish",
  "su" => "Sundanese",
  "sw" => "Swahili",
  "ss" => "Swati",
  "sv" => "Swedish",
  "tl" => "Tagalog",
  "ty" => "Tahitian",
  "tg" => "Tajik",
  "ta" => "Tamil",
  "tt" => "Tatar",
  "te" => "Telugu",
  "th" => "Thai",
  "bo" => "Tibetan",
  "ti" => "Tigrinya",
  "to" => "Tonga",
  "ts" => "Tsonga",
  "tn" => "Tswana",
  "tr" => "Turkish",
  "tk" => "Turkmen",
  "tw" => "Twi",
  "ug" => "Uighur",
  "uk" => "Ukrainian",
  "ur" => "Urdu",
  "uz" => "Uzbek",
  "ve" => "Venda",
  "vi" => "Vietnamese",
  "vo" => "Volapuk",
  "wa" => "Walloon",
  "cy" => "Welsh",
  "fy" => "Western Frisian",
  "wo" => "Wolof",
  "xh" => "Xhosa",
  "yi" => "Yiddish",
  "yo" => "Yoruba",
  "za" => "Zhuang",
  "zu" => "Zulu"
);

	if(isset($languageCodes[$_GET['from']])){
		$from = $_GET['from'];
	} else {
		// passed language code is not correct, lets fallback
		// to the default 
		$from = "en";
	}
	if(isset($languageCodes[$_GET['to']])){
		$to = $_GET['to'];
	} else {
		// passed language code is not correct, lets fallback
		// to the default 
		$to = "de";
	}
	if(isset($_GET['q'])){
	  $q = $_GET['q'];
	} 
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>
	<script type='text/javascript' src='js/base.js'></script>
	<script type='text/javascript' src="js/jquery-ui-1.9.2.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.9.2.custom.css">

	<meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no" />
	<link rel="stylesheet" media="handheld" href="css/style-mobile.css">
	<link rel="stylesheet" media="screen and (max-width: 800px)" href="css/style-mobile.css">
	<link rel="stylesheet" media="screen and (min-width: 801px)" href="css/styles.css">
	<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/styles.css"><![endif]--> 

	<link title="WikiDict.cc - Free and open online dictionary" type="application/opensearchdescription+xml" rel="search" href="opensearch.xml">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="copyright" href="//creativecommons.org/licenses/by-sa/3.0/">
	<link rel="copyright" href="//www.gnu.org/copyleft/fdl.html">
	<link rel="license" href="//creativecommons.org/licenses/by-sa/3.0/">
	<link rel="license" href="//www.gnu.org/copyleft/fdl.html">
	<title>WikiDict.cc - The free and open online dictionary</title>
</head>
<?php 
	echo'<body onload="';
	if (isset($_GET['p'])) {
		echo '$(\'#result\').hide();$(\'section > article\').load(\''.$_GET['p'].'\');';
	} else {
		if(isset($_GET['from']) & isset($_GET['to']) & isset($_GET['q'])){
    			echo 'translate(\''.$from.'\',\''.$to.'\',\''.$q.'\');';
		}
	}
	echo '">';
?>

  <div id=container>

  <header>
  <div id="left">
    <h1><a href="javascript:void(0);">WikiDict.cc</a></h1>
    <h2>Free and open online dictionary based on <a target=new href=http://wiktionary.org>Wiktionary.org</a></h2>
      </div>
      <div id="right">
      <form id="form" class="form-inline">
<span id="mobilfoo">
<label for="from">From:</label>
<select onchange="$('form').submit()" name="from" id="from" tabindex="2">
<?php
foreach ($languageCodes as $key => $value)
  if($key == $from) { 
    echo "<option selected='selected' value='".$key."'>".$value." (".$key.")</option>";
  } else {
    echo "<option value='".$key."'>".$value." (".$key.")</option>";
  }
?>
</select>
</span>
<span id="mobilfoo">
<label for="to">to:</label>
<select onchange="$('form').submit()" name="to" id="to" tabindex="2">
<?php
foreach ($languageCodes as $key => $value)
  if($key == $to) { 
    echo "<option selected='selected' value='".$key."'>".$value." (".$key.")</option>";
  } else {
    echo "<option value='".$key."'>".$value." (".$key.")</option>";
  }
?>
</select>
</span>
<br>
	  <input type="text" id="word" value="<?=$q?>">
	  <button>Translate</button>


      </form>
    </div>
  </header> 

  <section>
    <article>
    </article>
    <table id="result">
      <thead>
	<tr class="title"><th width=50%>Sprache 1</th><th>Sprache 2</th></tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </section>

  <footer>
<div style="float:left;">
<a href="http://flattr.com/thing/1096017/WikiDict-cc-The-free-and-open-online-dictionary" target="_blank">
<img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a>
</div>
    <a href="javascript:showArticle('about');">About</a>
    <a href="javascript:showArticle('tools');">Tools</a>
    <a href="javascript:showArticle('imprint');">Imprint</a>
  </footer>

</div>
</body>
</html>

<?php
if(isset($_GET['from']) & isset($_GET['to']) & isset($_GET['q'])){
    echo "<script language=javascript>setSearchHistory('".$from."','".$to."','".$q."'); translate('".$from."','".$to."','".$q."');</script>";
}
?>
