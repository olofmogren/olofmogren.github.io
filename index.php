<?
include 'parsedown.php';
$Parsedown = new Parsedown();

$POSTS_DIR = "/var/www/mogren.one/content";
$FILES_DIR = "/var/www/mogren.one/files";

//$POSTS_DIR = get_path_without_filename($_SERVER['SCRIPT_FILENAME'])."/";

$posts_subdir = get_path_without_filename($_SERVER['PHP_SELF']);

$beta_prefix = "";
if(strpos($_SERVER['PHP_SELF'], "beta") !== False)
{
  $beta_prefix = "/beta";
  $posts_subdir = substr($posts_subdir, strlen($beta_prefix));
}

if (isset($_GET["p"]))
{
  $posts_subdir = "/".$_GET["p"];
  $filename = $FILES_DIR."/".$_GET["p"];
  if(file_exists($filename) && is_file($filename))
  {
    #echo $FILES_DIR."/".$_GET["p"]." - does exist<br />";
    $dot_pos = strrpos($_GET["p"], ".");
    $path_suffix = substr($_GET["p"], $dot_pos);

    header('Content-Description: File Transfer');

    $mime = shell_exec("file -bi " .escapeshellarg($filename));
    $mimes = explode(";", $mime);
    $mime = $mimes[0];
    if($mime != "" && strpos($mime, "octet-stream") === false)
      header( "Content-type: ".$mime );
    else if($path_suffix == ".mobi")
      header( "Content-type: application/x-mobipocket-ebook" );
    else if($path_suffix == ".pdf")
      header( "Content-type: application/pdf" );
    else
      header( "Content-type: application/octet-stream" );
    header('Content-Disposition: inline; filename="'.basename($filename).'"');
    #header('Content-Disposition: attachment; filename="'.basename($filename).'"');
    #header('Content-Disposition: attachment; filename="'.$filename.'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    #if (filesize($filename) === FALSE)
    #  echo "FALSE!";
    header('Content-Length: ' . filesize($filename));
    #readfile($file);
    #echo file_get_contents($file);

    if ($file = fopen($filename, "rb"))
    {
      while(!feof($file) and (connection_status()==0))
      {
        print(fread($file, 1024*8));
       flush();
      }
      fclose($file);
    }
    exit;
  }
  #else
  #  echo $FILES_DIR."/".$_GET["p"]." - does not exist<br />";
}
$path_found = TRUE;
if(!file_exists($POSTS_DIR.$posts_subdir) || strpos($posts_subdir, "posts") !== FALSE)
{
  $path_found = FALSE;
  header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found"); 
}
else if(isset($_GET["p"]) && strlen($_GET["p"]) > 0 && substr($_GET["p"],-1,1) != "/")
{
  # Redirect (to normalize)!
  #echo('Location: '.$_SERVER['REQUEST_URI'].'/');
  header('Location: '.$_SERVER['REQUEST_URI'].'/');
  die();
}

?>
<!doctype html>
<html class="no-js">
  <head>
      <meta charset="utf-8">
      <title>Olof Mogren</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width">
      <!--<link rel="shortcut icon" href="/images/favicon.ico">
      <link rel="icon" type="image/png" href="/images/favicon.png">
      <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon-180x180.png">//-->
      <link rel="stylesheet" href="/style2.css">
      <script type="text/javascript" src="/MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
      <script>
        function showBibtex(event, text) {
          var el, x, y;

          el = document.getElementById('PopUp');
          if (window.event) {
            x = window.event.clientX + document.documentElement.scrollLeft
                + document.body.scrollLeft;
                y = window.event.clientY + document.documentElement.scrollTop +
                + document.body.scrollTop;
          }
          else {
            x = event.clientX + window.scrollX;
            y = event.clientY + window.scrollY;
          }
          x -= 2; y -= 2;
          y = y+15
          el.style.left = x + "px";
          el.style.top = y + "px";
          el.style.display = "block";
          document.getElementById('PopUpText').innerHTML = text;
       }
    </script>
  </head>
  <body class="home">

    <header id="header-waypoint">
      <nav id="stickyNav" class="sticky-nav">
        <!--<a href="/" class="logo">Olof Mogren</a>//-->
        <a href="http://mogren.one/" class="nametag"><h1 class="nametag">Olof Mogren</h1></a>
        <div id="groups" style="margin-right: 80px;">
          <div id="group1" style="z-index: 5;">
            <a href="<?= $beta_prefix ?>/summarization" style="color: #999;"><!-- class="button button-transparent">//-->Summarization</a>
            <a href="<?= $beta_prefix ?>/presentations" style="color: #999;"><!-- class="button button-transparent">//-->Presentations</a>
          </div>
          <div id="group2" style="z-index: 5;">
            <a href="<?= $beta_prefix ?>/publications" style="color: #999;"><!-- class="button button-transparent">//-->Publications</a>
            <a href="<?= $beta_prefix ?>/about" style="color: #999;"><!-- class="button button-transparent">//-->About</a>
          </div>
        </div>
      </nav>

      <!--<div class="center-splash">
        <h1>Olof Mogren</h1>
        <a href="/summarization" class="button button-transparent">Summarization</a>
      </div>//-->
    </header>

    <a class="github-ribbon" href="https://github.com/olofmogren">
      <img style="position: absolute; top: 0; right: 0; border: 0; z-index: 4;"
           src="/graphics/git-ribbon.png" alt="Fork me on GitHub">
    </a>

    <div id="PopUp" style="display: none; position: absolute; left: 100px; top: 50px; border: solid black 1px; padding: 10px; background-color: rgb(200,200,200); text-align: justify; font-size: 12px; min-width: 400px;">
      <pre id="PopUpText">TEXT</pre>
      <input name="close" type="button" value="Close" onclick="document.getElementById('PopUp').style.display = 'none';" />
    </div>

