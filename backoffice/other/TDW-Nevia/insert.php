<?php
require "include/dbms.inc.php";
require "include/template2.inc.php";

$main = new Template("dtml/nevia/frame-public.html");
$body = new Template("dtml/nevia/users-create.html");

$result = $db->query("INSERT INTO users VALUES (
                                    0,
                                    '{$_POST['name']}',
                                    '{$_POST['surname']}',
                                    '{$_POST['email']}',
                                    '{$_POST['note']}')");

            $body->setContent("notification", $result);


$main->SetContent("body", $body->get());
$main->close();
?>