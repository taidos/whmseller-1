<?php
if(!defined('SITE_LOADED')) {
    die();
}
$version = trim(file_get_contents('includes/version'));

echo '</div>'."\r\n";
echo'<footer class="footer"><div class="row align-items-center justify-content-xl-between">'."\r\n".'<div class="col-xl-6">'."\r\n".'<div class="copyright text-center text-xl-left text-muted">©';echo date('Y');
echo'<a href="https://github.com/lucyfer622/whmseller/" class="font-weight-bold ml-1" target="_blank">WHMSELLER V'.$version.'</a>'."\r\n".'</div>'."\r\n".'</div>'."\r\n".'</div>'."\r\n".'</footer>'."\r\n".'</div>'."\r\n".'</div>';
echo'<script src="./assets/vendor/jquery/dist/jquery.min.js"></script>'."\r\n".'<script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>'."\r\n".' <script src="./assets/js/argon.js?v=1.0.0"></script>'."\r\n";
if ($fileName = basename($_SERVER['SCRIPT_FILENAME'], '.php'));
    if ($fileName == 'alpha-create') {

echo'<script>' . "\r\n" . '    ' . "\t" . '$("form").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("alpha-create.php", data, function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-success">\'+data.response+\'</div>\');' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '.always( function() {' . "\r\n\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '});' . "\r\n\r\n" . '    </script>';          
    }
elseif ($fileName = basename($_SERVER['SCRIPT_FILENAME'], '.php'));
    if ($fileName == 'master-move') {
echo "<script>\r\n    \t\$(\"form\").on(\"submit\", function(e) {\r\n\t\t\te.preventDefault();\r\n\t\t\tvar data = \$(this).serialize();\r\n\t\t\t\$.post(\"master-move.php\", data, function(data) {\r\n\t\t\t\tdata = JSON.parse(data);\r\n\t\t\t\tif(data.error) {\r\n\t\t\t\t\t\$(\"#notifications\").html('<div class=\"alert alert-danger\">'+data.error+'</div>');\r\n\t\t\t\t\t\$('#loading').modal('hide');\r\n\t\t\t\t\treturn;\r\n\t\t\t\t}\r\n\t\t\t\twindow.location.href=window.location.href+'?success='+data.response;\r\n\t\t\t})\r\n\t\t});\r\n\t</script>";
    }
