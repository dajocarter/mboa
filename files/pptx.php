<?php
// We'll be outputting a PDF
header('Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="HAPS-2015-Flipped-Histo-Workshop.pptx"');

// The PDF source is in original.pdf
readfile('HAPS-2015-Flipped-Histo-Workshop.pptx');
?>