#
#<?php die("Forbidden."); ?>

2014-01-30 13:31:28 ERROR vmError: exeSortSearchListQuery Table 'joomla.exam_virtuemart_products_zh_tw' doesn't exist SQL=SELECT  l.`virtuemart_product_id` FROM `exam_virtuemart_products_zh_tw` as l JOIN `exam_virtuemart_products` AS p using (`virtuemart_product_id`) LEFT JOIN `exam_virtuemart_product_prices` as pp ON p.`virtuemart_product_id` = pp.`virtuemart_product_id`  LEFT JOIN `exam_virtuemart_product_shoppergroups` ON p.`virtuemart_product_id` = `exam_virtuemart_product_shoppergroups`.`virtuemart_product_id`
			 LEFT  OUTER JOIN `exam_virtuemart_shoppergroups` as s ON s.`virtuemart_shoppergroup_id` = `exam_virtuemart_product_shoppergroups`.`virtuemart_shoppergroup_id` WHERE ( p.`published`="1"  AND  ( s.`virtuemart_shoppergroup_id`= "1"  OR s.`virtuemart_shoppergroup_id` IS NULL  )  AND p.`product_special`="1" ) group by p.`virtuemart_product_id` ORDER BY RAND()ASC LIMIT 0, 2
2014-01-30 13:31:28 ERROR vmError: exeSortSearchListQuery Table 'joomla.exam_virtuemart_manufacturers_zh_tw' doesn't exist SQL=SELECT  `m`.*,`exam_virtuemart_manufacturers_zh_tw`.*, mc.`mf_category_name` ,mmex.virtuemart_media_id FROM `exam_virtuemart_manufacturers_zh_tw` JOIN `exam_virtuemart_manufacturers` as m USING (`virtuemart_manufacturer_id`)  LEFT JOIN `exam_virtuemart_manufacturercategories_zh_tw` AS mc on  mc.`virtuemart_manufacturercategories_id`= `m`.`virtuemart_manufacturercategories_id` LEFT JOIN `exam_virtuemart_manufacturer_medias` as mmex ON `m`.`virtuemart_manufacturer_id`= mmex.`virtuemart_manufacturer_id`  WHERE  `m`.`published` = 1  GROUP BY `m`.`virtuemart_manufacturer_id`  ORDER BY mf_name ASC
2014-01-30 13:31:35 ERROR vmError: exeSortSearchListQuery Table 'joomla.exam_virtuemart_categories_zh_tw' doesn't exist SQL=SELECT  c.`virtuemart_category_id`, l.`category_description`, l.`category_name`, c.`ordering`, c.`published`, cx.`category_child_id`, cx.`category_parent_id`, c.`shared`  FROM `exam_virtuemart_categories_zh_tw` l
				  JOIN `exam_virtuemart_categories` AS c using (`virtuemart_category_id`)
				  LEFT JOIN `exam_virtuemart_category_categories` AS cx
				  ON l.`virtuemart_category_id` = cx.`category_child_id`  WHERE  cx.`category_parent_id` = 0 ORDER BY category_name DESC
2014-02-02 11:51:55 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:51:55 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:56:02 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:56:02 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:56:03 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:57:27 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:57:27 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:57:38 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:57:44 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:57:44 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:58:01 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:58:01 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:58:09 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:58:12 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:58:12 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:58:17 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:58:20 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:58:31 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:58:34 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:58:39 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 11:58:39 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 12:07:56 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)
2014-02-02 12:07:56 ERROR vmError: The parameter <em>Merchant Email</em> is required for the payment <em>PayPal</em> (<em>  1</em>)