elseif ($fileName = basename($_SERVER['SCRIPT_FILENAME'], '.php'));
    if ($fileName == 'alpha-edit') {
echo'<div class="modal fade" id="loading">' . "\r\n" . '<div class="modal-dialog">' . "\r\n" . ' <div class="modal-content">' . "\r\n" . ' <div class="modal-body">' . "\r\n" . '<img src="process.gif"></div>' . "\r\n" . '</div>' . "\r\n" . '</div>' . "\r\n";
echo' <script src="assets/js/bootbox.min.js"></script>' . "\r\n" . '    <script>' . "\r\n" . '    ' . "\t" . '$("#updateinfo").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("alpha-edit.php", data, function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t\t" . 'window.location.href=window.location.href+\'&success=\'+data.response;' . "\r\n\t\t\t" . '})' . "\r\n\t\t" . '});' . "\r\n\t\t" . '$("#account-functions button").on("click", function(e) {' . "\r\n\t\t\t" . 'var master = $(this).attr("data-rs");' . "\r\n\t\t\t" . 'var action = $(this).attr("data-rs-action");' . "\r\n\t\t\t" . 'var text = "";' . "\r\n\t\t\t" . 'if(action === \'unsuspend\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to Unsuspend "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'if(action === \'suspend\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to suspend "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'else if(action === \'terminate\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to terminate "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'else if(action === \'removeal\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to remove Alpha reseller permission for "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'bootbox.confirm(text, function(result) {' . "\r\n\t\t\t\t" . 'if(result) {' . "\r\n\t\t\t\t\t" . 'var data = {};' . "\r\n\t\t\t\t\t" . 'data["action"] = action;' . "\r\n\t\t\t\t\t" . 'data["username"] = master;' . "\r\n\t\t\t\t\t" . '$("#loading").modal({' . "\r\n\t\t\t\t\t\t" . 'keyboard: false,' . "\r\n\t\t\t\t\t\t" . 'backdrop: "static"' . "\r\n\t\t\t\t\t" . '});' . "\r\n\t\t\t\t\t" . '$.post("alpha-edit.php", data, function(data) {' . "\r\n\t\t\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'if(action === \'suspend\' || action === \'unsuspend\') {' . "\r\n\t\t\t\t\t\t\t" . 'window.location.href=window.location.href+\'&success=\'+data.response;' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'else {' . "\r\n\t\t\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-success">\'+data.response+\'</div>\');' . "\r\n\t\t\t\t\t\t" . 'if(action === \'removeal\') {' . "\r\n\t\t\t\t\t\t\t" . '$("#account-update").hide();' . '$("#loading").hide();';
    echo'window.setTimeout(function(){
        window.location.href = "./alpha-clients.php";
    }, 5000);';
echo "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'if(action === \'terminate\') {' . "\r\n\t\t\t\t\t\t\t" . '$("#account-update").hide();'  . '$("#loading").hide();';
    echo'window.setTimeout(function(){
        window.location.href = "./alpha-clients.php";
    }, 5000);';
echo "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . '})' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\r\n\t\t" . '});' . "\r\n\t\t" . 'function passwd(reseller) {' . "\r\n\t\t\t" . 'var popup = window.open(\'../../scripts/passwdlist\');' . "\r\n\t\t\t" . 'setTimeout(function() {' . "\r\n\t\t\t\t" . 'popup.location.href=\'javascript:$("#userselectEl").val("\'+reseller+\'");selectd()\';' . "\r\n\t\t\t" . '},5000);' . "\r\n\t\t" . '}' . "\r\n" . '    </script>';}
elseif ($fileName = basename($_SERVER['SCRIPT_FILENAME'], '.php'));
    if ($fileName == 'master-edit') {
echo'<div class="modal fade" id="loading">' . "\r\n" . '<div class="modal-dialog">' . "\r\n" . ' <div class="modal-content">' . "\r\n" . ' <div class="modal-body">' . "\r\n" . '<img src="process.gif"></div>' . "\r\n" . '</div>' . "\r\n" . '</div>' . "\r\n";
echo'<script src="assets/js/bootbox.min.js"></script>' . "\r\n" . '    <script>' . "\r\n" . '    ' . "\t" . '$("#updateinfo").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("master-edit.php", data, function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\r\n\t\t\t\t" . 'window.location.href=window.location.href+\'&success=\'+data.response;' . "\r\n\t\t\t" . '})' . "\r\n\t\t" . '});' . "\r\n\t\t" . '$("#account-functions button").on("click", function(e) {' . "\r\n\t\t\t" . 'var master = $(this).attr("data-rs");' . "\r\n\t\t\t" . 'var action = $(this).attr("data-rs-action");' . "\r\n\t\t\t" . 'var text = "";' . "\r\n\t\t\t" . 'if(action === \'unsuspend\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to Unsuspend "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'if(action === \'suspend\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to suspend "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'else if(action === \'terminate\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to terminate "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'else if(action === \'removems\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to remove Master reseller permission for "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'bootbox.confirm(text, function(result) {' . "\r\n\t\t\t\t" . 'if(result) {' . "\r\n\t\t\t\t\t" . 'var data = {};' . "\r\n\t\t\t\t\t" . 'data["action"] = action;' . "\r\n\t\t\t\t\t" . 'data["username"] = master;' . "\r\n\t\t\t\t\t" . '$("#loading").modal({' . "\r\n\t\t\t\t\t\t" . 'keyboard: false,' . "\r\n\t\t\t\t\t\t" . 'backdrop: "static"' . "\r\n\t\t\t\t\t" . '});' . "\r\n\t\t\t\t\t" . '$.post("master-edit.php", data, function(data) {' . "\r\n\t\t\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'if(action === \'suspend\' || action === \'unsuspend\') {' . "\r\n\t\t\t\t\t\t\t" . 'window.location.href=window.location.href+\'&success=\'+data.response;' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'else {' . "\r\n\t\t\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-success">\'+data.response+\'</div>\');' . "\r\n\t\t\t\t\t\t" . 'if(action === \'removems\') {' . "\r\n\t\t\t\t\t\t\t" . '$("#account-update").hide();' . '$("#loading").hide();';
    echo'window.setTimeout(function(){
        window.location.href = "./master-clients.php";
    }, 5000);';
echo "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'if(action === \'terminate\') {' . "\r\n\t\t\t\t\t\t\t" . '$("#account-update").hide();'  . '$("#loading").hide();';
    echo'window.setTimeout(function(){
        window.location.href = "./master-clients.php";
    }, 5000);';

    echo "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . '})' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\r\n\t\t" . '});' . "\r\n\t\t" . 'function passwd(reseller) {' . "\r\n\t\t\t" . 'var popup = window.open(\'../../scripts/passwdlist\');' . "\r\n\t\t\t" . 'setTimeout(function() {' . "\r\n\t\t\t\t" . 'popup.location.href=\'javascript:$("#userselectEl").val("\'+reseller+\'");selectd()\';' . "\r\n\t\t\t" . '},5000);' . "\r\n\t\t" . '}' . "\r\n" . '    </script>';}

elseif ($fileName = basename($_SERVER['SCRIPT_FILENAME'], '.php'));
    if ($fileName == 'master-create') {

echo '<script>' . "\r\n" . '    ' . "\t" . '$("form").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("master-create.php", data, function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-success">\'+data.response+\'</div>\');' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '.always( function() {' . "\r\n\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '});' . "\r\n\r\n" . '    </script>'; }
elseif ($fileName = basename($_SERVER['SCRIPT_FILENAME'], '.php'));
    if ($fileName == 'reseller-move') {
    echo "<script>\r\n    \t\$(\"form\").on(\"submit\", function(e) {\r\n\t\t\te.preventDefault();\r\n\t\t\tvar data = \$(this).serialize();\r\n\t\t\t\$.post(\"reseller-move.php\", data, function(data) {\r\n\t\t\t\tdata = JSON.parse(data);\r\n\t\t\t\tif(data.error) {\r\n\t\t\t\t\t\$(\"#notifications\").html('<div class=\"alert alert-danger\">'+data.error+'</div>');\r\n\t\t\t\t\t\$('#loading').modal('hide');\r\n\t\t\t\t\treturn;\r\n\t\t\t\t}\r\n\t\t\t\twindow.location.href=window.location.href+'?success='+data.response;\r\n\t\t\t})\r\n\t\t});\r\n\t</script>";
    }

elseif ($fileName = basename($_SERVER['SCRIPT_FILENAME'], '.php'));
    if ($fileName == 'master-upgrade') {
      echo' <script>' . "\r\n" . '    ' . "\t" . '$("form").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("master-upgrade.php", data, function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t\t" . 'window.location.href=window.location.href+\'?success=\'+data.response;' . "\r\n\t\t\t" . '})' . "\r\n\t\t" . '});' . "\r\n\t" . '</script>';
    }  
elseif ($fileName = basename($_SERVER['SCRIPT_FILENAME'], '.php'));
    if ($fileName == 'alpha-upgrade') {
echo '<script>' . "\r\n" . '    ' . "\t" . '$("form").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("alpha-upgrade.php", data, function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t\t" . 'window.location.href=window.location.href+\'?success=\'+data.response;' . "\r\n\t\t\t" . '})' . "\r\n\t\t" . '});' . "\r\n\t" . '</script>';
}
elseif ($fileName = basename($_SERVER['SCRIPT_FILENAME'], '.php'));
    if ($fileName == 'settings') {

echo '<script>' . "\r\n" . '    ' . "\t" . '$("form").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("settings.php", data, function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-success">\'+data.response+\'</div>\');' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '.always( function() {' . "\r\n\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '});' . "\r\n\t" . '</script>';
    }
elseif ($_GET['modules'] == 'masterupgrade') {
            
echo '<script>' . "\r\n" . '    ' . "\t" . '$("form").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("sellercp/index.cgi", data+\'&modules=masterupgrade\', function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t\t" . 'window.location.href=window.location.href+\'&success=\'+data.response;' . "\r\n\t\t\t" . '})' . "\r\n\t\t" . '});' . "\r\n\t" . '</script>';
}
elseif ($_GET['modules'] == 'resellerupgrade') {
            
echo '<script>' . "\r\n" . '    ' . "\t" . '$("form").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("sellercp/index.cgi", data+\'&modules=resellerupgrade\', function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t\t" . 'window.location.href=window.location.href+\'&success=\'+data.response;' . "\r\n\t\t\t" . '})' . "\r\n\t\t" . '});' . "\r\n\t" . '</script>';
}

elseif ($_GET['modules'] == 'domainsmove') {
echo '<script>' . "\r\n" . '    ' . "\t" . '$("form").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("sellercp/index.cgi", data+\'&modules=domainsmove\', function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t\t" . 'window.location.href=window.location.href+\'&success=\'+data.response;' . "\r\n\t\t\t" . '})' . "\r\n\t\t" . '});' . "\r\n\t" . '</script>';
}

elseif ($_GET['modules'] == 'resellercreate') {
 echo' <script>' . "\r\n" . '    ' . "\t" . '$("form").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("sellercp/index.cgi", data+\'&modules=resellercreate\', function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-success">\'+data.response+\'</div>\');' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '.always( function() {' . "\r\n\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '});' . "\r\n" . '    </script>';
}
elseif ($_GET['modules'] == 'mastercreate') {
 echo' <script>' . "\r\n" . '    ' . "\t" . '$("form").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("sellercp/index.cgi", data+\'&modules=mastercreate\', function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-success">\'+data.response+\'</div>\');' . "\r\n\t\t\t" . '})' . "\r\n\t\t\t" . '.always( function() {' . "\r\n\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '});' . "\r\n" . '    </script>';
}
elseif ($_GET['modules'] == 'masteredit') {
echo'<div class="modal fade" id="loading">' . "\r\n" . '<div class="modal-dialog">' . "\r\n" . ' <div class="modal-content">' . "\r\n" . ' <div class="modal-body">' . "\r\n" . '<img src="process.gif"></div>' . "\r\n" . '</div>' . "\r\n" . '</div>' . "\r\n";
echo'<script src="assets/js/bootbox.min.js"></script>' . "\r\n" . '    <script>' . "\r\n" . '    ' . "\t" . '$("#updateinfo").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("sellercp/index.cgi", data+\'&modules=masteredit\', function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\r\n\t\t\t\t" . 'window.location.href=window.location.href+\'&success=\'+data.response;' . "\r\n\t\t\t" . '})' . "\r\n\t\t" . '});' . "\r\n\t\t" . '$("#account-functions button").on("click", function(e) {' . "\r\n\t\t\t" . 'var master = $(this).attr("data-rs");' . "\r\n\t\t\t" . 'var action = $(this).attr("data-rs-action");' . "\r\n\t\t\t" . 'var text = "";' . "\r\n\t\t\t" . 'if(action === \'unsuspend\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to Unsuspend "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'if(action === \'suspend\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to suspend "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'else if(action === \'terminate\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to terminate "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'else if(action === \'removems\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to remove Master reseller permission for "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'bootbox.confirm(text, function(result) {' . "\r\n\t\t\t\t" . 'if(result) {' . "\r\n\t\t\t\t\t" . 'var data = {};' . "\r\n\t\t\t\t\t" . 'data["action"] = action;' . "\r\n\t\t\t\t\t" . 'data["username"] = master;'.'data["modules"] = "masteredit";' . "\r\n\t\t\t\t\t" . '$("#loading").modal({' . "\r\n\t\t\t\t\t\t" . 'keyboard: false,' . "\r\n\t\t\t\t\t\t" . 'backdrop: "static"' . "\r\n\t\t\t\t\t" . '});' . "\r\n\t\t\t\t\t" . '$.post("sellercp/index.cgi", data,  function(data) {' . "\r\n\t\t\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'if(action === \'suspend\' || action === \'unsuspend\') {' . "\r\n\t\t\t\t\t\t\t" . 'window.location.href=window.location.href+\'&success=\'+data.response;' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'else {' . "\r\n\t\t\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-success">\'+data.response+\'</div>\');' . "\r\n\t\t\t\t\t\t" . 'if(action === \'removems\') {' . "\r\n\t\t\t\t\t\t\t" . '$("#account-update").hide();' . '$("#loading").hide();';
    echo'window.setTimeout(function(){
        window.location.href = "sellercp/index.cgi?modules=masterclients";
    }, 5000);';
echo "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'if(action === \'terminate\') {' . "\r\n\t\t\t\t\t\t\t" . '$("#account-update").hide();'  . '$("#loading").hide();';
    echo'window.setTimeout(function(){
        window.location.href = "sellercp/index.cgi?modules=masterclients";
    }, 5000);';

    echo "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . '})' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\r\n\t\t" . '});' . "\r\n\t\t" . 'function passwd(reseller) {' . "\r\n\t\t\t" . 'var popup = window.open(\'../../scripts/passwdlist\');' . "\r\n\t\t\t" . 'setTimeout(function() {' . "\r\n\t\t\t\t" . 'popup.location.href=\'javascript:$("#userselectEl").val("\'+reseller+\'");selectd()\';' . "\r\n\t\t\t" . '},5000);' . "\r\n\t\t" . '}' . "\r\n" . '    </script>';}
elseif ($_GET['modules'] == 'reselleredit') {
echo'<div class="modal fade" id="loading">' . "\r\n" . '<div class="modal-dialog">' . "\r\n" . ' <div class="modal-content">' . "\r\n" . ' <div class="modal-body">' . "\r\n" . '<img src="process.gif"></div>' . "\r\n" . '</div>' . "\r\n" . '</div>' . "\r\n";
echo'<script src="assets/js/bootbox.min.js"></script>' . "\r\n" . '    <script>' . "\r\n" . '    ' . "\t" . '$("#updateinfo").on("submit", function(e) {' . "\r\n\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . 'var data = $(this).serialize();' . "\r\n\t\t\t" . '$.post("sellercp/index.cgi", data+\'&modules=reselleredit\', function(data) {' . "\r\n\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t" . '}' . "\r\n\r\n\t\t\t\t" . 'window.location.href=window.location.href+\'&success=\'+data.response;' . "\r\n\t\t\t" . '})' . "\r\n\t\t" . '});' . "\r\n\t\t" . '$("#account-functions button").on("click", function(e) {' . "\r\n\t\t\t" . 'var master = $(this).attr("data-rs");' . "\r\n\t\t\t" . 'var action = $(this).attr("data-rs-action");' . "\r\n\t\t\t" . 'var text = "";' . "\r\n\t\t\t" . 'if(action === \'unsuspend\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to Unsuspend "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'if(action === \'suspend\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to suspend "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'else if(action === \'terminate\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to terminate "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'else if(action === \'removers\') {' . "\r\n\t\t\t\t" . 'text = "Do you really want to remove reseller permission for "+master+"?";' . "\r\n\t\t\t" . '}' . "\r\n\t\t\t" . 'bootbox.confirm(text, function(result) {' . "\r\n\t\t\t\t" . 'if(result) {' . "\r\n\t\t\t\t\t" . 'var data = {};' . "\r\n\t\t\t\t\t" . 'data["action"] = action;' . "\r\n\t\t\t\t\t" . 'data["username"] = master;'.'data["modules"] = "reselleredit";' . "\r\n\t\t\t\t\t" . '$("#loading").modal({' . "\r\n\t\t\t\t\t\t" . 'keyboard: false,' . "\r\n\t\t\t\t\t\t" . 'backdrop: "static"' . "\r\n\t\t\t\t\t" . '});' . "\r\n\t\t\t\t\t" . '$.post("sellercp/index.cgi", data,  function(data) {' . "\r\n\t\t\t\t\t\t" . 'data = JSON.parse(data);' . "\r\n\t\t\t\t\t\t" . 'if(data.error) {' . "\r\n\t\t\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-danger">\'+data.error+\'</div>\');' . "\r\n\t\t\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t\t\t" . 'return;' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'if(action === \'suspend\' || action === \'unsuspend\') {' . "\r\n\t\t\t\t\t\t\t" . 'window.location.href=window.location.href+\'&success=\'+data.response;' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'else {' . "\r\n\t\t\t\t\t\t\t" . '$(\'#loading\').modal(\'hide\');' . "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . '$("#notifications").html(\'<div class="alert alert-success">\'+data.response+\'</div>\');' . "\r\n\t\t\t\t\t\t" . 'if(action === \'removers\') {' . "\r\n\t\t\t\t\t\t\t" . '$("#account-update").hide();' . '$("#loading").hide();';
    echo'window.setTimeout(function(){
        window.location.href = "sellercp/index.cgi?modules=resellerclients";
    }, 5000);';
echo "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t\t" . 'if(action === \'terminate\') {' . "\r\n\t\t\t\t\t\t\t" . '$("#account-update").hide();'  . '$("#loading").hide();';
    echo'window.setTimeout(function(){
        window.location.href = "sellercp/index.cgi?modules=resellerclients";
    }, 5000);';

    echo "\r\n\t\t\t\t\t\t" . '}' . "\r\n\t\t\t\t\t" . '})' . "\r\n\t\t\t\t" . '}' . "\r\n\t\t\t" . '});' . "\r\n\r\n\t\t" . '});' . "\r\n\t\t" . 'function passwd(reseller) {' . "\r\n\t\t\t" . 'var popup = window.open(\'../../scripts/passwdlist\');' . "\r\n\t\t\t" . 'setTimeout(function() {' . "\r\n\t\t\t\t" . 'popup.location.href=\'javascript:$("#userselectEl").val("\'+reseller+\'");selectd()\';' . "\r\n\t\t\t" . '},5000);' . "\r\n\t\t" . '}' . "\r\n" . '    </script>';}
elseif ($_GET['modules'] == 'reseller-move'){
    echo "<script>\r\n    \t\$(\"form\").on(\"submit\", function(e) {\r\n\t\t\te.preventDefault();\r\n\t\t\tvar data = \$(this).serialize();\r\n\t\t\t\$.post(\"reseller-move.php\", data, function(data) {\r\n\t\t\t\tdata = JSON.parse(data);\r\n\t\t\t\tif(data.error) {\r\n\t\t\t\t\t\$(\"#notifications\").html('<div class=\"alert alert-danger\">'+data.error+'</div>');\r\n\t\t\t\t\t\$('#loading').modal('hide');\r\n\t\t\t\t\treturn;\r\n\t\t\t\t}\r\n\t\t\t\twindow.location.href=window.location.href+'?success='+data.response;\r\n\t\t\t})\r\n\t\t});\r\n\t</script>";
    }

else{

}
echo'</body>'."\r\n";
echo'</html>';

?>
