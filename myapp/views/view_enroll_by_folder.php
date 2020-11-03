<?php

if (empty($avail_classes))
    echo "<h2>", $this->lang->line('no_classes_enroll'), "</h2>\n";
else {
    echo "<h1>",
        count($avail_classes)>1
                  ? $this->lang->line('enroll_these_classes')
                  : $this->lang->line('enroll_this_class'), "</h1>\n";
    echo "<table class=\"enroll\">\n";
    foreach ($avail_classes as $clid) {
        $cl = $all_classes[$clid];
        echo "<tr>\n";
        echo "<td>$cl->classname</td>\n";
        echo "<td>",
            anchor(build_get('userclass/enroll_in',array('classid' => $cl->clid,
                                                         'dir' => $dir,
                                                         'curdir' => $curdir)),
                   $this->lang->line('enroll'),
                   array('class' => 'btn btn-outline-dark')),
            "</td>\n";
        echo "</tr>\n";
    }
    echo "</table>\n";
    echo "<p>&nbsp;</p>\n";
}

if (empty($old_classes))
    echo "<h2>", $this->lang->line('enrolled_in_no_classes'), "</h2>\n";
else {
    echo "<h2>", $this->lang->line('enrolled_in_these_classes'), "</h2>\n";
    echo "<table>\n";
    foreach ($old_classes as $clid) {
        $cl = $all_classes[$clid];
        echo "<tr>\n";
        echo "<td>$cl->classname</td>\n";
        echo "</tr>\n";
    }
    echo "</table>\n";
}
