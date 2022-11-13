=== CREATE NEW JSON FILE ===


$o = new JsonFile();
$body = $o->createBody($extension_dir,$extension_ID);
$filename = $o->createfilename($extension_ID);


=== MOVE TO PROPER LOCATION ===
shell_exec("echo '$body' >> $filename");
echo "Copying " . $filename . " to " . $extension_dir;
shell_exec("cp $filename $extension_dir");
echo "Finished copying " . $filename . " to " . $extension_dir;