<?
if(!$path_found)
{
?>
    <div><!-- main content //-->
      <section class="features">
        <div class="inner">
          <div class="feature-grid">
            <div class="table-row">
              <h1>404 File Not Found</h1>

              <p>Let me know if you followed a link here.</p>
<?
/*
?>
              p: "<?= $_GET["p"] ?>"<br />
              POSTS_DIR: "<?= $POSTS_DIR ?>"
              posts_subdir: "<?= $posts_subdir ?>"
<?
*/
?>
            </div>
          </div>
        </div>
      </div>
<?
}
?>
<?
foreach(array("split", "grid", "fullwidth") as $category)
{
  $path = $POSTS_DIR.$posts_subdir."/posts/".$category;
  //echo $path." ";
  $category_count = 0;
  if ($dh = @opendir($path)) //will return false if permission denied.
  {
    if($category === "grid")
    {
?>
      <section class="features">
        <div class="inner">
          <div class="feature-grid">
            <div class="table-row">
<?
    }
    $files = array();
    while (($file = readdir($dh)) !== false)
    {
      $files[] = $file;
    }
    sort($files, SORT_STRING);
    foreach($files as $file)
    {
      if(substr($file, 0, 1) === "." || substr($file, -3) !== ".md") //will hide ".", "..", and hidden files. And non md files.
        continue;
      $category_count++;
      $fp = fopen($path."/".$file, "r");
      $content = fread($fp, 100000);
      fclose($fp);
      if($category === "split")
      {
?>
      <section class="research-topic">
        <div class="inner">

<?
      $pos = strpos($content, "<!--");
      if($pos !== False)
      {
        $start = $pos + 4; // strlen("<!--!)
        $end = strpos($content, "//-->");
        if($end === False)
          $end = strlen($content);
?>
          <div class="block block-graphic" style="padding-top: 40px;">
            <?= $Parsedown->text(substr($content, $start, $end-$start)); ?>
          </div>
<?
      }
?>
          <div class="block block-copy half">
<?= $Parsedown->text($content); ?>
          </div>

        </div>
      </section>
<?
      }
      else if($category === "fullwidth")
      {
?>
      <section>
        <div class="inner">
          <div class="block block-copy">
<?= $Parsedown->text($content); ?>
          </div>
        </div>
      </section>
<?
      }
      else if($category === "grid")
      {
        if($category_count%3 == 1 && $category_count > 1)
        {
?>
            </div>
            <div class="table-row">
<?
        }
?>
              <div class="feature">
<?= $Parsedown->text($content); ?>
              </div>
<?
      }
    }
    if($category === "grid")
    {
?>
            </div>
          </div>
        </div>
      </section>
<?
    }
  }
}
?>


      <section class="foot">
        <strong>Olof Mogren</strong>, Department of Computer Science and Engineering, Chalmers University of Technology<br /><br />
        <a href="https://www.linkedin.com/in/olof-mogren-5392b452" title="Follow me on LinkedIn"><img src="/graphics/logos/linkedin_logo_42x40-white.png" alt="LinkedIn" /></a>
        <a href="https://twitter.com/olofmogren" title="Follow me on Twitter"><img src="/graphics/logos/twitter_logo_49x40-white.png" alt="Twitter" /></a>
        <a href="https://flokk.no/i/9be9cd2a348d" title="Follow me on Diaspora"><img src="/graphics/logos/diaspora_logo_42x40-white.png" alt="Diaspora" /></a>
      </section>

    </div><!-- main content //-->

  </body>
</html>
<?
function get_path_without_filename($path)
{
  $pos = strrpos($path, "/");
  if($pos !== false)
    return substr($path, 0, $pos);
  return $path;
}
function get_filename($path)
{
  $exploded_path = explode("/", $path);
  return $exploded_path[count($exploded_path)-1];
}
function get_filename_without_suffix($filename)
{
  $pos = strrpos($filename, ".");
  if($pos !== FALSE)
    return substr($filename, 0, $pos);
  return $filename;
}
function get_suffix($filename)
{
  $pos = strrpos($filename, ".");
  if($pos !== FALSE)
    return substr($filename, $pos+1);
  return $filename;
}
?>
