<?php


//  CREATES A VIEW FOR LATTER USE
mysqli_query($conn_gallery,'DROP VIEW IF EXISTS galleryInfo');
mysqli_query($conn_gallery, 'CREATE VIEW galleryInfo AS SELECT DISTINCT c.category FROM category c INNER JOIN gallery g WHERE c.category = g.category');

//  SETTING CRITERIA NOT A KIND OF A PROJECT
mysqli_query($conn_gallery,'DROP VIEW IF EXISTS galleryData');
mysqli_query($conn_gallery, 'CREATE VIEW galleryData AS SELECT category FROM galleryInfo WHERE category NOT LIKE "PROJECT_%"');

//  SETTING CRITERIA A KIND OF A PROJECT
mysqli_query($conn_gallery,'DROP VIEW IF EXISTS galleryProject');
mysqli_query($conn_gallery, 'CREATE VIEW galleryProject AS SELECT category FROM galleryInfo WHERE category LIKE "PROJECT_%"');